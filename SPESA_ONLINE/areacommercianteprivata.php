<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="utf-8" />
    <title>COMUNE DI TORRICELLA PELIGNA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- per inserire leaflet routing machine includiamo:  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <link rel="stylesheet" href="leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="leaflet-routing-machine-3.2.12/examples/index.css" />
</head>


  <body bgcolor= "#0080ff"  >


  <?php
session_start();
$username = $_POST['username'];
$password = $_POST['pw'];

if($username == "" or $password == ""){
echo '<pre>'. "Non puoi effettuare il login senza aver inserito username o password." . PHP_EOL .  '</pre>';
// echo "Non puoi effettuare il login senza aver inserito username o password.";
// pulsante per tornare indietro
echo "<input type=\"button\" onclick=\"location.href='logout.php'\" value=\"INDIETRO\"/>";

}else if($username == "" and $password == ""){
  echo '<pre>'. "Non puoi effettuare il login senza aver inserito username e password." . PHP_EOL .  '</pre>';
echo "<input type=\"button\" onclick=\"location.href='logout.php'\" value=\"INDIETRO\"/>";

}else{
// configure your username and password
if($username == "commerciante" AND $password == "password"){

  //lato sinistro-centrale della pagina

  //per inserire leaflet routing machine includiamo: 
  echo '<div id="map" class="map" style="width:1000px; margin-bottom:50px; margin-top:50px; margin-left:50px">'; 
  
  echo '<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>';
  echo '<script src="leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.js"></script>';
  echo '<script src="leaflet-routing-machine-3.2.12/examples/Control.Geocoder.js"></script>';
  echo '<script src="leaflet-routing-machine-3.2.12/examples/config.js"></script>';
  echo '<script src="leaflet-routing-machine-3.2.12/examples/index.js"></script>';
  
  echo '</div>';

 
//lato destro della pagina
  
echo '<pre>'. PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL .  PHP_EOL . 
// 'AREA' .PHP_EOL . 'COMMERCIALE' . PHP_EOL .
'<div class="comm" style="margin-left:1165px; font-size: 25px; font-family:Times New Roman"> AREA </div>'.  PHP_EOL . 
'<div class="comm" style="margin-left:1100px; font-size: 25px; font-family:Times New Roman"> COMMERCIANTE </div>'. PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL .PHP_EOL . 
 '</pre>';


// pulsante localizza indirizzo commerciante
echo '<pre>' . PHP_EOL .'<div style="margin-left:1150px; font-size: 25px; font-family:Times New Roman">CLICCA SU </div>'. PHP_EOL . 
// buttonClick --> gestita nel file js --> examples/index.js --> funzione che localizza la posizione del commerciante
"<input id=\"loc\" type=\"button\" onclick='buttonClick()'\" value=\"LOCALIZZA\" style=\"margin-left:1130px; font-size: 25px; font-family:Times New Roman\" />" . PHP_EOL .  PHP_EOL . 
'<div style="margin-left:1090px; font-size: 25px; font-family:Times New Roman">PER VISUALIZZARE </div>' . PHP_EOL . 
'<div style="margin-left:1130px; font-size: 25px; font-family:Times New Roman">IL PERCORSO </div>' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL .
'</pre>';




// pulsante per uscire aria commerciante, logout 
echo "<input type=\"button\" onclick=\"location.href='logout.php'\" value=\"LOGOUT\"style=\"margin-left:1140px;font-size: 25px; font-family:Times New Roman\" />";

echo '</div>';


}else{
echo '<pre>'. "Accesso negato. Non esiste il tuo username." . PHP_EOL .  '</pre>';
// pulsante per tornare indietro
echo "<input type=\"button\" onclick=\"location.href='logout.php'\" value=\"INDIETRO\"/>";
}

}

function loggeduser($username){

}


?>
 
 
</body>
</html>