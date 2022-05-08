<h1>Force SSL for Laravel</h1>
<p>A simple package to force SSL in Laravel applications.</p>

Just add to your `.env` file the following line in those environments where you want to skip it (by default it is `true`).

```sh
   FORCE_SSL_ENABLED=true
```

Or publish the config file and edit it from there.
```sh
   php artisan migratephp artisan vendor:publish --provider="MHMartinez\ForceSsl\Providers\ForceSslServiceProvider"
```