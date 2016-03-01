#SQL Injection Example (PHP)

A simple login page which is vulnerable to SQL injection as there is no sanitising of POST request variables.  

##Usage
Simply place the index page and SQLite database in a publicly accessible location.  The database contains one user with the username **admin** and password of **password**.

Alternatively, place this in any directory you wish and then spin up a PHP development server:
```
php -S localhost:8080 -t .
```

The login page will then be available at (http://localhost:/8080/)



