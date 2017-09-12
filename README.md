Backend application for Animus
==============================
This is a backend application build on Symfony 3.1 PHP freamework. It provides RestAPI to return list of Apartments, create new record, update and delete. Also, it provides an API method to send an email. 

## Requirements
The following software are necessary to run the Installation and the app:
- WebServer (Apache2, Ngix etc)
- PHP 7
- MySql
- Composer
- Symfony web framework requirement must be fullfilled as an app is built on Symfony. In order to to check the Symfony requiremnt, please copy the project to the localhost directory of the webserver and go to the following URL before installation to check whether the system meet the requirement: 
http://localhost/animus--backend/web/config.php


## Installation
This installation works under Linux OS (Tested on Ubuntu 17). 

Run install.sh shell file using `./install.shell` command. 

After Installation, you can access to the main page using: http://localhost:8000


## Used languages and technologies
- PHP 7.1
- Symfony 3.2
- Composer
- MySQL
- Doctrine
- Doctrine Migration
- RESTful API

## Used third-party libraries
- *FOSRestBundle* - a tool to help the job of creating a REST API with Symfony
- *NelmioCorsBundle* - allows to send Cross-Origin Resource Sharing headers with ACL-style per-URL configuration.
- *DunglasAngularCsrfBundle* - This API Platform and Symfony bundle provides Cross Site Request Forgery (CSRF or XSRF) protection for client-side applications using token generated on sever
- *NelmioApiDocBundle* - allows you to generate a decent documentation for APIs
- *DoctrineMigrationsBundle* -  offers the ability to programmatically deploy new versions of your database schema in a safe, easy and standardized way.


## Details

- General web pages: http://localhost:8000/apartments/web
- Restful API: http://localhost:8000/apartments/api
- API Documentation: http://localhost:8000/apartments/api/doc

