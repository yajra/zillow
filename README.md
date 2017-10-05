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

```php
composer require yajra/zillow:~3.0
```

Configuration (Optional on Laravel 5.5)
-------------
In your `config/app.php` add `Yajra\Zillow\ZillowServiceProvider` to the end of the providers array
```php
'providers' => [
    'Illuminate\Auth\AuthServiceProvider',
    ...
    'Yajra\Zillow\ZillowServiceProvider',
],
```

At the end of `config/app.php` add `Zillow` => `Yajra\Zillow\Facades\Zillow` to the aliases array
```php
'aliases' => [
    'App'        => 'Illuminate\Support\Facades\App',
    'Artisan'    => 'Illuminate\Support\Facades\Artisan',
    ...
    'Zillow'    => 'Yajra\Zillow\Facades\Zillow',
],
```

Lastly, publish the config file (Optional):

```php
$ php artisan vendor:publish
```

Then set your [Zillow Web Services ID (ZWSID)](http://www.zillow.com/webservice/Registration.htm) by updating the `zws-id` value in `config/zillow.php`.

You can also set `ZWSID` key on your env file and skip the publishing of config.

Usage
------------

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

### Home Valuation API
- [getZestimate](https://www.zillow.com/howto/api/GetZestimate.htm)
- [getSearchResults](https://www.zillow.com/howto/api/GetSearchResults.htm)
- [getChart](https://www.zillow.com/howto/api/GetChart.htm)
- [getComps](https://www.zillow.com/howto/api/GetComps.htm)

### Property Details API
- [getDeepSearchResults](https://www.zillow.com/howto/api/GetDeepSearchResults.htm)
- [getDeepComps](https://www.zillow.com/howto/api/GetDeepComps.htm)
- [getUpdatedPropertyDetails](https://www.zillow.com/howto/api/GetUpdatedPropertyDetails.htm)

### Neighborhood Data
- [getRegionChildren](https://www.zillow.com/howto/api/GetRegionChildren.htm)
- [getRegionChart](https://www.zillow.com/howto/api/GetRegionChart.htm)

### Other API
- getDemographics
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
