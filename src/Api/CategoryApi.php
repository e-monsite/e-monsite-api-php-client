<?php
/**
 * CategoryApi
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
 * CategoryApi Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryApi
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
     * Operation getCategoryCollection
     *
     * Retrieves the collection of CategoryOutputDto resources.
     *
     * @param  string $siteId siteId (required)
     * @param  string $modelId modelId (optional)
     * @param  string[] $modelId2 modelId2 (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\GetCategoryCollection200Response
     */
    public function getCategoryCollection($siteId, $modelId = null, $modelId2 = null, $page = 1, $itemsPerPage = 30)
    {
        list($response) = $this->getCategoryCollectionWithHttpInfo($siteId, $modelId, $modelId2, $page, $itemsPerPage);
        return $response;
    }

    /**
     * Operation getCategoryCollectionWithHttpInfo
     *
     * Retrieves the collection of CategoryOutputDto resources.
     *
     * @param  string $siteId (required)
     * @param  string $modelId (optional)
     * @param  string[] $modelId2 (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\GetCategoryCollection200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryCollectionWithHttpInfo($siteId, $modelId = null, $modelId2 = null, $page = 1, $itemsPerPage = 30)
    {
        $request = $this->getCategoryCollectionRequest($siteId, $modelId, $modelId2, $page, $itemsPerPage);

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
                    if ('\EmonsiteApi\Models\GetCategoryCollection200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EmonsiteApi\Models\GetCategoryCollection200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EmonsiteApi\Models\GetCategoryCollection200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EmonsiteApi\Models\GetCategoryCollection200Response';
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
                        '\EmonsiteApi\Models\GetCategoryCollection200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCategoryCollectionAsync
     *
     * Retrieves the collection of CategoryOutputDto resources.
     *
     * @param  string $siteId (required)
     * @param  string $modelId (optional)
     * @param  string[] $modelId2 (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryCollectionAsync($siteId, $modelId = null, $modelId2 = null, $page = 1, $itemsPerPage = 30)
    {
        return $this->getCategoryCollectionAsyncWithHttpInfo($siteId, $modelId, $modelId2, $page, $itemsPerPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCategoryCollectionAsyncWithHttpInfo
     *
     * Retrieves the collection of CategoryOutputDto resources.
     *
     * @param  string $siteId (required)
     * @param  string $modelId (optional)
     * @param  string[] $modelId2 (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryCollectionAsyncWithHttpInfo($siteId, $modelId = null, $modelId2 = null, $page = 1, $itemsPerPage = 30)
    {
        $returnType = '\EmonsiteApi\Models\GetCategoryCollection200Response';
        $request = $this->getCategoryCollectionRequest($siteId, $modelId, $modelId2, $page, $itemsPerPage);

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
     * Create request for operation 'getCategoryCollection'
     *
     * @param  string $siteId (required)
     * @param  string $modelId (optional)
     * @param  string[] $modelId2 (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $itemsPerPage The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCategoryCollectionRequest($siteId, $modelId = null, $modelId2 = null, $page = 1, $itemsPerPage = 30)
    {
        // verify the required parameter 'siteId' is set
        if ($siteId === null || (is_array($siteId) && count($siteId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteId when calling getCategoryCollection'
            );
        }
        if ($itemsPerPage !== null && $itemsPerPage < 0) {
            throw new \InvalidArgumentException('invalid value for "$itemsPerPage" when calling CategoryApi.getCategoryCollection, must be bigger than or equal to 0.');
        }


        $resourcePath = '/categories';
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
            $modelId,
            'modelId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $modelId2,
            'modelId[]', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
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
     * Operation getCategoryItem
     *
     * Retrieves a CategoryOutputDto resource.
     *
     * @param  string $id id (required)
     * @param  string $siteId siteId (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld
     */
    public function getCategoryItem($id, $siteId)
    {
        list($response) = $this->getCategoryItemWithHttpInfo($id, $siteId);
        return $response;
    }

    /**
     * Operation getCategoryItemWithHttpInfo
     *
     * Retrieves a CategoryOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryItemWithHttpInfo($id, $siteId)
    {
        $request = $this->getCategoryItemRequest($id, $siteId);

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
                    if ('\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld';
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
                        '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCategoryItemAsync
     *
     * Retrieves a CategoryOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryItemAsync($id, $siteId)
    {
        return $this->getCategoryItemAsyncWithHttpInfo($id, $siteId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCategoryItemAsyncWithHttpInfo
     *
     * Retrieves a CategoryOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryItemAsyncWithHttpInfo($id, $siteId)
    {
        $returnType = '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld';
        $request = $this->getCategoryItemRequest($id, $siteId);

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
     * Create request for operation 'getCategoryItem'
     *
     * @param  string $id (required)
     * @param  string $siteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCategoryItemRequest($id, $siteId)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getCategoryItem'
            );
        }
        // verify the required parameter 'siteId' is set
        if ($siteId === null || (is_array($siteId) && count($siteId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteId when calling getCategoryItem'
            );
        }

        $resourcePath = '/categories/{id}';
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
     * Operation postCategoryCollection
     *
     * Creates a Category resource.
     *
     * @param  \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld $categoryA72a7db8b7aeb918546eb332f4161205Jsonld The new Category resource (optional)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld
     */
    public function postCategoryCollection($categoryA72a7db8b7aeb918546eb332f4161205Jsonld = null)
    {
        list($response) = $this->postCategoryCollectionWithHttpInfo($categoryA72a7db8b7aeb918546eb332f4161205Jsonld);
        return $response;
    }

    /**
     * Operation postCategoryCollectionWithHttpInfo
     *
     * Creates a Category resource.
     *
     * @param  \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld $categoryA72a7db8b7aeb918546eb332f4161205Jsonld The new Category resource (optional)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCategoryCollectionWithHttpInfo($categoryA72a7db8b7aeb918546eb332f4161205Jsonld = null)
    {
        $request = $this->postCategoryCollectionRequest($categoryA72a7db8b7aeb918546eb332f4161205Jsonld);

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
                case 201:
                    if ('\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postCategoryCollectionAsync
     *
     * Creates a Category resource.
     *
     * @param  \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld $categoryA72a7db8b7aeb918546eb332f4161205Jsonld The new Category resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCategoryCollectionAsync($categoryA72a7db8b7aeb918546eb332f4161205Jsonld = null)
    {
        return $this->postCategoryCollectionAsyncWithHttpInfo($categoryA72a7db8b7aeb918546eb332f4161205Jsonld)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postCategoryCollectionAsyncWithHttpInfo
     *
     * Creates a Category resource.
     *
     * @param  \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld $categoryA72a7db8b7aeb918546eb332f4161205Jsonld The new Category resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCategoryCollectionAsyncWithHttpInfo($categoryA72a7db8b7aeb918546eb332f4161205Jsonld = null)
    {
        $returnType = '\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld';
        $request = $this->postCategoryCollectionRequest($categoryA72a7db8b7aeb918546eb332f4161205Jsonld);

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
     * Create request for operation 'postCategoryCollection'
     *
     * @param  \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld $categoryA72a7db8b7aeb918546eb332f4161205Jsonld The new Category resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postCategoryCollectionRequest($categoryA72a7db8b7aeb918546eb332f4161205Jsonld = null)
    {

        $resourcePath = '/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/html'],
                ['application/ld+json', 'application/json', 'text/html']
            );
        }

        // for model (json/xml)
        if (isset($categoryA72a7db8b7aeb918546eb332f4161205Jsonld)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($categoryA72a7db8b7aeb918546eb332f4161205Jsonld));
            } else {
                $httpBody = $categoryA72a7db8b7aeb918546eb332f4161205Jsonld;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
