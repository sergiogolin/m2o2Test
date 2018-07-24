# Ejercicio de entrevista técnica
:gb: [English version]

## Contexto

Gran parte de nuestro trabajo es hacer la vida más fácil a nuestros compañeros
que hacen aplicaciones (web o nativas). Para ello creamos APIs obteniendo
datos de terceros o propios.

Para este ejercicio tenemos que ayudar a nuestros compañeros a hacer una
aplicación de búsqueda y listado de recetas. 

## Requerimientos

Utilizando Clean Architecture y Symfony 4 (beta) sobre esta plantilla, crea dos
servicios:
* uno que permita buscar recetas en base una cadena de búsqueda
* uno que retorne los datos necesarios para pintar la lista de recetas de la
siguiente pantalla de la aplicación [Runtasty]:
  
![Runtasty recipe list][screenshot] 

Para obtener los datos de las recetas se utilizará la API de [RecipePuppy] con
JSON o XML.

Los servicios creados deben ser RESTful y tener como formato de salida JSON.
Elige los nombres para los endpoints, propiedades, etc que te parezcan más
adecuados y fáciles de tratar para las aplicaciones.

La solución del ejercicio debe ser enviada en un repositorio de GitHub, GitLab
o Bitbucket con el historial completo de git.

## Criterio de evaluación

* Que los servicios funcionen y devuelvan lo que se espera
* Uso de buenas prácticas de Symfony 4
* Cumplimiento de [PSR-1], [PSR-2] y [PSR-4]
* Puntos extra por uso de TDD y [git-flow]

## Notas sobre el ejercicio

* El ejercicio te llevará unas tres horas
* Eres libre de hacer las peticiones al API como más te guste. Nosotros
  utilizamos [Guzzle], pero usa lo que prefieras.

[English version]: README.md
[Runtasty]: https://play.google.com/store/apps/details?id=com.runtastic.android.runtasty.lite 
[screenshot]: runtasty-screenshot.png
[RecipePuppy]: http://www.recipepuppy.com/about/api/
[PSR-1]: http://www.php-fig.org/psr/psr-1/
[PSR-2]: http://www.php-fig.org/psr/psr-2/
[PSR-4]: http://www.php-fig.org/psr/psr-4/
[git-flow]: http://nvie.com/posts/a-successful-git-branching-model/
[Guzzle]: https://github.com/guzzle/guzzle