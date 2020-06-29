<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Namespace
    |--------------------------------------------------------------------------
    |
    | Blueprint uses the default Laravel application namespace of 'App'.
    | However, you may configure Blueprint to use a custom namespace.
    | This value should match a PSR-4 autoload configuration value
    | within the composer.json file of your Laravel application.
    |
    */
    'namespace' => 'App',


    /*
    |--------------------------------------------------------------------------
    | Component Namespaces
    |--------------------------------------------------------------------------
    |
    | Blueprint promotes following Laravel conventions. As such, it generates
    | components under the default namespaces. For example, models are under
    | the `App` namespace. However, you may configure Blueprint to use
    | your own custom namespace when generating these components.
    |
    */
    'models_namespace' => 'Models',
    'controllers_namespace' => 'Http\\Controllers',


    /*
    |--------------------------------------------------------------------------
    | Application Path
    |--------------------------------------------------------------------------
    |
    | By default, Blueprint will save the generated application components
    | under the files under the `app` folder. However, you may configure
    | Blueprint  to save these generated component under a custom path.
    |
    */
    'app_path' => 'app',

    /*
    |--------------------------------------------------------------------------
    | Generate PHPDocs
    |--------------------------------------------------------------------------
    |
    | Here you may enable generate PHPDocs for classes like Models. This
    | not only serves as documentation, but also allows your IDE to
    | map to the dynamic properties used by Laravel Models.
    |
    */
    'generate_phpdocs' => false,

    /*
    |--------------------------------------------------------------------------
    | Foreign Key Constraints
    |--------------------------------------------------------------------------
    |
    | Here you may enable Blueprint to always add foreign key constraints
    | within the generated migration. This will relate these records
    | together to add structure and integrity to your database.
    |
    */
    'use_constraints' => false,

    /*
    |--------------------------------------------------------------------------
    | Fake Nullables
    |--------------------------------------------------------------------------
    |
    | By default, Blueprint will set fake data even for nullable columns
    | within the generated model factories. However, you may disable
    | this behavior if you prefer to only set required columns
    | within your model factories.
    |
    */
    'fake_nullables' => true,

    /*
    |--------------------------------------------------------------------------
    | Use Guarded
    |--------------------------------------------------------------------------
    |
    | By default, Blueprint will set the `fillable` property within generated
    | models with the defined columns. These are set to provide a foundation
    | for mass assignment protection provided by Laravel. However, you may
    | configure Blueprint to instead set an empty `guarded` property to
    | generated "unguarded" models.
    |
    */

    'use_guarded' => false,
];