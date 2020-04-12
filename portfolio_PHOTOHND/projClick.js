const projTitle = document.querySelector(".proj_title");
projTitle.onclick = function() {
    const projContent = document.querySelector(".proj_content");
    let proj_inner = document.querySelector(".proj_inner");
    const displayInit = "grid";
    const displayNone = "none";


    // console.log(projContent);

    function handleClick() {
        const currentDisplay = projContent.style.display;
        if (currentDisplay === displayNone) {
            projContent.style.display = displayInit;
            proj_inner.style.backdropFilter = "blur(30px)";
            proj_inner.style.WebkitBackdropFilter = "blur(30px)";
            proj_inner.style.zIndex = "3";

            // proj_wrap.style.backgroundImage = "none";
            // proj_title.style.color = "#555"
            // proj_wrap.style.filter = filterBlur;
            // proj_wrap.style.brightness = "200%";
        } else {
            projContent.style.display = displayNone;
            proj_inner.style.backdropFilter = "blur(0)";
            proj_inner.style.WebkitBackdropFilter = "blur(0)";
            proj_inner.style.zIndex = "5";
            // proj_wrap.style.backgroundImage = "url('portfolio_PHOTOHND/<?php echo $rows['img_dir'] ?>')";
            // proj_title.style.color = "#fff"
            // proj_wrap.style.filter = filterBlurNone;
            // proj_wrap.style.brightness = "100%";
        }
    }

    function init() {
        projContent.style.display = displayInit;
        proj_inner.style.backdropFilter = "blur(30px)";
        proj_inner.style.WebkitBackdropFilter = "blur(30px)";
        proj_inner.style.zIndex = "3";
        // proj_title.style.color = "#555"
        projTitle.addEventListener("click", handleClick);
    }

    init();


}