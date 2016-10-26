Angry
=====

This library is a collection of traits to stop mis-use of your classes.
Based on @ocramius talk "Defensive Programming".


Installation
------------

```bash
composer install gianarb/angry "^1.0"
```


Getting Started
---------------

* Block `clone` of a class use `GianArb\Angry\Unclonable` trait.
* Block invoking of a class e.g. `$className();` use `GianArb\Angry\Uninvokable` trait.
* Block serialization of a class use `GianArb\Angry\Unserializable` trait.
* Block all of the above use `GianArb\Angry\ClassDefence` trait.

Remember: the best way to write code is be lazy!
[http://blogoscoped.com/archive/2005-08-24-n14.html](http://blogoscoped.com/archive/2005-08-24-n14.html).
