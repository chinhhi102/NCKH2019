<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\Type\TeamAffiliationType' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/Type/AbstractExternalIdEntityType.php';
include_once $this->targetDirs[3].'/src/Form/Type/TeamAffiliationType.php';

return $this->privates['App\\Form\\Type\\TeamAffiliationType'] = new \App\Form\Type\TeamAffiliationType(($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()));
