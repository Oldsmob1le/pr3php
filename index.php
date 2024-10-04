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
        public $weight, $age, $color;

        public function __construct($weight, $age, $color)
        {
            $this->weight = $weight;
            $this->age = $age;
            $this->color = $color;
        }
    }

    class Lion extends Animal
    {
        public $family;

        public function __construct($weight, $age, $color, $family)
        {
            parent::__construct($weight, $age, $color);
            $this->family = $family;
        }

        public function displayInfo()
        {
            return "Максимальный вес львов составляет {$this->weight} кг, средний возраст {$this->age} лет, шерсть имеет цвет {$this->color}, и они принадлежат семейству {$this->family}";
        }
    }

    $lion = new Lion(200, 10, 'рыжий', 'кошачих');

    class Rabbit extends Animal
    {
        public $food;

        public function __construct($weight, $age, $color, $food)
        {
            parent::__construct($weight, $age, $color);
            $this->food = $food;
        }

        public function displayInfo()
        {
            return "Максимальный вес кроликов составляет {$this->weight} кг, средний возраст {$this->age} лет, шерсть имеет цвет {$this->color}, и они любят кушать {$this->food}";
        }
    }

    $rabbit = new Rabbit(50, 5, 'серый', 'морковь');

    class Wolf extends Animal
    {
        public $likes;

        public function __construct($weight, $age, $color, $likes)
        {
            parent::__construct($weight, $age, $color);
            $this->likes = $likes;
        }

        public function displayInfo()
        {
            return "Максимальный вес волков составляет {$this->weight} кг, средний возраст {$this->age} лет, шерсть имеет цвет {$this->color}, и они особенно любят {$this->likes}";
        }
    }

    $wolf = new Wolf(70, 6, 'серый', 'луну');
    ?>

    <div class="animals">
        <p><?php echo $lion->displayInfo(); ?></p>
        <p><?php echo $rabbit->displayInfo(); ?></p>
        <p><?php echo $wolf->displayInfo(); ?></p>
    </div>

    </div>
</body>

</html>