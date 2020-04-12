function projects_escape() {

    // if (str == "") {
    //     document.querySelector(".proj_content").innerHTML = "";
    //     return;
    // }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.querySelector(".proj_content").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "portfolio_PHOTOHND/projects.php", true);
    xmlhttp.send();
}

function projInnerManiEsc() {
    let projInner = document.querySelector(".proj_inner");
    projInner.style.height = "initial";
    projInner.style.width = "initial";
    projInner.style.position = "initial";
    projInner.style.top = "initial";
    projInner.style.left = "initial";
    projTitle.style.display = "initial";
    projInner.style.zIndex = "3";
    
    }