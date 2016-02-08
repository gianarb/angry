# Ungry
This library is based on true events racounted by @ocramius during your talk
"Defensive Programming".

This library is a funny collection of traits to stop each attack your classes.

## Install

```bash
composer install gianarb\ungry
```

## Getting Started
The best way to surving at bugs is stop to write code, but we can try to start
with a drop of unexpected features.

* Block class' clone use `GianArb\Ungry\Unclonable` trait.
* Block class' invoke use `GianArb\Ungry\Uninvoke` trait.
* Block class' invoke use `GianArb\Ungry\Unserializable` trait.
* Only for ungry developers `GianArb\Ungry\BigBang` trait.

Remember, the best way to write code is be lazy!
[http://blogoscoped.com/archive/2005-08-24-n14.html](http://blogoscoped.com/archive/2005-08-24-n14.html).
