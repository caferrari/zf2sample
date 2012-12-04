caferrari Skeleton Application
==============================

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2.


Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project caferrari/zf2sample project_name

Alternately, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone git://github.com/caferrari/zf2sample.git ZendSkeletonApplication
    cd ZendSkeletonApplication
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Database
--------

It user the Postgres database.

In order to use this application you must create a pgsql database and restore the database.sql file into it.

Then you need to rename the file config/autoload/doctrine_orm.local.php.dist to config/autoload/doctrine_orm.local.php and change the parameters to connect to your database

Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!
