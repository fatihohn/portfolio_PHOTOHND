const aboutTitle = document.querySelector(".about_title");
aboutTitle.onclick = function() {
    const aboutContent = document.querySelector(".about_content");

    const displayInit = "grid";
    const displayNone = "none";

    // console.log(aboutContent);

    function handleClick() {
        const currentDisplay = aboutContent.style.display;
        if (currentDisplay === displayNone) {
            aboutContent.style.display = displayInit;
        } else {
            aboutContent.style.display = displayNone;
        }
    }

    function init() {
        aboutContent.style.display = displayInit;
        aboutTitle.addEventListener("click", handleClick);
    }

    init();

}