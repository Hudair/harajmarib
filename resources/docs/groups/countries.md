# Countries


## List countries




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries?embed=null&sort=-name&perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/countries"
);

let params = {
    "embed": "null",
    "sort": "-name",
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
    'https://demo.laraclassifier.local/api/countries',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
            'sort'=> '-name',
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
                "code": "AL",
                "name": "Albania",
                "capital": "Tirana",
                "continent_code": "EU",
                "tld": ".al",
                "currency_code": "ALL",
                "phone": "355",
                "languages": "sq,el",
                "time_zone": "Europe\/Tirane",
                "date_format": null,
                "datetime_format": null,
                "background_image": "app\/logo\/header-61fa587d90fd8.jpg",
                "admin_type": "0",
                "admin_field_active": "0",
                "active": "1"
            },
            {
                "code": "DZ",
                "name": "Algeria",
                "capital": "Algiers",
                "continent_code": "AF",
                "tld": ".dz",
                "currency_code": "DZD",
                "phone": "213",
                "languages": "ar-DZ,fr",
                "time_zone": "Africa\/Algiers",
                "date_format": null,
                "datetime_format": null,
                "background_image": "app\/logo\/header-61fa587dcc58f.jpg",
                "admin_type": "0",
                "admin_field_active": "0",
                "active": "1"
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/countries?page=1",
            "last": "http:\/\/localhost\/api\/countries?page=121",
            "prev": null,
            "next": "http:\/\/localhost\/api\/countries?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 121,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": null,
                    "label": "...",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=120",
                    "label": "120",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=121",
                    "label": "121",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries",
            "per_page": 2,
            "to": 2,
            "total": 242
        }
    }
}
```
<div id="execution-results-GETapi-countries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries"></code></pre>
</div>
<div id="execution-error-GETapi-countries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries"></code></pre>
</div>
<form id="form-GETapi-countries" data-method="GET" data-path="api/countries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries" onclick="tryItOut('GETapi-countries');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries" onclick="cancelTryOut('GETapi-countries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-countries" data-component="query"  hidden>
<br>
Comma-separated list of the country relationships for Eager Loading - Possible values: currency.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-countries" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: name.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-countries" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get country




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/DE?embed=currency" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/countries/DE"
);

let params = {
    "embed": "currency",
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
    'https://demo.laraclassifier.local/api/countries/DE',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'currency',
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
        "code": "DE",
        "name": "Germany",
        "capital": "Berlin",
        "continent_code": "EU",
        "tld": ".de",
        "currency_code": "EUR",
        "phone": "49",
        "languages": "de",
        "time_zone": "Europe\/Berlin",
        "date_format": null,
        "datetime_format": null,
        "background_image": "app\/logo\/header-61fa587dc7367.jpg",
        "admin_type": "0",
        "admin_field_active": "0",
        "active": "1",
        "currency": {
            "code": "EUR",
            "name": "Euro Member Countries",
            "symbol": "???",
            "html_entities": "???",
            "in_left": "0",
            "decimal_places": "2",
            "decimal_separator": ",",
            "thousand_separator": " "
        }
    }
}
```
<div id="execution-results-GETapi-countries--code-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries--code-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--code-"></code></pre>
</div>
<div id="execution-error-GETapi-countries--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--code-"></code></pre>
</div>
<form id="form-GETapi-countries--code-" data-method="GET" data-path="api/countries/{code}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--code-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--code-" onclick="tryItOut('GETapi-countries--code-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--code-" onclick="cancelTryOut('GETapi-countries--code-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--code-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries/{code}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="GETapi-countries--code-" data-component="url" required  hidden>
<br>
The country's ISO 3166-1 code.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-countries--code-" data-component="query"  hidden>
<br>
Comma-separated list of the country relationships for Eager Loading - Possible values: currency.
</p>
</form>


## List admin. divisions (1)




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/US/subAdmins1?embed=null&sort=-name&perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/countries/US/subAdmins1"
);

