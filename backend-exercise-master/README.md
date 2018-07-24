# Coding exercise for technical interview
:es: [Spanish version]

## Context

An important part of our jobs is to make the lives of our app (web or native)
developer colleagues easier. To do that we craft APIs retrieving data from third
parties or our own.

For this exercise we will be helping our teammates to develop an application
to search and list some recipes.

## Requirements

Using Clean Architecture and Symfony 4 (beta) and this template, create two
services:
* one that allows to find for recipes using a user-provided search query
* one that returns the necessary data to feed the recipe list as shown in the
  following screenshot of the app [Runtasty]:
  
![Runtasty recipe list][screenshot] 

The recipe data will be obtained from the [RecipePuppy] API using either
JSON or XML.

The crafted services should be RESTful and output JSON data. Choose the names
you find appropiate and easy to use for the endpoint routes, properties, etc.

The proposed solution must be send as a GitHub, GitLab or Bitbucket repository
with full git commit history.

## Evaluation criteria

* The services work and return what is expected of them
* Symfony 4 Best Practices are used and respected
* [PSR-1], [PSR-2] and [PSR-4] compliance
* Bonus points for using TDD and [git-flow]

## Some notes on the exercise

* The exercise will take about three hours
* You are free to make the API requests the way you like. We do use [Guzzle],
  choose whatever you are comfortable with.

[Spanish version]: README.es.md
[Runtasty]: https://play.google.com/store/apps/details?id=com.runtastic.android.runtasty.lite 
[screenshot]: runtasty-screenshot.png
[RecipePuppy]: http://www.recipepuppy.com/about/api/
[PSR-1]: http://www.php-fig.org/psr/psr-1/
[PSR-2]: http://www.php-fig.org/psr/psr-2/
[PSR-4]: http://www.php-fig.org/psr/psr-4/
[git-flow]: http://nvie.com/posts/a-successful-git-branching-model/
[Guzzle]: https://github.com/guzzle/guzzle