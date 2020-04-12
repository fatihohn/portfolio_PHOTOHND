function galleryList(str) {

    if (str == "") {
        document.getElementById("galleryList").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("galleryList").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "portfolio_PHOTOHND/gallery_showClickedObject.php?q=" + str, true);
    xmlhttp.send();

    showSlides();
}



// let backdrop = document.querySelectorAll(".backdrop");
// let d;
// for (d = 0; d < backdrop.length; d++) {
const galleryListDiv = document.querySelector("#galleryList");
let childAll = document.querySelectorAll(".child");
let b;
for (b = 0; b < childAll.length; b++) {

    function imgClick2() {
        // galleryListDiv.innerHTML = galleryList(this.value);
        // console.log(this.value);

        const getCatName = event.target.getAttribute('name');
        galleryList(getCatName);
        // backdrop[d].style.filter = blur(20);

        
    }
    childAll[b].addEventListener('click', imgClick2);
}
// }