let params = {
    "embed": "null",
    "sort": "-name",
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
    'https://demo.laraclassifier.local/api/countries/US/subAdmins1',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
            'sort'=> '-name',
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
                "code": "US.AL",
                "country_code": "US",
                "name": "Alabama",
                "active": "1"
            },
            {
                "code": "US.AK",
                "country_code": "US",
                "name": "Alaska",
                "active": "1"
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=1",
            "last": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=26",
            "prev": null,
            "next": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 26,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": null,
                    "label": "...",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=25",
                    "label": "25",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=26",
                    "label": "26",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins1?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries\/US\/subAdmins1",
            "per_page": 2,
            "to": 2,
            "total": 51
        }
    }
}
```
<div id="execution-results-GETapi-countries--countryCode--subAdmins1" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries--countryCode--subAdmins1"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--countryCode--subAdmins1"></code></pre>
</div>
<div id="execution-error-GETapi-countries--countryCode--subAdmins1" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--countryCode--subAdmins1"></code></pre>
</div>
<form id="form-GETapi-countries--countryCode--subAdmins1" data-method="GET" data-path="api/countries/{countryCode}/subAdmins1" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--countryCode--subAdmins1', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--countryCode--subAdmins1" onclick="tryItOut('GETapi-countries--countryCode--subAdmins1');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--countryCode--subAdmins1" onclick="cancelTryOut('GETapi-countries--countryCode--subAdmins1');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--countryCode--subAdmins1" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries/{countryCode}/subAdmins1</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>countryCode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="countryCode" data-endpoint="GETapi-countries--countryCode--subAdmins1" data-component="url"  hidden>
<br>
The country code of the country of the cities to retrieve.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-countries--countryCode--subAdmins1" data-component="query"  hidden>
<br>
Comma-separated list of the administrative division (1) relationships for Eager Loading - Possible values: country.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-countries--countryCode--subAdmins1" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: name.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-countries--countryCode--subAdmins1" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## List admin. divisions (2)




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/US/subAdmins2?embed=null&sort=-name&perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/countries/US/subAdmins2"
);

let params = {
    "embed": "null",
    "sort": "-name",
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
    'https://demo.laraclassifier.local/api/countries/US/subAdmins2',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
            'sort'=> '-name',
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
                "code": "US.SC.001",
                "country_code": "US",
                "subadmin1_code": "US.SC",
                "name": "Abbeville County",
                "active": "1"
            },
            {
                "code": "US.LA.001",
                "country_code": "US",
                "subadmin1_code": "US.LA",
                "name": "Acadia Parish",
                "active": "1"
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=1",
            "last": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=1572",
            "prev": null,
            "next": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 1572,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": null,
                    "label": "...",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=1571",
                    "label": "1571",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=1572",
                    "label": "1572",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/subAdmins2?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries\/US\/subAdmins2",
            "per_page": 2,
            "to": 2,
            "total": 3143
        }
    }
}
```
<div id="execution-results-GETapi-countries--countryCode--subAdmins2" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries--countryCode--subAdmins2"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--countryCode--subAdmins2"></code></pre>
</div>
<div id="execution-error-GETapi-countries--countryCode--subAdmins2" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--countryCode--subAdmins2"></code></pre>
</div>
<form id="form-GETapi-countries--countryCode--subAdmins2" data-method="GET" data-path="api/countries/{countryCode}/subAdmins2" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--countryCode--subAdmins2', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--countryCode--subAdmins2" onclick="tryItOut('GETapi-countries--countryCode--subAdmins2');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--countryCode--subAdmins2" onclick="cancelTryOut('GETapi-countries--countryCode--subAdmins2');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--countryCode--subAdmins2" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries/{countryCode}/subAdmins2</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>countryCode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="countryCode" data-endpoint="GETapi-countries--countryCode--subAdmins2" data-component="url"  hidden>
<br>
The country code of the country of the cities to retrieve.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-countries--countryCode--subAdmins2" data-component="query"  hidden>
<br>
Comma-separated list of the administrative division (2) relationships for Eager Loading - Possible values: country,subAdmin1.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-countries--countryCode--subAdmins2" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: name.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-countries--countryCode--subAdmins2" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## List cities




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/US/cities?embed=null&sort=-name&perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/countries/US/cities"
);

