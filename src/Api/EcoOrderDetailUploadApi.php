<?php
/**
 * EcoOrderDetailUploadApi
 * PHP version 7.4
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API E-monsite
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: alpha
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EmonsiteApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EmonsiteApi\ApiException;
use EmonsiteApi\Configuration;
use EmonsiteApi\HeaderSelector;
use EmonsiteApi\ObjectSerializer;

/**
 * EcoOrderDetailUploadApi Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EcoOrderDetailUploadApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation downloadEcoOrderDetailUploadItem
     *
     * download the file
     *
     * @param   $UNKNOWN_PARAMETER_NAME UNKNOWN_PARAMETER_NAME (required)
     * @param   $UNKNOWN_PARAMETER_NAME2 UNKNOWN_PARAMETER_NAME2 (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\EcoOrderDetailUploadJsonld
     */
    public function downloadEcoOrderDetailUploadItem($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
    {
        list($response) = $this->downloadEcoOrderDetailUploadItemWithHttpInfo($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2);
        return $response;
    }

    /**
     * Operation downloadEcoOrderDetailUploadItemWithHttpInfo
     *
     * download the file
     *
     * @param   $UNKNOWN_PARAMETER_NAME (required)
     * @param   $UNKNOWN_PARAMETER_NAME2 (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\EcoOrderDetailUploadJsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadEcoOrderDetailUploadItemWithHttpInfo($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
    {
        $request = $this->downloadEcoOrderDetailUploadItemRequest($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\EmonsiteApi\Models\EcoOrderDetailUploadJsonld' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EmonsiteApi\Models\EcoOrderDetailUploadJsonld' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EmonsiteApi\Models\EcoOrderDetailUploadJsonld', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EmonsiteApi\Models\EcoOrderDetailUploadJsonld';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EmonsiteApi\Models\EcoOrderDetailUploadJsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation downloadEcoOrderDetailUploadItemAsync
     *
     * download the file
     *
     * @param   $UNKNOWN_PARAMETER_NAME (required)
     * @param   $UNKNOWN_PARAMETER_NAME2 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadEcoOrderDetailUploadItemAsync($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
    {
        return $this->downloadEcoOrderDetailUploadItemAsyncWithHttpInfo($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadEcoOrderDetailUploadItemAsyncWithHttpInfo
     *
     * download the file
     *
     * @param   $UNKNOWN_PARAMETER_NAME (required)
     * @param   $UNKNOWN_PARAMETER_NAME2 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadEcoOrderDetailUploadItemAsyncWithHttpInfo($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
    {
        $returnType = '\EmonsiteApi\Models\EcoOrderDetailUploadJsonld';
        $request = $this->downloadEcoOrderDetailUploadItemRequest($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'downloadEcoOrderDetailUploadItem'
     *
     * @param   $UNKNOWN_PARAMETER_NAME (required)
     * @param   $UNKNOWN_PARAMETER_NAME2 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function downloadEcoOrderDetailUploadItemRequest($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
    {
        // verify the required parameter 'UNKNOWN_PARAMETER_NAME' is set
        if ($UNKNOWN_PARAMETER_NAME === null || (is_array($UNKNOWN_PARAMETER_NAME) && count($UNKNOWN_PARAMETER_NAME) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UNKNOWN_PARAMETER_NAME when calling downloadEcoOrderDetailUploadItem'
            );
        }
        // verify the required parameter 'UNKNOWN_PARAMETER_NAME2' is set
        if ($UNKNOWN_PARAMETER_NAME2 === null || (is_array($UNKNOWN_PARAMETER_NAME2) && count($UNKNOWN_PARAMETER_NAME2) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UNKNOWN_PARAMETER_NAME2 when calling downloadEcoOrderDetailUploadItem'
            );
        }

        $resourcePath = '/eco_order_detail_uploads/{id}/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $UNKNOWN_PARAMETER_NAME2,
            'site_id', // param base name
            '', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);


        // path params
        if ($UNKNOWN_PARAMETER_NAME !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($UNKNOWN_PARAMETER_NAME),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
