<?php

namespace Biliboo\InterventionImageBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * Register the managers
 *
 */
class RegisterManagersPass implements CompilerPassInterface
{
    const MANAGER_CLASS = 'Intervention\Image\ImageManager';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $managers = $container->getParameter('biliboo_intervention_image.managers');

        foreach ($managers as $manager => $config) {
            $definition = new Definition(self::MANAGER_CLASS, $config);
            $id         = sprintf('biliboo_intervention_image.managers.%s', $manager);

            $container->setDefinition($id, $definition);
        }
    }
}
