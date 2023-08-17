document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modal-image");
    const close = document.getElementById("close");
    const gridItems = document.querySelectorAll(".grid-item");

    gridItems.forEach(item => {
        const image = item.querySelector(".product-image");
        const originalSrc = image.src;

        image.addEventListener("click", function () {
            modalImage.src = originalSrc;
            modal.style.display = "flex";
        });
    });

    close.addEventListener("click", function () {
        modal.style.display = "none";
    });
});


