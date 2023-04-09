<?php
namespace src\human;

class Student
{
  public string $name;
  public string $surname;
  public static string $status = 'student';
  public int $age;

  public function __construct(string $name, string $surname, int $age)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
  }

  public function getFullName()
  {
    return $this->name . ' ' . $this->surname;
  }

  public function getAge()
  {
    return $this->age;
  }

  public static function getStatus()
  {
    return self::$status;
  }
}
