<?php
namespace animal;
use \Exception;
# Класс Cat со всеми методами и полямиб требуемыми по заданию 1 уровень. Основы PHP
class Cat
{
    private $age;
    private $name;
    private $isAlive;
    private $hairColor = [];
    private static $canFly = false;
    private const FAVOURITE_FOOD = 'Mouse';

    # Добавить описание классу и методам

    /**
     * Cat constructor.
     * @param $catName
     * @param $catAge
     */
    public function __construct($catName, $catAge,array $catHair)
    {
        $this->name = $catName;
        $this->age = $catAge;
        $this->hairColor = $catHair;
        $this->isAlive = true;
    }
    /**
     * Cat destructor.
     * @param $isAlive
     */
    public function __destruct()
    {
        $this->isAlive = false;
    }

    /**
     * Cat getAge
     * returns field age
     */
    public function isFly()
    {
        return self::$canFly;
    }
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Cat printCat
     * returns all fields of Cat
     * (was written as method for testing)
     */
    public function printCat()
    {
        echo $this->name. "   возвраст ". $this->age." ";
        foreach ($this->hairColor as $temp)
        {
            echo $temp." ";
        }
       echo "\n";
    }

    /**
     * Cat error
     * method throwing Exception
     */
    public function error ()
    {

        throw new Exception("That's my error");

    }


}
