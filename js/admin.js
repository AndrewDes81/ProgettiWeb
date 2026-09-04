function triggerFileInput(button) {
    const input = button.closest("form").querySelector(".real-file-input");
    input.value = ""; // forza il change anche se scegli lo stesso file
    input.click();
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".real-file-input").forEach(input => {
        input.addEventListener("change", function () {
            if (this.files.length > 0) {
                this.form.submit();
            }
        });
    });
});

function openDeleteModal(button) {
    const file = button.getAttribute("data-file");
    const category = button.getAttribute("data-category");

    document.getElementById("deleteFile").value = file;
    document.getElementById("deleteCategory").value = category;

    const modal = new bootstrap.Modal(document.getElementById("deleteModal"));
    modal.show();
}
