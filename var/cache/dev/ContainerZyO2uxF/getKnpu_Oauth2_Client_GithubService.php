<?php

namespace ContainerZyO2uxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_Client_GithubService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knpu.oauth2.client.github' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\Provider\GithubClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/OAuth2ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/OAuth2Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/Provider/GithubClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/ArrayAccessorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/GuardedPropertyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/QueryBuilderTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Provider/AbstractProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-github/src/Provider/Github.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/DependencyInjection/ProviderFactory.php';

        return $container->services['knpu.oauth2.client.github'] = new \KnpU\OAuth2ClientBundle\Client\Provider\GithubClient((new \KnpU\OAuth2ClientBundle\DependencyInjection\ProviderFactory(($container->services['router'] ?? self::getRouterService($container))))->createProvider('League\\OAuth2\\Client\\Provider\\Github', ['clientId' => $container->getEnv('GITHUB_CLIENT_ID'), 'clientSecret' => $container->getEnv('GITHUB_CLIENT_SECRET')], 'connect_github_check', [], []), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}