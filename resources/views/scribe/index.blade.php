<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>LaraClassifier API Reference</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
        <img src="https://demo.laraclassifier.com/storage/app/default/logo-api.png" alt="logo" class="logo" style="padding-top: 10px;" width="230px"/>
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="php">php</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: February 26 2022</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>LaraClassifier API specification and documentation.</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<p><strong>Important:</strong> By default the API uses an access token set in the <strong><code>/.env</code></strong> file with the variable <code>APP_API_TOKEN</code>, whose its value
need to be added in the header of all the API requests with <code>X-AppApiToken</code> as key. On the other hand, the key <code>X-AppType</code> must not be added to the header... This key is only useful for the included web client and for API documentation.</p>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "https://demo.laraclassifier.local";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.10.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://demo.laraclassifier.local</code></pre><h1>Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_TOKEN}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Authentication</h1>
<h2>Log in</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"login":"user@demosite.com","password":"123456","captcha_key":"quo"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "login": "user@demosite.com",
    "password": "123456",
    "captcha_key": "quo"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/auth/login',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'login' =&gt; 'user@demosite.com',
            'password' =&gt; '123456',
            'captcha_key' =&gt; 'quo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "id": 3,
        "name": "User Demo",
        "username": null,
        "created_at_formatted": "Dec 25th, 2021 at 09:58",
        "photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg",
        "country_code": "US",
        "language_code": "en",
        "user_type_id": "2",
        "gender_id": "1",
        "photo": "avatars\/us\/3\/e69f9a84a9246120ced00e6e1196abc7.jpg",
        "about": "User Demo",
        "phone": "+1980877677",
        "phone_hidden": "0",
        "email": "user@demosite.com",
        "can_be_impersonate": null,
        "disable_comments": "1",
        "ip_addr": "32.130.184.40",
        "provider": null,
        "provider_id": null,
        "email_token": null,
        "phone_token": null,
        "verified_email": "1",
        "verified_phone": "1",
        "accept_terms": "1",
        "accept_marketing_offers": "0",
        "time_zone": null,
        "blocked": "0",
        "closed": "0",
        "last_activity": "2022-02-26T01:32:15.505039Z"
    },
    "extra": {
        "authToken": "54|dm6r1CLqL8lAUSJt658dyVoCpXhu42ptnLjpLtVa",
        "tokenType": "Bearer",
        "isAdmin": false
    }
}</code></pre>
<div id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login"></code></pre>
</div>
<form id="form-POSTapi-auth-login" data-method="POST" data-path="api/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-login" onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-login" onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>login</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="login" data-endpoint="POSTapi-auth-login" data-component="body" required  hidden>
<br>
The user's login (Can be email address or phone number).
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-login" data-component="body" required  hidden>
<br>
The user's password.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-auth-login" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>
<h2>Log out</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/auth/logout/19" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/logout/19"
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
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/auth/logout/19',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": "You have been logged out. See you soon.",
    "result": null
}</code></pre>
<div id="execution-results-GETapi-auth-logout--userId-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-auth-logout--userId-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-logout--userId-"></code></pre>
</div>
<div id="execution-error-GETapi-auth-logout--userId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-logout--userId-"></code></pre>
</div>
<form id="form-GETapi-auth-logout--userId-" data-method="GET" data-path="api/auth/logout/{userId}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-logout--userId-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-auth-logout--userId-" onclick="tryItOut('GETapi-auth-logout--userId-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-auth-logout--userId-" onclick="cancelTryOut('GETapi-auth-logout--userId-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-auth-logout--userId-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/auth/logout/{userId}</code></b>
</p>
<p>
<label id="auth-GETapi-auth-logout--userId-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-auth-logout--userId-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>userId</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="userId" data-endpoint="GETapi-auth-logout--userId-" data-component="url"  hidden>
<br>
The ID of the user to logout.
</p>
</form>
<h2>Forgot password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/auth/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"login":"user@demosite.com","captcha_key":"ducimus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "login": "user@demosite.com",
    "captcha_key": "ducimus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/auth/password/email',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'login' =&gt; 'user@demosite.com',
            'captcha_key' =&gt; 'ducimus',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": "We have e-mailed your password reset link!",
    "result": null
}</code></pre>
<div id="execution-results-POSTapi-auth-password-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-password-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-password-email"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-password-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-password-email"></code></pre>
</div>
<form id="form-POSTapi-auth-password-email" data-method="POST" data-path="api/auth/password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-password-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-password-email" onclick="tryItOut('POSTapi-auth-password-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-password-email" onclick="cancelTryOut('POSTapi-auth-password-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-password-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/password/email</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>login</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="login" data-endpoint="POSTapi-auth-password-email" data-component="body" required  hidden>
<br>
The user's login (Can be email address or phone number).
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-auth-password-email" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>
<h2>Reset password token</h2>
<p>Reset password token verification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/auth/password/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/password/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/auth/password/token',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "The given data was invalid.",
    "result": null,
    "errors": {
        "code": [
            "The code field is required."
        ]
    },
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-auth-password-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-password-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-password-token"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-password-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-password-token"></code></pre>
</div>
<form id="form-POSTapi-auth-password-token" data-method="POST" data-path="api/auth/password/token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-password-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-password-token" onclick="tryItOut('POSTapi-auth-password-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-password-token" onclick="cancelTryOut('POSTapi-auth-password-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-password-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/password/token</code></b>
</p>
</form>
<h2>Reset password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/auth/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"login":"john.doe@domain.tld","password":"js!X07$z61hLA","password_confirmation":"js!X07$z61hLA","captcha_key":"exercitationem"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "login": "john.doe@domain.tld",
    "password": "js!X07$z61hLA",
    "password_confirmation": "js!X07$z61hLA",
    "captcha_key": "exercitationem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/auth/password/reset',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'login' =&gt; 'john.doe@domain.tld',
            'password' =&gt; 'js!X07$z61hLA',
            'password_confirmation' =&gt; 'js!X07$z61hLA',
            'captcha_key' =&gt; 'exercitationem',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "The given data was invalid.",
    "result": null,
    "errors": {
        "token": [
            "The token field is required."
        ]
    },
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-auth-password-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-password-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-password-reset"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-password-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-password-reset"></code></pre>
</div>
<form id="form-POSTapi-auth-password-reset" data-method="POST" data-path="api/auth/password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-password-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-password-reset" onclick="tryItOut('POSTapi-auth-password-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-password-reset" onclick="cancelTryOut('POSTapi-auth-password-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-password-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/password/reset</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>login</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="login" data-endpoint="POSTapi-auth-password-reset" data-component="body" required  hidden>
<br>
The user's login (Can be email address or phone number).
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-auth-password-reset" data-component="body" required  hidden>
<br>
The user's password.
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-auth-password-reset" data-component="body" required  hidden>
<br>
The confirmation of the user's password.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-auth-password-reset" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form><h1>Captcha</h1>
<h2>Get CAPTCHA</h2>
<p>Calling this endpoint is mandatory if the captcha is enabled in the Admin panel.
Return a JSON data with an 'img' item that contains the captcha image to show and a 'key' item that contains the generated key to send for validation.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/captcha" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/captcha"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/captcha',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-captcha" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-captcha"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-captcha"></code></pre>
</div>
<div id="execution-error-GETapi-captcha" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-captcha"></code></pre>
</div>
<form id="form-GETapi-captcha" data-method="GET" data-path="api/captcha" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-captcha', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-captcha" onclick="tryItOut('GETapi-captcha');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-captcha" onclick="cancelTryOut('GETapi-captcha');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-captcha" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/captcha</code></b>
</p>
</form><h1>Categories</h1>
<h2>List categories</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/categories?parentId=0&amp;embed=null&amp;sort=-lft&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/categories"
);

let params = {
    "parentId": "0",
    "embed": "null",
    "sort": "-lft",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/categories',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'parentId'=&gt; '0',
            'embed'=&gt; 'null',
            'sort'=&gt; '-lft',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "name": "Phones &amp; Tablets",
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/categories",
            "per_page": 2,
            "to": 2,
            "total": 12
        }
    }
}</code></pre>
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
<h2>Get category</h2>
<p>Get category by its unique slug or ID.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/categories/cars?parentCatSlug=automobiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/categories/cars"
);

let params = {
    "parentCatSlug": "automobiles",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/categories/cars',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'parentCatSlug'=&gt; 'automobiles',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List category&#039;s fields</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/categories/inventore/fields" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"language_code":"en","post_id":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/categories/inventore/fields',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'language_code' =&gt; 'en',
            'post_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
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

</form><h1>Contact</h1>
<h2>Send Form</h2>
<p>Send a message to the site owner.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/contact" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"first_name":"John","last_name":"Doe","email":"john.doe@domain.tld","message":"Nesciunt porro possimus maiores voluptatibus accusamus velit qui aspernatur.","country_code":"US","country_name":"United Sates","captcha_key":"qui"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/contact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "email": "john.doe@domain.tld",
    "message": "Nesciunt porro possimus maiores voluptatibus accusamus velit qui aspernatur.",
    "country_code": "US",
    "country_name": "United Sates",
    "captcha_key": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/contact',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'first_name' =&gt; 'John',
            'last_name' =&gt; 'Doe',
            'email' =&gt; 'john.doe@domain.tld',
            'message' =&gt; 'Nesciunt porro possimus maiores voluptatibus accusamus velit qui aspernatur.',
            'country_code' =&gt; 'US',
            'country_name' =&gt; 'United Sates',
            'captcha_key' =&gt; 'qui',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-contact" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-contact"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contact"></code></pre>
</div>
<div id="execution-error-POSTapi-contact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contact"></code></pre>
</div>
<form id="form-POSTapi-contact" data-method="POST" data-path="api/contact" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-contact', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-contact" onclick="tryItOut('POSTapi-contact');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-contact" onclick="cancelTryOut('POSTapi-contact');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-contact" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/contact</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-contact" data-component="body" required  hidden>
<br>
The user's first name.
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-contact" data-component="body" required  hidden>
<br>
The user's last name.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-contact" data-component="body" required  hidden>
<br>
The user's email address.
</p>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-contact" data-component="body" required  hidden>
<br>
The message to send.
</p>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="POSTapi-contact" data-component="body" required  hidden>
<br>
The user's country code.
</p>
<p>
<b><code>country_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_name" data-endpoint="POSTapi-contact" data-component="body" required  hidden>
<br>
The user's country name.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-contact" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>
<h2>Report post</h2>
<p>Report abuse or issues</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/posts/12/report" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"report_type_id":2,"email":"john.doe@domain.tld","message":"Et sunt voluptatibus ducimus id assumenda sint.","captcha_key":"sapiente"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/12/report"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "report_type_id": 2,
    "email": "john.doe@domain.tld",
    "message": "Et sunt voluptatibus ducimus id assumenda sint.",
    "captcha_key": "sapiente"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/posts/12/report',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'report_type_id' =&gt; 2,
            'email' =&gt; 'john.doe@domain.tld',
            'message' =&gt; 'Et sunt voluptatibus ducimus id assumenda sint.',
            'captcha_key' =&gt; 'sapiente',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-posts--id--report" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-posts--id--report"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts--id--report"></code></pre>
</div>
<div id="execution-error-POSTapi-posts--id--report" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts--id--report"></code></pre>
</div>
<form id="form-POSTapi-posts--id--report" data-method="POST" data-path="api/posts/{id}/report" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts--id--report', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-posts--id--report" onclick="tryItOut('POSTapi-posts--id--report');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-posts--id--report" onclick="cancelTryOut('POSTapi-posts--id--report');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-posts--id--report" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/posts/{id}/report</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-posts--id--report" data-component="url" required  hidden>
<br>
The post ID.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>report_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="report_type_id" data-endpoint="POSTapi-posts--id--report" data-component="body" required  hidden>
<br>
The report type ID.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-posts--id--report" data-component="body" required  hidden>
<br>
The user's email address.
</p>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-posts--id--report" data-component="body" required  hidden>
<br>
The message to send.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-posts--id--report" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form><h1>Countries</h1>
<h2>List countries</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries?embed=null&amp;sort=-name&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/countries"
);