let params = {
    "embed": "null",
    "sort": "-name",
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
    'https://demo.laraclassifier.local/api/countries/US/cities',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
            'sort'=> '-name',
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
                "id": 43873,
                "country_code": "US",
                "name": "Abbeville",
                "latitude": "34.18",
                "longitude": "-82.38",
                "subadmin1_code": "US.SC",
                "subadmin2_code": "US.SC.001",
                "population": "5191",
                "time_zone": "America\/New_York",
                "active": "1"
            },
            {
                "id": 42919,
                "country_code": "US",
                "name": "Abbeville",
                "latitude": "29.97",
                "longitude": "-92.13",
                "subadmin1_code": "US.LA",
                "subadmin2_code": "US.LA.113",
                "population": "12434",
                "time_zone": "America\/Chicago",
                "active": "1"
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/countries\/US\/cities?page=1",
            "last": "http:\/\/localhost\/api\/countries\/US\/cities?page=3600",
            "prev": null,
            "next": "http:\/\/localhost\/api\/countries\/US\/cities?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 3600,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": null,
                    "label": "...",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=3599",
                    "label": "3599",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=3600",
                    "label": "3600",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/countries\/US\/cities?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries\/US\/cities",
            "per_page": 2,
            "to": 2,
            "total": 7200
        }
    }
}
```
<div id="execution-results-GETapi-countries--countryCode--cities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-countries--countryCode--cities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--countryCode--cities"></code></pre>
</div>
<div id="execution-error-GETapi-countries--countryCode--cities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--countryCode--cities"></code></pre>
</div>
<form id="form-GETapi-countries--countryCode--cities" data-method="GET" data-path="api/countries/{countryCode}/cities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--countryCode--cities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--countryCode--cities" onclick="tryItOut('GETapi-countries--countryCode--cities');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--countryCode--cities" onclick="cancelTryOut('GETapi-countries--countryCode--cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--countryCode--cities" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/countries/{countryCode}/cities</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>countryCode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="countryCode" data-endpoint="GETapi-countries--countryCode--cities" data-component="url"  hidden>
<br>
The country code of the country of the cities to retrieve.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-countries--countryCode--cities" data-component="query"  hidden>
<br>
Comma-separated list of the city relationships for Eager Loading - Possible values: country,subAdmin1,subAdmin2.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-countries--countryCode--cities" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: name.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-countries--countryCode--cities" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get admin. division (1)




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/subAdmins1/CH.VD?embed=null" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/subAdmins1/CH.VD"
);

let params = {
    "embed": "null",
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
    'https://demo.laraclassifier.local/api/subAdmins1/CH.VD',
    [
        'headers' => [
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
        "code": "CH.VD",
        "country_code": "CH",
        "name": "Vaud",
        "active": "1"
    }
}
```
<div id="execution-results-GETapi-subAdmins1--code-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-subAdmins1--code-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-subAdmins1--code-"></code></pre>
</div>
<div id="execution-error-GETapi-subAdmins1--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-subAdmins1--code-"></code></pre>
</div>
<form id="form-GETapi-subAdmins1--code-" data-method="GET" data-path="api/subAdmins1/{code}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-subAdmins1--code-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subAdmins1--code-" onclick="tryItOut('GETapi-subAdmins1--code-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subAdmins1--code-" onclick="cancelTryOut('GETapi-subAdmins1--code-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subAdmins1--code-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/subAdmins1/{code}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="GETapi-subAdmins1--code-" data-component="url" required  hidden>
<br>
The administrative division (1)'s code.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-subAdmins1--code-" data-component="query"  hidden>
<br>
Comma-separated list of the administrative division (1) relationships for Eager Loading - Possible values: country.
</p>
</form>


## Get admin. division (2)




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/subAdmins2/CH.VD.2225?embed=null" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/subAdmins2/CH.VD.2225"
);

let params = {
    "embed": "null",
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
    'https://demo.laraclassifier.local/api/subAdmins2/CH.VD.2225',
    [
        'headers' => [
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
        "code": "CH.VD.2225",
        "country_code": "CH",
        "subadmin1_code": "CH.VD",
        "name": "Lausanne District",
        "active": "1"
    }
}
```
<div id="execution-results-GETapi-subAdmins2--code-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-subAdmins2--code-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-subAdmins2--code-"></code></pre>
</div>
<div id="execution-error-GETapi-subAdmins2--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-subAdmins2--code-"></code></pre>
</div>
<form id="form-GETapi-subAdmins2--code-" data-method="GET" data-path="api/subAdmins2/{code}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-subAdmins2--code-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subAdmins2--code-" onclick="tryItOut('GETapi-subAdmins2--code-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subAdmins2--code-" onclick="cancelTryOut('GETapi-subAdmins2--code-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subAdmins2--code-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/subAdmins2/{code}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="GETapi-subAdmins2--code-" data-component="url" required  hidden>
<br>
The administrative division (2)'s code.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-subAdmins2--code-" data-component="query"  hidden>
<br>
Comma-separated list of the administrative division (2) relationships for Eager Loading - Possible values: country,subAdmin1.
</p>
</form>


## Get city




> Example request:

```bash
curl -X GET \
    -G "https://demo.laraclassifier.local/api/cities/12544?embed=country" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://demo.laraclassifier.local/api/cities/12544"
);

let params = {
    "embed": "country",
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
    'https://demo.laraclassifier.local/api/cities/12544',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'country',
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
        "id": 12544,
        "country_code": "DE",
        "name": "Berlin",
        "latitude": "52.52",
        "longitude": "13.41",
        "subadmin1_code": "DE.16",
        "subadmin2_code": "DE.16.00",
        "population": "3426354",
        "time_zone": "Europe\/Berlin",
        "active": "1",
        "country": {
            "code": "DE",
            "name": "Germany",
            "capital": "Berlin",
            "continent_code": "EU",
            "tld": ".de",
            "currency_code": "EUR",
            "phone": "49",
            "languages": "de",
            "time_zone": "Europe\/Berlin",
            "date_format": null,
            "datetime_format": null,
            "background_image": "app\/logo\/header-61fa587dc7367.jpg",
            "admin_type": "0",
            "admin_field_active": "0",
            "active": "1"
        }
    }
}
```
<div id="execution-results-GETapi-cities--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cities--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cities--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cities--id-"></code></pre>
</div>
<form id="form-GETapi-cities--id-" data-method="GET" data-path="api/cities/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cities--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cities--id-" onclick="tryItOut('GETapi-cities--id-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cities--id-" onclick="cancelTryOut('GETapi-cities--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cities--id-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cities/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cities--id-" data-component="url" required  hidden>
<br>
The city's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-cities--id-" data-component="query"  hidden>
<br>
Comma-separated list of the city relationships for Eager Loading - Possible values: country,subAdmin1,subAdmin2.
</p>
</form>



