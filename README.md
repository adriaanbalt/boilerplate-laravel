# Boilerplate to build Laravel websites

Building Laravel PHP websites using MySQL

## Setup Database Commands: 

Use SequelPro to remove all tables.

-- OR -- in mySQL

```
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE all;
SET FOREIGN_KEY_CHECKS = 1;
```

Then..

```composer dump-autoload```

```php artisan migrate```

```php artisan db:seed```
