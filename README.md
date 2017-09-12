Backend application for Animus
==============================
This is a backend application which provides RestAPI to return list of Apartments, create new record, update and delete. Also, it provides an API method to send an email. 

## Used languages and technologies
- PHP 7.1
- Symfony 3.2
- Composer
- MySQL
- Doctrine
- Doctrine Migration
- RESTful API

## Used third-party libraries
- FOSRestBundle - a tool to help the job of creating a REST API with Symfony
- NelmioCorsBundle - allows to send Cross-Origin Resource Sharing headers with ACL-style per-URL configuration.
- DunglasAngularCsrfBundle - This API Platform and Symfony bundle provides Cross Site Request Forgery (CSRF or XSRF) protection for client-side applications using token generated on sever
- NelmioApiDocBundle
- DoctrineMigrationsBundle

## Installation
This installation works under Linux OS (Tested on Ubuntu 17). 

Run install.sh shell file using `./install.shell` command. 

After Installation, you can access to the main page using: http://localhost:8000

## Details

- General web pages: http://localhost:8000/apartments/web
- Restful API: http://localhost:8000/apartments/api
- API Documentation: http://localhost:8000/apartments/api/doc

