Silex Couchbase Driver Provider
================

Installation
------------

Create (or add to your) composer.json in your projects root-directory::

    {
        "require": {
            "leongkui/silex-couchbase": "*"
        }
    }

and run::

    curl -s http://getcomposer.org/installer | php
    php composer.phar install

This is just a silex provider module for couchbase driver, you will need to setup couchbase (http://www.couchbase.com/download) and install couchbase PHP driver (pecl install couchbase).


Example
----------------

Check out simple example under "example" directory.

License
-------

'silex-couchbase' is licensed under the MIT license.
