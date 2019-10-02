<?php

function subscribe($email)
{
    $options = getSubscriptionOptions($email);


    $response = makeRequest("post", "lists/".parse_ini_file('config.ini')['list_id']."/members", $options);

    return $response;
}

function getSubscriptionOptions($email)
{
    return [
        'email_address' => $email,
        'status' => 'subscribed',
        'email_type' => 'html',
    ];
}

function makeRequest($http_verb, $method, $args = array())
{
    $url = 'https://us3.api.mailchimp.com/3.0/' . $method;

    $httpHeader = array(
        'Accept: application/vnd.api+json',
        'Content-Type: application/vnd.api+json',
        'Authorization: apikey ' . parse_ini_file('config.ini')['app_key']
    );

    if (isset($args["language"])) {
        $httpHeader[] = "Accept-Language: " . $args["language"];
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeader);
    curl_setopt($ch, CURLOPT_USERAGENT, 'DrewM/MailChimp-API/3.0 (github.com/drewm/mailchimp-api)');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);

    switch ($http_verb) {
        case 'post':
            curl_setopt($ch, CURLOPT_POST, true);
            $encoded = json_encode($args);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
            break;

        case 'get':
            $query = http_build_query($args, '', '&');
            curl_setopt($ch, CURLOPT_URL, $url . '?' . $query);
            break;

        case 'delete':
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            break;

        case 'patch':
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
            attachRequestPayload($ch, $args);
            break;

        case 'put':
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            attachRequestPayload($ch, $args);
            break;
    }


    $responseContent = curl_exec($ch);
    if ($responseContent == false){
        var_dump(curl_error($ch), curl_errno($ch)); die;
    } else {
        var_dump($responseContent);
    }
    $response['headers'] = curl_getinfo($ch);
    $response = setResponseState($response, $responseContent, $ch);
    $formattedResponse = formatResponse($response);
    var_dump($response);

    curl_close($ch);

    $isSuccess = determineSuccess($response, $formattedResponse, 10);

    return is_array($formattedResponse) ? $formattedResponse : $isSuccess;
}

function attachRequestPayload(&$ch, $data)
{
    $encoded = json_encode($data);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
}

function setResponseState($response, $responseContent, $ch)
{
    if ($responseContent !== false) {

        $headerSize = $response['headers']['header_size'];

        $response['httpHeaders'] = getHeadersAsArray(substr($responseContent, 0, $headerSize));
        $response['body'] = substr($responseContent, $headerSize);

    }

    return $response;
}

function getHeadersAsArray($headersAsString)
{
    $headers = array();

    foreach (explode("\r\n", $headersAsString) as $i => $line) {
        if ($i === 0) { // HTTP code
            continue;
        }

        $line = trim($line);
        if (empty($line)) {
            continue;
        }

        list($key, $value) = explode(': ', $line);

        if ($key == 'Link') {
            $value = array_merge(
                array('_raw' => $value),
                getLinkHeaderAsArray($value)
            );
        }

        $headers[$key] = $value;
    }

    return $headers;
}

function formatResponse($response)
{
    if (!empty($response['body'])) {
        return json_decode($response['body'], true);
    }

    return false;
}

function determineSuccess($response, $formattedResponse, $timeout)
{
    $status = findHTTPStatus($response, $formattedResponse);

    if ($status >= 200 && $status <= 299) {
        return true;
    }

    if (isset($formattedResponse['detail'])) {
        return false;
    }

    if ($timeout > 0 && $response['headers'] && $response['headers']['total_time'] >= $timeout) {
        return false;
    }

    return false;
}

function findHTTPStatus($response, $formattedResponse)
{
    if (!empty($response['headers']) && isset($response['headers']['http_code'])) {
        return (int)$response['headers']['http_code'];
    }

    if (!empty($response['body']) && isset($formattedResponse['status'])) {
        return (int)$formattedResponse['status'];
    }

    return 418;
}

function getLinkHeaderAsArray($linkHeaderAsString)
{
    $urls = array();

    if (preg_match_all('/<(.*?)>\s*;\s*rel="(.*?)"\s*/', $linkHeaderAsString, $matches)) {
        foreach ($matches[2] as $i => $relName) {
            $urls[$relName] = $matches[1][$i];
        }
    }

    return $urls;
}

