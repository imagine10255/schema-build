## Schema-Build for Laravel 5

Better Laravel Exception Handler

[![Latest Stable Version](https://poser.pugx.org/imagine10255/schema-build/version)](https://packagist.org/packages/imagine10255/schema-build)
[![Total Downloads](https://poser.pugx.org/imagine10255/schema-build/downloads)](https://packagist.org/packages/imagine10255/schema-build)
[![Latest Unstable Version](https://poser.pugx.org/imagine10255/schema-build/v/unstable)](//packagist.org/packages/imagine10255/schema-build)
[![License](https://poser.pugx.org/imagine10255/schema-build/license)](https://packagist.org/packages/imagine10255/schema-build)
[![Monthly Downloads](https://poser.pugx.org/imagine10255/schema-build/d/monthly)](https://packagist.org/packages/imagine10255/schema-build)
[![Daily Downloads](https://poser.pugx.org/imagine10255/schema-build/d/daily)](https://packagist.org/packages/imagine10255/schema-build)
[![composer.lock available](https://poser.pugx.org/imagine10255/schema-build/composerlock)](https://packagist.org/packages/imagine10255/schema-build)

## Features
- The database of the table schema, the output function into the file
- Laravel 5
- Output Excel2007
- Mysql5.6 After,MariaDB10 After

## Installing

To get the latest version of Laravel Exceptions, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require Imagine10255/schema-build --dev
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "Imagine10255/schema-build": "^1.0"
    }
}
```

Include the service provider within `app/Providers/AppServiceProvider.php`. The service povider is needed for the generator artisan command.

```php
...
if ($this->app->environment() == 'local') {
    $this->app->register('Imagine10255\SchemaBuild\SchemaBuildServiceProvider');
}
```

publish

```bash
php artisan vendor:publish --provider="Imagine10255\SchemaBuild\SchemaBuildServiceProvider"
```

build excel

```bash
php artisan schema:build-excel
```

## Review:

<img src="./assets/reademe/sample1.jpg" width="600px">

<img src="./assets/reademe/sample2.jpg" width="600px">