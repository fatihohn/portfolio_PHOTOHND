//클릭한 container의 name 값을 가져온다.

const childCont = document.querySelectorAll(".child");

let d;
for (d = 0; d < childCont.length; d++) {

    function gallerySelect() {
        const getCatName = event.target.getAttribute('name');
        return (getCatName);
        // console.log(getCatName);
    }



    childCont[d].addEventListener("click", gallerySelect);

}










// function gallerySelect() {
//     const getElementCat = event.target.getAttribute('name');
//     return (getElementCat);
// }

// // let childAll = document.querySelectorAll(".child");
// let c;
// for (c = 0; c < childAll.length; c++) {



//     childAll[c].onclick = gallerySelect();


// }
// childAll[c].addEventListener('click', gallerySelect);





// function gallerySelect() {
//     let childAll = document.querySelectorAll(".child");
//     let b;
//     for (b = 0; b < childAll.length; b++) {
//         childAll[b].onclick = function(name) {
//             const getElementCat = event.target.getAttribute('name');
//             return (getElementCat);


//         }
//         childAll[b].addEventListener('click', gallerySelect);
//     }
// }

// function init() {
//     let childAll = document.querySelectorAll(".child");
//     let c;
//     for (c = 0; c < childAll.length; c++) {
//         childAll[c].addEventListener('click', gallerySelect);
//         }
//     }

//     init();