let params = {
    "embed": "null",
    "sort": "-name",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/countries',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; '-name',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries",
            "per_page": 2,
            "to": 2,
            "total": 242
        }
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries" onclick="tryItOut('GETapi-countries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries" onclick="cancelTryOut('GETapi-countries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries" hidden>Send Request 💥</button>
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
<h2>Get country</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/DE?embed=currency" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/countries/DE"
);

let params = {
    "embed": "currency",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/countries/DE',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'currency',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
            "symbol": "€",
            "html_entities": "€",
            "in_left": "0",
            "decimal_places": "2",
            "decimal_separator": ",",
            "thousand_separator": " "
        }
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--code-" onclick="tryItOut('GETapi-countries--code-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--code-" onclick="cancelTryOut('GETapi-countries--code-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--code-" hidden>Send Request 💥</button>
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
<h2>List admin. divisions (1)</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/US/subAdmins1?embed=null&amp;sort=-name&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/countries/US/subAdmins1"
);

let params = {
    "embed": "null",
    "sort": "-name",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/countries/US/subAdmins1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; '-name',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries\/US\/subAdmins1",
            "per_page": 2,
            "to": 2,
            "total": 51
        }
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--countryCode--subAdmins1" onclick="tryItOut('GETapi-countries--countryCode--subAdmins1');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--countryCode--subAdmins1" onclick="cancelTryOut('GETapi-countries--countryCode--subAdmins1');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--countryCode--subAdmins1" hidden>Send Request 💥</button>
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
<h2>List admin. divisions (2)</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/US/subAdmins2?embed=null&amp;sort=-name&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/countries/US/subAdmins2"
);

let params = {
    "embed": "null",
    "sort": "-name",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/countries/US/subAdmins2',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; '-name',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries\/US\/subAdmins2",
            "per_page": 2,
            "to": 2,
            "total": 3143
        }
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--countryCode--subAdmins2" onclick="tryItOut('GETapi-countries--countryCode--subAdmins2');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--countryCode--subAdmins2" onclick="cancelTryOut('GETapi-countries--countryCode--subAdmins2');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--countryCode--subAdmins2" hidden>Send Request 💥</button>
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
<h2>List cities</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/countries/US/cities?embed=null&amp;sort=-name&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/countries/US/cities"
);

let params = {
    "embed": "null",
    "sort": "-name",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/countries/US/cities',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; '-name',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/countries\/US\/cities",
            "per_page": 2,
            "to": 2,
            "total": 7200
        }
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-countries--countryCode--cities" onclick="tryItOut('GETapi-countries--countryCode--cities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-countries--countryCode--cities" onclick="cancelTryOut('GETapi-countries--countryCode--cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-countries--countryCode--cities" hidden>Send Request 💥</button>
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
<h2>Get admin. division (1)</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/subAdmins1/CH.VD?embed=null" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/subAdmins1/CH.VD"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/subAdmins1/CH.VD',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "code": "CH.VD",
        "country_code": "CH",
        "name": "Vaud",
        "active": "1"
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subAdmins1--code-" onclick="tryItOut('GETapi-subAdmins1--code-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subAdmins1--code-" onclick="cancelTryOut('GETapi-subAdmins1--code-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subAdmins1--code-" hidden>Send Request 💥</button>
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
<h2>Get admin. division (2)</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/subAdmins2/CH.VD.2225?embed=null" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/subAdmins2/CH.VD.2225"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/subAdmins2/CH.VD.2225',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "code": "CH.VD.2225",
        "country_code": "CH",
        "subadmin1_code": "CH.VD",
        "name": "Lausanne District",
        "active": "1"
    }
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subAdmins2--code-" onclick="tryItOut('GETapi-subAdmins2--code-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subAdmins2--code-" onclick="cancelTryOut('GETapi-subAdmins2--code-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subAdmins2--code-" hidden>Send Request 💥</button>
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
<h2>Get city</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/cities/12544?embed=country" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/cities/12544"
);

let params = {
    "embed": "country",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/cities/12544',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'country',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cities--id-" onclick="tryItOut('GETapi-cities--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cities--id-" onclick="cancelTryOut('GETapi-cities--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cities--id-" hidden>Send Request 💥</button>
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
</form><h1>Home</h1>
<h2>List sections</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/homeSections" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/homeSections"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/homeSections',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-homeSections" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-homeSections"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-homeSections"></code></pre>
</div>
<div id="execution-error-GETapi-homeSections" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-homeSections"></code></pre>
</div>
<form id="form-GETapi-homeSections" data-method="GET" data-path="api/homeSections" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-homeSections', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-homeSections" onclick="tryItOut('GETapi-homeSections');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-homeSections" onclick="cancelTryOut('GETapi-homeSections');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-homeSections" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/homeSections</code></b>
</p>
</form><h1>Packages</h1>
<h2>List packages</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/packages?embed=null&amp;sort=-lft" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/packages"
);

let params = {
    "embed": "null",
    "sort": "-lft",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/packages',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; '-lft',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "data": [
            {
                "id": 1,
                "name": "Regular List",
                "short_name": "Free",
                "ribbon": "red",
                "has_badge": "1",
                "price": "0.00",
                "currency_code": "USD",
                "promo_duration": null,
                "duration": null,
                "pictures_limit": null,
                "description": "",
                "facebook_ads_duration": "0",
                "google_ads_duration": "0",
                "twitter_ads_duration": "0",
                "linkedin_ads_duration": "0",
                "recommended": "0",
                "active": "1",
                "parent_id": null,
                "lft": "2",
                "rgt": "3",
                "depth": "0"
            },
            {
                "id": 2,
                "name": "Top page Listing",
                "short_name": "Premium",
                "ribbon": "orange",
                "has_badge": "1",
                "price": "7.50",
                "currency_code": "USD",
                "promo_duration": "7",
                "duration": "60",
                "pictures_limit": "2",
                "description": "Featured on the homepage\r\nFeatured in the category",
                "facebook_ads_duration": "0",
                "google_ads_duration": "0",
                "twitter_ads_duration": "0",
                "linkedin_ads_duration": "0",
                "recommended": "1",
                "active": "1",
                "parent_id": null,
                "lft": "4",
                "rgt": "5",
                "depth": "0"
            },
            {
                "id": 3,
                "name": "Top page Ad+",
                "short_name": "Premium+",
                "ribbon": "green",
                "has_badge": "1",
                "price": "9.00",
                "currency_code": "USD",
                "promo_duration": "30",
                "duration": "120",
                "pictures_limit": "8",
                "description": "Featured on the homepage\r\nFeatured in the category",
                "facebook_ads_duration": "0",
                "google_ads_duration": "0",
                "twitter_ads_duration": "0",
                "linkedin_ads_duration": "0",
                "recommended": "0",
                "active": "1",
                "parent_id": null,
                "lft": "6",
                "rgt": "7",
                "depth": "0"
            }
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-packages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-packages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-packages"></code></pre>
</div>
<div id="execution-error-GETapi-packages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-packages"></code></pre>
</div>
<form id="form-GETapi-packages" data-method="GET" data-path="api/packages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-packages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-packages" onclick="tryItOut('GETapi-packages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-packages" onclick="cancelTryOut('GETapi-packages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-packages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/packages</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-packages" data-component="query"  hidden>
<br>
Comma-separated list of the package relationships for Eager Loading - Possible values: currency.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-packages" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: lft.
</p>
</form>
<h2>Get package</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/packages/2?embed=currency" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/packages/2"
);

let params = {
    "embed": "currency",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/packages/2',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'currency',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "id": 2,
        "name": "Top page Listing",
        "short_name": "Premium",
        "ribbon": "orange",
        "has_badge": "1",
        "price": "7.50",
        "currency_code": "USD",
        "promo_duration": "7",
        "duration": "60",
        "pictures_limit": "2",
        "description": "Featured on the homepage\r\nFeatured in the category",
        "facebook_ads_duration": "0",
        "google_ads_duration": "0",
        "twitter_ads_duration": "0",
        "linkedin_ads_duration": "0",
        "recommended": "1",
        "active": "1",
        "parent_id": null,
        "lft": "4",
        "rgt": "5",
        "depth": "0",
        "currency": {
            "code": "USD",
            "name": "United States Dollar",
            "symbol": "$",
            "html_entities": "&amp;#36;",
            "in_left": "1",
            "decimal_places": "2",
            "decimal_separator": ".",
            "thousand_separator": ","
        }
    }
}</code></pre>
<div id="execution-results-GETapi-packages--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-packages--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-packages--id-"></code></pre>
</div>
<div id="execution-error-GETapi-packages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-packages--id-"></code></pre>
</div>
<form id="form-GETapi-packages--id-" data-method="GET" data-path="api/packages/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-packages--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-packages--id-" onclick="tryItOut('GETapi-packages--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-packages--id-" onclick="cancelTryOut('GETapi-packages--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-packages--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/packages/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-packages--id-" data-component="url" required  hidden>
<br>
The package's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-packages--id-" data-component="query"  hidden>
<br>
Comma-separated list of the package relationships for Eager Loading - Possible values: currency.
</p>
</form><h1>Pages</h1>
<h2>List pages</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/pages?excludedFromFooter=&amp;sort=-lft&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/pages"
);

let params = {
    "excludedFromFooter": "",
    "sort": "-lft",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/pages',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'excludedFromFooter'=&gt; '',
            'sort'=&gt; '-lft',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-pages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pages"></code></pre>
</div>
<div id="execution-error-GETapi-pages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pages"></code></pre>
</div>
<form id="form-GETapi-pages" data-method="GET" data-path="api/pages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pages" onclick="tryItOut('GETapi-pages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pages" onclick="cancelTryOut('GETapi-pages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pages</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>excludedFromFooter</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-pages" hidden><input type="radio" name="excludedFromFooter" value="1" data-endpoint="GETapi-pages" data-component="query" ><code>true</code></label>
<label data-endpoint="GETapi-pages" hidden><input type="radio" name="excludedFromFooter" value="0" data-endpoint="GETapi-pages" data-component="query" ><code>false</code></label>
<br>
Select or unselect pages that can list in footer.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-pages" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: lft, created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-pages" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>
<h2>Get page</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/pages/terms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/pages/terms"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/pages/terms',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-pages--slugOrId-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pages--slugOrId-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pages--slugOrId-"></code></pre>
</div>
<div id="execution-error-GETapi-pages--slugOrId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pages--slugOrId-"></code></pre>
</div>
<form id="form-GETapi-pages--slugOrId-" data-method="GET" data-path="api/pages/{slugOrId}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pages--slugOrId-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pages--slugOrId-" onclick="tryItOut('GETapi-pages--slugOrId-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pages--slugOrId-" onclick="cancelTryOut('GETapi-pages--slugOrId-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pages--slugOrId-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pages/{slugOrId}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slugOrId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slugOrId" data-endpoint="GETapi-pages--slugOrId-" data-component="url" required  hidden>
<br>
The slug or ID of the page.
</p>
</form><h1>Payment Methods</h1>
<h2>List payment methods</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/paymentMethods?countryCode=US&amp;sort=-lft" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/paymentMethods"
);

