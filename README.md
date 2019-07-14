# php-mvc

What is it?
-----------

php-mvc project's purpose is to provide examples which implement MVC's original Smalltalk-80 architectural system 
as well as it is possible on single request/response php web application. Ultimate goal
is not to clone the Smalltalk version, but capture its spirit and perhaps help the big crowd understand 
the differencies between "Rails-inspired" "MVC" and the "real" MVC.

Project is hugely inspired by Tom Butler's blog, Callum Hopkins' article series on Sitepoint, Ph. D. Steve Burbeck's paper, Zeekat Software's article and Peter Michaux's Javascript MVC implementation
* [Model-View-Confusion part 1: The View gets its own data from the Model][tb-mvc]
* [The MVC Pattern and PHP, Part 1][ch-mvc]
* [Applications Programming in Smalltalk-80 (tm): How to use Model-View-Controller (MVC)][burbeck]
* [The Model View Controller pattern in web applications][zeekat]
* [Smalltalk MVC Translated to JavaScript][michaux]

Installation and usage
------------
php-mvc uses Composer's autoloader to simplify class loading. Make sure you have a working
[Composer][composer] in your development environment and after cloning this project, run `composer install`

Configure your preferred webserver (or use php's built in server: `php -S localhost:8081 -t public`) to use /public 
as webroot.

Contributors
------------

* [Jani Yli-Paavola][jylipaa]

License
-------

php-mvc is free software. See the LICENSE file for more information.

[tb-mvc]: https://r.je/views-are-not-templates.html
[ch-mvc]: https://www.sitepoint.com/the-mvc-pattern-and-php-1/
[burbeck]: http://www.math.sfedu.ru/smalltalk/gui/mvc.pdf
[zeekat]: https://zeekat.nl/articles/mvc-for-the-web.html
[michaux]: http://peter.michaux.ca/articles/smalltalk-mvc-translated-to-javascript
[jylipaa]: https://twitter.com/jylipaa
[composer]: https://getcomposer.org/doc/00-intro.md
