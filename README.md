# Tempest App

This project serves as a boilerplate for PHP applications built with
[Tempest](https://github.com/ascensionwd/tempest) by providing a project
structure that best fits the way Tempest is intended to be used.

To use it, simply run Composer's `create-project` command:

    $ composer create-project ascensionwd/tempest-app my-app -s dev

This will create a new Tempest application in a new folder `my-app`.

## Unit Testing

Unit testing is built into the template with PHPUnit. You can write tests within
`tests`, whose contained classes should sit in the `Tests` namespace. To run
the tests, simply:

    $ vendor/bin/phpunit