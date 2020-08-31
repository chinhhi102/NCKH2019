<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\AnalysisController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/Jury/AnalysisController.php';

$this->services['App\\Controller\\Jury\\AnalysisController'] = $instance = new \App\Controller\Jury\AnalysisController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()));

$instance->setContainer(($this->privates['.service_locator.njmUWMD'] ?? $this->load('get_ServiceLocator_NjmUWMDService.php'))->withContext('App\\Controller\\Jury\\AnalysisController', $this));

return $instance;
