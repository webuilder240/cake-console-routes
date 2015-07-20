# CakeConsoleRoutes plugin for CakePHP

CakeConsoleRoutes is like a "rake routes" command for CakePHP3

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

``` bash
composer require webuilder240/cake-console-routes --dev
```

## Configuration

Set the CakeConsoleRoutes in bootstrap_cli.php

config/bootstrap_cli.php

``` php
	if (Configure::read('debug')) {
		Plugin::load('CakeConsoleRoutes');
	}
```

## Usage

``` bash
bin/cake routes
```

## Example

``` bash
Airnick:cake3-controller-test-sample nick$ bin/cake routes
         Method  URI Pattern           Controller/Action     extensions
            GET  /                     Pages/display         none
            GET  /api/v1/posts         Posts/index           json,xml
           POST  /api/v1/posts         Posts/add             json,xml
            GET  /api/v1/posts/:id     Posts/view            json,xml
      PUT,PATCH  /api/v1/posts/:id     Posts/edit            json,xml
         DELETE  /api/v1/posts/:id     Posts/delete          json,xml
```

## Todo
 - remove config/routes.php
 - ~~check route extensions~~
 - check Plugin Routes
 
## About this plugin infomation (Japanese)
[http://webuilder240.github.io/2015/07/cake-console-routes/](http://webuilder240.github.io/2015/07/cake-console-routes/)
