document.addEventListener("DOMContentLoaded", function () {
    const expandableDiv = document.getElementById("expandableDiv");
    const toggleButton = document.getElementById("toggleButton");

    toggleButton.addEventListener("click", function () {
        expandableDiv.classList.toggle("open");
    });
});
