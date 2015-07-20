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
Welcome to CakePHP v3.0.9 Console
---------------------------------------------------------------
App : src
Path: /Users/nick/myproject/cake3-controller-test-sample/src/
---------------------------------------------------------------
         Method          URI Pattern       Controller/Action
---------------------------------------------------------------
            GET                    /            Pages/display
---------------------------------------------------------------
            GET        /api/v1/posts            Posts/index
---------------------------------------------------------------
           POST        /api/v1/posts            Posts/add
---------------------------------------------------------------
            GET    /api/v1/posts/:id            Posts/view
---------------------------------------------------------------
      PUT,PATCH    /api/v1/posts/:id            Posts/edit
---------------------------------------------------------------
         DELETE    /api/v1/posts/:id            Posts/delete
---------------------------------------------------------------
```

## Todo
 - remove config/routes.php
 - check route extensions
 - check Plugin Routes
 
## About this plugin infomation (Japanese)
[http://webuilder240.github.io/2015/07/cake-console-routes/](http://webuilder240.github.io/2015/07/cake-console-routes/)
