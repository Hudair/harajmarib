<?php
/**
 * LaraClassifier - Classified Ads Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Helpers\Files\Response;

use Illuminate\Filesystem\FilesystemAdapter;

class FileContentResponseCreator
{
	/**
	 * @var ImageResponse
	 */
	private static $imageResponse;
	
	/**
	 * @var AudioVideoResponse
	 */
	private static $audioVideoResponse;
	
	/**
	 * @param ImageResponse $imageResponse
	 * @param AudioVideoResponse $audioVideoResponse
	 */
	public function __construct(ImageResponse $imageResponse, AudioVideoResponse $audioVideoResponse)
	{
		self::$imageResponse = $imageResponse;
		self::$audioVideoResponse = $audioVideoResponse;
	}
	
	/**
	 * Return download or preview response for given file.
	 *
	 * @param $disk
	 * @param string $filePath
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|\Symfony\Component\HttpFoundation\StreamedResponse|void
	 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
	 * @throws \League\Flysystem\FileNotFoundException
	 */
	public static function create($disk, string $filePath)
	{
		if (!$disk instanceof FilesystemAdapter) {
			abort(500);
		}
		
		if (!$disk->exists($filePath)) {
			abort(404);
		}
		
		$mime = $disk->getMimetype($filePath);
		$type = self::getFileType($mime);
		
		if ($type === 'image') {
			return self::$imageResponse->create($disk, $filePath);
		} else if (self::shouldStream($mime, $type)) {
			return self::$audioVideoResponse->create($disk, $filePath);
		} else {
			return self::createBasicResponse($disk, $filePath);
		}
	}
	
	/**
	 * Create a basic response for specified upload content.
	 *
	 * @param $disk
	 * @param string $filePath
	 * @return \Symfony\Component\HttpFoundation\StreamedResponse
	 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
	 * @throws \League\Flysystem\FileNotFoundException
	 */
	private static function createBasicResponse($disk, string $filePath): \Symfony\Component\HttpFoundation\StreamedResponse
	{
		if (!$disk instanceof FilesystemAdapter) {
			abort(404);
		}
		
		$stream = $disk->readStream($filePath);
		$mime = $disk->getMimetype($filePath);
		$size = $disk->getSize($filePath);
		$shortName = last(explode(DIRECTORY_SEPARATOR, $filePath));
		
		$headers = [
			"Content-Type"        => $mime,
			"Content-Length"      => $size,
			"Content-disposition" => "inline; filename=\"" . $shortName . "\"",
		];
		$callback = function () use ($stream) { fpassthru($stream); };
		
		return response()->stream($callback, 200, $headers);
	}
	
	/**
	 * Extract file type
	 *
	 * @param string $mime
	 * @return string
	 */
	private static function getFileType(string $mime): string
	{
		if (strstr($mime, 'video/')) {
			return 'video';
		} else if (strstr($mime, 'audio/')) {
			return 'audio';
		} else if (strstr($mime, 'image/')) {
			return 'image';
		} else {
			return 'file';
		}
	}
	
	/**
	 * Should file with given mime be streamed.
	 *
	 * @param string $mime
	 * @param string $type
	 *
	 * @return bool
	 */
	private static function shouldStream(string $mime, string $type): bool
	{
		return $type === 'video' || $type === 'audio' || $mime === 'application/ogg';
	}
}