let params = {
    "countryCode": "US",
    "sort": "-lft",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/paymentMethods',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'countryCode'=&gt; 'US',
            'sort'=&gt; '-lft',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "data": []
    }
}</code></pre>
<div id="execution-results-GETapi-paymentMethods" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-paymentMethods"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paymentMethods"></code></pre>
</div>
<div id="execution-error-GETapi-paymentMethods" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paymentMethods"></code></pre>
</div>
<form id="form-GETapi-paymentMethods" data-method="GET" data-path="api/paymentMethods" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-paymentMethods', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-paymentMethods" onclick="tryItOut('GETapi-paymentMethods');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-paymentMethods" onclick="cancelTryOut('GETapi-paymentMethods');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-paymentMethods" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/paymentMethods</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>countryCode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="countryCode" data-endpoint="GETapi-paymentMethods" data-component="query"  hidden>
<br>
Country code. Select only the payment methods related to a country.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-paymentMethods" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: lft.
</p>
</form>
<h2>Get payment method</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/paymentMethods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/paymentMethods/1"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/paymentMethods/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Entry for Models\\PaymentMethod not found",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-paymentMethods--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-paymentMethods--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paymentMethods--id-"></code></pre>
</div>
<div id="execution-error-GETapi-paymentMethods--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paymentMethods--id-"></code></pre>
</div>
<form id="form-GETapi-paymentMethods--id-" data-method="GET" data-path="api/paymentMethods/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-paymentMethods--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-paymentMethods--id-" onclick="tryItOut('GETapi-paymentMethods--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-paymentMethods--id-" onclick="cancelTryOut('GETapi-paymentMethods--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-paymentMethods--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/paymentMethods/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-paymentMethods--id-" data-component="url" required  hidden>
<br>
Can be the ID (int) or name (string) of the payment method.
</p>
</form><h1>Payments</h1>
<h2>List payments</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/payments?embed=null&amp;sort=created_at&amp;perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/payments"
);

let params = {
    "embed": "null",
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/payments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; 'created_at',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "data": [
            {
                "id": 120,
                "post_id": "97",
                "package_id": "3",
                "payment_method_id": "1",
                "transaction_id": null,
                "amount": "9.00",
                "currency_code": null,
                "active": "1"
            },
            {
                "id": 22,
                "post_id": "71",
                "package_id": "3",
                "payment_method_id": "1",
                "transaction_id": null,
                "amount": "9.00",
                "currency_code": null,
                "active": "1"
            }
        ],
        "links": {
            "first": "http:\/\/localhost\/api\/payments?page=1",
            "last": "http:\/\/localhost\/api\/payments?page=1",
            "prev": null,
            "next": null
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 1,
            "links": [
                {
                    "url": null,
                    "label": "&amp;laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/payments?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/payments",
            "per_page": 2,
            "to": 2,
            "total": 2
        }
    }
}</code></pre>
<div id="execution-results-GETapi-payments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-payments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payments"></code></pre>
</div>
<div id="execution-error-GETapi-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payments"></code></pre>
</div>
<form id="form-GETapi-payments" data-method="GET" data-path="api/payments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-payments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-payments" onclick="tryItOut('GETapi-payments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-payments" onclick="cancelTryOut('GETapi-payments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-payments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/payments</code></b>
</p>
<p>
<label id="auth-GETapi-payments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-payments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-payments" data-component="query"  hidden>
<br>
Comma-separated list of the payment relationships for Eager Loading - Possible values: post,paymentMethod,package,currency.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-payments" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-payments" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>
<h2>Get payment</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/payments/2?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/payments/2"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/payments/2',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "id": 2,
        "post_id": "8551",
        "package_id": "2",
        "payment_method_id": "1",
        "transaction_id": null,
        "amount": "7.50",
        "currency_code": null,
        "active": "1"
    }
}</code></pre>
<div id="execution-results-GETapi-payments--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-payments--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payments--id-"></code></pre>
</div>
<div id="execution-error-GETapi-payments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payments--id-"></code></pre>
</div>
<form id="form-GETapi-payments--id-" data-method="GET" data-path="api/payments/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-payments--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-payments--id-" onclick="tryItOut('GETapi-payments--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-payments--id-" onclick="cancelTryOut('GETapi-payments--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-payments--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/payments/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-payments--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-payments--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-payments--id-" data-component="url" required  hidden>
<br>
The payment's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-payments--id-" data-component="query"  hidden>
<br>
Comma-separated list of the payment relationships for Eager Loading - Possible values: post,paymentMethod,package,currency.
</p>
</form>
<h2>Store payment</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Note: This endpoint is only available for the multi steps post edition.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/payments?package=14" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"country_code":"US","post_id":2,"package_id":12,"payment_method_id":5}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/payments"
);

let params = {
    "package": "14",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "country_code": "US",
    "post_id": 2,
    "package_id": 12,
    "payment_method_id": 5
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/payments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'package'=&gt; '14',
        ],
        'json' =&gt; [
            'country_code' =&gt; 'US',
            'post_id' =&gt; 2,
            'package_id' =&gt; 12,
            'payment_method_id' =&gt; 5,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Listing not found",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-payments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-payments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payments"></code></pre>
</div>
<div id="execution-error-POSTapi-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payments"></code></pre>
</div>
<form id="form-POSTapi-payments" data-method="POST" data-path="api/payments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-payments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-payments" onclick="tryItOut('POSTapi-payments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-payments" onclick="cancelTryOut('POSTapi-payments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-payments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/payments</code></b>
</p>
<p>
<label id="auth-POSTapi-payments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-payments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>package</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="package" data-endpoint="POSTapi-payments" data-component="query"  hidden>
<br>
Selected package ID.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="POSTapi-payments" data-component="body" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-payments" data-component="body" required  hidden>
<br>
The post's ID.
</p>
<p>
<b><code>package_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="package_id" data-endpoint="POSTapi-payments" data-component="body" required  hidden>
<br>
The package's ID (Auto filled when the query parameter 'package' is set).
</p>
<p>
<b><code>payment_method_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="payment_method_id" data-endpoint="POSTapi-payments" data-component="body"  hidden>
<br>
The payment method's ID (required when the selected package's price is > 0).
</p>

</form><h1>Pictures</h1>
<h2>Get picture</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/pictures/298?embed=null" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/pictures/298"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/pictures/298',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "id": 298,
        "post_id": "107",
        "filename": "files\/us\/107\/0ef55e55e21eb2b012ca30af30375b6f.jpg",
        "mime_type": "image\/jpeg",
        "position": "3",
        "active": "1"
    }
}</code></pre>
<div id="execution-results-GETapi-pictures--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pictures--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pictures--id-"></code></pre>
</div>
<div id="execution-error-GETapi-pictures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pictures--id-"></code></pre>
</div>
<form id="form-GETapi-pictures--id-" data-method="GET" data-path="api/pictures/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pictures--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pictures--id-" onclick="tryItOut('GETapi-pictures--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pictures--id-" onclick="cancelTryOut('GETapi-pictures--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pictures--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pictures/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-pictures--id-" data-component="url" required  hidden>
<br>
The picture's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-pictures--id-" data-component="query"  hidden>
<br>
The list of the picture relationships separated by comma for Eager Loading.
</p>
</form>
<h2>Store picture</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Note: This endpoint is only available for the multi steps post edition.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/pictures" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "country_code=US" \
    -F "count_packages=3" \
    -F "count_payment_methods=1" \
    -F "post_id=2" \
    -F "pictures[]=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpwDZIoT" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/pictures"
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
body.append('country_code', 'US');
body.append('count_packages', '3');
body.append('count_payment_methods', '1');
body.append('post_id', '2');
body.append('pictures[]', document.querySelector('input[name="pictures[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/pictures',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'country_code',
                'contents' =&gt; 'US'
            ],
            [
                'name' =&gt; 'count_packages',
                'contents' =&gt; '3'
            ],
            [
                'name' =&gt; 'count_payment_methods',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'post_id',
                'contents' =&gt; '2'
            ],
            [
                'name' =&gt; 'pictures[]',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpwDZIoT', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Listing not found",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-pictures" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-pictures"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pictures"></code></pre>
</div>
<div id="execution-error-POSTapi-pictures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pictures"></code></pre>
</div>
<form id="form-POSTapi-pictures" data-method="POST" data-path="api/pictures" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-pictures', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-pictures" onclick="tryItOut('POSTapi-pictures');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-pictures" onclick="cancelTryOut('POSTapi-pictures');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-pictures" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/pictures</code></b>
</p>
<p>
<label id="auth-POSTapi-pictures" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-pictures" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="POSTapi-pictures" data-component="body" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>count_packages</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="count_packages" data-endpoint="POSTapi-pictures" data-component="body" required  hidden>
<br>
The number of available packages.
</p>
<p>
<b><code>count_payment_methods</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="count_payment_methods" data-endpoint="POSTapi-pictures" data-component="body" required  hidden>
<br>
The number of available payment methods.
</p>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-pictures" data-component="body" required  hidden>
<br>
The post's ID.
</p>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-pictures" data-component="body"  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-pictures" data-component="body" hidden>
<br>
The files to upload.
</p>

</form>
<h2>Delete picture</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Note: This endpoint is only available for the multi steps post edition.
For newly created listings, the post's ID need to be added in the request input with the key 'new_post_id'.
The 'new_post_id' and 'new_post_tmp_token' fields need to be removed or unset during the post edition steps.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://demo.laraclassifier.local/api/pictures/quia" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"post_id":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/pictures/quia"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "post_id": 2
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://demo.laraclassifier.local/api/pictures/quia',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'post_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-DELETEapi-pictures--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-pictures--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pictures--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-pictures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pictures--id-"></code></pre>
</div>
<form id="form-DELETEapi-pictures--id-" data-method="DELETE" data-path="api/pictures/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pictures--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-pictures--id-" onclick="tryItOut('DELETEapi-pictures--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-pictures--id-" onclick="cancelTryOut('DELETEapi-pictures--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-pictures--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/pictures/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-pictures--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-pictures--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-pictures--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="DELETEapi-pictures--id-" data-component="body" required  hidden>
<br>
The post's ID.
</p>

</form>
<h2>Reorder pictures</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Note: This endpoint is only available for the multi steps post edition.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/pictures/reorder" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -H "X-Action: bulk" \
    -d '{"post_id":2,"body":"dolores"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/pictures/reorder"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
    "X-Action": "bulk",
};

let body = {
    "post_id": 2,
    "body": "dolores"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/pictures/reorder',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
            'X-Action' =&gt; 'bulk',
        ],
        'json' =&gt; [
            'post_id' =&gt; 2,
            'body' =&gt; 'dolores',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Invalid JSON format for the \"body\" field.",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-POSTapi-pictures-reorder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-pictures-reorder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pictures-reorder"></code></pre>
</div>
<div id="execution-error-POSTapi-pictures-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pictures-reorder"></code></pre>
</div>
<form id="form-POSTapi-pictures-reorder" data-method="POST" data-path="api/pictures/reorder" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs","X-Action":"bulk"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-pictures-reorder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-pictures-reorder" onclick="tryItOut('POSTapi-pictures-reorder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-pictures-reorder" onclick="cancelTryOut('POSTapi-pictures-reorder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-pictures-reorder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/pictures/reorder</code></b>
</p>
<p>
<label id="auth-POSTapi-pictures-reorder" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-pictures-reorder" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-pictures-reorder" data-component="body" required  hidden>
<br>
The post's ID.
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-pictures-reorder" data-component="body" required  hidden>
<br>
Encoded json of the new pictures' positions array [['id' => 2, 'position' => 1], ['id' => 1, 'position' => 2], ...]
</p>

</form>
<h2>List pictures</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/posts/id/pictures?embed=null&amp;postId=1&amp;latest=&amp;sort=-position&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/id/pictures"
);

let params = {
    "embed": "null",
    "postId": "1",
    "latest": "",
    "sort": "-position",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/posts/id/pictures',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'postId'=&gt; '1',
            'latest'=&gt; '',
            'sort'=&gt; '-position',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-posts--postId--pictures" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts--postId--pictures"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--postId--pictures"></code></pre>
</div>
<div id="execution-error-GETapi-posts--postId--pictures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--postId--pictures"></code></pre>
</div>
<form id="form-GETapi-posts--postId--pictures" data-method="GET" data-path="api/posts/{postId}/pictures" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--postId--pictures', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts--postId--pictures" onclick="tryItOut('GETapi-posts--postId--pictures');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts--postId--pictures" onclick="cancelTryOut('GETapi-posts--postId--pictures');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts--postId--pictures" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/{postId}/pictures</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>postId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postId" data-endpoint="GETapi-posts--postId--pictures" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-posts--postId--pictures" data-component="query"  hidden>
<br>
The list of the picture relationships separated by comma for Eager Loading. Possible values: post.
</p>
<p>
<b><code>postId</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="postId" data-endpoint="GETapi-posts--postId--pictures" data-component="query"  hidden>
<br>
List of pictures related to a post (using the post ID).
</p>
<p>
<b><code>latest</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-posts--postId--pictures" hidden><input type="radio" name="latest" value="1" data-endpoint="GETapi-posts--postId--pictures" data-component="query" ><code>true</code></label>
<label data-endpoint="GETapi-posts--postId--pictures" hidden><input type="radio" name="latest" value="0" data-endpoint="GETapi-posts--postId--pictures" data-component="query" ><code>false</code></label>
<br>
Get only the first picture after ordering (as object instead of collection).
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-posts--postId--pictures" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: position, created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-posts--postId--pictures" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form><h1>Posts</h1>
<h2>List listings</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/posts?embed=null&amp;sort=created_at&amp;perPage=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts"
);

let params = {
    "embed": "null",
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/posts',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; 'created_at',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "data": [
            {
                "id": 9786,
                "country_code": "US",
                "user_id": "1",
                "category_id": "113",
                "post_type_id": "2",
                "title": "Post it at LaraClassifier",
                "description": "&lt;p&gt;&lt;span style=\"color:#292b2c;font-family:Roboto, Helvetica, Arial, sans-serif;font-size:13.6px;text-align:center;background-color:#ffffff;\"&gt;Do you have something to sell, to rent, any service to offer or a job offer? Post it at LaraClassifier, its free, for local business and very easy to use!&lt;\/span&gt;&lt;\/p&gt;",
                "tags": [],
                "price": "2000.00",
                "negotiable": "1",
                "contact_name": "Administrator",
                "email": "admin@larapen.com",
                "phone": "061228281",
                "phone_hidden": null,
                "address": null,
                "city_id": "46448",
                "lat": "40.71",
                "lon": "-74.01",
                "ip_addr": "::1",
                "visits": "0",
                "tmp_token": "71d51d06a2c07e3e4be601fb4291392b",
                "email_token": null,
                "phone_token": null,
                "verified_email": "1",
                "verified_phone": "1",
                "accept_terms": "0",
                "accept_marketing_offers": "0",
                "is_permanent": "0",
                "reviewed": "1",
                "featured": "1",
                "archived": "0",
                "archived_at": "2022-02-15T13:29:10.000000Z",
                "deletion_mail_sent_at": null,
                "fb_profile": null,
                "partner": null,
                "created_at": "2022-02-15T13:28:39.000000Z",
                "updated_at": "2022-02-15T13:29:10.000000Z",
                "slug": "post-it-at-laraclassifier",
                "created_at_formatted": "Feb 15th, 2022 at 08:28",
                "user_photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg"
            },
            {
                "id": 9785,
                "country_code": "US",
                "user_id": "1",
                "category_id": "100",
                "post_type_id": "2",
                "title": "Do you have something to sell",
                "description": "&lt;p&gt;&lt;span style=\"color:#292b2c;font-family:Roboto, Helvetica, Arial, sans-serif;font-size:13.6px;text-align:center;background-color:#ffffff;\"&gt;Do you have something to sell, to rent, any service to offer or a job offer? Post it at LaraClassifier, its free, for local business and very easy to use!&lt;\/span&gt;&lt;\/p&gt;",
                "tags": [],
                "price": "300.00",
                "negotiable": "1",
                "contact_name": "Administrator",
                "email": "admin@larapen.com",
                "phone": "061228281",
                "phone_hidden": null,
                "address": null,
                "city_id": "48009",
                "lat": "39.74",
                "lon": "-104.98",
                "ip_addr": "::1",
                "visits": "1",
                "tmp_token": "1bdffd2912435ad83a799883ff5005a6",
                "email_token": null,
                "phone_token": null,
                "verified_email": "1",
                "verified_phone": "1",
                "accept_terms": "0",
                "accept_marketing_offers": "0",
                "is_permanent": "0",
                "reviewed": "1",
                "featured": "1",
                "archived": "0",
                "archived_at": "2022-02-15T18:05:53.000000Z",
                "deletion_mail_sent_at": null,
                "fb_profile": null,
                "partner": null,
                "created_at": "2022-02-15T09:55:51.000000Z",
                "updated_at": "2022-02-15T18:05:53.000000Z",
                "slug": "do-you-have-something-to-sell",
                "created_at_formatted": "Feb 15th, 2022 at 04:55",
                "user_photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg"
            }
        ]
    },
    "extra": {
        "count": null,
        "preSearch": [],
        "fields": []
    }
}</code></pre>
<div id="execution-results-GETapi-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts"></code></pre>
</div>
<div id="execution-error-GETapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts"></code></pre>
</div>
<form id="form-GETapi-posts" data-method="GET" data-path="api/posts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts" onclick="tryItOut('GETapi-posts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts" onclick="cancelTryOut('GETapi-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-posts" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: user,category,postType,city,latestPayment,savedByLoggedUser,pictures.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-posts" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-posts" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>
<h2>Get post</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/posts/2?unactivated=1&amp;noCache=&amp;embed=user%2CpostType&amp;detailed=" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/2"
);

