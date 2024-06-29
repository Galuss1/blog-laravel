let btn = document.getElementById("btn-scroll-to-top");
let footer = document.querySelector("footer");

window.onscroll = function () {
    displayBtn();
};

function displayBtn() {
    const footerRect = footer.getBoundingClientRect();
    const btnRect = btn.getBoundingClientRect();
    const offset = -20;

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        if (footerRect.top < window.innerHeight - btnRect.height - offset) {
            btn.style.display = "none";
        } else {
            btn.style.display = "flex";
        }
    } else {
        btn.style.display = "none";
    }
}

btn.addEventListener("click", scrollToTop);

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
