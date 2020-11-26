<!DOCTYPE html> <!--Per dichiarare un documento che utilizzerà lo standard dell'Html5 si andrà ad utilizzare questo tag-->
<html>
<head>
    <title>COMUNE DI TORRICELLA PELIGNA</title>
   <!-- diciamo al browser di adattare la larghezza della pagina in base alla larghezza del dispositivo dal quale si visualizza e di scalarlo a 1.0 , quindi la larghezza (width) è uguale alla larghezza del device(device-width)-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> -->
   <!-- <meta name=”viewport”  content='initial-scale=1.0 maximum-scale=1.0' >  -->
    <!-- codifca lettere-->
  <meta charset="utf-8" />
  <link rel='stylesheet' href="css/stile.css" />

  
</head>

<body>

<div class="header" >
  <!-- logo -->
</div>
<div id="footer_bar"> 
     <div id="bar_container"> 
       <!-- barra azzurra superiore -->
</div>
</div>
</div>
    <!-- <hr align="left" size="45" width="1280" color="#0099CC" noshade>  -->
     <!-- Testo scorrevole -->
<div class="textwidget" >



<MARQUEE
  onmouseover="this.stop()"
  onmouseout="this.start()"
  scrollamount="4"
  scrolldelay="1"
  direction="left"
  height="100"
  width="1320"
  align="right"
  style="font-family: "Comic Sans MS", arial, verdana, serif; font-size: "70px"><br>
  
 <span class="Stile5"><h1><font color="black">BENVENUTI SUL SITO DI TORRICELLA PELIGNA! </font></h1></span> <br>

  </MARQUEE>
 


<br>

<!-- RICERCA INDIRIZZO DA TASTIERA -->














</div>

<!-- <div class="centro"> -->
<!-- <input id='geo' type='button' onclick='getLocation()' value='LOCALIZZA' style='background-color:blue;'> -->
<div style="margin-left:400px">
<button onclick="getLocation()" style="background-color:blue">
<font color="white" size="5" face="Times New Romans" >CLICCA QUI PER EFFETTUARE IL TUO ORDINE</font>
</button>
<p id="demo"></p>
</div>


<!-- codice per geolocallizare la posizione del cliente -->
<script>
var x = document.getElementById("demo");

//controllo se la geolocalizzazione è supportata
function getLocation() {
  if (navigator.geolocation) {
    //se si, eseguo il metodo getCurrentPosition.
    //se getCurrentPosition ha successo ho la latitudine e longitudine restituite dalla funzione showPosition
    //o se non ha funzione si collega alla funzione showError mostrando il tipo di errore
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  } else { 
    //se la geolocalizzazione non è supportata dal browser
    x.innerHTML = "La geolocalizzazione non è supportata da questo browser.";
  
  }
}

//questa funzione salva i valori di latitudine e longitudine 
function showPosition(position) {

  var lat = position.coords.latitude;
  var lon = position.coords.longitude;
  
  //url che permette di visualizzare i valori sulla mappa 
  window.location.href ="mappa_torricellapeligna.php?lat=" + lat + "&lon=" + lon;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "L'utente ha rifiutato la richiesta di geolocalizzazione."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Le informazioni sulla posizione non sono disponibili."
      break;
    case error.TIMEOUT:
      x.innerHTML = "La richiesta di ottenere la posizione dell'utente è scaduta."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "Si è verificato un errore sconosciuto."
      break;
  }
}

</script>
</form>

</div>

<!-- --------------------------------------- -->

<!-- <div class=allinea> 
</div> -->

<br>
 <br>
<br>
<br>
<br>

  <h3   style="margin-left:600px">Come funziona la spesa online?</h3>

  <hr style="margin-left:270px" size="1" width="800"  noshade > 
<br>

<div class="allinea" align="center"><img src="css/images/pc.jpg" alt="Ordine" style="width: 200px"><p><h4>1. Scrivi il tuo ordine.</h4></p></div>
<div class="allinea" align="center"><img src="css/images/com.jpg" alt="Commercinate" style="width: 200px"><p><h4>2. I commercianti preparano la spesa.</h4></p></div>
<div class="allinea" align="center"><img src="css/images/busta.jpg" alt="Ordine" style="width: 100px" ><p><h4>3. La tua spesa viene consegnata gratis a casa!</h4></p></div>

<br>

<!--Barra piè di pagina-->
  <div id="footer_bar"> 
     <div id="bar_container">   
      <ul>   
         <li><a href="areacommerciante.php">Area riservata al commerciante</a></li> 
              
                             </ul>  </div></div>

       
</body>

</html>