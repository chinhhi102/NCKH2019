<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.k3pfvNh' shared service.

return $this->privates['.service_locator.k3pfvNh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'problem' => ['privates', '.errored..service_locator.k3pfvNh.App\\Entity\\Problem', NULL, 'Cannot autowire service ".service_locator.k3pfvNh": it references class "App\\Entity\\Problem" but no such service exists.'],
], [
    'problem' => 'App\\Entity\\Problem',
]);
