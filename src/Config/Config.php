<?php

namespace Misikch\Epn\Api\Client\Config;

class Config
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->config['api_url'] ?? '';
    }

    /**
     * @return string
     */
    public function getOauthUrl(): string
    {
        return $this->config['oauth_url'] ?? '';
    }
}