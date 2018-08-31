# Laravel LimeSurvey API Wrapper

A Laravel wrapper for the LimeSurvey RemoteControl2 API.

By default, API access via Remotecontrol2 is disabled, follow the instructions at (https://manual.limesurvey.org/RemoteControl_2_API) to enable it.

## Getting Started

This package can be installed using the following composer command from the root of your Laravel project.

```bash
   $ composer require "neilherbertuk/laravellimesurveyapi: dev-master"
```

In Laravel 5.5+ this package should be auto-discovered, however if you are using an earlier version or Laravel add the following service provider and facade in the `config/app.php` file:

```php
    'providers' => [
        // ...
        neilherbertuk\laravellimesurveyapi\LaravelLimesurveyApiProvider::class,
    ];
```

```php
    'aliases' => [
        // ...
        'LimeSurveyAPI' => neilherbertuk\laravellimesurveyapi\Facades\LimeSurveyAPI::class,
    ];
```

### Publish Config (Optional)

By default, the configuration is set within the .env file, however, if you wish to override this, please publish the config file.

```
   $ php artisan vendor:publish --provider="neilherbertuk\laravellimesurveyapi\LaravelLimesurveyApiProvider"
```

### Configure

Add to following to your `.env` file. The `LIMESURVEY_URL` setting must match the url listed on the `Global Settings` -> `Interfaces` page.

```dotenv
LIMESURVEY_URL=
LIMESURVEY_USERNAME=
LIMESURVEY_PASSWORD=
```

## Usage

TODO

## Credit
Based on [du-lei/limesurvey-api-handle](https://github.com/du-lei/limesurvey-api-handle)

## License
[MIT](LICENSE)
