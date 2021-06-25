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
    public function getMainStats() {
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

    // public function __construct($laces, $typeOfShoe)
    // {
    //     $this->laces = $laces;
    //     $this->typeOfShoe = $typeOfShoe;
    // }
    public function setLaces() {
        
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
class FlipFlop extends Shoe 
{
    public $laces;
    public $typeOfShoe;

    public function __construct($laces, $typeOfShoe)
    {
        $this->laces = $laces;
        $this->typeOfShoe = $typeOfShoe;
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
            <div id="adidas" class="shoes">
                <?php
                    // $adidas = new Shoe("white", 44, 8, "Adidas", "Leather");
                    $adidas = new Sneaker("white", 44, 8, "Adidas", "Leather",true, "Sneakers", 8);
                    $adidas->getMainStats();
                    $adidas->kindOfShoe();
                    $adidas->laces();
                ?>
            </div>
            <!-- <div id="nike" class="shoes">
                <?php
                    // $nike = new Shoe("white", 41, 5, "Nike", "Leather");
                    // $nike->getMainStats();
                    // $nike = new Sneaker(true, "Sneakers", 5);
                    // $nike->kindOfShoe();
                    // $nike->laces();
                ?>
            </div> -->
            <div id="spongebob" class="shoes">
                <?php
                    $spongebob = new Shoe("yellow", 42, 1, "Arena", "Foam");
                    $spongebob->getMainStats();
                    $spongebob = new FlipFlop(false, "Flip Flops", 1);
                    $spongebob->kindOfShoe();
                    $spongebob->laces();
                ?>
            </div>
        </main>
        <div class="buttons">
            <button id="adidasButton">Adidas</button>
            <button id="nikeButton">Nike</button>
            <button id="spongebobButton">Spongebob</button>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>
</html>