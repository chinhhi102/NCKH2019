<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\DOMJudgeIPAuthenticator' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-guard/AuthenticatorInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-http/Util/TargetPathTrait.php';
include_once $this->targetDirs[3].'/src/Security/DOMJudgeIPAuthenticator.php';

return $this->privates['App\\Security\\DOMJudgeIPAuthenticator'] = new \App\Security\DOMJudgeIPAuthenticator(($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')), ($this->privates['security.helper'] ?? $this->load('getSecurity_HelperService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));