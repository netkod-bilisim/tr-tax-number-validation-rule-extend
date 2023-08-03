<?php

namespace NetkodBilisim\TrTaxNumberValidationRuleExtend\Rules;

use Illuminate\Contracts\Validation\Rule;
use NetkodBilisim\TrTaxNumberValidation;

class TrTaxNumberRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        return TrTaxNumberValidation::validate($value);
    }

    public function message(): string
    {
        return trans('NetkodBilisim::trTaxNumberValidationRuleExtend.error');
    }
}
