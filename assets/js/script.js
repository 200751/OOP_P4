var adidasButton = document.getElementById("adidasButton");
var nikeButton = document.getElementById("nikeButton");
var spongebobButton = document.getElementById("spongebobButton");

var adidas = document.getElementById("adidas");
var nike = document.getElementById("nike");
var spongebob = document.getElementById("spongebob");

adidasButton.addEventListener("click", function() {
    adidas.style.display = (adidas.dataset.toggled ^= 1)? "flex" : "none";
});
nikeButton.addEventListener("click", function() {
    nike.style.display = (nike.dataset.toggled ^= 1)? "flex" : "none";
});
spongebobButton.addEventListener("click", function() {
    spongebob.style.display = (spongebob.dataset.toggled ^= 1)? "flex" : "none";
});
