Стратегия
============

Назначение
------------

Определение семейства алгоритмов, в котором каждый алгоритм легко заменяется в зависимости от нужд клиента.

Мотивация
------------

Если существует много алгоритмов, для реализации нужного нам функционала, но не все будут использоваться или нужно будет добавлять новые или убирать старые, 
то паттерн стратегия как нельзя лучше подходит для этой роли.


Когда можно использовать
------------

1. Если есть родственные классы, отличающиеся только поведением
2. Несколько различных способов реализовать один функционал

Результат
------------

+ Использование семейства классов (добавление, удаление, поддержка алгоритмов)
+ Избавление от условных операторов в классе, для выбора алгоритма
+ Выбор реализации

- Не использование всей информации передаваемой стратегии.
- Увеличение числа объектов


Реализация 
-----------

Пример про сортировки.


Вывод
------------

Имеются разные реализации одного и того же функционала, можем использовать стратегию для выбора, что позволит нам избавиться от кучи ненужных вещей в нашем классе( типа определения алгоритмов, выбор их и т.д.)
 