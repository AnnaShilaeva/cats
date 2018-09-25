<?php
include 'Cat.php';
use animal\Cat;
# Класс CatActions содержит вcе задания 1 уровень. Основы PHP
class  СatActions
{
    private $catList = [];
    private $countCat = 0;
    private $catAges = [];
    private $allCates = 7;
    private const BEGIN_INDEX = 1;
    private const END_INDEX = 100;
    private const DIVIDER = 29;
    # Создаем массив объектов Cat, в который через цикл добавляем 5 новых объектов Cat с различными значениями age. Остальные параметры конструктора могут быть одинаковыми.
    public function createCats ()
    {
        for ($i = 0; $i < $this->allCates; $i++) {
            $this->catList[] = new Cat("Вася", $i + 1, ["белый", "с пятнышком"]);
        }
    }

    # Выводим в консоль сумму и произведение возрастов всех котов в массиве. Cчитаем котиков, возраст которых больше 3х

    /**
     *
     */
    public function countSumAndMultyplicationOfAges ()
    {
        $requiredAge = 3;
        $sumOfAges = 0;
        $multiplicationOfAges = 1;
        foreach ($this->catList as $cat) {
            $tempAge = $cat->getAge();
            $sumOfAges += $tempAge;
            $multiplicationOfAges *= $tempAge;
            if ($tempAge > $requiredAge) {
                $this->catAges[] = $tempAge;
                $this->countCat++;
            }
        }
        echo "Cумма возрастов всех котиков: " . $sumOfAges . "\n";
        echo "Произведение возрастов всех котиков: " . $multiplicationOfAges . "\n";
    }

/*    Выводим в консоль информацию о том, есть ли в массиве котов хотя бы один кот с возрастом больше 3.
    Если их несколько, то необходимо вывести сумму квадратных корней их возрастов*/
    public function countOldCats ()
    {
        if ($this->countCat == 0) {
            echo "Нет котов, возраст которых больше 3";
        } elseif ($this->countCat == 1) {
            echo "Есть только один кот старше 3-х лет";
        } else {
            $resultOfAges = 0;
            foreach ($this->catAges as $age) {
                $resultOfAges += sqrt($age);
            }
            echo "Cумма квадратных корней возрастов: " . $resultOfAges . "\n";
        }
    }

    # Перехват исключения для случайного кота
    public function catchException ()
    {
        try
        {
            $randomCat = $this->catList[rand(0, $this->allCates - 1)];
            $randomCat->error();;
        }
        catch (Exception $e)
        {
            echo "Выброшено исключение: " . $e->getMessage() . "\n";
        }

    }

    /*Цикл, вложенный в цикл. Каждый цикл проходит по индексам от 1 до 100.
    В теле внутреннего цикла если произведение индексов циклов без остатка делится на 29,
    то код должен выходить из циклов через конструкцию goto*/
    public function checkGoTofunction ()
    {
        for ($i = self::BEGIN_INDEX; $i <= self::END_INDEX; $i++) {
            for ($j = self::BEGIN_INDEX; $j <= self::END_INDEX; $j++) {
                if (fmod($i * $j, self::DIVIDER) == 0) {
                    goto end;
                }
            }
        }
        end: 
    }

    #Проверяем значение canFly класса Cat и выводим сообщение о том, может ли кот летать.
    public function isCatCanFly ()
    {
       echo ($this->catList[0]->isFly()== true) ? "Кот может летать" : "Кот не может летать";
    }
}