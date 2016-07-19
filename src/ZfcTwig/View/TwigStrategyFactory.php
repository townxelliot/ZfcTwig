<?php

namespace ZfcTwig\View;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TwigStrategyFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return TwigStrategy
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new TwigStrategy($container->get(TwigRenderer::class));
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return TwigStrategy
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator, TwigStrategy::class);
    }


}
