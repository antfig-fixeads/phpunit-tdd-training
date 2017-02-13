# PHPUnit Training Project - TDD

> Simple project to use TDD

## Exercise

### Auction
- A user has a name and an email
- The email must be unique for all users
- An auction has a description, an start date, an end data, a seller, a starting price
- A user cannot bid on his/her own auction

### Rules of the game
- Pair programing
- Test-driven (TDD)
- Useful --testdox output
- 100% code coverage
- No database
- No HTML
- No Server
- Use value objects
- There are hidden / implicit requirements


## How to use

- Clone this repo and enter it
- Install the **dependencies** (https://getcomposer.org/download/)
```
composer install
```

- Run the tests

```
vendor/bin/phpunit --colors
```

- See Coverage: (Open index.html in coverage folder)

```
vendor/bin/phpunit --coverage-html coverage
```

- See TestDox

```
vendor/bin/phpunit --testdox
```
or in html format
```
vendor/bin/phpunit --testdox-html dox.html
```