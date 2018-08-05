# Laravel Blog
![demo](https://raw.githubusercontent.com/kenhyuwa/blog-laravel/master/demo-dekstop.gif)  

## Available
- [x] Render pre code with highlightjs
- [x] Get data packages from packagist API

## Install at local
Open Terminal, then type command:  
> git clone https://github.com/kenhyuwa/blog-laravel.git

Go to project folder :
```bash
cd blog-laravel
```

Type following command : 
```bash
php artisan migrate
php artisan voyager::install
```

If you need data dummy, you have type following command:
```bash
php artisan voyager::install --with-dummy
```

then 
```bash
php artisan serve
```

Login page can be access to:
http:localhost:8000/p/kenhyuwa/dashboard

you can change this path. open file on config/voyager.php and change following line:

```php
'prefix' => 'p/kenhyuwa/dashboard',
```

by default user is:
- email: admin@admin.com
- password: password

## Donate
Give me a star

##  Special thanks for 
- https://packagist.org
- https://laravelvoyager.com
- https://highlightjs.org

## License
MIT
