<?php

namespace Misikch\Epn\Api\Client;

use Misikch\Epn\Api\Client\Config\Config;
use Misikch\Epn\Api\Client\Exceptions\EpnApiException;

class ClientBuilder
{
    /**
     * @var Client
     */
    private $epnClient;

    /**
     * @var string
     */
    private $clientId = '';

    /**
     * @var string
     */
    private $clientSecret = '';

    /**
     * @var string
     */
    private $locale = 'en';

    /**
     * @var string
     */
    private $apiVersion = '2';

    /**
     * @var array
     */
    private $config;

    /**
     * @var string[]
     */
    private $availableApiVersions = ['2', '2.1'];

    public function __construct()
    {
        $this->epnClient = new Client();

        $this->setDefaultConfig();
    }

    /**
     * @param string $clientId
     * @return $this
     */
    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @param string $clietSecret
     * @return $this
     */
    public function setClientSecret(string $clietSecret): self
    {
        $this->clientSecret = $clietSecret;

        return $this;
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param string $apiVersion
     * @return $this
     * @throws EpnApiException
     */
    public function setApiVersion(string $apiVersion): self
    {
        if (! in_array($apiVersion, $this->availableApiVersions)) {
            throw new EpnApiException('unsupported API version. expected: '
                . json_encode($this->availableApiVersions) . ', got: ', $apiVersion);
        }

        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * @param array $config
     * @throws EpnApiException
     */
    public function setConfig(array $config)
    {
        if (empty($config['api_url'] || empty($config['oauth_url']))) {
            throw new EpnApiException("config required params 'api_url', 'oauth_url'");
        }

        $this->config = $config;
    }

    /**
     * @return Client
     * @throws EpnApiException
     */
    public function build(): Client
    {
        if (empty($this->clientId) || empty($this->clientSecret)) {
            throw new EpnApiException('required clientId, clientSecret');
        }

        $client = new Client();

        $client->setClientId($this->clientId);
        $client->setClientSecret($this->clientSecret);
        $client->setApiVersion($this->apiVersion);
        $client->setLocale($this->locale);

        $client->setConfig(new Config($this->config));

        return $client;
    }

    private function setDefaultConfig()
    {
        $this->config = require(__DIR__ . '/Config/main.php');
    }
}