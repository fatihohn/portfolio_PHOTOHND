function projTitleHov() {
    let projWrap = document.querySelector(".proj_wrap");
    projWrap.style.opacity = '0.5';
    projWrap.style.transition = 'all ease-in-out 100ms';
    
}
function projTitleOut() {
    let projWrap = document.querySelector(".proj_wrap");
    projWrap.style.opacity = '1';
    projWrap.style.transition = 'all ease-in-out 100ms';
}

projTitle.addEventListener("mouseover", projTitleHov);
projTitle.addEventListener("mouseout", projTitleOut);