# POO ON PHP

para definir una clase en PHP se utiliza la parabra reservada class

```php
/**
 * User class
 */
class User
{
    public $type;
}
```

para definir un objeto a partir de una clase se utliza la palabra reservada new

```php
/**
 * Definiendo un objeto
 */
$user = new User()
```

## Propiedades y metodos

Las propiedades son variables y los metodos son funciones

```php
class Person
{
    public $name; // Propiedad

    public function greet() // Metodo
    {
        return "Hello $this->name";
    }
}
```

## Extends

Las clases pueden extender de otra y de esta forma heredar las propiedades de la clase padre

```php
class Admin extends Person
{
    public $name = 'Admin';
}
```
