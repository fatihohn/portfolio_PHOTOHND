let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let galleryImg = document.getElementsByClassName("galleryImg");
  // let dots = document.getElementsByClassName("dot");
  if (n > galleryImg.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = galleryImg.length}
  for (i = 0; i < galleryImg.length; i++) {
      galleryImg[i].style.display = "none";  
  }
  // for (i = 0; i < dots.length; i++) {
  //     dots[i].className = dots[i].className.replace(" active", "");
  // }
  galleryImg[slideIndex-1].style.display = "block";  
  // dots[slideIndex-1].className += " active";
}