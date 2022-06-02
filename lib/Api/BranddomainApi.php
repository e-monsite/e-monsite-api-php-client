<?php
/**
 * BranddomainApi
 * PHP version 5
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API E-monsite
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: alpha
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EmonsiteApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EmonsiteApi\ApiException;
use EmonsiteApi\Configuration;
use EmonsiteApi\HeaderSelector;
use EmonsiteApi\ObjectSerializer;

/**
 * BranddomainApi Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BranddomainApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiBrandsBrandDomainsGetSubresource
     *
     * Retrieves the collection of Branddomain resources.
     *
     * @param  string $id id (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\InlineResponse2005
     */
    public function apiBrandsBrandDomainsGetSubresource($id, $page = '1', $items_per_page = '30')
    {
        list($response) = $this->apiBrandsBrandDomainsGetSubresourceWithHttpInfo($id, $page, $items_per_page);
        return $response;
    }

    /**
     * Operation apiBrandsBrandDomainsGetSubresourceWithHttpInfo
     *
     * Retrieves the collection of Branddomain resources.
     *
     * @param  string $id (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiBrandsBrandDomainsGetSubresourceWithHttpInfo($id, $page = '1', $items_per_page = '30')
    {
        $returnType = '\EmonsiteApi\Models\InlineResponse2005';
        $request = $this->apiBrandsBrandDomainsGetSubresourceRequest($id, $page, $items_per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\EmonsiteApi\Models\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiBrandsBrandDomainsGetSubresourceAsync
     *
     * Retrieves the collection of Branddomain resources.
     *
     * @param  string $id (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiBrandsBrandDomainsGetSubresourceAsync($id, $page = '1', $items_per_page = '30')
    {
        return $this->apiBrandsBrandDomainsGetSubresourceAsyncWithHttpInfo($id, $page, $items_per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiBrandsBrandDomainsGetSubresourceAsyncWithHttpInfo
     *
     * Retrieves the collection of Branddomain resources.
     *
     * @param  string $id (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiBrandsBrandDomainsGetSubresourceAsyncWithHttpInfo($id, $page = '1', $items_per_page = '30')
    {
        $returnType = '\EmonsiteApi\Models\InlineResponse2005';
        $request = $this->apiBrandsBrandDomainsGetSubresourceRequest($id, $page, $items_per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiBrandsBrandDomainsGetSubresource'
     *
     * @param  string $id (required)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiBrandsBrandDomainsGetSubresourceRequest($id, $page = '1', $items_per_page = '30')
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiBrandsBrandDomainsGetSubresource'
            );
        }

        $resourcePath = '/brands/{id}/brand_domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($items_per_page !== null) {
            $queryParams['itemsPerPage'] = ObjectSerializer::toQueryValue($items_per_page, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBranddomainCollection
     *
     * Retrieves the collection of BranddomainOutputDto resources.
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\InlineResponse2005
     */
    public function getBranddomainCollection($page = '1', $items_per_page = '30')
    {
        list($response) = $this->getBranddomainCollectionWithHttpInfo($page, $items_per_page);
        return $response;
    }

    /**
     * Operation getBranddomainCollectionWithHttpInfo
     *
     * Retrieves the collection of BranddomainOutputDto resources.
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBranddomainCollectionWithHttpInfo($page = '1', $items_per_page = '30')
    {
        $returnType = '\EmonsiteApi\Models\InlineResponse2005';
        $request = $this->getBranddomainCollectionRequest($page, $items_per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\EmonsiteApi\Models\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBranddomainCollectionAsync
     *
     * Retrieves the collection of BranddomainOutputDto resources.
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBranddomainCollectionAsync($page = '1', $items_per_page = '30')
    {
        return $this->getBranddomainCollectionAsyncWithHttpInfo($page, $items_per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBranddomainCollectionAsyncWithHttpInfo
     *
     * Retrieves the collection of BranddomainOutputDto resources.
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBranddomainCollectionAsyncWithHttpInfo($page = '1', $items_per_page = '30')
    {
        $returnType = '\EmonsiteApi\Models\InlineResponse2005';
        $request = $this->getBranddomainCollectionRequest($page, $items_per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBranddomainCollection'
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBranddomainCollectionRequest($page = '1', $items_per_page = '30')
    {

        $resourcePath = '/branddomains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($items_per_page !== null) {
            $queryParams['itemsPerPage'] = ObjectSerializer::toQueryValue($items_per_page, null);
        }


        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBranddomainItem
     *
     * Retrieves a BranddomainOutputDto resource.
     *
     * @param  string $id id (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld
     */
    public function getBranddomainItem($id)
    {
        list($response) = $this->getBranddomainItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getBranddomainItemWithHttpInfo
     *
     * Retrieves a BranddomainOutputDto resource.
     *
     * @param  string $id (required)
     *
     * @throws \EmonsiteApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBranddomainItemWithHttpInfo($id)
    {
        $returnType = '\EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld';
        $request = $this->getBranddomainItemRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBranddomainItemAsync
     *
     * Retrieves a BranddomainOutputDto resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBranddomainItemAsync($id)
    {
        return $this->getBranddomainItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBranddomainItemAsyncWithHttpInfo
     *
     * Retrieves a BranddomainOutputDto resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBranddomainItemAsyncWithHttpInfo($id)
    {
        $returnType = '\EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld';
        $request = $this->getBranddomainItemRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBranddomainItem'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBranddomainItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getBranddomainItem'
            );
        }

        $resourcePath = '/branddomains/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