let params = {
    "unactivated": "1",
    "noCache": "",
    "embed": "user,postType",
    "detailed": "",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/posts/2',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'unactivated'=&gt; '1',
            'noCache'=&gt; '',
            'embed'=&gt; 'user,postType',
            'detailed'=&gt; '',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
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
        "user_photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg",
        "user": {
            "id": 1,
            "name": "Administrator",
            "username": null,
            "created_at_formatted": "Dec 25th, 2021 at 09:58",
            "photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg",
            "country_code": "US",
            "language_code": "en",
            "user_type_id": "2",
            "gender_id": "1",
            "photo": "avatars\/us\/1\/252f692a1ff1c9373286481c01d05c6b.jpg",
            "about": "Administrator",
            "phone": "+35861228281",
            "phone_hidden": "0",
            "email": "admin@larapen.com",
            "can_be_impersonate": null,
            "disable_comments": "1",
            "ip_addr": "16.152.205.227",
            "provider": null,
            "provider_id": null,
            "email_token": null,
            "phone_token": null,
            "verified_email": "1",
            "verified_phone": "1",
            "accept_terms": "1",
            "accept_marketing_offers": "0",
            "time_zone": null,
            "blocked": "0",
            "closed": "0",
            "last_activity": "2022-02-26T01:32:27.748218Z"
        },
        "postType": {
            "id": 2,
            "name": "Professional",
            "active": "1"
        }
    }
}</code></pre>
<div id="execution-results-GETapi-posts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--id-"></code></pre>
</div>
<div id="execution-error-GETapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--id-"></code></pre>
</div>
<form id="form-GETapi-posts--id-" data-method="GET" data-path="api/posts/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts--id-" onclick="tryItOut('GETapi-posts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts--id-" onclick="cancelTryOut('GETapi-posts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-posts--id-" data-component="url" required  hidden>
<br>
The post/listing's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>unactivated</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-posts--id-" hidden><input type="radio" name="unactivated" value="1" data-endpoint="GETapi-posts--id-" data-component="query" ><code>true</code></label>
<label data-endpoint="GETapi-posts--id-" hidden><input type="radio" name="unactivated" value="0" data-endpoint="GETapi-posts--id-" data-component="query" ><code>false</code></label>
<br>
Include or not unactivated entries.
</p>
<p>
<b><code>noCache</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-posts--id-" hidden><input type="radio" name="noCache" value="1" data-endpoint="GETapi-posts--id-" data-component="query" ><code>true</code></label>
<label data-endpoint="GETapi-posts--id-" hidden><input type="radio" name="noCache" value="0" data-endpoint="GETapi-posts--id-" data-component="query" ><code>false</code></label>
<br>
Disable the cache for this request.
</p>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-posts--id-" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: user,category,postType,city,latestPayment,savedByLoggedUser,pictures.
</p>
<p>
<b><code>detailed</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-posts--id-" hidden><input type="radio" name="detailed" value="1" data-endpoint="GETapi-posts--id-" data-component="query" ><code>true</code></label>
<label data-endpoint="GETapi-posts--id-" hidden><input type="radio" name="detailed" value="0" data-endpoint="GETapi-posts--id-" data-component="query" ><code>false</code></label>
<br>
Allow to get the post's details with all its relationships (No need to set the 'embed' parameter).
</p>
</form>
<h2>Store post</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>For both types of post's creation (Single step or Multi steps).
Note: The field 'admin_code' is only available when the post's country's 'admin_type' column is set to 1 or 2 and the 'admin_field_active' column is set to 1.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/posts" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "category_id=1" \
    -F "post_type_id=1" \
    -F "title=John Doe" \
    -F "description=Beatae placeat atque tempore consequatur animi magni omnis." \
    -F "contact_name=John Doe" \
    -F "email=john.doe@domain.tld" \
    -F "phone=+17656766467" \
    -F "city_id=9" \
    -F "country_code=US" \
    -F "admin_code=0" \
    -F "price=5000" \
    -F "negotiable=" \
    -F "phone_hidden=" \
    -F "ip_addr=saepe" \
    -F "accept_marketing_offers=" \
    -F "is_permanent=" \
    -F "tags=car,automotive,tesla,cyber,truck" \
    -F "accept_terms=" \
    -F "package_id=2" \
    -F "payment_method_id=5" \
    -F "captcha_key=est" \
    -F "pictures[]=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpqLWjLv" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts"
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
body.append('category_id', '1');
body.append('post_type_id', '1');
body.append('title', 'John Doe');
body.append('description', 'Beatae placeat atque tempore consequatur animi magni omnis.');
body.append('contact_name', 'John Doe');
body.append('email', 'john.doe@domain.tld');
body.append('phone', '+17656766467');
body.append('city_id', '9');
body.append('country_code', 'US');
body.append('admin_code', '0');
body.append('price', '5000');
body.append('negotiable', '');
body.append('phone_hidden', '');
body.append('ip_addr', 'saepe');
body.append('accept_marketing_offers', '');
body.append('is_permanent', '');
body.append('tags', 'car,automotive,tesla,cyber,truck');
body.append('accept_terms', '');
body.append('package_id', '2');
body.append('payment_method_id', '5');
body.append('captcha_key', 'est');
body.append('pictures[]', document.querySelector('input[name="pictures[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/posts',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'category_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'post_type_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'title',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'description',
                'contents' =&gt; 'Beatae placeat atque tempore consequatur animi magni omnis.'
            ],
            [
                'name' =&gt; 'contact_name',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'email',
                'contents' =&gt; 'john.doe@domain.tld'
            ],
            [
                'name' =&gt; 'phone',
                'contents' =&gt; '+17656766467'
            ],
            [
                'name' =&gt; 'city_id',
                'contents' =&gt; '9'
            ],
            [
                'name' =&gt; 'country_code',
                'contents' =&gt; 'US'
            ],
            [
                'name' =&gt; 'admin_code',
                'contents' =&gt; '0'
            ],
            [
                'name' =&gt; 'price',
                'contents' =&gt; '5000'
            ],
            [
                'name' =&gt; 'negotiable',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'phone_hidden',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'ip_addr',
                'contents' =&gt; 'saepe'
            ],
            [
                'name' =&gt; 'accept_marketing_offers',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'is_permanent',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'tags',
                'contents' =&gt; 'car,automotive,tesla,cyber,truck'
            ],
            [
                'name' =&gt; 'accept_terms',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'package_id',
                'contents' =&gt; '2'
            ],
            [
                'name' =&gt; 'payment_method_id',
                'contents' =&gt; '5'
            ],
            [
                'name' =&gt; 'captcha_key',
                'contents' =&gt; 'est'
            ],
            [
                'name' =&gt; 'pictures[]',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpqLWjLv', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": "Your listing has been created.",
    "result": {
        "id": 9800,
        "country_code": "US",
        "user_id": 3,
        "category_id": 1,
        "post_type_id": 1,
        "title": "John Doe",
        "description": "&lt;p&gt;Beatae placeat atque tempore consequatur animi magni omnis.&lt;\/p&gt;",
        "tags": [
            "car",
            "automotive",
            "tesla",
            "cyber",
            "truck"
        ],
        "price": "5000",
        "negotiable": false,
        "contact_name": "John Doe",
        "email": "john.doe@domain.tld",
        "phone": "+17656766467",
        "phone_hidden": false,
        "address": null,
        "city_id": 9,
        "lat": "25.79",
        "lon": "55.94",
        "ip_addr": "saepe",
        "visits": null,
        "tmp_token": "88ea06a1d49385ffbd8980f2d6052f90",
        "email_token": "a792bad20f44c0c764262ae740466172",
        "phone_token": null,
        "verified_email": 0,
        "verified_phone": 1,
        "accept_terms": false,
        "accept_marketing_offers": false,
        "is_permanent": false,
        "reviewed": 0,
        "featured": null,
        "archived": null,
        "archived_at": "2022-02-26T01:32:28.000000Z",
        "deletion_mail_sent_at": null,
        "fb_profile": null,
        "partner": null,
        "created_at": "2022-02-26T01:32:28.000000Z",
        "updated_at": "2022-02-26T01:32:28.000000Z",
        "slug": "john-doe",
        "created_at_formatted": "Feb 26th, 2022 at 02:32",
        "user_photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg"
    },
    "extra": {
        "payment": {
            "success": false,
            "message": "We have not received your payment. An error occurred.",
            "result": null
        },
        "previousUrl": "http:\/\/demo.laraclassifier.local\/posts\/create\/payment?error=paymentMethodNotFound",
        "nextUrl": "http:\/\/demo.laraclassifier.local\/posts\/create\/finish",
        "paymentCancelUrl": "http:\/\/demo.laraclassifier.local\/posts\/create\/payment\/cancel",
        "paymentReturnUrl": "http:\/\/demo.laraclassifier.local\/posts\/create\/payment\/success"
    }
}</code></pre>
<div id="execution-results-POSTapi-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts"></code></pre>
</div>
<div id="execution-error-POSTapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts"></code></pre>
</div>
<form id="form-POSTapi-posts" data-method="POST" data-path="api/posts" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-posts" onclick="tryItOut('POSTapi-posts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-posts" onclick="cancelTryOut('POSTapi-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-posts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/posts</code></b>
</p>
<p>
<label id="auth-POSTapi-posts" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-posts" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The category's ID.
</p>
<p>
<b><code>post_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="post_type_id" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
The post type's ID.
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The post's title.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The post's description.
</p>
<p>
<b><code>contact_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact_name" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The post's author name.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
The post's author email address (required if mobile phone number doesn't exist).
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
The post's author mobile number (required if email doesn't exist).
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="city_id" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The city's ID.
</p>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>admin_code</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admin_code" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
The administrative division's code.
</p>
<p>
<b><code>price</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="price" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The price.
</p>
<p>
<b><code>negotiable</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="negotiable" value="true" data-endpoint="POSTapi-posts" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="negotiable" value="false" data-endpoint="POSTapi-posts" data-component="body" ><code>false</code></label>
<br>
Negotiable price or no.
</p>
<p>
<b><code>phone_hidden</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="phone_hidden" value="true" data-endpoint="POSTapi-posts" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="phone_hidden" value="false" data-endpoint="POSTapi-posts" data-component="body" ><code>false</code></label>
<br>
Mobile phone number will be hidden in public or no.
</p>
<p>
<b><code>ip_addr</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="ip_addr" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
The post's author IP address.
</p>
<p>
<b><code>accept_marketing_offers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="accept_marketing_offers" value="true" data-endpoint="POSTapi-posts" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="accept_marketing_offers" value="false" data-endpoint="POSTapi-posts" data-component="body" ><code>false</code></label>
<br>
Accept to receive marketing offers or no.
</p>
<p>
<b><code>is_permanent</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="is_permanent" value="true" data-endpoint="POSTapi-posts" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="is_permanent" value="false" data-endpoint="POSTapi-posts" data-component="body" ><code>false</code></label>
<br>
Is it permanent post or no.
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tags" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
Comma-separated tags list.
</p>
<p>
<b><code>accept_terms</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="accept_terms" value="true" data-endpoint="POSTapi-posts" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-posts" hidden><input type="radio" name="accept_terms" value="false" data-endpoint="POSTapi-posts" data-component="body" required ><code>false</code></label>
<br>
Accept the website terms and conditions.
</p>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>  &nbsp;
<input type="file" name="pictures.0" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<input type="file" name="pictures.1" data-endpoint="POSTapi-posts" data-component="body" hidden>
<br>
The post's pictures.
</p>
<p>
<b><code>package_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="package_id" data-endpoint="POSTapi-posts" data-component="body" required  hidden>
<br>
The package's ID.
</p>
<p>
<b><code>payment_method_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="payment_method_id" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
The payment method's ID (required when the selected package's price is > 0).
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-posts" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>
<h2>Update post</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Note: The fields 'pictures', 'package_id' and 'payment_method_id' are only available with the single step post edition.
The field 'admin_code' is only available when the post's country's 'admin_type' column is set to 1 or 2 and the 'admin_field_active' column is set to 1.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://demo.laraclassifier.local/api/posts/veritatis" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "category_id=1" \
    -F "post_type_id=1" \
    -F "title=John Doe" \
    -F "description=Beatae placeat atque tempore consequatur animi magni omnis." \
    -F "contact_name=John Doe" \
    -F "email=john.doe@domain.tld" \
    -F "phone=+17656766467" \
    -F "city_id=6" \
    -F "country_code=US" \
    -F "admin_code=0" \
    -F "price=5000" \
    -F "negotiable=" \
    -F "phone_hidden=" \
    -F "ip_addr=et" \
    -F "accept_marketing_offers=" \
    -F "is_permanent=" \
    -F "tags=car,automotive,tesla,cyber,truck" \
    -F "accept_terms=" \
    -F "package_id=2" \
    -F "payment_method_id=5" \
    -F "pictures[]=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpAIPJqj" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/veritatis"
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
body.append('category_id', '1');
body.append('post_type_id', '1');
body.append('title', 'John Doe');
body.append('description', 'Beatae placeat atque tempore consequatur animi magni omnis.');
body.append('contact_name', 'John Doe');
body.append('email', 'john.doe@domain.tld');
body.append('phone', '+17656766467');
body.append('city_id', '6');
body.append('country_code', 'US');
body.append('admin_code', '0');
body.append('price', '5000');
body.append('negotiable', '');
body.append('phone_hidden', '');
body.append('ip_addr', 'et');
body.append('accept_marketing_offers', '');
body.append('is_permanent', '');
body.append('tags', 'car,automotive,tesla,cyber,truck');
body.append('accept_terms', '');
body.append('package_id', '2');
body.append('payment_method_id', '5');
body.append('pictures[]', document.querySelector('input[name="pictures[]"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'https://demo.laraclassifier.local/api/posts/veritatis',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'category_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'post_type_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'title',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'description',
                'contents' =&gt; 'Beatae placeat atque tempore consequatur animi magni omnis.'
            ],
            [
                'name' =&gt; 'contact_name',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'email',
                'contents' =&gt; 'john.doe@domain.tld'
            ],
            [
                'name' =&gt; 'phone',
                'contents' =&gt; '+17656766467'
            ],
            [
                'name' =&gt; 'city_id',
                'contents' =&gt; '6'
            ],
            [
                'name' =&gt; 'country_code',
                'contents' =&gt; 'US'
            ],
            [
                'name' =&gt; 'admin_code',
                'contents' =&gt; '0'
            ],
            [
                'name' =&gt; 'price',
                'contents' =&gt; '5000'
            ],
            [
                'name' =&gt; 'negotiable',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'phone_hidden',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'ip_addr',
                'contents' =&gt; 'et'
            ],
            [
                'name' =&gt; 'accept_marketing_offers',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'is_permanent',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'tags',
                'contents' =&gt; 'car,automotive,tesla,cyber,truck'
            ],
            [
                'name' =&gt; 'accept_terms',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'package_id',
                'contents' =&gt; '2'
            ],
            [
                'name' =&gt; 'payment_method_id',
                'contents' =&gt; '5'
            ],
            [
                'name' =&gt; 'pictures[]',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpAIPJqj', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-PUTapi-posts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-posts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-posts--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-posts--id-"></code></pre>
</div>
<form id="form-PUTapi-posts--id-" data-method="PUT" data-path="api/posts/{id}" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-posts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-posts--id-" onclick="tryItOut('PUTapi-posts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-posts--id-" onclick="cancelTryOut('PUTapi-posts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-posts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/posts/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-posts--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-posts--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-posts--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The category's ID.
</p>
<p>
<b><code>post_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="post_type_id" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
The post type's ID.
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The post's title.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The post's description.
</p>
<p>
<b><code>contact_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact_name" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The post's author name.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
The post's author email address (required if mobile phone number doesn't exist).
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
The post's author mobile number (required if email doesn't exist).
</p>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="city_id" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The city's ID.
</p>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>admin_code</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admin_code" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
The administrative division's code.
</p>
<p>
<b><code>price</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="price" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The price.
</p>
<p>
<b><code>negotiable</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="negotiable" value="true" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="negotiable" value="false" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>false</code></label>
<br>
Negotiable price or no.
</p>
<p>
<b><code>phone_hidden</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="phone_hidden" value="true" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="phone_hidden" value="false" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>false</code></label>
<br>
Mobile phone number will be hidden in public or no.
</p>
<p>
<b><code>ip_addr</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="ip_addr" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
The post's author IP address.
</p>
<p>
<b><code>accept_marketing_offers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="accept_marketing_offers" value="true" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="accept_marketing_offers" value="false" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>false</code></label>
<br>
Accept to receive marketing offers or no.
</p>
<p>
<b><code>is_permanent</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="is_permanent" value="true" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="is_permanent" value="false" data-endpoint="PUTapi-posts--id-" data-component="body" ><code>false</code></label>
<br>
Is it permanent post or no.
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tags" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
Comma-separated tags list.
</p>
<p>
<b><code>accept_terms</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="accept_terms" value="true" data-endpoint="PUTapi-posts--id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-posts--id-" hidden><input type="radio" name="accept_terms" value="false" data-endpoint="PUTapi-posts--id-" data-component="body" required ><code>false</code></label>
<br>
Accept the website terms and conditions.
</p>
<p>
<b><code>pictures</code></b>&nbsp;&nbsp;<small>file[]</small>  &nbsp;
<input type="file" name="pictures.0" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<input type="file" name="pictures.1" data-endpoint="PUTapi-posts--id-" data-component="body" hidden>
<br>
The post's pictures.
</p>
<p>
<b><code>package_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="package_id" data-endpoint="PUTapi-posts--id-" data-component="body" required  hidden>
<br>
The package's ID.
</p>
<p>
<b><code>payment_method_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="payment_method_id" data-endpoint="PUTapi-posts--id-" data-component="body"  hidden>
<br>
The payment method's ID (required when the selected package's price is > 0).
</p>

