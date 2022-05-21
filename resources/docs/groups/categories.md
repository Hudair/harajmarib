# Categories


## List categories




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/categories?parentId=0&embed=null&sort=-lft&perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/categories"
);

let params = {
    "parentId": "0",
    "embed": "null",
    "sort": "-lft",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
    'https://demo.laraclassifier.local/api/categories',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'parentId'=> '0',
            'embed'=> 'null',
            'sort'=> '-lft',
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
                "id": 1,
                "parent_id": null,
                "name": "Automobiles",
                "slug": "automobiles",
                "description": "",
                "hide_description": "0",
                "seo_title": "{country.name} Automobiles",
                "seo_description": "{country.name} Automobiles",
                "seo_keywords": "",
                "picture": "app\/default\/categories\/fa-folder-default.png",
                "icon_class": "fas fa-car",
                "active": "1",
                "lft": "1",
                "rgt": "10",
                "depth": "0",
                "type": "classified",
                "is_for_permanent": "0",
                "parentClosure": null
            },
            {
                "id": 9,
                "parent_id": null,
                "name": "Phones & Tablets",
                "slug": "phones-and-tablets",
                "description": "",
                "hide_description": null,
                "seo_title": "",
                "seo_description": "",
                "seo_keywords": "",
                "picture": "app\/default\/categories\/fa-folder-default.png",
                "icon_class": "fas fa-mobile-alt",
                "active": "1",
                "lft": "11",
                "rgt": "17",
                "depth": "0",
                "type": "classified",
                "is_for_permanent": "0",
                "parentClosure": null
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/categories?page=1",
            "last": "http:\/\/localhost\/api\/categories?page=6",
            "prev": null,
            "next": "http:\/\/localhost\/api\/categories?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 6,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/categories?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/categories",
            "per_page": 2,
            "to": 2,
            "total": 12
        }
    }
}
```
<div id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</div>
<div id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</div>
<form id="form-GETapi-categories" data-method="GET" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories" onclick="tryItOut('GETapi-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories" onclick="cancelTryOut('GETapi-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>parentId</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parentId" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
The ID of the parent category of the sub categories to retrieve.
</p>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
The Comma-separated list of the category relationships for Eager Loading - Possible values: parent,children.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: lft.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get category


Get category by its unique slug or ID.

> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/categories/cars?parentCatSlug=automobiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/categories/cars"
);

let params = {
    "parentCatSlug": "automobiles",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
    'https://demo.laraclassifier.local/api/categories/cars',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'parentCatSlug'=> 'automobiles',
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
        "id": 2,
        "parent_id": "1",
        "name": "Cars",
        "slug": "cars",
        "description": "",
        "hide_description": null,
        "seo_title": "",
        "seo_description": "",
        "seo_keywords": "",
        "picture": "app\/default\/categories\/fa-folder-default.png",
        "icon_class": "fas fa-folder",
        "active": "1",
        "lft": "2",
        "rgt": "3",
        "depth": "1",
        "type": "classified",
        "is_for_permanent": "0"
    }
}
```
<div id="execution-results-GETapi-categories--slugOrId-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories--slugOrId-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--slugOrId-"></code></pre>
</div>
<div id="execution-error-GETapi-categories--slugOrId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--slugOrId-"></code></pre>
</div>
<form id="form-GETapi-categories--slugOrId-" data-method="GET" data-path="api/categories/{slugOrId}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--slugOrId-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories--slugOrId-" onclick="tryItOut('GETapi-categories--slugOrId-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories--slugOrId-" onclick="cancelTryOut('GETapi-categories--slugOrId-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories--slugOrId-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories/{slugOrId}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slugOrId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slugOrId" data-endpoint="GETapi-categories--slugOrId-" data-component="url" required  hidden>
<br>
The slug or ID of the category.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>parentCatSlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="parentCatSlug" data-endpoint="GETapi-categories--slugOrId-" data-component="query"  hidden>
<br>
The slug of the parent category to retrieve used when category's slug provided instead of ID.
</p>
</form>


## List category&#039;s fields




> Example request:

```bash
curl -X POST \
    "https://demo.laraclassifier.local/api/categories/inventore/fields" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"language_code":"en","post_id":1}'

```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/categories/inventore/fields"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "language_code": "en",
    "post_id": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://demo.laraclassifier.local/api/categories/inventore/fields',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'json' => [
            'language_code' => 'en',
            'post_id' => 1,
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
<div id="execution-results-POSTapi-categories--id--fields" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-categories--id--fields"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-categories--id--fields"></code></pre>
</div>
<div id="execution-error-POSTapi-categories--id--fields" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-categories--id--fields"></code></pre>
</div>
<form id="form-POSTapi-categories--id--fields" data-method="POST" data-path="api/categories/{id}/fields" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-categories--id--fields', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-categories--id--fields" onclick="tryItOut('POSTapi-categories--id--fields');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-categories--id--fields" onclick="cancelTryOut('POSTapi-categories--id--fields');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-categories--id--fields" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/categories/{id}/fields</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-categories--id--fields" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>language_code</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language_code" data-endpoint="POSTapi-categories--id--fields" data-component="body"  hidden>
<br>
The code of the user's spoken language.
</p>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-categories--id--fields" data-component="body" required  hidden>
<br>
The unique ID of the post.
</p>

</form>



