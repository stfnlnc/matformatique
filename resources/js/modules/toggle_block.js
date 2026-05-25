const toggleTitle = document.querySelectorAll(".toggle-title");
const toggleParagraph = document.querySelectorAll(".toggle-paragraph");
const togglePlus = document.querySelectorAll(".toggle-plus");
const toggleMinus = document.querySelectorAll(".toggle-minus");

toggleTitle.forEach((toggle, key) => {
    toggle.addEventListener("click", () => {
        const paragraph = toggleParagraph[key];
        const plus = togglePlus[key];
        const minus = toggleMinus[key];

        if (paragraph.style.maxHeight) {
            plus.classList.remove("hidden");
            minus.classList.add("hidden");
            paragraph.style.maxHeight = null;
        } else {
            toggleParagraph.forEach((paragraphItem, key) => {
                paragraphItem.style.maxHeight = null;
            });
            toggleMinus.forEach((minusItem) => {
                minusItem.classList.add("hidden");
            });
            togglePlus.forEach((plusItem) => {
                plusItem.classList.remove("hidden");
            });
            plus.classList.add("hidden");
            minus.classList.remove("hidden");
            paragraph.style.maxHeight = paragraph.scrollHeight + "px";
        }
    });
});