</form>
<h2>Delete post(s)</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://demo.laraclassifier.local/api/posts/expedita" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/expedita"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://demo.laraclassifier.local/api/posts/expedita',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-DELETEapi-posts--ids-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-posts--ids-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-posts--ids-"></code></pre>
</div>
<div id="execution-error-DELETEapi-posts--ids-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-posts--ids-"></code></pre>
</div>
<form id="form-DELETEapi-posts--ids-" data-method="DELETE" data-path="api/posts/{ids}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-posts--ids-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-posts--ids-" onclick="tryItOut('DELETEapi-posts--ids-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-posts--ids-" onclick="cancelTryOut('DELETEapi-posts--ids-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-posts--ids-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/posts/{ids}</code></b>
</p>
<p>
<label id="auth-DELETEapi-posts--ids-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-posts--ids-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="DELETEapi-posts--ids-" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of post(s).
</p>
</form>
<h2>Email: Re-send link</h2>
<p>Re-send email verification link to the user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/posts/vero/verify/resend/email?entitySlug=users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/vero/verify/resend/email"
);

let params = {
    "entitySlug": "users",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/posts/vero/verify/resend/email',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'entitySlug'=&gt; 'users',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-posts--id--verify-resend-email" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts--id--verify-resend-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--id--verify-resend-email"></code></pre>
</div>
<div id="execution-error-GETapi-posts--id--verify-resend-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--id--verify-resend-email"></code></pre>
</div>
<form id="form-GETapi-posts--id--verify-resend-email" data-method="GET" data-path="api/posts/{id}/verify/resend/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--id--verify-resend-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts--id--verify-resend-email" onclick="tryItOut('GETapi-posts--id--verify-resend-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts--id--verify-resend-email" onclick="cancelTryOut('GETapi-posts--id--verify-resend-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts--id--verify-resend-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/{id}/verify/resend/email</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-posts--id--verify-resend-email" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>entitySlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="entitySlug" data-endpoint="GETapi-posts--id--verify-resend-email" data-component="query"  hidden>
<br>
The slug of the entity to verify ('users' or 'posts').
</p>
</form>
<h2>SMS: Re-send code</h2>
<p>Re-send mobile phone verification token by SMS</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/posts/fuga/verify/resend/sms?entitySlug=users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/fuga/verify/resend/sms"
);

