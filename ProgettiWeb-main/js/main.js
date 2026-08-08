function openImgModal(src) {
    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("imgModalContent");

    modalImg.src = src;
    modal.style.display = "flex";
}

function closeImgModal() {
    const modal = document.getElementById("imgModal");
    modal.style.display = "none";
}
