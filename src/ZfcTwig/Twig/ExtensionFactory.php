<?php

namespace ZfcTwig\Twig;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcTwig\View\TwigRenderer;

class ExtensionFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Extension
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new Extension($container->get(TwigRenderer::class));
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Extension
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator, Extension::class);
    }


}
