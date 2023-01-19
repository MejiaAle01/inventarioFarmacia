const button = document.getElementById('lightDarkMode');

button.addEventListener("click", function(){
    const mode = document.body;
    mode.classList.toggle("has-background-dark");
});