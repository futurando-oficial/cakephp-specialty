# Specialty plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

Install Plugin to the Vendors Folder
```
composer require futurando-oficial/cakephp-specialty
```
Load into cakephp the plugin
```
bin/cake plugin load Specialty
```
Create Table onto de database
```
bin/cake migrations migrate -p Specialty
```
Insert Seeds onto database
```
bin/cake migrations seed -p Specialty
```