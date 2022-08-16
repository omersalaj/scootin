<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Scootin</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../docs/css/theme-default.style.css" media="screen">
    <link rel="stylesheet" href="../docs/css/theme-default.print.css" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="../docs/js/tryitout-3.35.0.js"></script>

    <script src="../docs/js/theme-default-3.35.0.js"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="../docs/images/navbar.png" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-login">
                        <a href="#endpoints-POSTapi-v1-login">POST api/v1/login</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-register">
                        <a href="#endpoints-POSTapi-v1-register">POST api/v1/register</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-scooters-search--name-">
                        <a href="#endpoints-GETapi-v1-scooters-search--name-">Search the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-scooters">
                        <a href="#endpoints-GETapi-v1-scooters">GET api/v1/scooters</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-scooters--id-">
                        <a href="#endpoints-GETapi-v1-scooters--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-scooters">
                        <a href="#endpoints-POSTapi-v1-scooters">POST api/v1/scooters</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-scooters--id-">
                        <a href="#endpoints-PUTapi-v1-scooters--id-">PUT api/v1/scooters/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-scooters--id-">
                        <a href="#endpoints-DELETEapi-v1-scooters--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-user">
                        <a href="#endpoints-GETapi-v1-user">GET api/v1/user</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="../docs/collection.json">View Postman collection</a></li>
                            <li><a href="../docs/openapi.yaml">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: August 6 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Scootin API Documetation</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://127.0.0.1:8000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-POSTapi-v1-login">POST api/v1/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/v1/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"declan.terry@example.com\",
    \"password\": \"incidunt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "declan.terry@example.com",
    "password": "incidunt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
</span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-login"
               value="declan.terry@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-login"
               value="incidunt"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POSTapi-v1-register">POST api/v1/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/v1/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"quis\",
    \"email\": \"imertz@example.com\",
    \"password\": \"libero\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quis",
    "email": "imertz@example.com",
    "password": "libero"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
</span>
<span id="execution-results-POSTapi-v1-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-register"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-register"></code></pre>
</span>
<form id="form-POSTapi-v1-register" data-method="POST"
      data-path="api/v1/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-register"
                    onclick="tryItOut('POSTapi-v1-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-register"
                    onclick="cancelTryOut('POSTapi-v1-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-register"
               value="quis"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-register"
               value="imertz@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-register"
               value="libero"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-v1-scooters-search--name-">Search the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-scooters-search--name-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/scooters/search/harum" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/scooters/search/harum"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-scooters-search--name-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-scooters-search--name-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-scooters-search--name-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-scooters-search--name-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-scooters-search--name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-scooters-search--name-"></code></pre>
