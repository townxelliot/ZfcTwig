<?php

namespace ZfcTwig\View;

use Twig\Environment;
use Laminas\View\Resolver\ResolverInterface;
use Laminas\View\Renderer\RendererInterface as Renderer;

class TwigResolver implements ResolverInterface
{
    /**
     * @var Environment
     */
    protected $environment;

    /**
     * Constructor.
     *
     * @param Environment $environment
     */
    public function __construct(Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * @inheritDoc
     */
    public function resolve($name, Renderer $renderer = null)
    {
        return $this->environment->load($name);
    }

}