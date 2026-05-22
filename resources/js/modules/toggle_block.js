const toggleTitle = document.querySelectorAll(".toggle-title");
const toggleParagraph = document.querySelectorAll(".toggle-paragraph");
const togglePlus = document.querySelectorAll(".toggle-plus");
const toggleMinus = document.querySelectorAll(".toggle-minus");

toggleTitle.forEach((toggle, key) => {
    toggle.addEventListener("click", () => {
        const paragraph = toggleParagraph[key];
        togglePlus[key].classList.toggle("hidden");
        toggleMinus[key].classList.toggle("hidden");
        toggleParagraph.forEach((toggle) => {
            toggle.style.maxHeight = null;
        });
        if (paragraph.style.maxHeight) {
            paragraph.style.maxHeight = null;
        } else {
            paragraph.style.maxHeight = paragraph.scrollHeight + "px";
        }
    });
});
