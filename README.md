
# Mailing web application

Contains simple contact form, which allows user submit messages (insert them into the database), display them.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites
PHP 7.2.12

PHPStorm

Composer

Xampp

PHPUnit

SQLite3


### Installing

1. Download files or clone "mail" repository. 

2. Download and install Xampp. In ..\xampp\htdocs directory create a folder called "mailing". Copy project files into newly created ..\xampp\htdocs\mailing folder.

3. Initiate composer with composer init from ..\xampp\htdocs\mailing, make sure composer.json contains 	

"require-dev": {
        "phpunit/phpunit": "^7.0"
    }
    

4. Start Apache server

5. In browser of your choice go to "localhost\mailing"


## Running the tests
Test folder is located in "tests\unit" directory.

## Versioning

We use feature branch workflow.

## Authors

* **Maryna Kovalenko** 

