<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.abok9wb' shared service.

return $this->services['service_locator.abok9wb'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['fileUploader' => function () {
    $f = function (\AppBundle\Service\FileUploader $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\\Service\\FileUploader']) ? $this->services['AppBundle\\Service\\FileUploader'] : ($this->services['AppBundle\\Service\\FileUploader'] = new \AppBundle\Service\FileUploader(($this->targetDirs[3].'/web/uploads/covers')))) && false ?: '_'});
}]);
