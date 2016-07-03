Factory Pattern
===============

Este repositório é uma demonstração do padrão de projeto Factory Method, conhecido também como método fábrica.

Intenção
--------

Definir uma interface para criar um objeto, mas deixar as subclasses decidirem que classe instanciar.

Aplicabilidade
--------------

Use o padrão Factory Method quando:
* uma classe não pode antecipar a classe de objetos que deve criam;
* uma classe quer que suas subclasses especifiquem os objetos que criam;

Implementação
-------------

* classes abstratas que postergam a criação de objetos para suas subclasses;
* classes com métodos fábricas parametrizados, permitindo que um único método fpabrica possa criar múltiplos objetos produto (uma variação também do padroão strategy).