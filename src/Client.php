<?php

namespace Misikch\Epn\Api\Client;

class Client
{
    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $apiVersion;

    /**
     * @var array
     */
    private $config;

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret(string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion(string $apiVersion): void
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config): void
    {
        $this->config = $config;
    }
}
