<?php

/*
 * This file is part of Laravel Exceptions.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Transformers
    |--------------------------------------------------------------------------
    |
    | Here are each of the exception transformers setup for your application.
    |
    | This allows you to turn your exceptions into other exceptions such as
    | http exceptions for perfect results when passed to the displayers. Note
    | that this list is processed in order and subsequent transformers can
    | still modify the results of previous ones if required.
    |
    */

    'transformers' => [
        GrahamCampbell\Exceptions\Transformers\AuthTransformer::class,
        GrahamCampbell\Exceptions\Transformers\CsrfTransformer::class,
        GrahamCampbell\Exceptions\Transformers\ModelTransformer::class,
        App\Exceptions\Transformers\AuthenticationExceptionTransformer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Exception Displayers
    |--------------------------------------------------------------------------
    |
    | Here are each of the exception displayers setup for your application.
    |
    | These displayers are sorted by priority. Note that when we are in debug
    | mode, we will select the first valid displayer from the list, and when we
    | are not in debug mode, we'll filter out all verbose displayers, then
    | select the first valid displayer from the new list.
    |
    */

    'displayers' => [
        GrahamCampbell\Exceptions\Displayers\DebugDisplayer::class,
        GrahamCampbell\Exceptions\Displayers\ViewDisplayer::class,
        GrahamCampbell\Exceptions\Displayers\HtmlDisplayer::class,
        //GrahamCampbell\Exceptions\Displayers\JsonDisplayer::class,
        App\Exceptions\JsonApiDisplayer::class,
        GrahamCampbell\Exceptions\Displayers\JsonApiDisplayer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Displayer Filters
    |--------------------------------------------------------------------------
    |
    | Here are each of the filters for the displayers.
    |
    | This allows you to apply filters to your displayers in order to work out
    | which displayer to use for each exception. This includes things like
    | content type negotiation.
    |
    */

    'filters' => [
        GrahamCampbell\Exceptions\Filters\VerboseFilter::class,
        GrahamCampbell\Exceptions\Filters\CanDisplayFilter::class,
        GrahamCampbell\Exceptions\Filters\ContentTypeFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Displayer
    |--------------------------------------------------------------------------
    |
    | Here you may define the default displayer for your application.
    |
    | This displayer will be used if your filters have filtered out all the
    | displayers, otherwise leaving us unable to displayer the exception.
    |
    */

    'default' => GrahamCampbell\Exceptions\Displayers\HtmlDisplayer::class,

    /*
    |--------------------------------------------------------------------------
    | Exception Levels
    |--------------------------------------------------------------------------
    |
    | Here are each of the log levels for the each exception.
    |
    | If an exception passes an instance of test for each key, then the log
    | level used is the value associated with each key.
    |
    */

    'levels' => [
        'Illuminate\Auth\Access\AuthorizationException'                           => 'warning',
        'Illuminate\Database\Eloquent\ModelNotFoundException'                     => 'warning',
        'Illuminate\Session\TokenMismatchException'                               => 'notice',
        'Symfony\Component\HttpKernel\Exception\NotFoundHttpException'            => 'notice',
        'Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException' => 'error',
        'Symfony\Component\HttpKernel\Exception\HttpExceptionInterface'           => 'warning',
        'Symfony\Component\Debug\Exception\FatalErrorException'                   => 'critical',
        'Exception'                                                               => 'error',
    ],

];
