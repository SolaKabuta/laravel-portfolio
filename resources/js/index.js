const myDiv = document.getElementById("my-div");

myDiv.addEventListener("click", function() {
    myDiv.style.display = "block";
});

myDiv.addEventListener("click", function() {
    myDiv.style.display = "none";
});

const burgerBtn = document.getElementById('burger-btn');

burgerBtn.addEventListener("click", function() {
    burgerBtn.classList.add("hidden");
});

console.log(burgerBtn);