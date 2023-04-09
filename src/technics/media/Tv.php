<?php
namespace src\technics\media;

class Tv
{
  public string $model;
  public string $color;
  public static bool $android = true;
  public string $country;

  public function __construct(string $model, string $color, string $country)
  {
    $this->model = $model;
    $this->color = $color;
    $this->country = $country;
  }

  public function getModelColor()
  {
    return $this->model . ' ' . $this->color;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public static function getAndroid()
  {
    return self::$android ? 'true' : 'false';
  }
}
