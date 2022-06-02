<?php
/**
 * EcoOrderApi
 * PHP version 5
 *
 * @category Class
 * @package  Emonsite
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

namespace Emonsite\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Emonsite\ApiException;
use Emonsite\Configuration;
use Emonsite\HeaderSelector;
use Emonsite\ObjectSerializer;

/**
 * EcoOrderApi Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoOrderApi
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
     * Operation getEcoOrderCollection
     *
     * Retrieves the collection of EcoOrderOutputDto resources.
     *
     * @param  string $site_id site_id (required)
     * @param  string $order_add_dt order_add_dt (optional)
     * @param  string $add_dt_before add_dt_before (optional)
     * @param  string $add_dt_strictly_before add_dt_strictly_before (optional)
     * @param  string $add_dt_after add_dt_after (optional)
     * @param  string $add_dt_strictly_after add_dt_strictly_after (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \Emonsite\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emonsite\Models\InlineResponse20016
     */
    public function getEcoOrderCollection($site_id, $order_add_dt = null, $add_dt_before = null, $add_dt_strictly_before = null, $add_dt_after = null, $add_dt_strictly_after = null, $page = '1', $items_per_page = '30')
    {
        list($response) = $this->getEcoOrderCollectionWithHttpInfo($site_id, $order_add_dt, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $page, $items_per_page);
        return $response;
    }

    /**
     * Operation getEcoOrderCollectionWithHttpInfo
     *
     * Retrieves the collection of EcoOrderOutputDto resources.
     *
     * @param  string $site_id (required)
     * @param  string $order_add_dt (optional)
     * @param  string $add_dt_before (optional)
     * @param  string $add_dt_strictly_before (optional)
     * @param  string $add_dt_after (optional)
     * @param  string $add_dt_strictly_after (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \Emonsite\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emonsite\Models\InlineResponse20016, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEcoOrderCollectionWithHttpInfo($site_id, $order_add_dt = null, $add_dt_before = null, $add_dt_strictly_before = null, $add_dt_after = null, $add_dt_strictly_after = null, $page = '1', $items_per_page = '30')
    {
        $returnType = '\Emonsite\Models\InlineResponse20016';
        $request = $this->getEcoOrderCollectionRequest($site_id, $order_add_dt, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $page, $items_per_page);

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
                        '\Emonsite\Models\InlineResponse20016',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEcoOrderCollectionAsync
     *
     * Retrieves the collection of EcoOrderOutputDto resources.
     *
     * @param  string $site_id (required)
     * @param  string $order_add_dt (optional)
     * @param  string $add_dt_before (optional)
     * @param  string $add_dt_strictly_before (optional)
     * @param  string $add_dt_after (optional)
     * @param  string $add_dt_strictly_after (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoOrderCollectionAsync($site_id, $order_add_dt = null, $add_dt_before = null, $add_dt_strictly_before = null, $add_dt_after = null, $add_dt_strictly_after = null, $page = '1', $items_per_page = '30')
    {
        return $this->getEcoOrderCollectionAsyncWithHttpInfo($site_id, $order_add_dt, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $page, $items_per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEcoOrderCollectionAsyncWithHttpInfo
     *
     * Retrieves the collection of EcoOrderOutputDto resources.
     *
     * @param  string $site_id (required)
     * @param  string $order_add_dt (optional)
     * @param  string $add_dt_before (optional)
     * @param  string $add_dt_strictly_before (optional)
     * @param  string $add_dt_after (optional)
     * @param  string $add_dt_strictly_after (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoOrderCollectionAsyncWithHttpInfo($site_id, $order_add_dt = null, $add_dt_before = null, $add_dt_strictly_before = null, $add_dt_after = null, $add_dt_strictly_after = null, $page = '1', $items_per_page = '30')
    {
        $returnType = '\Emonsite\Models\InlineResponse20016';
        $request = $this->getEcoOrderCollectionRequest($site_id, $order_add_dt, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $page, $items_per_page);

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
     * Create request for operation 'getEcoOrderCollection'
     *
     * @param  string $site_id (required)
     * @param  string $order_add_dt (optional)
     * @param  string $add_dt_before (optional)
     * @param  string $add_dt_strictly_before (optional)
     * @param  string $add_dt_after (optional)
     * @param  string $add_dt_strictly_after (optional)
     * @param  int $page The collection page number (optional, default to 1)
     * @param  int $items_per_page The number of items per page (optional, default to 30)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEcoOrderCollectionRequest($site_id, $order_add_dt = null, $add_dt_before = null, $add_dt_strictly_before = null, $add_dt_after = null, $add_dt_strictly_after = null, $page = '1', $items_per_page = '30')
    {
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling getEcoOrderCollection'
            );
        }

        $resourcePath = '/eco_orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($site_id !== null) {
            $queryParams['site_id'] = ObjectSerializer::toQueryValue($site_id, null);
        }
        // query params
        if ($order_add_dt !== null) {
            $queryParams['order[addDt]'] = ObjectSerializer::toQueryValue($order_add_dt, null);
        }
        // query params
        if ($add_dt_before !== null) {
            $queryParams['addDt[before]'] = ObjectSerializer::toQueryValue($add_dt_before, null);
        }
        // query params
        if ($add_dt_strictly_before !== null) {
            $queryParams['addDt[strictly_before]'] = ObjectSerializer::toQueryValue($add_dt_strictly_before, null);
        }
        // query params
        if ($add_dt_after !== null) {
            $queryParams['addDt[after]'] = ObjectSerializer::toQueryValue($add_dt_after, null);
        }
        // query params
        if ($add_dt_strictly_after !== null) {
            $queryParams['addDt[strictly_after]'] = ObjectSerializer::toQueryValue($add_dt_strictly_after, null);
        }
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
     * Operation getEcoOrderItem
     *
     * Retrieves a EcoOrderOutputDto resource.
     *
     * @param  string $id id (required)
     * @param  string $site_id site_id (required)
     *
     * @throws \Emonsite\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld
     */
    public function getEcoOrderItem($id, $site_id)
    {
        list($response) = $this->getEcoOrderItemWithHttpInfo($id, $site_id);
        return $response;
    }

    /**
     * Operation getEcoOrderItemWithHttpInfo
     *
     * Retrieves a EcoOrderOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $site_id (required)
     *
     * @throws \Emonsite\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEcoOrderItemWithHttpInfo($id, $site_id)
    {
        $returnType = '\Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld';
        $request = $this->getEcoOrderItemRequest($id, $site_id);

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
                        '\Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEcoOrderItemAsync
     *
     * Retrieves a EcoOrderOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $site_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoOrderItemAsync($id, $site_id)
    {
        return $this->getEcoOrderItemAsyncWithHttpInfo($id, $site_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEcoOrderItemAsyncWithHttpInfo
     *
     * Retrieves a EcoOrderOutputDto resource.
     *
     * @param  string $id (required)
     * @param  string $site_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEcoOrderItemAsyncWithHttpInfo($id, $site_id)
    {
        $returnType = '\Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld';
        $request = $this->getEcoOrderItemRequest($id, $site_id);

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
     * Create request for operation 'getEcoOrderItem'
     *
     * @param  string $id (required)
     * @param  string $site_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEcoOrderItemRequest($id, $site_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getEcoOrderItem'
            );
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling getEcoOrderItem'
            );
        }

        $resourcePath = '/eco_orders/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($site_id !== null) {
            $queryParams['site_id'] = ObjectSerializer::toQueryValue($site_id, null);
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
     * Operation patchEcoOrderItem
     *
     * Updates the EcoOrder resource.
     *
     * @param  string $site_id site_id (required)
     * @param  string $id id (required)
     * @param  \Emonsite\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 $body The updated EcoOrder resource (optional)
     *
     * @throws \Emonsite\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld
     */
    public function patchEcoOrderItem($site_id, $id, $body = null)
    {
        list($response) = $this->patchEcoOrderItemWithHttpInfo($site_id, $id, $body);
        return $response;
    }

    /**
     * Operation patchEcoOrderItemWithHttpInfo
     *
     * Updates the EcoOrder resource.
     *
     * @param  string $site_id (required)
     * @param  string $id (required)
     * @param  \Emonsite\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 $body The updated EcoOrder resource (optional)
     *
     * @throws \Emonsite\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchEcoOrderItemWithHttpInfo($site_id, $id, $body = null)
    {
        $returnType = '\Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld';
        $request = $this->patchEcoOrderItemRequest($site_id, $id, $body);

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
                        '\Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchEcoOrderItemAsync
     *
     * Updates the EcoOrder resource.
     *
     * @param  string $site_id (required)
     * @param  string $id (required)
     * @param  \Emonsite\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 $body The updated EcoOrder resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchEcoOrderItemAsync($site_id, $id, $body = null)
    {
        return $this->patchEcoOrderItemAsyncWithHttpInfo($site_id, $id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchEcoOrderItemAsyncWithHttpInfo
     *
     * Updates the EcoOrder resource.
     *
     * @param  string $site_id (required)
     * @param  string $id (required)
     * @param  \Emonsite\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 $body The updated EcoOrder resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchEcoOrderItemAsyncWithHttpInfo($site_id, $id, $body = null)
    {
        $returnType = '\Emonsite\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld';
        $request = $this->patchEcoOrderItemRequest($site_id, $id, $body);

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
     * Create request for operation 'patchEcoOrderItem'
     *
     * @param  string $site_id (required)
     * @param  string $id (required)
     * @param  \Emonsite\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 $body The updated EcoOrder resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchEcoOrderItemRequest($site_id, $id, $body = null)
    {
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling patchEcoOrderItem'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchEcoOrderItem'
            );
        }

        $resourcePath = '/eco_orders/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($site_id !== null) {
            $queryParams['site_id'] = ObjectSerializer::toQueryValue($site_id, null);
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/html'],
                ['application/merge-patch+json']
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
            'PATCH',
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