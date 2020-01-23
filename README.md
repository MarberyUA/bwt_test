# btw_test project

The first step you should do it is $git clone!
```git
git clone /repository-link/
```

# Then you will have such dirs in base project dir:

applications/
---
blocks/
---
css/
---
libs/
---
.htaccess(file)
---
bwt_test.sql(file)
---
Er Diogram(file)
---
index.php(file)
---
README.md(file)
---
setting.php(file)
---

You just must to set up database connection settings in setting.php

Set up your host name:
```php
define('HOST', 'your host');
```
Set up your db user name:
```php
define('HOST_USER', 'your host user name');
```
Set up your db user password:
```php
define('HOST_USER_PASSWORD', 'your host user password');
```
Set up your db name:
```php
define('HOST_DB', 'your database name');
```