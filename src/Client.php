<?php

namespace Misikch\Epn\Api\Client;

use Misikch\Epn\Api\Client\Config\Config;

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
     * @var Config
     */
    private $config;

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret(string $clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * @param Config $config
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
    }
}
