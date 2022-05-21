# Threads


## Store thread


Start a conversation. Creation of a new thread.

> Example request:

```bash
curl -X POST \
    "https://demo.laraclassifier.local/api/threads" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -F "from_name=John Doe" \
    -F "from_email=john.doe@domain.tld" \
    -F "from_phone=ullam" \
    -F "body=Modi temporibus voluptas expedita voluptatibus voluptas veniam." \
    -F "post_id=2" \
    -F "captcha_key=qui" \
    -F "filename=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpnUaLZd" 
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
};

const body = new FormData();
body.append('from_name', 'John Doe');
body.append('from_email', 'john.doe@domain.tld');
body.append('from_phone', 'ullam');
body.append('body', 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.');
body.append('post_id', '2');
body.append('captcha_key', 'qui');
body.append('filename', document.querySelector('input[name="filename"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://demo.laraclassifier.local/api/threads',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
        ],
        'multipart' => [
            [
                'name' => 'from_name',
                'contents' => 'John Doe'
            ],
            [
                'name' => 'from_email',
                'contents' => 'john.doe@domain.tld'
            ],
            [
                'name' => 'from_phone',
                'contents' => 'ullam'
            ],
            [
                'name' => 'body',
                'contents' => 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.'
            ],
            [
                'name' => 'post_id',
                'contents' => '2'
            ],
            [
                'name' => 'captcha_key',
                'contents' => 'qui'
            ],
            [
                'name' => 'filename',
                'contents' => fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpnUaLZd', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (201):

```json
{
    "success": true,
    "message": "Your message has sent successfully to Administrator.",
    "result": {
        "id": 340,
        "post_id": 2,
        "subject": "Urgent sell Container Home"
    },
    "extra": {
        "post": {
            "id": 2,
            "country_code": "US",
            "user_id": "1",
            "category_id": "38",
            "post_type_id": "2",
            "title": "Urgent sell Container Home",
            "description": "Quisquam soluta quidem qui porro sit eum. Expedita dolorem accusamus ut sed illo officiis sint. Deleniti dolores enim excepturi minima quis. Consequuntur non quo quo est neque non.\n\nExpedita cupiditate provident nostrum. Voluptatem tempora voluptatem quisquam molestiae. Est autem at laudantium sit. Culpa sit voluptates in rerum aut nulla. Rerum ut nulla distinctio totam ad eum esse eveniet.",
            "tags": [
                "et",
                "dolores",
                "voluptatibus"
            ],
            "price": "99838.00",
            "negotiable": "1",
            "contact_name": "Administrator",
            "email": "admin@larapen.com",
            "phone": "+35861228281",
            "phone_hidden": "0",
            "address": null,
            "city_id": "47008",
            "lat": "41.41",
            "lon": "-75.66",
            "ip_addr": "61.162.28.200",
            "visits": "9977",
            "tmp_token": null,
            "email_token": null,
            "phone_token": "demoFaker",
            "verified_email": "1",
            "verified_phone": "1",
            "accept_terms": "1",
            "accept_marketing_offers": "0",
            "is_permanent": "0",
            "reviewed": "1",
            "featured": "1",
            "archived": "0",
            "archived_at": "2022-01-07T08:48:34.000000Z",
            "deletion_mail_sent_at": null,
            "fb_profile": null,
            "partner": null,
            "created_at": "2022-01-19T18:28:31.000000Z",
            "updated_at": "2022-01-07T08:48:34.000000Z",
            "slug": "urgent-sell-container-home",
            "created_at_formatted": "Jan 19th, 2022 at 13:28",
            "user_photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg"
        }
    }
}
```
<div id="execution-results-POSTapi-threads" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-threads"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-threads"></code></pre>
</div>
<div id="execution-error-POSTapi-threads" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-threads"></code></pre>
</div>
<form id="form-POSTapi-threads" data-method="POST" data-path="api/threads" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs","Authorization":"Bearer {YOUR_AUTH_TOKEN}"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-threads', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-threads" onclick="tryItOut('POSTapi-threads');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-threads" onclick="cancelTryOut('POSTapi-threads');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-threads" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/threads</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>from_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="from_name" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>
The thread's creator name.
</p>
<p>
<b><code>from_email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="from_email" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
The thread's creator email address (required if mobile phone number doesn't exist).
</p>
<p>
<b><code>from_phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="from_phone" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
The thread's creator mobile phone number (required if email doesn't exist).
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>
The name of the user.
</p>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>
The related post ID.
</p>
<p>
<b><code>filename</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="filename" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
The thread attached file.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>


## List threads

<small class="badge badge-darkred">requires authentication</small>

Get all logged user's threads.
Filters:
- unread: Get the logged user's unread threads
- started: Get the logged user's started threads
- important: Get the logged user's make as important threads

> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads?filter=unread&embed=null&perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads"
);

let params = {
    "filter": "unread",
    "embed": "null",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://demo.laraclassifier.local/api/threads',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'filter'=> 'unread',
            'embed'=> 'null',
            'perPage'=> '2',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "success": true,
    "message": null,
    "result": {
        "data": [
            {
                "id": 8,
                "post_id": "102",
                "subject": "Ford Focus for sale"
            },
            {
                "id": 11,
                "post_id": "81",
                "subject": "Logitech H390"
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/threads?page=1",
            "last": "http:\/\/localhost\/api\/threads?page=18",
            "prev": null,
            "next": "http:\/\/localhost\/api\/threads?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 18,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": null,
                    "label": "...",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=17",
                    "label": "17",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=18",
                    "label": "18",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/threads",
            "per_page": 2,
            "to": 2,
            "total": 35
        }
    }
}
```
<div id="execution-results-GETapi-threads" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads"></code></pre>
</div>
<div id="execution-error-GETapi-threads" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads"></code></pre>
</div>
<form id="form-GETapi-threads" data-method="GET" data-path="api/threads" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads" onclick="tryItOut('GETapi-threads');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads" onclick="cancelTryOut('GETapi-threads');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads</code></b>
</p>
<p>
<label id="auth-GETapi-threads" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter" data-endpoint="GETapi-threads" data-component="query"  hidden>
<br>
Filter for the list - Possible value: unread, started or important.
</p>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: post.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-threads" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get thread

