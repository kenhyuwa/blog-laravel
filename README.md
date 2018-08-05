# react-native-login-screen
![demo](https://raw.githubusercontent.com/kenhyuwa/blog-laravel/master/demo-dekstop.gif)  

## Available
- [x] Render pre code with highlightjs
- [x] Get data packages from packagist API

## Install at local
Open Terminal, then type command:  
> git clone https://github.com/kenhyuwa/blog-laravel.git

Go to project folder :
> cd blog-laravel

Type following command : 
> php artisan migrate
> php artisan voyager::install

If you need data dummy, you have type following command:
> php artisan voyager::install --with-dummy

then 
> php artisan serve

Login page can be access to url [http:localhost:8000/p/kenhyuwa/dashboard](Login)
you can change this path. open file on config/voyager.php and change following line:

```php
'prefix' => 'p/kenhyuwa/dashboard',
```

by default user is:
email: admin@admin.com 
password: password

## Donate
Give me a star

##  Special thanks for 
- [x] [https://packagist.org](Packagist)
- [x] [https://laravelvoyager.com](Laravel voyager)
- [x] [https://highlightjs.org](highlight.js)

## License
MIT
