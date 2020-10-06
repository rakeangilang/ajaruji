<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Panduan Instalasi

- Nyalakan xampp untuk Windows / buat folder baru di ```var/www/html``` untuk Linux
- ```git clone https://github.com/rakeangilang/ajaruji.git```
- ```composer install```
- Buat database mysql bernama 'ajaruji', lalu jalankan ```php artisan migrate```. atau Import file ajaruji.sql di folder /database
- ```php artisan key:generate```
- ```php artisan serve```

## Akses Page
- localhost:8000/ -> Landing Page
- localhost:8000/admin/navbar -> CMS

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
