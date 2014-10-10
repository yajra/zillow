Zillow, Laravel Wrapper
================================

A simple Laravel Wrapper for the Zillow API services.

[![Build Status](https://travis-ci.org/yajra/zillow.png?branch=master)](https://travis-ci.org/yajra/zillow)


Requirements
------------

depends on PHP 5.4+, Goutte 2.0+, Guzzle 4+.

Installation
------------

Add `yajra/zillow` as a require dependency in your `composer.json` file:

```php
php composer.phar require yajra/zillow: *
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
```php
$ php artisan config:publish yajra/zillow
```
Then edit `zws-id` value in `app/config/packages/yajra/zillow/config.php`

Usage
-----
Make requests with a specific API call method:

```php
    // Run GetSearchResults
    $response = Zillow::getSearchResults(['address' => '5400 Tujunga Ave', 'citystatezip' => 'North Hollywood, CA 91601']);
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
