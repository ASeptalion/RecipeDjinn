
var slidePosition = 0;

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slidePosition++;
  
  if (slidePosition > slides.length) {
    slidePosition = 1;
  }
  
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 5000); // Change image every 5 seconds
}

function navigateToPage(page) {
  window.location.href = page;
}

// Call the SlideShow function to start the rotation
SlideShow();


//Authored by Antonio Torpea Adam Bowles (Group members name here)