<small class="badge badge-darkred">requires authentication</small>

Get a thread (owned by the logged user) details

> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads/8?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads/8"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://demo.laraclassifier.local/api/threads/8',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "success": true,
    "message": null,
    "result": {
        "id": 8,
        "post_id": "102",
        "subject": "Ford Focus for sale"
    }
}
```
<div id="execution-results-GETapi-threads--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads--id-"></code></pre>
</div>
<div id="execution-error-GETapi-threads--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads--id-"></code></pre>
</div>
<form id="form-GETapi-threads--id-" data-method="GET" data-path="api/threads/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads--id-" onclick="tryItOut('GETapi-threads--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads--id-" onclick="cancelTryOut('GETapi-threads--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-threads--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-threads--id-" data-component="url" required  hidden>
<br>
The thread's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads--id-" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: user,post,messages,participants.
</p>
</form>


## Update thread

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://demo.laraclassifier.local/api/threads/sequi" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "body=Modi temporibus voluptas expedita voluptatibus voluptas veniam." \
    -F "filename=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phptQO4OO" 
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads/sequi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

const body = new FormData();
body.append('body', 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.');
body.append('filename', document.querySelector('input[name="filename"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://demo.laraclassifier.local/api/threads/sequi',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'multipart' => [
            [
                'name' => 'body',
                'contents' => 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.'
            ],
            [
                'name' => 'filename',
                'contents' => fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phptQO4OO', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Page Not Found."
}
```
<div id="execution-results-PUTapi-threads--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-threads--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-threads--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-threads--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-threads--id-"></code></pre>
</div>
<form id="form-PUTapi-threads--id-" data-method="PUT" data-path="api/threads/{id}" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-threads--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-threads--id-" onclick="tryItOut('PUTapi-threads--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-threads--id-" onclick="cancelTryOut('PUTapi-threads--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-threads--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/threads/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-threads--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-threads--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-threads--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="PUTapi-threads--id-" data-component="body" required  hidden>
<br>
The name of the user.
</p>
<p>
<b><code>filename</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="filename" data-endpoint="PUTapi-threads--id-" data-component="body"  hidden>
<br>
The thread attached file.
</p>

</form>


## Delete thread(s)

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://demo.laraclassifier.local/api/threads/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads/ut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://demo.laraclassifier.local/api/threads/ut',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Page Not Found."
}
```
<div id="execution-results-DELETEapi-threads--ids-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-threads--ids-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-threads--ids-"></code></pre>
</div>
<div id="execution-error-DELETEapi-threads--ids-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-threads--ids-"></code></pre>
</div>
<form id="form-DELETEapi-threads--ids-" data-method="DELETE" data-path="api/threads/{ids}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-threads--ids-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-threads--ids-" onclick="tryItOut('DELETEapi-threads--ids-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-threads--ids-" onclick="cancelTryOut('DELETEapi-threads--ids-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-threads--ids-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/threads/{ids}</code></b>
</p>
<p>
<label id="auth-DELETEapi-threads--ids-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-threads--ids-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="DELETEapi-threads--ids-" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of thread(s).
</p>
</form>


## Bulk updates

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://demo.laraclassifier.local/api/threads/bulkUpdate/ut?type=ut" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads/bulkUpdate/ut"
);

let params = {
    "type": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://demo.laraclassifier.local/api/threads/bulkUpdate/ut',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'type'=> 'ut',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Page Not Found."
}
```
<div id="execution-results-POSTapi-threads-bulkUpdate--ids--" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-threads-bulkUpdate--ids--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-threads-bulkUpdate--ids--"></code></pre>
</div>
<div id="execution-error-POSTapi-threads-bulkUpdate--ids--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-threads-bulkUpdate--ids--"></code></pre>
</div>
<form id="form-POSTapi-threads-bulkUpdate--ids--" data-method="POST" data-path="api/threads/bulkUpdate/{ids?}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-threads-bulkUpdate--ids--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-threads-bulkUpdate--ids--" onclick="tryItOut('POSTapi-threads-bulkUpdate--ids--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-threads-bulkUpdate--ids--" onclick="cancelTryOut('POSTapi-threads-bulkUpdate--ids--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-threads-bulkUpdate--ids--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/threads/bulkUpdate/{ids?}</code></b>
</p>
<p>
<label id="auth-POSTapi-threads-bulkUpdate--ids--" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-threads-bulkUpdate--ids--" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="POSTapi-threads-bulkUpdate--ids--" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of thread(s).
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-threads-bulkUpdate--ids--" data-component="query" required  hidden>
<br>
The type of action to execute (markAsRead, markAsUnread, markAsImportant, markAsNotImportant or markAllAsRead).
</p>
</form>


