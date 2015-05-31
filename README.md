# Boilerplate to build Laravel websites

Building Laravel PHP websites using MySQL

## Setup Database Commands: 

### Sequel Pro

A helpful GUI database management tool for Apple:  (SequelPro)[http://www.sequelpro.com/]


### MySQL

Console based MySQL controls

```
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE all;
SET FOREIGN_KEY_CHECKS = 1;
```

## Artisan / Composer

Clear composer to make sure that all new PHP files have been accounted for when running artisan.

```
$ composer dump-autoload
```

To rebuild the databases with artisan.

```
$ php artisan migrate
$ php artisan db:seed
```

## Installation

* Install Homebrew
* Install josegonalez-php
* Install php5*
* Install Composer
* Install Artisan
* Setup vhosts in Apache HTTPD.CONF