<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Carousel Menu</title>
  <div class="slideshow-container fade">

  <!-- Full images with numbers and message Info -->
<!-- Your containers with added onclick attribute -->
<div class="Containers" onclick="navigateToPage('https://www.delish.com/cooking/recipe-ideas/recipes/a51338/homemade-chicken-noodle-soup-recipe/')">
  <div class="MessageInfo">1 / 3</div>
  <img src="images\image1.jpg" class="carousel-image">
  <div class="Info">Chicken Noodle Soup</div>
</div>

<div class="Containers" onclick="navigateToPage('https://www.pillsbury.com/recipes/perfect-apple-pie/1fc2b60f-0a4f-441e-ad93-8bbd00fe5334')">
  <div class="MessageInfo">2 / 3</div>
  <img src="images\image2.jpg" class="carousel-image">
  <div class="Info">Apple Pie</div>
</div>

<div class="Containers" onclick="navigateToPage('https://www.allrecipes.com/recipe/20211/creamy-hot-cocoa/')">
  <div class="MessageInfo">3 / 3</div>
  <img src="images\image3.jpg" class="carousel-image">
  <div class="Info">Hot Chocolate</div>
</div>

  <!-- Back and forward buttons -->
  <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
  <a class="forward" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The circles/dots -->
<div style="text-align:center">
  <span class="dots" onclick="currentSlide(1)"></span>
  <span class="dots" onclick="currentSlide(2)"></span>
  <span class="dots" onclick="currentSlide(3)"></span>
</div> 


  <!-- Custom JavaScript -->
  <script src="script.js"></script>
</body>
</html>
