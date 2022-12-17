<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shop </title>
    <link rel = "stylesheet" type ="text/css" href="Styling.css">
</head>
<body>
    <header>
        <div class="Menu" style="background-color: whitesmoke;">
          <img src="Tarikecak-logo.png">
        </div>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="home.php"> Home </a>
            <a href="Shop.php">Custome</a>
            <a href="buyticket.php"> Tickets </a>
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
    <div class="Order">
        <h2> "How to Order" </h2>
        <ol> 
            <li> Click shop to order the clothes or part of clothe of Tari Kecak Custome </li>
            <li> Choose the part the you need or you want wear </li>
            <li> Add to cart </li>
            <li> Make sure you have been done with your </li> 
            <li> Move to payment </li>
            <li> Choose payment </li>
            <li> Pay it </li>
        </ol>
    </div>
    <h2 style="text-align:center">Part Custome of Tari Kecak </h2>
<div class="columns">
  <ul class="price">
    <img src="udeng1.jpeg"></img>
    <li class="grey"> Udeng termurah se-Bali </li>
    <li>Rp. 50.000 </li>
    <li class="grey"><a href="#" class="button"> Beli </a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <img src="udeng2.jpeg"></img>
    <li class="grey"> Udeng Warna Putih</li>
    <li>Rp. 47.500 </li>
    <li class="grey"><a href="#" class="button"> Beli </a></li>
  </ul>
</div>

<div class="columns">
    <ul class="price">
      <img src="Selendang2.jpg"></img>
      <li class="grey"> Selendang Warna Putih</li>
      <li>Rp. 47.500 </li>
      <li class="grey"><a href="#" class="button"> Beli </a></li>
    </ul>
</div>

<div class="columns">
    <ul class="price">
      <img src="selendang1.jpg"></img>
      <li class="grey"> Selendang Warna Putih</li>
      <li>Rp. 47.500 </li>
      <li class="grey"><a href="#" class="button"> Beli </a></li>
    </ul>
</div>

<div class="columns">
    <ul class="price">
      <img src="selendang3.jpg"></img>
      <li class="grey"> Selendang Warna Putih</li>
      <li>Rp. 47.500 </li>
      <li class="grey"><a href="#" class="button"> Beli </a></li>
    </ul>
</div>
<div class="columns">
    <ul class="price">
      <img src="Kemben1.jpg"></img>
      <li class="grey"> Selendang Warna Putih</li>
      <li>Rp. 47.500 </li>
      <li class="grey"><a href="#" class="button"> Beli </a></li>
    </ul>
</div>
<div class="columns">
    <ul class="price">
      <img src="Kemben2.jpg"></img>
      <li class="grey"> Selendang Warna Putih</li>
      <li>Rp. 47.500 </li>
      <li class="grey"><a href="#" class="button"> Beli </a></li>
    </ul>
</div>
    <div class="nextbutton"> 
        <h3> Next </h3>
    </div>
</body>
</html>