function projects_contentsList(str) {

    if (str == "") {
        document.querySelector(".proj_content").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.querySelector(".proj_content").innerHTML = xmlhttp.responseText;
            // document.querySelector(".proj_content").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "portfolio_PHOTOHND/projects_contents_showClickedObject.php?q=" + str, true);
    xmlhttp.send();
}

function projInnerMani() {
    let projInner = document.querySelector(".proj_inner");
    // projInner.style.height = "calc(var(--vh, 1vh) * 100)";
    // projInner.style.width = "calc(var(--vw, 1vw) * 100)";
    projInner.style.height = "100vh";
    projInner.style.width = "100vw";
    projInner.style.position = "fixed";
    projInner.style.top = "0";
    projInner.style.left = "0";
    projTitle.style.display = "none";
    projInner.style.zIndex = "10";

}