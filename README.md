## Sirius PHP Framework

[![License](http://poser.pugx.org/laravel/framework/license.svg)](http://ohworkit.com/sirius)

Sirius is a miniature of web application framework. Usage as laravel, but is small, fast framework.Only provide routing, blade templates, database operations, Memcache and Redis operation function

### Install

To install with composer:

```
composer require ohworkit/sirius
```

### Usage

bootstrap.php

```
// BASE_PATH
define('BASE_PATH', __DIR__);

// Autoload
require BASE_PATH.'/vendor/autoload.php';

$app = new Sirius\Sirius();
$app->run();
```

More [Sirius Demo](https://github.com/ohworkit/SiriusDemo)

### Framework require


#### Route

use FastRoute - Fast request router for PHP 

[how to use FastRoute](https://github.com/nikic/FastRoute)

#### View Engine

Use the simple and yet powerful Laravel Blade templating engine as a standalone component

[about philo/laravel-blade](https://github.com/PhiloNL/Laravel-Blade)

You can use all blade features as described in the Laravel 5 documentation: [http://laravel.com/docs/templates#blade-templating](http://laravel.com/docs/templates#blade-templating)


#### Illuminate Database

The [Illuminate Database component](https://github.com/illuminate/database) is a full database toolkit for PHP, providing an expressive query builder, ActiveRecord style ORM, and schema builder. It currently supports MySQL, Postgres, SQL Server, and SQLite. It also serves as the database layer of the Laravel PHP framework.

For further documentation on using the various database facilities this library provides, consult the [Laravel framework documentation](http://laravel.com/docs).

#### Memcached

config.

```
"memcache" => array(
    "default" => array(
        "servers" => [
            array("127.0.0.1",11211,5),
            //array(host,port,weight),
        ],
        "persistent_id" => null,
        "options" => array(
            Memcached::OPT_LIBKETAMA_COMPATIBLE => true,
            Memcached::OPT_PREFIX_KEY => "sirius:"
        ),
    ),
),
```


use.

```
//by default
Cache::set($key,$value,$expire);
Cache::get($key);

//has other instance
Cache::connection("other config name")->set($key,$value,$expire);
Cache::connection("other config name")->get($key);
```
    
#### Redis

[Predis](https://github.com/nrk/predis)

Flexible and feature-complete PHP client library for Redis [https://github.com/nrk/predis/wiki](https://github.com/nrk/predis/wiki)

config. [more](https://github.com/nrk/predis)

```
"redis" => array(
     "default" => array(
         "parameters" => [
             'tcp://127.0.0.1?alias=master',
             //'tcp://10.0.0.2?alias=slave-01'
         ],
         "options" => [
             //'replication' => true,
             "prefix" => "sirius:",
         ],
     ),
 ),
```

use.

```
//by default
SiriusRedis::set($key,$value,$expire);
SiriusRedis::get($key);

//has other instance
SiriusRedis::connection("other config name")->set($key,$value,$expire);
SiriusRedis::connection("other config name")->get($key);
```

### Webbench

same web server

#### Sirius

``siege -c 500 -t 20s http://sirius.ohworkit.com/``

```

Transactions:		        8997 hits
Availability:		       99.91 %
Elapsed time:		       19.16 secs
Data transferred:	        1.13 MB
Response time:		        0.40 secs
Transaction rate:	      469.57 trans/sec
Throughput:		        0.06 MB/sec
Concurrency:		      189.91
Successful transactions:        8997
Failed transactions:	           8
Longest transaction:	       15.87
Shortest transaction:	        0.15
```

#### vs Laravel 5

``siege -c 500 -t 20s http://laravel.ohworkit.com/``

`disable session`

```
Transactions:		         465 hits
Availability:		       26.74 %
Elapsed time:		       19.99 secs
Data transferred:	        0.23 MB
Response time:		        2.66 secs
Transaction rate:	       23.26 trans/sec
Throughput:		        0.01 MB/sec
Concurrency:		       61.81
Successful transactions:         465
Failed transactions:	        1274
Longest transaction:	       15.33
Shortest transaction:	        0.17
```

#### vs Phalcon 2

``siege -c 500 -t 20s http://phalcon.ohworkit.com/``

```
Transactions:		       11034 hits
Availability:		      100.00 %
Elapsed time:		       19.67 secs
Data transferred:	        2.96 MB
Response time:		        0.28 secs
Transaction rate:	      560.96 trans/sec
Throughput:		        0.15 MB/sec
Concurrency:		      155.34
Successful transactions:       11034
Failed transactions:	           0
Longest transaction:	       11.33
Shortest transaction:	        0.13
```

### License

The Sirius framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
