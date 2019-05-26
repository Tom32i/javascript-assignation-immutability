<?php

class Bar {

}

class Foo
{
  public const FOO = new Bar();
}

var_dump(Foo::FOO[0]);

Foo::FOO[0] = $value;

var_dump(Foo::FOO[0]);
