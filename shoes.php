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
class FlipFlop extends Shoe 
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
            <div class="shoe_info">
                <div id="adidas" class="shoes">
                    <?php
                        $adidas = new Shoe("white", 44, 8, "Adidas", "Leather");
                        $adidas->super();
                        $adidas = new Sneaker(true, "Sneakers", 8);
                        $adidas->kindOfShoe();
                        $adidas->laces();
                    ?>
                </div>
                <div id="nike" class="shoes">
                    <?php
                        $nike = new Shoe("black", 41, 5, "Nike", "Leather");
                        $nike->super();
                        $nike = new Sneaker(true, "Sneakers", 5);
                        $nike->kindOfShoe();
                        $nike->laces();
                    ?>
                </div>
                <div id="spongebob" class="shoes">
                    <?php
                        $spongebob = new Shoe("yellow", 42, 1, "Arena", "Foam");
                        $spongebob->super();
                        $spongebob = new Sneaker(false, "Flip Flops", 1);
                        $spongebob->kindOfShoe();
                        $spongebob->laces();
                    ?>
                </div>
            </div>
        </main>
        <div id="shoe_outline">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1048.27 598.04"><defs><style></style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="shoe_svg" id="shoe_svg" d="M16.54,171.18C7.3,187.09,13,187.9,12.61,290.53c0,0,0,0-8.07,245.63q-1,29.69-2,59.36l1043.06-6.78q-1.62-33-3.25-66c-5.05-28.5-16.9-68.71-48.91-100.09-62-60.85-161-50.4-193-49.35C701.9,376.57,548,313.14,311.41,3.56a637.08,637.08,0,0,1-103.73,68C105.73,124.93,45.83,120.7,16.54,171.18Z"/>
            <line class="shoe_svg" id="shoe_sole" x1="5.21" y1="515.69" x2="1044.49" y2="527.82"/></g></g></svg>
        </div>

        <div class="shoe_buttons" id="shoe_buttons">
            <button id="adidasButton">Adidas</button>
            <button id="nikeButton">Nike</button>
            <button id="spongebobButton">Spongebob</button>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>