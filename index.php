<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>3 практика</title>
</head>

<body>

    <?php
    class Animal
    {

        public $вес, $возраст, $окрас;

        public function __construct($ves, $age, $color)
        {
            $this->вес = $ves;
            $this->возраст = $age;
            $this->окрас = $color;
        }
    }

    class Lion extends Animal
    {
        public $кот;

        public function __construct($ves, $age, $color, $cat)
        {
            parent::__construct($ves, $age, $color);
            $this->кот = $cat;
        }

        public function displayInfo()
        {
            return "Максимальный вес львов составляет {$this->вес} кг, 
       средний  возраст {$this->возраст} лет,
         шерсть имеет {$this->окрас} цвет, 
         а так же лев представляет семейство  {$this->кот} ";
        }

    }

    $lion = new Lion(200, 10, 'рыжий', 'кошачих');



    class Rubbit extends Animal
    {
        public $еда;

        public function __construct($ves, $age, $color, $food)
        {
            parent::__construct($ves, $age, $color);
            $this->еда = $food;
        }

        public function displayInfo()
        {
            return "Максимальный вес кроликов составляет {$this->вес} кг, 
       средний  возраст {$this->возраст} лет,
         шерсть имеет {$this->окрас}, 
         а так же кролики любят кушать  {$this->еда} ";
        }

    }


    $rab = new Rubbit(50, 5, 'серый', 'морковь');

    class Wolf extends Animal
    {
        public $луна;

        public function __construct($ves, $age, $color, $moon)
        {
            parent::__construct($ves, $age, $color);
            $this->луна = $moon;
        }

        public function displayInfo()
        {
            return "Максимальный вес волков составляет {$this->вес} кг, 
       средний  возраст {$this->возраст} лет,
         шерсть имеет {$this->окрас}, 
            {$this->луна} - вот что особенно будоражит  волков  ";
        }

    }

    $w = new Wolf(70, 6, 'серый', 'луна');?>


    <div class="e">
        <p><?php echo $lion->displayInfo(); ?></p>
        <p><?php echo $rab->displayInfo(); ?></p>
        <p><?php echo $w->displayInfo(); ?></p>

    </div>
</body>

</html>