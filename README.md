# Angry
This library is based on true events racounted by @ocramius during your talk
"Defensive Programming".

This library is a funny collection of traits to stop each attack your classes.

## Install

```bash
composer install gianarb\angry
```

## Getting Started
The best way to surving at bugs is stop to write code, but we can try to start
with a drop of unexpected features.

* Block class' clone use `GianArb\Angry\Unclonable` trait.
* Block class' invoke use `GianArb\Angry\Uninvoke` trait.
* Block class' invoke use `GianArb\Angry\Unserializable` trait.
* Only for ungry developers `GianArb\Angry\BigBang` trait.

Remember, the best way to write code is be lazy!
[http://blogoscoped.com/archive/2005-08-24-n14.html](http://blogoscoped.com/archive/2005-08-24-n14.html).
