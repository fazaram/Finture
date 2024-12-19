// Highlight active thumbnail
const thumbnails = document.querySelectorAll(".gallery-thumbnails img");
const mainImage = document.getElementById("main-image");
thumbnails.forEach((img) => {
    img.addEventListener("click", () => {
        thumbnails.forEach((thumbnail) => thumbnail.classList.remove("active"));
        img.classList.add("active");
        mainImage.src = img.src;
    });
});

// Color selection
const colors = document.querySelectorAll(".color-options div");
colors.forEach((color) => {
    color.addEventListener("click", () => {
        colors.forEach((c) => c.classList.remove("active"));
        color.classList.add("active");
        mainImage.src = color.dataset.color;
    });
});
