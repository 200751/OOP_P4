<?php

class Shoe 
{
    public $color;
    public $size;
    public $height;
    public $brand;
    public $material;

    public function __construct($color, $size, $height, $brand, $material)
    {
        $this->color = $color;
        $this->size = $size;
        $this->height = $height;
        $this->brand = $brand;
        $this->material = $material;
    }
    public function super() {
        print "The brand is {$this->brand}, the color is {$this->color} and the size is {$this->size}.";
        print "<br>";
        print "The upper part of the shoes are made {$this->material}.";
        print "<br>";
    }
}
class Sneaker extends Shoe
{
    public $laces;
    public $typeOfShoe;
    public $height;

    public function __construct($laces, $typeOfShoe, $height)
    {
        $this->laces = $laces;
        $this->typeOfShoe = $typeOfShoe;
        $this->height = $height;
    }
    public function kindOfShoe() {
        print "These are {$this->typeOfShoe}.";
        print "<br>";
        print "These {$this->typeOfShoe} are {$this->height} cm tall.";
        print "<br>";
    }
    public function laces() {
        print "Do they have laces? ";
        if ($this->laces == true)
        {
            print "Yes.";
            print "<br>";
        } else {
            print "No.";
            print "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="container">
        <main>
            <div id="adidas">
                <?php
                    $adidas = new Shoe("white", 44, 8, "Adidas", "Leather");
                    $adidas->super();
                    $adidas = new Sneaker(true, "sneakers", 8);
                    $adidas->kindOfShoe();
                    $adidas->laces();
                ?>
            </div>
            <div id="nike">
                <?php
                    $nike = new Shoe("white", 41, 5, "Nike", "Leather");
                    $nike->super();
                    $nike = new Sneaker(true, "sneakers", 5);
                    $nike->kindOfShoe();
                    $nike->laces();
                ?>
            </div>
        </main>
        <div class="buttons">
            <button id="adidasbutton">Adidas</button>
            <button id="nikebutton">Nike</button>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>
</html>