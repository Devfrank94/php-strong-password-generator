<?php 

  /* la funzione generate_password() viene eseguita passando come parametro la lunghezza della password
  specificata dall'utente. La funzione genera una password casuale utilizzando la funzione str_shuffle() di PHP
  per mescolare i caratteri presenti nella stringa $chars. */
  
function generate_password($length){ 
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=";
  // funzione substr serve per specificare che deve includere nella generazione della password dalla posizione 0 alla lunghezza massima della stringa passata $chars
  return substr(str_shuffle($chars),0,$length); 
} 

?>