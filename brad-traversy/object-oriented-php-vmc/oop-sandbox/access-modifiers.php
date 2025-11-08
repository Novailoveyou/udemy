<?php
class User
{
  protected $name;
  private $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  // public function getName()
  // {
  //   return $this->name;
  // }

  // public function setName($name)
  // {
  //   $this->name = $name;
  // }

  public function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value)
  {

    if (property_exists($this, $property)) {
      return $this->$property = $value;
    }

    return $this;
  }
}

$user1 = new User('Nover', 20);

// echo $user1->name .'';
// $user1->name = '';

// echo $user1->getName();

echo $user1->__get('name');
echo $user1->__set('age', 21);

class Customer extends User {}
