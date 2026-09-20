<?php

declare(strict_types=1);

namespace SmitBackend\OmniPush;

use SmitBackend\OmniPush\Contracts\PushGatewayInterface;

/**
 * Class PushDispatcher
 *
 * @package SmitBackend\OmniPush
 */
class PushDispatcher implements PushGatewayInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