let params = {
    "entitySlug": "users",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/posts/fuga/verify/resend/sms',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'entitySlug'=&gt; 'users',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-posts--id--verify-resend-sms" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts--id--verify-resend-sms"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--id--verify-resend-sms"></code></pre>
</div>
<div id="execution-error-GETapi-posts--id--verify-resend-sms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--id--verify-resend-sms"></code></pre>
</div>
<form id="form-GETapi-posts--id--verify-resend-sms" data-method="GET" data-path="api/posts/{id}/verify/resend/sms" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--id--verify-resend-sms', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts--id--verify-resend-sms" onclick="tryItOut('GETapi-posts--id--verify-resend-sms');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts--id--verify-resend-sms" onclick="cancelTryOut('GETapi-posts--id--verify-resend-sms');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts--id--verify-resend-sms" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/{id}/verify/resend/sms</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-posts--id--verify-resend-sms" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>entitySlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="entitySlug" data-endpoint="GETapi-posts--id--verify-resend-sms" data-component="query"  hidden>
<br>
The slug of the entity to verify ('users' or 'posts').
</p>
</form>
<h2>Verification</h2>
<p>Verify the user's email address or mobile phone number</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/posts/verify/iusto/illum?entitySlug=users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/posts/verify/iusto/illum"
);

let params = {
    "entitySlug": "users",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/posts/verify/iusto/illum',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'entitySlug'=&gt; 'users',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-posts-verify--field---token--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts-verify--field---token--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts-verify--field---token--"></code></pre>
</div>
<div id="execution-error-GETapi-posts-verify--field---token--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts-verify--field---token--"></code></pre>
</div>
<form id="form-GETapi-posts-verify--field---token--" data-method="GET" data-path="api/posts/verify/{field}/{token?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts-verify--field---token--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts-verify--field---token--" onclick="tryItOut('GETapi-posts-verify--field---token--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts-verify--field---token--" onclick="cancelTryOut('GETapi-posts-verify--field---token--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts-verify--field---token--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/verify/{field}/{token?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>field</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="field" data-endpoint="GETapi-posts-verify--field---token--" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="token" data-endpoint="GETapi-posts-verify--field---token--" data-component="url"  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>entitySlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="entitySlug" data-endpoint="GETapi-posts-verify--field---token--" data-component="query"  hidden>
<br>
The slug of the entity to verify ('users' or 'posts').
</p>
</form><h1>Saved Posts</h1>
<h2>Store/Delete saved listing</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Save a post/listing in favorite, or remove it from favorite.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/savedPosts" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"post_id":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/savedPosts"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "post_id": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/savedPosts',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'post_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": "Listing saved in favorites successfully!",
    "result": {
        "id": 4026,
        "user_id": 3,
        "post_id": 2
    }
}</code></pre>
<div id="execution-results-POSTapi-savedPosts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-savedPosts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-savedPosts"></code></pre>
</div>
<div id="execution-error-POSTapi-savedPosts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-savedPosts"></code></pre>
</div>
<form id="form-POSTapi-savedPosts" data-method="POST" data-path="api/savedPosts" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-savedPosts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-savedPosts" onclick="tryItOut('POSTapi-savedPosts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-savedPosts" onclick="cancelTryOut('POSTapi-savedPosts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-savedPosts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/savedPosts</code></b>
</p>
<p>
<label id="auth-POSTapi-savedPosts" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-savedPosts" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-savedPosts" data-component="body" required  hidden>
<br>
The post/listing's ID.
</p>

</form>
<h2>List saved listings</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/savedPosts?country_code=US&amp;sort=created_at&amp;perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/savedPosts"
);

let params = {
    "country_code": "US",
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/savedPosts',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'country_code'=&gt; 'US',
            'sort'=&gt; 'created_at',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "data": [],
        "links": {
            "first": "http:\/\/localhost\/api\/savedPosts?page=1",
            "last": "http:\/\/localhost\/api\/savedPosts?page=1",
            "prev": null,
            "next": null
        },
        "meta": {
            "current_page": 1,
            "from": null,
            "last_page": 1,
            "links": [
                {
                    "url": null,
                    "label": "&amp;laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/localhost\/api\/savedPosts?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/savedPosts",
            "per_page": 2,
            "to": null,
            "total": 0
        }
    }
}</code></pre>
<div id="execution-results-GETapi-savedPosts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-savedPosts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-savedPosts"></code></pre>
</div>
<div id="execution-error-GETapi-savedPosts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-savedPosts"></code></pre>
</div>
<form id="form-GETapi-savedPosts" data-method="GET" data-path="api/savedPosts" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-savedPosts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-savedPosts" onclick="tryItOut('GETapi-savedPosts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-savedPosts" onclick="cancelTryOut('GETapi-savedPosts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-savedPosts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/savedPosts</code></b>
</p>
<p>
<label id="auth-GETapi-savedPosts" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-savedPosts" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="GETapi-savedPosts" data-component="query" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-savedPosts" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-savedPosts" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>
<h2>Delete saved listing(s)</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://demo.laraclassifier.local/api/savedPosts/assumenda" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/savedPosts/assumenda"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://demo.laraclassifier.local/api/savedPosts/assumenda',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-DELETEapi-savedPosts--ids-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-savedPosts--ids-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-savedPosts--ids-"></code></pre>
</div>
<div id="execution-error-DELETEapi-savedPosts--ids-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-savedPosts--ids-"></code></pre>
</div>
<form id="form-DELETEapi-savedPosts--ids-" data-method="DELETE" data-path="api/savedPosts/{ids}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-savedPosts--ids-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-savedPosts--ids-" onclick="tryItOut('DELETEapi-savedPosts--ids-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-savedPosts--ids-" onclick="cancelTryOut('DELETEapi-savedPosts--ids-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-savedPosts--ids-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/savedPosts/{ids}</code></b>
</p>
<p>
<label id="auth-DELETEapi-savedPosts--ids-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-savedPosts--ids-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="DELETEapi-savedPosts--ids-" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of saved post/listing(s).
</p>
</form><h1>Saved Searches</h1>
<h2>Store/Delete saved search</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Save a search result in favorite, or remove it from favorite.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/savedSearches" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -d '{"url":"https:\/\/demo.laraclassifier.com\/search\/?q=test&amp;l=","count_posts":29}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/savedSearches"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

let body = {
    "url": "https:\/\/demo.laraclassifier.com\/search\/?q=test&amp;l=",
    "count_posts": 29
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/savedSearches',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'json' =&gt; [
            'url' =&gt; 'https://demo.laraclassifier.com/search/?q=test&amp;l=',
            'count_posts' =&gt; 29,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": "Search saved successfully !",
    "result": {
        "id": 4027,
        "country_code": "US",
        "user_id": 3,
        "keyword": "test",
        "query": "q=test&amp;l=",
        "count": 29
    }
}</code></pre>
<div id="execution-results-POSTapi-savedSearches" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-savedSearches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-savedSearches"></code></pre>
</div>
<div id="execution-error-POSTapi-savedSearches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-savedSearches"></code></pre>
</div>
<form id="form-POSTapi-savedSearches" data-method="POST" data-path="api/savedSearches" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-savedSearches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-savedSearches" onclick="tryItOut('POSTapi-savedSearches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-savedSearches" onclick="cancelTryOut('POSTapi-savedSearches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-savedSearches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/savedSearches</code></b>
</p>
<p>
<label id="auth-POSTapi-savedSearches" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-savedSearches" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="url" data-endpoint="POSTapi-savedSearches" data-component="body" required  hidden>
<br>
Search URL to save.
</p>
<p>
<b><code>count_posts</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="count_posts" data-endpoint="POSTapi-savedSearches" data-component="body" required  hidden>
<br>
The number of posts found for the URL.
</p>

</form>
<h2>List saved searches</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/savedSearches?sort=created_at&amp;perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/savedSearches"
);

let params = {
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/savedSearches',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'sort'=&gt; 'created_at',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "savedSearches": {
            "data": [
                {
                    "id": 3771,
                    "country_code": "US",
                    "user_id": "3",
                    "keyword": "velit",
                    "query": "q=velit",
                    "count": "0"
                },
                {
                    "id": 3779,
                    "country_code": "US",
                    "user_id": "3",
                    "keyword": "sequi",
                    "query": "q=sequi",
                    "count": "0"
                }
            ]
        },
        "searchData": []
    }
}</code></pre>
<div id="execution-results-GETapi-savedSearches" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-savedSearches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-savedSearches"></code></pre>
</div>
<div id="execution-error-GETapi-savedSearches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-savedSearches"></code></pre>
</div>
<form id="form-GETapi-savedSearches" data-method="GET" data-path="api/savedSearches" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-savedSearches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-savedSearches" onclick="tryItOut('GETapi-savedSearches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-savedSearches" onclick="cancelTryOut('GETapi-savedSearches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-savedSearches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/savedSearches</code></b>
</p>
<p>
<label id="auth-GETapi-savedSearches" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-savedSearches" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-savedSearches" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-savedSearches" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>
<h2>Delete saved search(es)</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://demo.laraclassifier.local/api/savedSearches/amet" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/savedSearches/amet"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://demo.laraclassifier.local/api/savedSearches/amet',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-DELETEapi-savedSearches--ids-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-savedSearches--ids-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-savedSearches--ids-"></code></pre>
</div>
<div id="execution-error-DELETEapi-savedSearches--ids-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-savedSearches--ids-"></code></pre>
</div>
<form id="form-DELETEapi-savedSearches--ids-" data-method="DELETE" data-path="api/savedSearches/{ids}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-savedSearches--ids-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-savedSearches--ids-" onclick="tryItOut('DELETEapi-savedSearches--ids-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-savedSearches--ids-" onclick="cancelTryOut('DELETEapi-savedSearches--ids-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-savedSearches--ids-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/savedSearches/{ids}</code></b>
</p>
<p>
<label id="auth-DELETEapi-savedSearches--ids-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-savedSearches--ids-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="DELETEapi-savedSearches--ids-" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of saved search(es).
</p>
</form><h1>Settings</h1>
<h2>List settings</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/settings"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/settings',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings"></code></pre>
</div>
<div id="execution-error-GETapi-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings"></code></pre>
</div>
<form id="form-GETapi-settings" data-method="GET" data-path="api/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings" onclick="tryItOut('GETapi-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings" onclick="cancelTryOut('GETapi-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings</code></b>
</p>
</form>
<h2>Get setting</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/settings/app" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/settings/app"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/settings/app',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (429):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Too Many Requests, Please Slow Down",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-settings--key-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings--key-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings--key-"></code></pre>
</div>
<div id="execution-error-GETapi-settings--key-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings--key-"></code></pre>
</div>
<form id="form-GETapi-settings--key-" data-method="GET" data-path="api/settings/{key}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings--key-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings--key-" onclick="tryItOut('GETapi-settings--key-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings--key-" onclick="cancelTryOut('GETapi-settings--key-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings--key-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/{key}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="GETapi-settings--key-" data-component="url" required  hidden>
<br>
The setting's key.
</p>
</form><h1>Social Auth</h1>
<h2>Get target URL</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/auth/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/placeat"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/auth/placeat',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-auth--provider-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-auth--provider-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth--provider-"></code></pre>
</div>
<div id="execution-error-GETapi-auth--provider-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth--provider-"></code></pre>
</div>
<form id="form-GETapi-auth--provider-" data-method="GET" data-path="api/auth/{provider}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-auth--provider-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-auth--provider-" onclick="tryItOut('GETapi-auth--provider-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-auth--provider-" onclick="cancelTryOut('GETapi-auth--provider-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-auth--provider-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/auth/{provider}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>provider</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="provider" data-endpoint="GETapi-auth--provider-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>Get user info</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/auth/qui/callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/auth/qui/callback"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/auth/qui/callback',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-auth--provider--callback" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-auth--provider--callback"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth--provider--callback"></code></pre>
</div>
<div id="execution-error-GETapi-auth--provider--callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth--provider--callback"></code></pre>
</div>
<form id="form-GETapi-auth--provider--callback" data-method="GET" data-path="api/auth/{provider}/callback" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-auth--provider--callback', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-auth--provider--callback" onclick="tryItOut('GETapi-auth--provider--callback');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-auth--provider--callback" onclick="cancelTryOut('GETapi-auth--provider--callback');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-auth--provider--callback" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/auth/{provider}/callback</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>provider</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="provider" data-endpoint="GETapi-auth--provider--callback" data-component="url" required  hidden>
<br>

</p>
</form><h1>Threads</h1>
<h2>Store thread</h2>
<p>Start a conversation. Creation of a new thread.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
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
    -F "filename=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpnUaLZd" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/threads',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'from_name',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'from_email',
                'contents' =&gt; 'john.doe@domain.tld'
            ],
            [
                'name' =&gt; 'from_phone',
                'contents' =&gt; 'ullam'
            ],
            [
                'name' =&gt; 'body',
                'contents' =&gt; 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.'
            ],
            [
                'name' =&gt; 'post_id',
                'contents' =&gt; '2'
            ],
            [
                'name' =&gt; 'captcha_key',
                'contents' =&gt; 'qui'
            ],
            [
                'name' =&gt; 'filename',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpnUaLZd', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List threads</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get all logged user's threads.
Filters:</p>
<ul>
<li>unread: Get the logged user's unread threads</li>
<li>started: Get the logged user's started threads</li>
<li>important: Get the logged user's make as important threads</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads?filter=unread&amp;embed=null&amp;perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/threads"
);

