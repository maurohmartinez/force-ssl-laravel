<h1>Force SSL for Laravel</h1>

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-packagist]

<p>A simple package to force SSL in Laravel applications.</p>

Just add to your `.env` file the following line in those environments where you want to skip it (by default it is `true`).

```sh
   FORCE_SSL_ENABLED=true
```

Or publish the config file and edit it from there.
```sh
   php artisan migratephp artisan vendor:publish --provider="MHMartinez\ForceSsl\Providers\ForceSslServiceProvider"
```

[ico-version]: https://img.shields.io/packagist/v/maurohmartinez/force-ssl-laravel.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/maurohmartinez/force-ssl-laravel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/maurohmartinez/force-ssl-laravel