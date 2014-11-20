<?php

namespace Biliboo\InterventionImageBundle;

use Biliboo\InterventionImageBundle\DependencyInjection\Compiler\RegisterManagersPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BilibooInterventionImageBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RegisterManagersPass());
    }
}
