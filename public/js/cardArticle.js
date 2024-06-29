document.addEventListener("DOMContentLoaded", function() {
    const cols = document.querySelectorAll(".col[data-url]");

    cols.forEach(col => {
        col.addEventListener("click", function() {
            const url = this.getAttribute("data-url");
            if (url) {
                window.location.href = url;
            }
        });
    });
});