let params = {
    "filter": "unread",
    "embed": "null",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/threads',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'filter'=&gt; 'unread',
            'embed'=&gt; 'null',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/threads",
            "per_page": 2,
            "to": 2,
            "total": 35
        }
    }
}</code></pre>
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
<h2>Get thread</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get a thread (owned by the logged user) details</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads/8?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/threads/8"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/threads/8',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "id": 8,
        "post_id": "102",
        "subject": "Ford Focus for sale"
    }
}</code></pre>
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
<h2>Update thread</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://demo.laraclassifier.local/api/threads/sequi" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "body=Modi temporibus voluptas expedita voluptatibus voluptas veniam." \
    -F "filename=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phptQO4OO" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'https://demo.laraclassifier.local/api/threads/sequi',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'body',
                'contents' =&gt; 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.'
            ],
            [
                'name' =&gt; 'filename',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phptQO4OO', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
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
<h2>Delete thread(s)</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://demo.laraclassifier.local/api/threads/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://demo.laraclassifier.local/api/threads/ut',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
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
<h2>Bulk updates</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/threads/bulkUpdate/ut?type=ut" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/threads/bulkUpdate/ut"
);

let params = {
    "type": "ut",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/threads/bulkUpdate/ut',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'type'=&gt; 'ut',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
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
<h2>List messages</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get all thread's messages</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads/293/messages?embed=null&amp;sort=created_at&amp;perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/threads/293/messages"
);

let params = {
    "embed": "null",
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/threads/293/messages',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
            'sort'=&gt; 'created_at',
            'perPage'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                    "label": "&amp;laquo; Previous",
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
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "path": "http:\/\/localhost\/api\/threads\/293\/messages",
            "per_page": 2,
            "to": 2,
            "total": 21
        }
    }
}</code></pre>
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
<h2>Get message</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get a thread's message (owned by the logged user) details</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/threads/293/messages/3545?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/threads/293/messages/3545"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/threads/293/messages/3545',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'embed'=&gt; 'null',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "The thread message with ID: 3545 was not found.",
    "result": null,
    "error_code": 1
}</code></pre>
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
</form><h1>Users</h1>
<h2>List users</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users"
);

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/users',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthorized",
    "result": null,
    "error_code": 1
}</code></pre>
<div id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</div>
<div id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</div>
<form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users" onclick="tryItOut('GETapi-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users" onclick="cancelTryOut('GETapi-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users</code></b>
</p>
</form>
<h2>Get user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/users/3" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users/3"
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
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/users/3',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": null,
    "result": {
        "id": 3,
        "name": "User Demo",
        "username": null,
        "created_at_formatted": "Dec 25th, 2021 at 23:58",
        "photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg",
        "country_code": "US",
        "language_code": "en",
        "user_type_id": "2",
        "gender_id": "1",
        "photo": "avatars\/us\/3\/e69f9a84a9246120ced00e6e1196abc7.jpg",
        "about": "User Demo",
        "phone": "+1980877677",
        "phone_hidden": "0",
        "email": "user@demosite.com",
        "can_be_impersonate": null,
        "disable_comments": "1",
        "ip_addr": "32.130.184.40",
        "provider": null,
        "provider_id": null,
        "email_token": null,
        "phone_token": null,
        "verified_email": "1",
        "verified_phone": "1",
        "accept_terms": "1",
        "accept_marketing_offers": "0",
        "time_zone": null,
        "blocked": "0",
        "closed": "0",
        "last_activity": "2022-02-26T01:32:25.467998Z"
    }
}</code></pre>
<div id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-"></code></pre>
</div>
<form id="form-GETapi-users--id-" data-method="GET" data-path="api/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users--id-" onclick="tryItOut('GETapi-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users--id-" onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-users--id-" data-component="url" required  hidden>
<br>
The user's ID.
</p>
</form>
<h2>Store user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://demo.laraclassifier.local/api/users" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "country_code=US" \
    -F "language_code=en" \
    -F "user_type_id=1" \
    -F "gender_id=1" \
    -F "name=John Doe" \
    -F "phone=+17656766467" \
    -F "phone_hidden=" \
    -F "email=john.doe@domain.tld" \
    -F "username=john_doe" \
    -F "password=js!X07$z61hLA" \
    -F "password_confirmation=js!X07$z61hLA" \
    -F "disable_comments=1" \
    -F "ip_addr=ipsum" \
    -F "accept_terms=1" \
    -F "accept_marketing_offers=" \
    -F "time_zone=America/New_York" \
    -F "captcha_key=omnis" \
    -F "photo=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpqBrOIC" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=",
    "X-AppType": "docs",
};

