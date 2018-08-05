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
cp .env.example .env
```

setup config on .env file
```php 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog // yourdatabase, create if not exist
DB_USERNAME=root // user for database by default is root
DB_PASSWORD= // password for database by default is : empty
```

then 
```bash
php artisan key:generate
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

If you get an error, open posts tables and on field category_id update row reference by categories tables.
Important, you need connect to internet for getting data from packagist API

## Donate
Give me a star

##  Special thanks for 
- https://packagist.org
- https://laravelvoyager.com
- https://highlightjs.org
- all 

## License
MIT
