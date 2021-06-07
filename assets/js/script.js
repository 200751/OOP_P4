// var adidasButton = document.getElementById("adidasButton");
// var nikeButton = document.getElementById("nikeButton");
// var spongebobButton = document.getElementById("spongebobButton");

// let buttons = document.getElementById("shoe_buttons");


var buttons = document.querySelectorAll('#shoe_buttons button');

for(i = 0; i < buttons.length; i++)
{
    console.log(buttons[i]);
    console.log(i);
}

buttons[i].addEventListener("click", function() {
    console.log(buttons[i]);
});

var shoe_info = document.getElementById("shoe_info");
var shoes = document.getElementsByClassName("shoes");
var shoe = document.getElementById("shoe_svg");


var adidas = document.getElementById("adidas");
var nike = document.getElementById("nike");
var spongebob = document.getElementById("spongebob");

adidasButton.addEventListener("click", function() {
    shoe.style.fill !== "white" ? shoe.style.fill = "white" : shoe.style.fill = "none";
    // adidas.style.display = (adidas.dataset.toggled ^= 1)? "flex" : "none";
});
nikeButton.addEventListener("click", function() {
    shoe.style.fill !== "black" ? shoe.style.fill = "black" : shoe.style.fill = "none";
    // nike.style.display = (nike.dataset.toggled ^= 1)? "flex" : "none";
});
spongebobButton.addEventListener("click", function() {
    shoe.style.fill !== "yellow" ? shoe.style.fill = "yellow" : shoe.style.fill = "none";
    // spongebob.style.display = (spongebob.dataset.toggled ^= 1)? "flex" : "none";
});