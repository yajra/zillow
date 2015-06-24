Zillow, Laravel Wrapper
================================

A simple Laravel Wrapper for the Zillow API services.

[![Build Status](https://travis-ci.org/yajra/zillow.png?branch=master)](https://travis-ci.org/yajra/zillow)
[![Total Downloads](https://poser.pugx.org/yajra/zillow/downloads.png)](https://packagist.org/packages/yajra/zillow)
[![Latest Stable Version](https://poser.pugx.org/yajra/zillow/v/stable.png)](https://packagist.org/packages/yajra/zillow)
[![Latest Unstable Version](https://poser.pugx.org/yajra/zillow/v/unstable.svg)](https://packagist.org/packages/yajra/zillow)
[![License](https://poser.pugx.org/yajra/zillow/license.svg)](https://packagist.org/packages/yajra/zillow)


Requirements
------------

depends on PHP 5.4+, Goutte 2.0+, Guzzle 4+.

Installation
------------

Add `yajra/zillow` as a require dependency in your `composer.json` file:

**Laravel 4**
```php
composer require yajra/zillow:~1.0
```
**Laravel 5**
```php
composer require yajra/zillow:~2.0
```

Configuration
-------------
In your `config/app.php` add `yajra\Zillow\ServiceProvider` to the end of the providers array
```php
'providers' => array(
    'Illuminate\Auth\AuthServiceProvider',
    ...
    'yajra\Zillow\ServiceProvider',
),
```

At the end of `config/app.php` add `Zillow` => `yajra\Zillow\Facade` to the aliases array
```php
'aliases' => array(
    'App'        => 'Illuminate\Support\Facades\App',
    'Artisan'    => 'Illuminate\Support\Facades\Artisan',
    ...
    'Zillow'    => 'yajra\Zillow\Facade',
),
```

Lastly, publish the config file:

**Laravel 4**
```php
$ php artisan config:publish yajra/zillow
```
**Laravel 5**
```php
$ php artisan vendor:publish
```

Then set your [Zillow Web Services ID (ZWSID)](http://www.zillow.com/webservice/Registration.htm) by updating the `zws-id` value in

**Laravel 4**
`app/config/packages/yajra/zillow/config.php`

**Laravel 5**
`config/zillow.php`

###Usage
-----
Make requests with a specific API call method:

```php
$params = [
	'address' => '5400 Tujunga Ave',
	'citystatezip' => 'North Hollywood, CA 91601'
];
// Run GetSearchResults
$response = Zillow::getSearchResults($params);
```

Any Zillow API call will work. Valid callbacks are:

- getZestimate
- getSearchResults
- getChart
- getComps
- getDeepComps
- getDeepSearchResults
- getUpdatedPropertyDetails
- getDemographics
- getRegionChildren
- getRegionChart
- getRateSummary
- getMonthlyPayments
- calculateMonthlyPaymentsAdvanced
- calculateAffordability
- calculateRefinance
- calculateAdjustableMortgage
- calculateMortgageTerms
- calculateDiscountPoints
- calculateBiWeeklyPayment
- calculateNoCostVsTraditional
- calculateTaxSavings
- calculateFixedVsAdjustableRate
- calculateInterstOnlyVsTraditional
- calculateHELOC


License
-------

MIT license.

Links
-----
This package was inspired by [Zillow, PHP Wrapper](https://github.com/VinceG/zillow)
