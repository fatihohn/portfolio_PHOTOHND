const parentAll = document.querySelectorAll(".parent");
let a;
for (a = 0; a < parentAll.length; a++) {

    parentAll[a].onclick = function() {
        const clickedName = event.target.getAttribute('name');
        
        const displayNone = "none";
        const sub = `sub_`
        //querySelector에 variable을 넣고 싶으면, CSS.escape()을 사용해야한다. querySelector안의 ()는 css 문법을 따르므로.  ---  https://stackoverflow.com/questions/37081721/use-variables-in-document-queryselector
        const clickedSubAll = document.querySelectorAll('.' + CSS.escape(sub) + CSS.escape(clickedName));
        let displayInit = "inherit";
        let isShowing = document.querySelectorAll('.subwrap[style = "display: inherit;"]');
        
        if(window.innerWidth > 810) {
        displayInit = "inherit";
        isShowing = document.querySelectorAll('.subwrap[style = "display: inherit;"]');
        } else {
        displayInit = "initial";
        isShowing = document.querySelectorAll('.subwrap[style = "display: initial;"]');
        }
        //querySelector(str+CSS.escape(variable))형태일때는 또 ""를 씌워줄 필요가 없다.
   
    

        function handleClick() {
            let i;
            for (i = 0; i < clickedSubAll.length; i++) {
                let s;
                for (s = 0; s < isShowing.length; s++) {

                    if (isShowing.length <= 2 && clickedSubAll[i].style.display == displayNone) {
                        isShowing[s].style.display = displayNone;
                        clickedSubAll[i].style.display = displayInit;
                    } else if (clickedSubAll[i].style.display !== displayNone && isShowing.length > 2) {
                        isShowing[s].style.display = displayNone;
                        clickedSubAll[i].style.display = displayNone;
                    } else {
                        isShowing[s].style.display = displayNone;
                        clickedSubAll[i].style.display = displayNone;
                    }
                }
            }
        }

        function init() {
            let x;
            for (x = 0; x < parentAll.length; x++) {

                for (z = 0; z < clickedSubAll.length; z++) {

                    clickedSubAll[z].style.display = displayInit;
                    parentAll[x].addEventListener("click", handleClick());
                }
            }
        }


        init();

    }
}



//------------------------------------------------기존 코드------------------------------
// function imgClick() {
//     const parentAll = document.querySelectorAll(".parent");
//     const displayInit = "initial";
//     const displayNone = "none";
//     const clickedName = event.target.getAttribute('name');
//     const sub = `sub_`
//         //querySelector에 variable을 넣고 싶으면, CSS.escape()을 사용해야한다. querySelector안의 ()는 css 문법을 따르므로.  ---  https://stackoverflow.com/questions/37081721/use-variables-in-document-queryselector
//     const clickedSubAll = document.querySelectorAll('.' + CSS.escape(sub) + CSS.escape(clickedName));
//     const isShowing = document.querySelectorAll('.subwrap[style = "display: initial;"]');

//     //querySelector(str+CSS.escape(variable))형태일때는 또 ""를 씌워줄 필요가 없다.


//     function handleClick() {
//         let i;
//         for (i = 0; i < clickedSubAll.length; i++) {
//             let s;
//             for (s = 0; s < isShowing.length; s++) {

//                 if (isShowing.length <= 2 && clickedSubAll[i].style.display == displayNone) {
//                     isShowing[s].style.display = displayNone;
//                     clickedSubAll[i].style.display = displayInit;
//                 } else if (clickedSubAll[i].style.display !== displayNone && isShowing.length > 2) {
//                     isShowing[s].style.display = displayNone;
//                     clickedSubAll[i].style.display = displayNone;
//                 } else {
//                     isShowing[s].style.display = displayNone;
//                     clickedSubAll[i].style.display = displayNone;
//                 }
//             }
//         }
//     }

//     function init() {
//         let x;
//         for (x = 0; x < parentAll.length; x++) {

//             for (z = 0; z < clickedSubAll.length; z++) {

//                 clickedSubAll[z].style.display = displayInit;
//                 parentAll[x].addEventListener("click", handleClick());
//             }
//         }
//     }


//     init();

// }