# TR Tax Number Validation Rule Extend

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://img.shields.io/packagist/v/netkod-bilisim/tr-string-str-facade-extend" alt="Latest Stable Version">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://img.shields.io/packagist/dt/netkod-bilisim/tr-string-str-facade-extend" alt="Total Downloads">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://poser.pugx.org/netkod-bilisim/tr-string-str-facade-extend/dependents.svg" alt="Dependents">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://img.shields.io/packagist/l/netkod-bilisim/tr-string-str-facade-extend" alt="License">
</a>
</div>

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="http://poser.pugx.org/netkod-bilisim/tr-string-str-facade-extend/require/php" alt="License">
</a>
<a href="https://scrutinizer-ci.com/g/netkod-bilisim/tr-string-str-facade-extend/badges/quality-score.png?b=master" rel="nofollow">
    <img src="https://scrutinizer-ci.com/g/netkod-bilisim/tr-string-str-facade-extend/badges/quality-score.png?b=master" alt="Scrutinizer">
</a>
<a href="https://github.styleci.io/repos/672844297?branch=master">
    <img src="https://github.styleci.io/repos/672844297/shield?branch=master" alt="StyleCI">
</a>

</div>

## <img src="public/assets/images/presentation.png" width="25" height="25"> Introduction

It checks the TR Tax Number. It is the extended version package of the TR Tax Number verification package prepared to be used in the request rules.

## <img src="public/assets/images/requirement.png" width="25" height="25"> Requirements

- PHP >= 7.4

## <img src="public/assets/images/inbox.png" width="25" height="25"> Install

```bash
composer require netkod-bilisim/tr-tax-number-validation-rule-extend:"^1"
```

## <img src="public/assets/images/web-coding.png" width="25" height="25"> Usage

```php
public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'citizen_number' => 'required|tr_identity_number',
    ]);
 
    // The user is valid...
 
    return redirect('/users');
}
```

## <img src="public/assets/images/licensing.png" width="25" height="25"> License

This package is open source software licensed under
the [MIT License](https://opensource.org/license/mit/).
