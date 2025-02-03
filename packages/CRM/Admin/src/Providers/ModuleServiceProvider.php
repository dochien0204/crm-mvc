<?php

namespace CRM\Admin\Providers;


class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * The models to be used by this module.
     *
     * @var array
     */
    protected $models = [
        //
        \CRM\Admin\Models\User::class
    ];
}
