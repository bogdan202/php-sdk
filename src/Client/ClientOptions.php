<?php

namespace ShoppingFeed\Sdk\Client;

class ClientOptions
{
    /**
     * @var bool
     */
    private $baseUri = 'https://api.shopping-feed.com';

    /**
     * @var bool
     */
    private $version = 'v1';

    /**
     * @var bool
     */
    private $handleRateLimit = true;

    /**
     * @var int The number of retries before abandon 5xx requests
     */
    private $retryOnServerError = 0;

    /**
     * @param string $baseUri
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = trim($baseUri);
    }

    /**
     * @return string
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param bool $handle
     *
     * @return ClientOptions
     */
    public function setHandleRateLimit($handle)
    {
        $this->handleRateLimit = (bool) $handle;

        return $this;
    }

    /**
     * @return bool
     */
    public function handleRateLimit()
    {
       return $this->handleRateLimit;
    }

    /**
     * @param int $retryCount
     *
     * @return $this
     */
    public function setRetryOnServerError($retryCount)
    {
        $this->retryOnServerError = (int) $retryCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getRetryOnServerError()
    {
        return $this->retryOnServerError;
    }
}