</span>
<form id="form-GETapi-v1-scooters-search--name-" data-method="GET"
      data-path="api/v1/scooters/search/{name}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-scooters-search--name-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-scooters-search--name-"
                    onclick="tryItOut('GETapi-v1-scooters-search--name-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-scooters-search--name-"
                    onclick="cancelTryOut('GETapi-v1-scooters-search--name-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-scooters-search--name-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/scooters/search/{name}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-v1-scooters-search--name-"
               value="harum"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-scooters">GET api/v1/scooters</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-scooters">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/scooters" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/scooters"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-scooters">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;uuid&quot;: &quot;6cf1bac8-d200-4652-9bad-80d83ee2494f&quot;,
        &quot;name&quot;: &quot;SCT Alberto&quot;,
        &quot;color&quot;: &quot;#003388&quot;,
        &quot;description&quot;: &quot;Eaque sint sed dolores dignissimos. Quod quasi et ut quo fugit vero. Assumenda illum unde non inventore eum. Voluptatem in quia autem nesciunt quo praesentium.&quot;,
        &quot;created_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;distance_traveled&quot;: 753,
        &quot;latest_point&quot;: {
            &quot;status&quot;: &quot;occupied&quot;,
            &quot;lat&quot;: -50.862385,
            &quot;lng&quot;: 28.139493,
            &quot;created_at&quot;: &quot;2022-08-06T21:02:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;3 seconds ago&quot;
        }
    },
    {
        &quot;uuid&quot;: &quot;1ffaa226-7e16-481a-a352-ee643def8534&quot;,
        &quot;name&quot;: &quot;SCT Santino&quot;,
        &quot;color&quot;: &quot;#00eebb&quot;,
        &quot;description&quot;: &quot;Neque impedit nisi accusamus et rerum. Non est repudiandae sunt voluptatem aut rerum sed. Ullam autem cupiditate voluptatem esse quasi tempora mollitia cum.&quot;,
        &quot;created_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;distance_traveled&quot;: 753,
        &quot;latest_point&quot;: {
            &quot;status&quot;: &quot;free&quot;,
            &quot;lat&quot;: 41.94986,
            &quot;lng&quot;: -14.055182,
            &quot;created_at&quot;: &quot;2022-08-06T21:01:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;1 minute ago&quot;
        }
    },
    {
        &quot;uuid&quot;: &quot;b7af3e37-640c-4238-b2c4-fd4f5cb13bbf&quot;,
        &quot;name&quot;: &quot;SCT Jason&quot;,
        &quot;color&quot;: &quot;#001144&quot;,
        &quot;description&quot;: &quot;Quia vitae laborum voluptas. Aliquid ullam quia et. Quae tempora expedita sit rerum recusandae dicta architecto. Et sunt reprehenderit et dignissimos.&quot;,
        &quot;created_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;distance_traveled&quot;: 677,
        &quot;latest_point&quot;: {
            &quot;status&quot;: &quot;free&quot;,
            &quot;lat&quot;: -32.989318,
            &quot;lng&quot;: 133.380298,
            &quot;created_at&quot;: &quot;2022-08-06T21:01:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;34 seconds ago&quot;
        }
    },
    {
        &quot;uuid&quot;: &quot;a0c966b2-509d-4ec0-b15b-bb1971cd9b9f&quot;,
        &quot;name&quot;: &quot;SCT Brock&quot;,
        &quot;color&quot;: &quot;#00cc11&quot;,
        &quot;description&quot;: &quot;Recusandae similique ex hic fugiat rerum. Perspiciatis provident qui aspernatur error reprehenderit. Et et voluptates quia aut repellendus et modi. Sapiente qui assumenda sint quis.&quot;,
        &quot;created_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;distance_traveled&quot;: 768,
        &quot;latest_point&quot;: {
            &quot;status&quot;: &quot;free&quot;,
            &quot;lat&quot;: -85.145891,
            &quot;lng&quot;: 129.65764,
            &quot;created_at&quot;: &quot;2022-08-06T21:01:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;52 seconds ago&quot;
        }
    },
    {
        &quot;uuid&quot;: &quot;4cb959d6-214d-4095-8d3e-00d2169579b7&quot;,
        &quot;name&quot;: &quot;SCT Eriberto&quot;,
        &quot;color&quot;: &quot;#007700&quot;,
        &quot;description&quot;: &quot;Facilis ut repudiandae exercitationem veritatis alias magni totam. Veniam id corrupti omnis in impedit vel. Et ut nobis voluptate. Est itaque quas dolorum voluptatum.&quot;,
        &quot;created_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;,
        &quot;distance_traveled&quot;: 694,
        &quot;latest_point&quot;: {
            &quot;status&quot;: &quot;free&quot;,
            &quot;lat&quot;: 45.350354,
            &quot;lng&quot;: 77.873309,
            &quot;created_at&quot;: &quot;2022-08-06T21:01:54.000000Z&quot;,
            &quot;updated_at&quot;: &quot;17 seconds ago&quot;
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-scooters" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-scooters"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-scooters"></code></pre>
</span>
<span id="execution-error-GETapi-v1-scooters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-scooters"></code></pre>
</span>
<form id="form-GETapi-v1-scooters" data-method="GET"
      data-path="api/v1/scooters"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-scooters', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-scooters"
                    onclick="tryItOut('GETapi-v1-scooters');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-scooters"
                    onclick="cancelTryOut('GETapi-v1-scooters');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-scooters" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/scooters</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-scooters--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-scooters--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/scooters/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/scooters/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-scooters--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;6cf1bac8-d200-4652-9bad-80d83ee2494f&quot;,
        &quot;type&quot;: &quot;App\\Http\\Resources\\ScooterResource&quot;,
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;SCT Alberto&quot;,
            &quot;color&quot;: &quot;#003388&quot;,
            &quot;description&quot;: &quot;Eaque sint sed dolores dignissimos. Quod quasi et ut quo fugit vero. Assumenda illum unde non inventore eum. Voluptatem in quia autem nesciunt quo praesentium.&quot;,
            &quot;updated_at&quot;: &quot;2022-08-06T20:35:20.000000Z&quot;
        },
        &quot;latest_point&quot;: {
            &quot;status&quot;: &quot;occupied&quot;,
            &quot;lat&quot;: -50.862385,
            &quot;lng&quot;: 28.139493,
            &quot;created_at&quot;: &quot;2022-08-06T21:02:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;3 seconds ago&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-scooters--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-scooters--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-scooters--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-scooters--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-scooters--id-"></code></pre>
</span>
<form id="form-GETapi-v1-scooters--id-" data-method="GET"
      data-path="api/v1/scooters/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-scooters--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-scooters--id-"
                    onclick="tryItOut('GETapi-v1-scooters--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-scooters--id-"
                    onclick="cancelTryOut('GETapi-v1-scooters--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-scooters--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/scooters/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-v1-scooters--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the scooter.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-v1-scooters">POST api/v1/scooters</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-scooters">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/v1/scooters" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"dauciidwxmiquffyeabxdukduohghddqkfmxpjvpdnszsprbfrlarftagqjymxxqwhxzktryvzzxkglfmgmxdowaerffdbpkbqpatgddtgybwqpidiigpsxkwvrwtquqduoujvcvucxirlzzbysdtmsirafkyindmcnmmlumffoduwgevbxrgnlyirxhi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/scooters"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dauciidwxmiquffyeabxdukduohghddqkfmxpjvpdnszsprbfrlarftagqjymxxqwhxzktryvzzxkglfmgmxdowaerffdbpkbqpatgddtgybwqpidiigpsxkwvrwtquqduoujvcvucxirlzzbysdtmsirafkyindmcnmmlumffoduwgevbxrgnlyirxhi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-scooters">
</span>
<span id="execution-results-POSTapi-v1-scooters" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-scooters"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-scooters"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-scooters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-scooters"></code></pre>
</span>
<form id="form-POSTapi-v1-scooters" data-method="POST"
      data-path="api/v1/scooters"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-scooters', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-scooters"
                    onclick="tryItOut('POSTapi-v1-scooters');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-scooters"
                    onclick="cancelTryOut('POSTapi-v1-scooters');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-scooters" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/scooters</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-scooters"
               value="dauciidwxmiquffyeabxdukduohghddqkfmxpjvpdnszsprbfrlarftagqjymxxqwhxzktryvzzxkglfmgmxdowaerffdbpkbqpatgddtgybwqpidiigpsxkwvrwtquqduoujvcvucxirlzzbysdtmsirafkyindmcnmmlumffoduwgevbxrgnlyirxhi"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>color</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="color"
               data-endpoint="POSTapi-v1-scooters"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-PUTapi-v1-scooters--id-">PUT api/v1/scooters/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-scooters--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://127.0.0.1:8000/api/v1/scooters/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/scooters/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-scooters--id-">
</span>
<span id="execution-results-PUTapi-v1-scooters--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-scooters--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-scooters--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-scooters--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-scooters--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-scooters--id-" data-method="PUT"
      data-path="api/v1/scooters/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-scooters--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-scooters--id-"
                    onclick="tryItOut('PUTapi-v1-scooters--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-scooters--id-"
                    onclick="cancelTryOut('PUTapi-v1-scooters--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-scooters--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/scooters/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-v1-scooters--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the scooter.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-v1-scooters--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-scooters--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://127.0.0.1:8000/api/v1/scooters/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/scooters/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-scooters--id-">
</span>
<span id="execution-results-DELETEapi-v1-scooters--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-scooters--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-scooters--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-scooters--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-scooters--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-scooters--id-" data-method="DELETE"
      data-path="api/v1/scooters/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-scooters--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-scooters--id-"
                    onclick="tryItOut('DELETEapi-v1-scooters--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-scooters--id-"
                    onclick="cancelTryOut('DELETEapi-v1-scooters--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-scooters--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/scooters/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-v1-scooters--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the scooter.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-user">GET api/v1/user</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user"></code></pre>
</span>
<form id="form-GETapi-v1-user" data-method="GET"
      data-path="api/v1/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user"
                    onclick="tryItOut('GETapi-v1-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user"
                    onclick="cancelTryOut('GETapi-v1-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
