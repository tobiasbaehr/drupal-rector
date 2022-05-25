<?php declare(strict_types=1);

use DrupalRector\Rector\Deprecation\AssertIdenticalObjectRector;
use DrupalRector\Rector\Deprecation\AssertIdenticalRector;
use DrupalRector\Rector\Deprecation\AssertNotIdenticalRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(AssertIdenticalRector::class)
        ->configure([
            'drupal_rector_notices_as_comments' => '%drupal_rector_notices_as_comments%',
        ]);
    $services->set(AssertNotIdenticalRector::class)
        ->configure([
            'drupal_rector_notices_as_comments' => '%drupal_rector_notices_as_comments%',
        ]);
    $services->set(AssertIdenticalObjectRector::class)
        ->configure([
            'drupal_rector_notices_as_comments' => '%drupal_rector_notices_as_comments%',
        ]);

    $parameters = $containerConfigurator->parameters();
    $parameters->set('drupal_rector_notices_as_comments', true);
};
