<?php
/**
 * EcoSupplierApi
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
 * EcoSupplierApi Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EcoSupplierApi
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
     * Operation getEcoSupplierCollection
     *
     * Retrieves the collection of EcoSupplierOutputDto resources.
     *
     * @param  string $siteId siteId (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\GetEcoSupplierCollection200Response
     */
    public function getEcoSupplierCollection($siteId, $page = 1, $itemsPerPage = 30)
    {
        list($response) = $this->getEcoSupplierCollectionWithHttpInfo($siteId, $page, $itemsPerPage);
        return $response;
    }

    /**
     * Operation getEcoSupplierCollectionWithHttpInfo
     *
     * Retrieves the collection of EcoSupplierOutputDto resources.
     *
     * @param  string $siteId (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\GetEcoSupplierCollection200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEcoSupplierCollectionWithHttpInfo($siteId, $page = 1, $itemsPerPage = 30)
    {
        $request = $this->getEcoSupplierCollectionRequest($siteId, $page, $itemsPerPage);

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
                    if ('\EmonsiteApi\Models\GetEcoSupplierCollection200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EmonsiteApi\Models\GetEcoSupplierCollection200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EmonsiteApi\Models\GetEcoSupplierCollection200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EmonsiteApi\Models\GetEcoSupplierCollection200Response';
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
                        '\EmonsiteApi\Models\GetEcoSupplierCollection200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEcoSupplierCollectionAsync
     *
     * Retrieves the collection of EcoSupplierOutputDto resources.
     *
     * @param  string $siteId (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoSupplierCollectionAsync($siteId, $page = 1, $itemsPerPage = 30)
    {
        return $this->getEcoSupplierCollectionAsyncWithHttpInfo($siteId, $page, $itemsPerPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEcoSupplierCollectionAsyncWithHttpInfo
     *
     * Retrieves the collection of EcoSupplierOutputDto resources.
     *
     * @param  string $siteId (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoSupplierCollectionAsyncWithHttpInfo($siteId, $page = 1, $itemsPerPage = 30)
    {
        $returnType = '\EmonsiteApi\Models\GetEcoSupplierCollection200Response';
        $request = $this->getEcoSupplierCollectionRequest($siteId, $page, $itemsPerPage);

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
     * Create request for operation 'getEcoSupplierCollection'
     *
     * @param  string $siteId (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEcoSupplierCollectionRequest($siteId, $page = 1, $itemsPerPage = 30)
    {
        // verify the required parameter 'siteId' is set
        if ($siteId === null || (is_array($siteId) && count($siteId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteId when calling getEcoSupplierCollection'
            );
        }
        if ($itemsPerPage !== null && $itemsPerPage < 0) {
            throw new \InvalidArgumentException('invalid value for "$itemsPerPage" when calling EcoSupplierApi.getEcoSupplierCollection, must be bigger than or equal to 0.');
        }


        $resourcePath = '/eco_suppliers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $siteId,
            'site_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $itemsPerPage,
            'itemsPerPage', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
     * Operation getEcoSupplierItem
     *
     * Retrieves a EcoSupplierOutputDto resource.
     *
     * @param  string $id id (required)
     * @param  string $siteId siteId (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld
     */
    public function getEcoSupplierItem($id, $siteId)
    {
        list($response) = $this->getEcoSupplierItemWithHttpInfo($id, $siteId);
        return $response;
    }

    /**
     * Operation getEcoSupplierItemWithHttpInfo
     *
     * Retrieves a EcoSupplierOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEcoSupplierItemWithHttpInfo($id, $siteId)
    {
        $request = $this->getEcoSupplierItemRequest($id, $siteId);

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
                    if ('\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld';
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
                        '\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEcoSupplierItemAsync
     *
     * Retrieves a EcoSupplierOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoSupplierItemAsync($id, $siteId)
    {
        return $this->getEcoSupplierItemAsyncWithHttpInfo($id, $siteId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEcoSupplierItemAsyncWithHttpInfo
     *
     * Retrieves a EcoSupplierOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoSupplierItemAsyncWithHttpInfo($id, $siteId)
    {
        $returnType = '\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld';
        $request = $this->getEcoSupplierItemRequest($id, $siteId);

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
     * Create request for operation 'getEcoSupplierItem'
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEcoSupplierItemRequest($id, $siteId)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getEcoSupplierItem'
            );
        }
        // verify the required parameter 'siteId' is set
        if ($siteId === null || (is_array($siteId) && count($siteId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteId when calling getEcoSupplierItem'
            );
        }

        $resourcePath = '/eco_suppliers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $siteId,
            'site_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
