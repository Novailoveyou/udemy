<?php
// Define a class
class User
{
  // Properties (attributes)
  public $name = 'Nova';

  // Methods (functions)
  public function greet()
  {
    return $this->name . ' Says Hello';
  }
}

// Instatitate a user object from the user class
$user1 = new User();

$user1->name = 'Love';
echo $user1->name;

echo '<br>';

echo $user1->greet();

echo '<br>';

// Create new user

$user2 = new User();

$user2->name = 'Lower';
echo $user2->name;
echo '<br>';
echo $user2->greet();
