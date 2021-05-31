var adidasButton = document.getElementById("adidasbutton");
var nikeButton = document.getElementById("nikebutton");

var adidas = document.getElementById("adidas");
var nike = document.getElementById("nike");

adidasButton.addEventListener("click", function() {
    adidas.style.display = (adidas.dataset.toggled ^= 1)? "flex" : "none";
});
nikeButton.addEventListener("click", function() {
    nike.style.display = (nike.dataset.toggled ^= 1)? "flex" : "none";
});