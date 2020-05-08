<?php

namespace Misikch\Epn\Api\Client\Components\Auth;

use Misikch\Epn\Api\Client\Config\Config;

class AuthClientCredentials
{
    /**
     * @var Config
     */
    private $config;
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function auth(string $clientId, string $clientSecret)
    {

    }
}