<?php
include_once __DIR__.'\src\human\Student.php';
include_once __DIR__.'\src\technics\transport\Car.php';
include_once __DIR__.'\src\technics\media\Tv.php';
include_once __DIR__ . '\vendor\autoload.php';
use src\human\Student;
use src\technics\transport\Car;
use src\technics\media\Tv;

echo '___' . PHP_EOL;
$stud = new Student('Tomb', 'Raider', 20);
echo 'Имя и фамилия: ' . $stud->getFullName() . PHP_EOL;
echo 'Возраст: ' . $stud->getAge() . PHP_EOL;
echo 'Статус: ' . $stud->getStatus() . PHP_EOL;

echo '___' . PHP_EOL;
$car = new Car('Toyota Camry', 'Red', 'Japan');
echo 'Модель: ' . $car->getModel() . PHP_EOL;
echo 'Цвет: ' . $car->getColor() . PHP_EOL;
echo 'Страна: ' . $car->getCountry() . PHP_EOL;
echo 'Тип: ' . $car->getType() . PHP_EOL;

echo '___' . PHP_EOL;
$tv = new Tv('TV A2', 'black', 'China');
echo 'Цвет и модель: ' . $tv->getModelColor() . PHP_EOL;
echo 'Страна: ' . $tv->getCountry() . PHP_EOL;
echo 'Андройд: ' . $tv->getAndroid() . PHP_EOL;