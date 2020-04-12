function projList(str) {

    if (str == "") {
        document.getElementById("adProjList").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("adProjList").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "proj_showClickedObject.php?q=" + str, true);
    xmlhttp.send();
}