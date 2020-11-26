<!DOCTYPE html> <!--Per dichiarare un documento che utilizzerà lo standard dell'Html5 si andrà ad utilizzare questo tag-->
<html>
<head>
<title>COMUNE DI TORRICELLA PELIGNA</title>
   <!-- diciamo al browser di adattare la larghezza della pagina in base alla larghezza del dispositivo dal quale si visualizza e si scalarlo a 1.0 , quindi la larghezza (width) è uguale alla larghezza del device(device-width)-->
   <meta name='viewport' content='initial-scale=1.0 maximum-scale=1.0'>
    <!-- codifca lettere-->
  <meta charset="utf-8" />
  <link rel='stylesheet' href="css/page.css" />
  <!-- <style type="text/css">
    @import url(page.css)
  </style> -->
</head>

<body>
    <div class="header"> </div>
    <div id="footer_bar"> 
     <div id="bar_container">  
       <!-- barra azzurra superiore -->
</div>
   <!-- Testo scorrevole -->
<div class="textwidget">
<MARQUEE
  onmouseover="this.stop()"
  onmouseout="this.start()"
  scrollamount="4"
  scrolldelay="1"
  direction="left"
  height="100"
  width="1325"
  align="right"
  style="font-family: "Comic Sans MS", arial, verdana, serif; font-size: "70px"><br>
 <span class="Stile5"><h2><font color="black">BENVENUTO! SEI NELLA SEZIONE DELL'AREA NORD DEL PAESE.</font></h2></span> <br>
  </MARQUEE>
</div>
<form method="POST" name="modulo" action="contatto.php">
      	<div class="allinea">
       
      <img src="css/images/med.jpg" alt="Farmacia" style="width:150px" ><br><p><button onclick="myFunction()" name="email" value="farmaciaa@gmail.com"><h3>Farmacia</h3></button></p>
<script>
function myFunction() {

 alert("Non è presenta una farmacia qui! Ti colleghiamo con la farmacia A che gestisce la tua zona.");
}
</script>
<img src="css/images/det.jpg" alt="Proshop" style="width:150px"><br><p><button name="email" value="proshopa@gmail.com"><h3>Proshop A</h3></button></p>
<img src="css/images/mac.gif" alt="Macelleria" style="width:150px"><br><p><button onclick="myFunction1()" name="email" value="macelleriaa@gmail.com"><h3>Macelleria</h3></button></p>
<script>
function myFunction1() {

      alert("Non è presenta una macelleria qui! Ti colleghiamo con la macelleria A che gestisce la tua zona.");
  
}
</script>
 </div>
 <div class="allinea">
 	<img src="css/images/pescheria.gif" alt="Pescheria" style="width:200px"><br><p> <button onclick="myFunction3()" name="email" value="pescheriaa@gmail.com"><h3>Pescheria</h3></button></p>
 	 <script>
function myFunction3() {

 alert("Non è presenta una pescheria qui! Ti colleghiamo con la pescheria A che gestisce la tua zona.");
  
}
</script>
<img src="css/images/alimentari.gif" alt="Alimentari" style="width:200px"><br><p>  <button name="email" value="alimentaria@gmail.com"><h3>Alimentari A</h3></button></p>
<img src="css/images/frutta.jpg" alt="fruttivendolo" style="width:200px"> <br><p> <button name="email" value="fruttaeverduraa@gmail.com"><h3>Frutta e verdura A</h3></button></p>
</div>
 
<div class="allinea">
 <img src="css/images/forno.jpg" alt="Forno" style="width:200px"><br><p><button name="email" value="fornoa@gmail.com"><h3>Forno A</h3></button></p>
 <img src="css/images/alimentari.gif" alt="Alimentari" style="width:200px"><br><p><button name="email" value="alimentarib@gmail.com"><h3>Alimentari B</h3></button></p>
 	
 <img src="css/images/forno.jpg" alt="Forno" style="width:200px"><br><p><button name="email" value="fornob@gmail.com"><h3>Forno B</h3></button></p>
</div>

<input type="hidden" name="zona" value="nord">

</form>

<br> 
<div class="allinea">
	<h3 align="center">Come funziona la spesa online?</h3>
  <hr align="left" size="1" width="945" noshade >

</div>
<div class="allinea" align="center" ><img src="css/images/pc.jpg" alt="Ordine" style="width: 200px"><p><h4>1. Scrivi il tuo ordine.</h4></p></div>
<div class="allinea"align="center" ><img src="css/images/com.jpg" alt="Commercinate" style="width: 200px"><p><h4>2. I commercianti preparano la spesa.</h4></p></div>
<div class="allinea" align="center"><img src="css/images/busta.jpg" alt="Ordine" style="width: 100px"><p><h4>3. La tua spesa ti viene consegnata gratis a casa!</h4></p></div>
<br>
 <!--Barra piè di pagina-->
  <div id="footer_bar"> 
     <div id="bar_container">    
      <ul>   
         <li><a href="areacommerciante.php">Area riservata al commerciante</a></li> 
              
                             </ul>  </div></div>

</body>
</html>