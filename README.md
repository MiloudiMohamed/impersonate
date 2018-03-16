# Impersonate package for Laravel.
Flexible impersonating Laravel package.

## stage 1

first of all pull the package through Composer.

```bash
composer require devmi/impersonate
```

Next, if you're using older  Laravel version than 5.5, include the service provider within your `config/app.php` file.
(otherwise ignore this step)

```php
'providers' => [
    Devmi\Impersonate\ImpersonateServiceProvider::class,
];
```

## Stage 2

Add the middleware to `App\Http\Middleware\Kernel.php`

```php
protected $middlewareGroups = [
    ...
    \Devmi\Impersonate\Middleware\Impersonate::class,
]
```
## Stage 3
Public the configuration so you can custom this package depending on your needs.

```bach
php artisan vendor:publich --tag=impersonate
```

The file generated would be found under `config/impersonate.php`

# Usage

You can visit `http://your-domain/admin/impersonate`.


Enter the user email address you want to impersonate and you're done.

### Note
> `@impersonating` blade directive is already provided so you can display `stop impersonating`  button to quit the impersonation.

> Hit ```route('impersonate.destroy')``` to destroy your impersonation session.


That's it.

# Contributing

PR's are very welcome, Thanks.


