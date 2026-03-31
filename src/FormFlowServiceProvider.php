<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow;

use Illuminate\Support\ServiceProvider;
use RobinsonRyan\FormFlow\Contracts\FlowManagerInterface;
use RobinsonRyan\FormFlow\Contracts\StepResolverInterface;
use RobinsonRyan\FormFlow\Contracts\StepValidatorInterface;
use RobinsonRyan\FormFlow\Services\FlowManager;
use RobinsonRyan\FormFlow\Services\StepResolver;
use RobinsonRyan\FormFlow\Services\Validation\HybridStepValidator;
use RobinsonRyan\FormFlow\Services\Validation\OpisJsonSchemaValidator;

final class FormFlowServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/form-flow.php',
            'form-flow',
        );

        $this->app->singleton(OpisJsonSchemaValidator::class);

        $this->app->singleton(StepResolverInterface::class, StepResolver::class);

        $this->app->singleton(StepValidatorInterface::class, function ($app) {
            return new HybridStepValidator(
                $app->make(OpisJsonSchemaValidator::class),
            );
        });

        $this->app->singleton(FlowManagerInterface::class, function ($app) {
            return new FlowManager(
                $app->make(StepResolverInterface::class),
                $app->make(StepValidatorInterface::class),
            );
        });

        $this->app->alias(FlowManagerInterface::class, 'form-flow');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/form-flow.php' => config_path('form-flow.php'),
        ], 'form-flow-config');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'form-flow-migrations');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
