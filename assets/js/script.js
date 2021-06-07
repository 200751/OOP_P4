var adidasButton = document.getElementById("adidasButton");
var nikeButton = document.getElementById("nikeButton");
var spongebobButton = document.getElementById("spongebobButton");

var shoe_info = document.getElementById("shoe_info");
var shoes = document.getElementsByClassName("shoes");
var shoe = document.getElementById("shoe_svg");


var adidas = document.getElementById("adidas");
var nike = document.getElementById("nike");
var spongebob = document.getElementById("spongebob");

adidasButton.addEventListener("click", function() {
    shoe.style.fill !== "white" ? (shoe.style.fill = "white", shoe.style.stroke = "#000") : (shoe.style.fill = "none", shoe.style.stroke = "#fff");
    // shoe.style.fill !== "white" ? shoe.style.stroke = "#fff" : shoe.style.stroke = "#000";
    // adidas.style.display = (adidas.dataset.toggled ^= 1)? "flex" : "none";
});
nikeButton.addEventListener("click", function() {
    shoe.style.fill !== "black" ? (shoe.style.fill = "black", shoe.style.stroke = "#fff") : (shoe.style.fill = "none", shoe.style.stroke = "#000");
    // shoe.style.fill !== "black" ? shoe.style.stroke = "#000" : shoe.style.stroke = "#fff";
    // nike.style.display = (nike.dataset.toggled ^= 1)? "flex" : "none";
});
spongebobButton.addEventListener("click", function() {
    shoe.style.fill !== "yellow" ? (shoe.style.fill = "yellow", shoe.style.stroke = "#000") : (shoe.style.fill = "none", shoe.style.stroke = "#fff");
    // shoe.style.fill !== "yellow" ? shoe.style.stroke = "#fff" : shoe.style.stroke = "#000";
    // spongebob.style.display = (spongebob.dataset.toggled ^= 1)? "flex" : "none";
});
