<?php
/**
 * Description of SimulateSuccessfullDelivery.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders\Simulate;

use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;

class SimulateSuccessfulDeliveryRequest extends PostGlovoRequest
{
    private const ENDPOINT_TEMPLATE = '/v2/laas/parcels/%s/simulate/successful-attempt';

    public function __construct(
        protected readonly string $trackingNumber,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT_TEMPLATE, $this->trackingNumber);
    }
}
