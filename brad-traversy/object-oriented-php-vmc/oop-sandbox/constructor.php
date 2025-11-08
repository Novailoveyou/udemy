<?php
class User
{
  public $name;
  public $age;

  public function __construct($name, $age)
  {
    echo 'Class' .  __CLASS__ . ' instantiated<br>';
    $this->name = $name;
    $this->age = $age;
  }

  public function __destruct()
  {
    echo 'User ' . $this->name . ' destroyed';
  }

  public function greet()
  {
    return $this->name . ' says Hello';
  }
}

$user1 = new User('Nova', 28);

echo $user->name . ' is ' . $user1->age . ' years old';
echo $user1->greet();
