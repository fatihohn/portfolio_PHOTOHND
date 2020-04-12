function thumbsList(str) {
    // var vid = { $row["id"] };

    //open("showClickedObject.php")

    // var callphpcont = "<?php include 'showClickedObject.php' ?>";
    // var repContent = document.createTextNode(callphpcont);
    // var item = document.getElementById("adVisitContent");
    // item.replaceChild(repContent, item.childNodes[0]);


    // var para = document.createElement("");
    // var repContet = para.appendChild(repContent);
    // item.appendChild(para);
    // descriptionNode.innerHTML = repContent["callphpcont"]
    //document.getElementById("adVisitContent").innerHTML = this.responseText;

    // const adVisitContent = document.getElementById("adVisitContent").innerHTML;

    if (str == "") {
        document.getElementById("adThumbsList").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("adThumbsList").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "thumbs_showClickedObject.php?q=" + str, true);
    xmlhttp.send();
}



