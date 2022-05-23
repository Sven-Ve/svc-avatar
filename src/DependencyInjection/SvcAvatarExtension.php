<?php

namespace Svc\AvatarBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SvcAvatarExtension extends Extension
{
  public function load(array $configs, ContainerBuilder $container)
  {
    $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
    $loader->load('services.xml');

    $configuration = $this->getConfiguration($configs, $container);
    $config = $this->processConfiguration($configuration, $configs);
/*
    $definition = $container->getDefinition('svc_contactform.controller.contact');
    $definition->setArgument(0, $config['enable_captcha']);
    $definition->setArgument(1, $config['contact_mail']);
    $definition->setArgument(2, $config['route_after_send']);
    $definition->setArgument(3, $config['enable_copy_to_me']);
*/
  }
}