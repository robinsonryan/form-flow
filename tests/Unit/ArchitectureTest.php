<?php

declare(strict_types=1);

arch('All source files use strict types')
    ->expect('RobinsonRyan\FormFlow')
    ->toUseStrictTypes();

arch('Models extend Eloquent Model')
    ->expect('RobinsonRyan\FormFlow\Models')
    ->toExtend(Illuminate\Database\Eloquent\Model::class);

arch('Enums are backed enums')
    ->expect('RobinsonRyan\FormFlow\Enums')
    ->toBeEnums();

arch('Data classes extend Spatie Data')
    ->expect('RobinsonRyan\FormFlow\Data')
    ->toExtend(Spatie\LaravelData\Data::class);