## List messages

<small class="badge badge-darkred">requires authentication</small>

Get all thread's messages

> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads/293/messages?embed=null&sort=created_at&perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads/293/messages"
);

let params = {
    "embed": "null",
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://demo.laraclassifier.local/api/threads/293/messages',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
            'sort'=> 'created_at',
            'perPage'=> '2',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "success": true,
    "message": null,
    "result": {
        "data": [
            {
                "id": 3287,
                "thread_id": "293",
                "user_id": "2562",
                "body": "Omnis veniam qui enim quis ut ut qui dignissimos. Labore est aliquam velit perspiciatis architecto ipsa. Molestiae quia sit ipsam deserunt quas quia aliquam. Quia debitis adipisci distinctio.",
                "filename": null
            },
            {
                "id": 3288,
                "thread_id": "293",
                "user_id": "3",
                "body": "Rem reiciendis praesentium ullam qui velit illo. Quaerat cum fugit qui et. Nihil velit et et rerum molestias unde.",
                "filename": null
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/threads\/293\/messages?page=1",
            "last": "http:\/\/localhost\/api\/threads\/293\/messages?page=11",
            "prev": null,
            "next": "http:\/\/localhost\/api\/threads\/293\/messages?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 11,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=11",
                    "label": "11",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/threads\/293\/messages?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/threads\/293\/messages",
            "per_page": 2,
            "to": 2,
            "total": 21
        }
    }
}
```
<div id="execution-results-GETapi-threads--threadId--messages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads--threadId--messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads--threadId--messages"></code></pre>
</div>
<div id="execution-error-GETapi-threads--threadId--messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads--threadId--messages"></code></pre>
</div>
<form id="form-GETapi-threads--threadId--messages" data-method="GET" data-path="api/threads/{threadId}/messages" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads--threadId--messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads--threadId--messages" onclick="tryItOut('GETapi-threads--threadId--messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads--threadId--messages" onclick="cancelTryOut('GETapi-threads--threadId--messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads--threadId--messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads/{threadId}/messages</code></b>
</p>
<p>
<label id="auth-GETapi-threads--threadId--messages" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads--threadId--messages" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>threadId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="threadId" data-endpoint="GETapi-threads--threadId--messages" data-component="url" required  hidden>
<br>
The thread's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads--threadId--messages" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: user.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-threads--threadId--messages" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-threads--threadId--messages" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get message

<small class="badge badge-darkred">requires authentication</small>

Get a thread's message (owned by the logged user) details

> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads/293/messages/3545?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/threads/293/messages/3545"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://demo.laraclassifier.local/api/threads/293/messages/3545',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (404):

```json
{
    "success": false,
    "message": "The thread message with ID: 3545 was not found.",
    "result": null,
    "error_code": 1
}
```
<div id="execution-results-GETapi-threads--threadId--messages--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads--threadId--messages--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads--threadId--messages--id-"></code></pre>
</div>
<div id="execution-error-GETapi-threads--threadId--messages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads--threadId--messages--id-"></code></pre>
</div>
<form id="form-GETapi-threads--threadId--messages--id-" data-method="GET" data-path="api/threads/{threadId}/messages/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads--threadId--messages--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads--threadId--messages--id-" onclick="tryItOut('GETapi-threads--threadId--messages--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads--threadId--messages--id-" onclick="cancelTryOut('GETapi-threads--threadId--messages--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads--threadId--messages--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads/{threadId}/messages/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-threads--threadId--messages--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads--threadId--messages--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>threadId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="threadId" data-endpoint="GETapi-threads--threadId--messages--id-" data-component="url" required  hidden>
<br>
The thread's ID.
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-threads--threadId--messages--id-" data-component="url" required  hidden>
<br>
The thread's message's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads--threadId--messages--id-" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: thread,user.
</p>
</form>



