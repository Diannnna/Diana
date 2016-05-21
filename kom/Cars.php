<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
  </style>
  </head>
  <body style="background-color: lightgrey">
  <div>
  		 <p class="col-md-7 col-xs-7" style="font-size:30px; font-family:Ariana; margin-left:30px;"><b>CARS</b></P>
    <a href="free.php"><img src="2-Hot-Home-icon.png" class=" col-md-offset-2 col-md-3 col-xs-offset-2 col-xs-3" style="width:90px;height:50px;margin-top:5px"></a>
  </div>
<img  id="myImg" src="2016-Lamborghini-Aventador-front-angle-luxury-cars.jpg" style="height:230px; width:280px;margin-left:10px; cursor: pointer;">
<div id="myModal" class="modal">
<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
   <img class="modal-content" id="img01">
<div id="caption"></div>
</div>
<img id="myImg1" src="2016-Nissan-Maxima-11-of-23-610x407.jpg" style="height:230px; cursor: pointer;width:280px; margin-left:10px;">
<div id="myModal1" class="modal">
<span class="close" onclick="document.getElementById('myModal1').style.display='none'">&times;</span>
   <img class="modal-content" id="img02">
<div id="caption"></div>
</div>
<img id="myImg2" src="2016-Nissan-Maxima-release-date.jpg" style="height:230px; width:280px;margin-left:10px;cursor: pointer; ">
<div id="myModal2" class="modal">
<span class="close" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
   <img class="modal-content" id="img03">
<div id="caption"></div>
</div>
<img id="myImg3" src="maxresdefault.jpg" style="height:230px; width:280px;margin-left:10px; cursor: pointer;">
<div id="myModal3" class="modal">
<span class="close" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>
   <img class="modal-content" id="img04">
<div id="caption"></div>
</div>
<img id="myImg4" src="lexus-planning-to-build-a-new-model-next-year-59344_1.jpg" style="height:230px; cursor: pointer;width:280px;margin-left:10px; margin-top:25px">
<div id="myModal4" class="modal">
<span class="close" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>
   <img class="modal-content" id="img05">
<div id="caption"></div>
</div>
<img id="myImg5" src="review_2016_acura_nsx_sport_cars.jpg" style="height:230px; width:280px;margin-left:10px;cursor: pointer; margin-top:25px">
<div id="myModal5" class="modal">
<span class="close" onclick="document.getElementById('myModal5').style.display='none'">&times;</span>
   <img class="modal-content" id="img06">
<div id="caption"></div>
</div>
<img id="myImg6" src="best-Classic-car-wallpapers-pontiac-1967-GTO.jpg" style="height:230px; width:280px;margin-left:10px; cursor: pointer; margin-top:25px">
<div id="myModal6" class="modal">
<span class="close" onclick="document.getElementById('myModal6').style.display='none'">&times;</span>
   <img class="modal-content" id="img07">
<div id="caption"></div>
</div>
<img id="myImg7" src="sports-car-146873_960_720.png" style="height:230px; width:280px;margin-left:10px;cursor: pointer;  margin-top:25px">
<div id="myModal7" class="modal">
<span class="close" onclick="document.getElementById('myModal7').style.display='none'">&times;</span>
   <img class="modal-content" id="img08">
<div id="caption"></div>
</div>
<a href="https://www.google.kz/search?q=caRS&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj6jYjZqojLAhVGZ3IKHcGXDUIQ_AUIBygB&biw=1366&bih=643#tbm=isch&q=cars+wallpapers"><span style="margin-left:217px; color:black; font-size:20px"><b>More Cars >>></b></span></a>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg1');
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal3');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal4');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img05");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal5');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg5');
var modalImg = document.getElementById("img06");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal6');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg6');
var modalImg = document.getElementById("img07");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal7');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg7');
var modalImg = document.getElementById("img08");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
</body>
  </html>