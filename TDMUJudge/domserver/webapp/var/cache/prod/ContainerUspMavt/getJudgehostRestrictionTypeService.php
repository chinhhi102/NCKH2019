<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\Type\JudgehostRestrictionType' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/Type/JudgehostRestrictionType.php';

return $this->privates['App\\Form\\Type\\JudgehostRestrictionType'] = new \App\Form\Type\JudgehostRestrictionType(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
