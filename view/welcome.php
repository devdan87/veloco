

<?php $title = "VELOCO | Marseille"; ?>

<?php ob_start(); ?>


<h1>Bienvenue a Marseille</h1>







<div class="carousel">

<div class="slide">
    <img src="" id="image">
</div>

<div id="txt">



</div>



<div id="meteo">


<div class="weather">
<img src="image/ville.png" alt="">
<div id="ville"></div>
</div>

<div class="weather">
<img src="image/temp.png" alt="">
<div id="temp"></div>
</div>







<div class="weather">
 <img src="image/wind-solid.png" alt="">
 <div id="wind"></div>
</div>





<div class="weather">
<img src="image/sun.png" alt="" id="sun">
<img src="image/sunlight.png" alt="" id="sunlight">
<img src="image/rain.png" alt="" id="rain">

<div id="weather"></div>
</div>






</div>


<div class="wrap">
    <img src="image/bicycle-solid.svg" alt="">
</div>

<h2>Vélo tout terrain ou bicyclette ?</h2>

<div class="slider_bike">

<div id="slides_bike">      
<div><img src="image/bicyclette.jpg" alt="" class="slid"></div>
<div><img src="image/vtt.png" alt="" class="slid"></div>
</div>

</div>

<section id="map">



<div id="myMap"></div>





<form method="post" action="index.php?action=validBooking" enctype="multipart/form-data" id="formBk">

	

    <label >lieu (Arrondissement)</label><br>
    <input type="text"><br><br> <br>

   
    <label>Type de vélo ?</label><br>
        <select name="bike" id="bike">
            <option value="choose" selected>choisir....</option>
            <option value="vtt">velo tout terrain</option>
            <option value="bcc">bicyclette</option>
          
        </select>

    <br> <br> <br>

   
    <input type="submit" value="Valider" id="sendBooking">

</form>





</section>










<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>