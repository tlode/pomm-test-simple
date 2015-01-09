### Setup

1) Edit `.pomm_cli_bootstrap.php`\: setup db config

2)
```sh
$ createdb pomm_test_simple
$ cat sql/init.sql | psql pomm_test_simple
$ composer install
$ php index.php

```
