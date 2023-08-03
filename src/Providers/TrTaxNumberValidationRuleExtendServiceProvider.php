<?php

namespace NetkodBilisim\TrTaxNumberValidationRuleExtend\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class TrTaxNumberValidationRuleExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'NetkodBilisim');

        Validator::extend('tr_tax_number', 'NetkodBilisim\TrTaxNumberValidationRuleExtend\Rules\TrTaxNumberRule@passes');
    }
}
