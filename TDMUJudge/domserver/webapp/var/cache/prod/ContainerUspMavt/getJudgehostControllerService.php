<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\API\JudgehostController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[4].'/lib/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
include_once $this->targetDirs[3].'/src/Controller/API/JudgehostController.php';

$this->services['App\\Controller\\API\\JudgehostController'] = $instance = new \App\Controller\API\JudgehostController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()), ($this->privates['App\\Service\\ScoreboardService'] ?? $this->getScoreboardServiceService()), ($this->privates['App\\Service\\SubmissionService'] ?? $this->getSubmissionServiceService()), ($this->privates['App\\Service\\BalloonService'] ?? $this->load('getBalloonServiceService.php')), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer(($this->privates['.service_locator.heoBWpA'] ?? $this->load('get_ServiceLocator_HeoBWpAService.php'))->withContext('App\\Controller\\API\\JudgehostController', $this));

return $instance;
