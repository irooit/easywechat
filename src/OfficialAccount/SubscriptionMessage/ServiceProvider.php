<?php
/**
 * DESCRIPTION:
 * DATE: 2021-03-27
 * TIME: 23:28
 * AUTHOR: hongcoo
 * PROJECT: easywechat
 */
namespace EasyWeChat\OfficialAccount\SubscriptionMessage;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['subscription_message'] = function ($app) {
            return new Client($app);
        };
    }
}
