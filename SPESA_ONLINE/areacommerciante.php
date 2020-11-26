<!DOCTYPE html> <!--Per dichiarare un documento che utilizzerà lo standard dell'Html5 si andrà ad utilizzare questo tag-->
<html>
  <head>
        
  <title>COMUNE DI TORRICELLA PELIGNA</title>
   <!-- diciamo al browser di adattare la larghezza della pagina in base alla larghezza del dispositivo dal quale si visualizza e si scalarlo a 1.0 , quindi la larghezza (width) è uguale alla larghezza del device(device-width)-->
  <meta name='viewport' content='initial-scale=1.0 maximum-scale=1.0'>
    <!-- codifca lettere-->
  <meta charset="utf-8" />
  <link rel='stylesheet' href="css/page.css" />
</head>
  <body>
       <div class="header"> </div>
       <div id="footer_bar"> 
       <div id="bar_container">  
       <!-- barra azzurra superiore -->
      </div>
      </div>

      <!-- <hr align="left" size="45" width="1325" color="#0099CC" noshade>  -->
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
 <span class="Stile5"><h2><font color="black">BENVENUTO! SEI NELLA SEZIONE DEDICATA AL COMMERCIANTE.</font></h2></span> <br>
  </MARQUEE>
</div> <br> <br>
  <center><div id="log">
       <div id="title"
        <p><h3>LOGIN</h3></p>
       </div> <br>
       <form id="forml" action="areacommercianteprivata.php" method="post" >
       Username:
       <input id="txtl" type="text" name="username" >
       <br />
       Password:
       <br>
       <input id="txt2" type="password" name="pw">
       <br />
       <br>
       <hr>
       <input type="submit" id="buttonl" value="Login">
       </form>
       </div></center>
       <br> 

<div class="allinea">
  <h3 align="center">Come funziona la spesa online?</h3>
  <hr align="left" size="1" width="945" noshade >

</div>


<div class="allinea" ><img src="css/images/pc_c.jpg" alt="Ordine" style="width: 110px"><p><h4>1. Consulta l'ordine ricevuto.</h4></p></div>
<div class="allinea"><img src="css/images/com_c.jpg" alt="Commercinate" style="width: 110px" ><p><h4>2. Prepara la spesa.</h4></p></div>
<div class="allinea"><img src="css/images/busta_c.jpg" alt="Ordine" style="width: 110px"><p><h4>3. Consegna al cliente!</h4></p></div>
<br>
 <!--Barra piè di pagina-->
  <div id="footer_bar"> 
     <div id="bar_container">    
      <ul> <li><a href="inizio.php">Home</a></li>                
                             </ul>  </div></div>

  </body>
</html>
