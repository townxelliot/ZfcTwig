<?php

use ZfcTwig\ModuleOptions;
use ZfcTwig\ModuleOptionsFactory;
use ZfcTwig\Twig;
use ZfcTwig\View;

return [
    'aliases' => [
        'ZfcTwigExtension'               => Twig\Extension::class,
        'ZfcTwigLoaderChain'             => 'Twig_Loader_Chain',
        'ZfcTwigLoaderTemplateMap'       => Twig\MapLoader::class,
        'ZfcTwigLoaderTemplatePathStack' => Twig\StackLoader::class,
        'ZfcTwigRenderer'                => View\TwigRenderer::class,
        'ZfcTwigResolver'                => View\TwigResolver::class,
        'ZfcTwigViewHelperManager'       => 'ZfcTwig_ViewHelperManager',
        'ZfcTwigViewStrategy'            => View\TwigStrategy::class,
    ],

    'factories' => [
        'Twig_Environment'  => Twig\EnvironmentFactory::class,
        'Twig_Loader_Chain' => Twig\ChainLoaderFactory::class,

        Twig\Extension::class => Twig\ExtensionFactory::class,
        Twig\MapLoader::class => Twig\MapLoaderFactory::class,

        Twig\StackLoader::class     => Twig\StackLoaderFactory::class,
        View\TwigRenderer::class    => View\TwigRendererFactory::class,
        View\TwigResolver::class    => View\TwigResolverFactory::class,
        'ZfcTwig_ViewHelperManager' => View\HelperPluginManagerFactory::class,
        View\TwigStrategy::class    => View\TwigStrategyFactory::class,

        ModuleOptions::class => ModuleOptionsFactory::class
    ]
];
