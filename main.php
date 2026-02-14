<?php

class Animal {
    function __construct($name=NULL , $food=NULL) {
        $this->name = $name ?: "UNNAMED";
        $this->food = $food ?: "UNDEFINED";
    }

    function render($parametro=NULL) {

        echo "<hr><br>";
        if (gettype($parametro)) {
            echo "EL PARAMETRO EXISTE y es de tipo ".gettype($parametro);
        }

        echo sprintf("<div>Animal %s</div>", $this->name);
        if ($parametro !== NULL) {
            echo sprintf("<div>mote: %s</div>", $parametro);
        }
    }

    function eat() {
        echo sprintf("<div>%s come %s</div>", $this->name, $this->food);
    }
}


$animales = [
    new Animal("Toby", "Pienso"),
    new Animal("Misifú", "Ratones"),
    new Animal("Paco")
];

shuffle($animales);

foreach ($animales as $animal) {
    $animal->render($animal->name == "Misifú");
    $animal->eat();
}

echo "<br><br><br>";
echo "<hr><hr><hr>";
echo "<br><br><br>";

for ($i = 0; $i < sizeof($animales); $i++) {
    $animales[$i]->render($animales[$i]->name == "Misifú");
    $animales[$i]->eat();
}
