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
  
</head>

<body>
	 <div class="header"> </div>
    
    
   <div id="footer_bar"> 
     <div id="bar_container">    
     <!-- barra azzurra superiore -->
      </div></div>



      <div align="center" id="pos">
      <form name="formmail" method="post" action="email.php" onsubmit="return controlloForm()" style="font-size: 20px; font-family:Times New Roman">
        <br>
        Invia ordine a: 
        <?php
          $zona= $_POST['zona']; 
          $email= $_POST['email'];  
          echo nl2br("$email");
  
 //echo nl2br("$zona");
?> 

<br>
<br>
  <input type="hidden" name="email" value="<?php echo ("$email")?>">
   <input type="hidden" name="zona" value="<?php echo ("$zona")?>">

  <label for="nome" style="font-size: 20px; font-family:Times New Roman">Nome e Cognome</label>
  <input type="text" id="nome" name="nome" placeholder="Inserisci Nome e Cognome" style="font-size: 12px; font-family:Times New Roman">

  <label for="indirizzo" style="font-size: 20px; font-family:Times New Roman">Indirizzo</label>
  <input type="text" id="indirizzo" name="indirizzo" placeholder="Indirizzo destinazaione della spesa" style="font-size: 12px; font-family:Times New Roman">

  <label for="tel" style="font-size: 20px; font-family:Times New Roman">Telefono</label>
  <input type="text" id="tel" name="tel" placeholder="Numero di telefono" style="font-size: 12px; font-family:Times New Roman">

  <label for="msg" style="font-size: 20px; font-family:Times New Roman">Messaggio</label>
  <textarea id="msg" name="msg" placeholder="Scrivi il tuo messaggio" style="font-size: 12px; font-family:Times New Roman"></textarea>

<br>
<br>
  <input type="submit" value="INVIA ORDINE" style="font-size: 15px; font-family:Times New Roman">

</form>
</div>
                          
<!--controllo campi-->
<script>

function controlloForm() {
  var nome = document.forms["formmail"]["nome"].value;
  var indirizzo = document.forms["formmail"]["indirizzo"].value;
  var tel = document.forms["formmail"]["tel"].value;
  var msg = document.forms["formmail"]["msg"].value;

  if (nome == "" || indirizzo == "" || msg == "" || tel =="") {
    alert("I campi Nome, Indirizzo, Messaggio e Telefono sono obbligatori!");
    return false;
  }
else{
   
    return true;
  }
}

</script>
 <!--Barra piè di pagina-->
  <div id="footer_bar"> 
     <div id="bar_container">    
      <ul>                
      </ul>  </div></div>


</body>
</html>