<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Of Tari Kecak</title>
    <link rel = "stylesheet" type ="text/css" href="Styling.css">
</head>
<body>
    <header>
        <div class="Menu" style="background-color: whitesmoke;">
            <ul>
                <img src="Tarikecak-logo.png">
            </ul>
        </div>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="HomePage.php"> Home </a>
            <a href="Shop.php">Custome</a>
            <a href="Ticket.php"> Tickets </a>
            <a href="#">About</a>
        </div>
      
        <button class="openbtn" onclick="openNav()">☰</button>
        <script>
            function openNav() {
                document.getElementById("mySidepanel").style.width = "300px";
            }
      
            function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
            }
        </script>
    </header>
        <!-- <section class="Background">
                <h1> Reservation </h1>
                <h2> of Tari Kecak </h2> 
        </section> -->
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="tarikecak.jpeg" style="width:100%;">
              
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="tarikecak1.jpeg" style="width:100%">
              
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="kecak-dance.jpg" style="width:100%">
              
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            
            <script>
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
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
        <div class="About">
            <h1> About </h1>
            <p> In the 1930s, Balinese artist Wayan Limbak and German painter Walter Spies created the Kecak dance. This dance is inspired by the traditional rituals performed by the Balinese people which were later adapted in the Ramayana story in Hindu belief to be displayed as an art show when tourists come to Bali.
                The Kecak dance is usually performed by tens of shirtless men wearing plaid cloth from the waist to above the knees.
                The Kecak dance was first performed in several villages, one of which was Bona Village, Gianyar. However, it has grown to all regions in Bali and is always presented during activities such as festivals held by the government and the private sector.
                Read the detikTravel article, "Kecak Dance: History,<span id="dots">...</span><span id="more"> Meaning and Place of Performance"In the 1930s, Balinese artist Wayan Limbak and German painter Walter Spies created the Kecak dance. This dance is inspired by the traditional rituals performed by the Balinese people which were later adapted in the Ramayana story in Hindu belief to be displayed as an art show when tourists come to Bali.
                The Kecak dance is usually performed by tens of shirtless men wearing plaid cloth from the waist to above the knees.
                The Kecak dance was first performed in several villages, one of which was Bona Village, Gianyar. However, it has grown to all regions in Bali and is always presented during activities such as festivals held by the government and the private sector.
                Read the detikTravel article, "Kecak Dance: History, Meaning and Place of Performance"
            </span></p>
            <button onclick="myFunction()" id="myBtn">Read more</button>
            <script>
                function myFunction() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more"; 
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less"; 
                    moreText.style.display = "inline";
                }
                }
            </script>
        </div>
        <div class="Images">
            <h1> IMAGES </h1>
            <p>There are Images of Tari kecak</p>
            <img src="uluwatu.jpg">
        </div>
        <div class="Images1">
            <img src="tarikecak1.jpeg">
        </div>

        <div class="Created"> 
            <h6> Created by Java Trip Team </h6>
        </div>
            
    </body>
</html>