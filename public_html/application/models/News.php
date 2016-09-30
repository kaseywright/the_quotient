<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getBingNews()
    {
        /****
        * Simple PHP application for using the Bing Search API
        */
        $acctKey = 'i73LuKifBDWlb+viil/mir8T6Eu/DfFqSYAQG6KY1Ig';
        $rootUri = 'https://api.datamarket.azure.com/Bing/Search';
        // Read the contents of the .html file into a string.
        $contents = '';

        // Encode the query and the single quotes that must surround it.
        $query = urlencode("'{Clancy The Division}'");
        $limit = 10;
        // Get the selected service operation (Web or Image).
        $serviceOp = 'News';
        // Construct the full URI for the query.
        $requestUri = "https://api.datamarket.azure.com/Bing/Search/News?\$format=json&Query=$query&\$top=$limit";

        // Encode the credentials and create the stream context.
        $auth = base64_encode("$acctKey:$acctKey");
        $data = array(
            'http' => array(
                'request_fulluri' => true,
                // ignore_errors can help debug – remove for production. This option added in PHP 5.2.10
                'ignore_errors' => true,
                'header' => "Authorization: Basic $auth"
            )
        );
        $context = stream_context_create($data);
        // Get the response from Bing.
        $response = file_get_contents($requestUri, 0, $context);

        // Decode the response.
        $jsonObj = json_decode($response);

        $resultStr = '';
        // Parse each result according to its metadata type.
        foreach ($jsonObj->d->results as $value) {
            switch ($value->__metadata->type) {
                case 'NewsResult':
                    $resultStr .= "<div class='list-group'><a class='list-group-item' target='_blank' href=\"{$value->Url}\"><h3 class='list-group-item-heading'>{$value->Title}</h3><p class='list-group-item-text'>{$value->Description}</p></a></div>";
                    break;
                case 'WebResult':
                    $resultStr .= "<div class='list-group'><a class='list-group-item' target='_blank' href=\"{$value->Url}\"><h3 class='list-group-item-heading'>{$value->Title}</h3><p class='list-group-item-text'>{$value->Description}</p></a></div>";
                    break;
                case 'ImageResult':
                    $resultStr .=  "<h4>{$value->Title} ({$value->Width}x{$value->Height}) " .
                    "{$value->FileSize} bytes)</h4>" . "<a href=\"{$value->MediaUrl}\">" .
                    "<img src=\"{$value->Thumbnail->MediaUrl}\"></a><br />";
                    break;
            }
        } // Substitute the results placeholder. Ready to go.
        //$contents = str_replace('{RESULTS}', $resultStr, $contents);

        return $resultStr;
    }
}
