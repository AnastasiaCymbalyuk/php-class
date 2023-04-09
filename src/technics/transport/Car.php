<?php
namespace src\technics\transport;

class Car
{
  public string $model;
  public string $color;
  public static string $type = 'car';
  public string $country;

  public function __construct(string $model, string $color, string $country)
  {
    $this->model = $model;
    $this->color = $color;
    $this->country = $country;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public static function getType()
  {
    return self::$type;
  }
}
