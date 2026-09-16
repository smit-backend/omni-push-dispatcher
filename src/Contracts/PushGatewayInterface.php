<?php

declare(strict_types=1);

namespace SmitBackend\OmniPush\Contracts;

/**
 * Interface PushGatewayInterface
 *
 * @package SmitBackend\OmniPush
 */
interface PushGatewayInterface
{
    public function execute(array $payload = []): mixed;
}
