# Boilerplate to build Laravel websites

Building Laravel PHP websites using MySQL

## Setup Database Commands: 

A helpful GUI database management tool for Apple:  (SequelPro)[http://www.sequelpro.com/]

Alternatively, in mySQL

```
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE all;
SET FOREIGN_KEY_CHECKS = 1;
```

Then..

```
$ composer dump-autoload
$ php artisan migrate
$ php artisan db:seed
```
