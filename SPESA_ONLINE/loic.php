<?php
session_start();
$username = $_POST['username'];
$password = $_POST['pw'];

if($username == "" or $password == ""){
echo "Non puoi effettuare il login senza aver inserito username o password.";
}else if($username == "" and $password == ""){
echo "Non puoi effettuare il login senza aver inserito username e password.";
}else{
// configure your username and password
if($username == "commerciante" AND $password == "password"){
   //aprire la mappa del percorso/area commerciante
   echo "area commerciante";
 
   echo "1) mappa percorso";
   echo "2) logout";
   
}else{
echo "Accesso negato. Non esiste il tuo username.";
}
}

function loggeduser($username){

}


?>