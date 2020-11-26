<!DOCTYPE html> <!--Per dichiarare un documento che utilizzerà lo standard dell'Html5 si andrà ad utilizzare questo tag-->
<html>
<head>
    <title></title>
   <!-- diciamo al browser di adattare la larghezza della pagina in base alla larghezza del dispositivo dal quale si visualizza e si scalarlo a 1.0 , quindi la larghezza (width) è uguale alla larghezza del device(device-width)-->
  <meta name=”viewport”  content=”width=device-width, initial-scale=1.0” > 
    <!-- codifca lettere-->
  <meta charset="utf-8" />
  <style type="text/css">
    @import url(css/page.css);
  </style>

</head>
<body>
<div class="header"> </div>
       <div id="footer_bar"> 
       <div id="bar_container">  
       <!-- barra azzurra superiore -->
      </div>
      </div>


   <?php

        //email commerciante
         $to = $_POST['email'];
         //echo nl2br("$to");
         //oggetto
         $subject = "ordine: " .$_POST['nome'];
         //mittente
         $header = "From: ".$_POST['nome'];
         //ordine
         $message = "---------------------"."\r\n" ;
         $message .= $_POST['msg'] ."\r\n";
         $message .= "---------------------" ."\r\n";
         $message .= " " ."\r\n";
         $message .= " " ."\r\n";
         //info mittente
         $message .= "Indirizzo spedizione ordine: " .$_POST['indirizzo'] .";" ."\r\n";
         $message .= " " ."\r\n";
         $message .= "Recapito telefonico cliente: " .$_POST['tel'] .";" ."\r\n";
         
        
        
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
     


            $pos=$_POST['zona'];
            // echo($pos);
           
            // echo nl2br($_POST['zona']);
             // if($_POST){
           
                  if($_POST['zona']=="nord"){
                     echo '<pre  style="font-size: 25px; font-size: 25px; font-family:Times New Roman">' . PHP_EOL .'<div style="margin-left:450px;
                     font-size: 25px; font-family:Times New Roman">-- MESSAGGIO INVIATO CORRETTAMENTE! --</div>'. PHP_EOL .  PHP_EOL .
                     "<input id=\"loc\" type=\"submit\" onclick=\"location.href='nord.php'\" value=\"CONTINUA IL TUO SHOOPING!\" style=\"margin-left:500px;
                     font-size: 25px; font-family:Times New Roman\" />" .
                     '</pre>'; 

                  // header('Location: nord.php');
                  // die();
                  }
                  elseif($_POST['zona']=="sud"){

                     echo '<pre  style="font-size: 25px">' . PHP_EOL .'<div style="margin-left:450px;font-size: 25px; font-family:Times New Roman">-- MESSAGGIO INVIATO CORRETTAMENTE! --</div>'. PHP_EOL .  PHP_EOL .
                     "<input id=\"loc\" type=\"submit\" onclick=\"location.href='sud.php'\" value=\"CONTINUA IL TUO SHOOPING!\" style=\"margin-left:500px; 
                     font-size: 25px; font-family:Times New Roman\" />" .
                     '</pre>';
                  // header('Location: sud.php');
                  // die();
                  }


                  elseif($_POST['zona']=="centro"){
                     echo '<pre  style="font-size: 25px">' . PHP_EOL .'<div style="margin-left:450px; font-size: 25px; font-family:Times New Roman">-- MESSAGGIO INVIATO CORRETTAMENTE! --</div>'. PHP_EOL .  PHP_EOL .
                     "<input id=\"loc\" type=\"submit\" onclick=\"location.href='centro.php'\" value=\"CONTINUA IL TUO SHOOPING!\" style=\"margin-left:500px;
                     font-size: 25px; font-family:Times New Roman\" />" .
                     '</pre>';

                  // header('Location: centro.php');
                  // die();
                  }
              // }
               
         }else {
           

            echo '<pre style=" margin-left:500px; font-size: 25px; font-family:Times New Roman">'. PHP_EOL . PHP_EOL . '    Messaggio non inviato...' . PHP_EOL . PHP_EOL . 
            'Problemi con il server SMTP.' .PHP_EOL . PHP_EOL . PHP_EOL . 
           '   -- Riprovare più tardi! -- ' . PHP_EOL .
           //SE VOLESSIMO AGGIUNGERE IL BOTTONE CHE RITORNA ALLA MAPPA BISOGNA COPIARE ANCHE IL getLocation(), showPosition() e showError
          //   "<input id=\"loc\" type=\"submit\" onclick=\"location.href='mappa_torricellapeligna.php'\" value=\"RITORNA ALLA MAPPA!\" style=\"margin-left:500px;
         //   font-size: 25px; font-family:Times New Roman\" />".
           '</pre>';
   
         }
      

      ?>


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