const body = new FormData();
body.append('country_code', 'US');
body.append('language_code', 'en');
body.append('user_type_id', '1');
body.append('gender_id', '1');
body.append('name', 'John Doe');
body.append('phone', '+17656766467');
body.append('phone_hidden', '');
body.append('email', 'john.doe@domain.tld');
body.append('username', 'john_doe');
body.append('password', 'js!X07$z61hLA');
body.append('password_confirmation', 'js!X07$z61hLA');
body.append('disable_comments', '1');
body.append('ip_addr', 'ipsum');
body.append('accept_terms', '1');
body.append('accept_marketing_offers', '');
body.append('time_zone', 'America/New_York');
body.append('captcha_key', 'omnis');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://demo.laraclassifier.local/api/users',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'country_code',
                'contents' =&gt; 'US'
            ],
            [
                'name' =&gt; 'language_code',
                'contents' =&gt; 'en'
            ],
            [
                'name' =&gt; 'user_type_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'gender_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'phone',
                'contents' =&gt; '+17656766467'
            ],
            [
                'name' =&gt; 'phone_hidden',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'email',
                'contents' =&gt; 'john.doe@domain.tld'
            ],
            [
                'name' =&gt; 'username',
                'contents' =&gt; 'john_doe'
            ],
            [
                'name' =&gt; 'password',
                'contents' =&gt; 'js!X07$z61hLA'
            ],
            [
                'name' =&gt; 'password_confirmation',
                'contents' =&gt; 'js!X07$z61hLA'
            ],
            [
                'name' =&gt; 'disable_comments',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'ip_addr',
                'contents' =&gt; 'ipsum'
            ],
            [
                'name' =&gt; 'accept_terms',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'accept_marketing_offers',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'time_zone',
                'contents' =&gt; 'America/New_York'
            ],
            [
                'name' =&gt; 'captcha_key',
                'contents' =&gt; 'omnis'
            ],
            [
                'name' =&gt; 'photo',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpqBrOIC', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "message": "Your account has been created.",
    "result": {
        "id": 3329,
        "name": "John Doe",
        "username": "john_doe",
        "created_at_formatted": "Feb 25th, 2022 at 20:32",
        "photo_url": "http:\/\/demo.laraclassifier.local\/images\/user.jpg",
        "country_code": "US",
        "language_code": "en",
        "user_type_id": 1,
        "gender_id": 1,
        "photo": null,
        "about": null,
        "phone": "+17656766467",
        "phone_hidden": false,
        "email": "john.doe@domain.tld",
        "can_be_impersonate": null,
        "disable_comments": true,
        "ip_addr": "ipsum",
        "provider": null,
        "provider_id": null,
        "email_token": "b46529a40c8799fe72eb69784e7122d3",
        "phone_token": null,
        "verified_email": 0,
        "verified_phone": 1,
        "accept_terms": true,
        "accept_marketing_offers": false,
        "time_zone": "America\/New_York",
        "blocked": null,
        "closed": null,
        "last_activity": "2022-02-26T01:32:26.368973Z"
    },
    "extra": {
        "sendEmailVerification": {
            "success": true,
            "emailVerificationSent": true,
            "message": "An activation link has been sent to you to verify your email address."
        }
    }
}</code></pre>
<div id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"></code></pre>
</div>
<div id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users"></code></pre>
</div>
<form id="form-POSTapi-users" data-method="POST" data-path="api/users" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-users" onclick="tryItOut('POSTapi-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-users" onclick="cancelTryOut('POSTapi-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>language_code</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language_code" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The code of the user's spoken language.
</p>
<p>
<b><code>user_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_type_id" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The ID of user type.
</p>
<p>
<b><code>gender_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="gender_id" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The ID of gender.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>
The name of the user.
</p>
<p>
<b><code>photo</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="photo" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The file of user photo.
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The mobile phone number of the user (required if email doesn't exist).
</p>
<p>
<b><code>phone_hidden</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="phone_hidden" value="true" data-endpoint="POSTapi-users" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="phone_hidden" value="false" data-endpoint="POSTapi-users" data-component="body" ><code>false</code></label>
<br>
Field to hide or show the user phone number in public.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The user's email address (required if mobile phone number doesn't exist).
</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The user's username.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>
The user's password.
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>
The confirmation of the user's password.
</p>
<p>
<b><code>disable_comments</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="disable_comments" value="true" data-endpoint="POSTapi-users" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="disable_comments" value="false" data-endpoint="POSTapi-users" data-component="body" ><code>false</code></label>
<br>
Field to disable or enable comments on the user's listings.
</p>
<p>
<b><code>ip_addr</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ip_addr" data-endpoint="POSTapi-users" data-component="body" required  hidden>
<br>
The user's IP address.
</p>
<p>
<b><code>accept_terms</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="accept_terms" value="true" data-endpoint="POSTapi-users" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="accept_terms" value="false" data-endpoint="POSTapi-users" data-component="body" required ><code>false</code></label>
<br>
Field to allow user to accept or not the website terms.
</p>
<p>
<b><code>accept_marketing_offers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="accept_marketing_offers" value="true" data-endpoint="POSTapi-users" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-users" hidden><input type="radio" name="accept_marketing_offers" value="false" data-endpoint="POSTapi-users" data-component="body" ><code>false</code></label>
<br>
Field to allow user to accept or not marketing offers sending.
</p>
<p>
<b><code>time_zone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="time_zone" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
The user's time zone.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-users" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>
<h2>Update user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://demo.laraclassifier.local/api/users/officiis" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs" \
    -F "country_code=US" \
    -F "language_code=en" \
    -F "user_type_id=1" \
    -F "gender_id=1" \
    -F "name=John Doe" \
    -F "phone=+17656766467" \
    -F "phone_hidden=" \
    -F "email=john.doe@domain.tld" \
    -F "username=john_doe" \
    -F "password=js!X07$z61hLA" \
    -F "password_confirmation=js!X07$z61hLA" \
    -F "disable_comments=1" \
    -F "ip_addr=ipsam" \
    -F "accept_terms=1" \
    -F "accept_marketing_offers=" \
    -F "time_zone=America/New_York" \
    -F "photo=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpOx5hX5" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users/officiis"
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
body.append('country_code', 'US');
body.append('language_code', 'en');
body.append('user_type_id', '1');
body.append('gender_id', '1');
body.append('name', 'John Doe');
body.append('phone', '+17656766467');
body.append('phone_hidden', '');
body.append('email', 'john.doe@domain.tld');
body.append('username', 'john_doe');
body.append('password', 'js!X07$z61hLA');
body.append('password_confirmation', 'js!X07$z61hLA');
body.append('disable_comments', '1');
body.append('ip_addr', 'ipsam');
body.append('accept_terms', '1');
body.append('accept_marketing_offers', '');
body.append('time_zone', 'America/New_York');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'https://demo.laraclassifier.local/api/users/officiis',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'country_code',
                'contents' =&gt; 'US'
            ],
            [
                'name' =&gt; 'language_code',
                'contents' =&gt; 'en'
            ],
            [
                'name' =&gt; 'user_type_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'gender_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'John Doe'
            ],
            [
                'name' =&gt; 'phone',
                'contents' =&gt; '+17656766467'
            ],
            [
                'name' =&gt; 'phone_hidden',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'email',
                'contents' =&gt; 'john.doe@domain.tld'
            ],
            [
                'name' =&gt; 'username',
                'contents' =&gt; 'john_doe'
            ],
            [
                'name' =&gt; 'password',
                'contents' =&gt; 'js!X07$z61hLA'
            ],
            [
                'name' =&gt; 'password_confirmation',
                'contents' =&gt; 'js!X07$z61hLA'
            ],
            [
                'name' =&gt; 'disable_comments',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'ip_addr',
                'contents' =&gt; 'ipsam'
            ],
            [
                'name' =&gt; 'accept_terms',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'accept_marketing_offers',
                'contents' =&gt; ''
            ],
            [
                'name' =&gt; 'time_zone',
                'contents' =&gt; 'America/New_York'
            ],
            [
                'name' =&gt; 'photo',
                'contents' =&gt; fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpOx5hX5', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-"></code></pre>
</div>
<form id="form-PUTapi-users--id-" data-method="PUT" data-path="api/users/{id}" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-users--id-" onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-users--id-" onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/users/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-users--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>country_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country_code" data-endpoint="PUTapi-users--id-" data-component="body" required  hidden>
<br>
The code of the user's country.
</p>
<p>
<b><code>language_code</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language_code" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The code of the user's spoken language.
</p>
<p>
<b><code>user_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_type_id" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The ID of user type.
</p>
<p>
<b><code>gender_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="gender_id" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The ID of gender.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-users--id-" data-component="body" required  hidden>
<br>
The name of the user.
</p>
<p>
<b><code>photo</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="photo" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The file of user photo.
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The mobile phone number of the user (required if email doesn't exist).
</p>
<p>
<b><code>phone_hidden</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="phone_hidden" value="true" data-endpoint="PUTapi-users--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="phone_hidden" value="false" data-endpoint="PUTapi-users--id-" data-component="body" ><code>false</code></label>
<br>
Field to hide or show the user phone number in public.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-users--id-" data-component="body" required  hidden>
<br>
The user's email address.
</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="username" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The user's username.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="PUTapi-users--id-" data-component="body" required  hidden>
<br>
The user's password.
</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="PUTapi-users--id-" data-component="body" required  hidden>
<br>
The confirmation of the user's password.
</p>
<p>
<b><code>disable_comments</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="disable_comments" value="true" data-endpoint="PUTapi-users--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="disable_comments" value="false" data-endpoint="PUTapi-users--id-" data-component="body" ><code>false</code></label>
<br>
Field to disable or enable comments on the user's listings.
</p>
<p>
<b><code>ip_addr</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ip_addr" data-endpoint="PUTapi-users--id-" data-component="body" required  hidden>
<br>
The user's IP address.
</p>
<p>
<b><code>accept_terms</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="accept_terms" value="true" data-endpoint="PUTapi-users--id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="accept_terms" value="false" data-endpoint="PUTapi-users--id-" data-component="body" required ><code>false</code></label>
<br>
Field to allow user to accept or not the website terms.
</p>
<p>
<b><code>accept_marketing_offers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="accept_marketing_offers" value="true" data-endpoint="PUTapi-users--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-users--id-" hidden><input type="radio" name="accept_marketing_offers" value="false" data-endpoint="PUTapi-users--id-" data-component="body" ><code>false</code></label>
<br>
Field to allow user to accept or not marketing offers sending.
</p>
<p>
<b><code>time_zone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="time_zone" data-endpoint="PUTapi-users--id-" data-component="body"  hidden>
<br>
The user's time zone.
</p>

</form>
<h2>Delete user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://demo.laraclassifier.local/api/users/cupiditate" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users/cupiditate"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://demo.laraclassifier.local/api/users/cupiditate',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-"></code></pre>
</div>
<form id="form-DELETEapi-users--id-" data-method="DELETE" data-path="api/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-users--id-" onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-users--id-" onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/users/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>Email: Re-send link</h2>
<p>Re-send email verification link to the user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/users/voluptas/verify/resend/email?entitySlug=users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users/voluptas/verify/resend/email"
);

let params = {
    "entitySlug": "users",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/users/voluptas/verify/resend/email',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'entitySlug'=&gt; 'users',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-users--id--verify-resend-email" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users--id--verify-resend-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id--verify-resend-email"></code></pre>
</div>
<div id="execution-error-GETapi-users--id--verify-resend-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id--verify-resend-email"></code></pre>
</div>
<form id="form-GETapi-users--id--verify-resend-email" data-method="GET" data-path="api/users/{id}/verify/resend/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id--verify-resend-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users--id--verify-resend-email" onclick="tryItOut('GETapi-users--id--verify-resend-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users--id--verify-resend-email" onclick="cancelTryOut('GETapi-users--id--verify-resend-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users--id--verify-resend-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/{id}/verify/resend/email</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-users--id--verify-resend-email" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>entitySlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="entitySlug" data-endpoint="GETapi-users--id--verify-resend-email" data-component="query"  hidden>
<br>
The slug of the entity to verify ('users' or 'posts').
</p>
</form>
<h2>SMS: Re-send code</h2>
<p>Re-send mobile phone verification token by SMS</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/users/voluptatem/verify/resend/sms?entitySlug=users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users/voluptatem/verify/resend/sms"
);

let params = {
    "entitySlug": "users",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/users/voluptatem/verify/resend/sms',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'entitySlug'=&gt; 'users',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-users--id--verify-resend-sms" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users--id--verify-resend-sms"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id--verify-resend-sms"></code></pre>
</div>
<div id="execution-error-GETapi-users--id--verify-resend-sms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id--verify-resend-sms"></code></pre>
</div>
<form id="form-GETapi-users--id--verify-resend-sms" data-method="GET" data-path="api/users/{id}/verify/resend/sms" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id--verify-resend-sms', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users--id--verify-resend-sms" onclick="tryItOut('GETapi-users--id--verify-resend-sms');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users--id--verify-resend-sms" onclick="cancelTryOut('GETapi-users--id--verify-resend-sms');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users--id--verify-resend-sms" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/{id}/verify/resend/sms</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-users--id--verify-resend-sms" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>entitySlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="entitySlug" data-endpoint="GETapi-users--id--verify-resend-sms" data-component="query"  hidden>
<br>
The slug of the entity to verify ('users' or 'posts').
</p>
</form>
<h2>Verification</h2>
<p>Verify the user's email address or mobile phone number</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://demo.laraclassifier.local/api/users/verify/ex/ipsa?entitySlug=users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=" \
    -H "X-AppType: docs"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://demo.laraclassifier.local/api/users/verify/ex/ipsa"
);

let params = {
    "entitySlug": "users",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://demo.laraclassifier.local/api/users/verify/ex/ipsa',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
            'Content-Language' =&gt; 'en',
            'X-AppApiToken' =&gt; 'Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=',
            'X-AppType' =&gt; 'docs',
        ],
        'query' =&gt; [
            'entitySlug'=&gt; 'users',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Page Not Found."
}</code></pre>
<div id="execution-results-GETapi-users-verify--field---token--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users-verify--field---token--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-verify--field---token--"></code></pre>
</div>
<div id="execution-error-GETapi-users-verify--field---token--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-verify--field---token--"></code></pre>
</div>
<form id="form-GETapi-users-verify--field---token--" data-method="GET" data-path="api/users/verify/{field}/{token?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"Uk1DSFlVUVhIRXpHbWt6d2pIZjlPTG15akRPN2tJTUs=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users-verify--field---token--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users-verify--field---token--" onclick="tryItOut('GETapi-users-verify--field---token--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users-verify--field---token--" onclick="cancelTryOut('GETapi-users-verify--field---token--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users-verify--field---token--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/verify/{field}/{token?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>field</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="field" data-endpoint="GETapi-users-verify--field---token--" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="token" data-endpoint="GETapi-users-verify--field---token--" data-component="url"  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>entitySlug</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="entitySlug" data-endpoint="GETapi-users-verify--field---token--" data-component="query"  hidden>
<br>
The slug of the entity to verify ('users' or 'posts').
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","php"];
        setupLanguages(languages);
    });
</script>
</body>
</html>