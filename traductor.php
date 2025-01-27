<?php
     $palabra_ingles = $_POST ['variable_php'];
     if($palabra_ingles=="help")
       $traduccion="Ayuda";
    else if($palabra_ingles=="suny")
      $traduccion="Sol";
    else  if($palabra_ingles=="smile")
      $traduccion="Sonrie";
    else  if($palabra_ingles=="class")
      $traduccion="Clase";
    else  if($palabra_ingles=="time")
      $traduccion="Tiempo";
    else  if($palabra_ingles=="car")
      $traduccion="Carro";
    else  if($palabra_ingles=="city")
      $traduccion="Ciudad";
    else  if($palabra_ingles=="work")
      $traduccion="Trabajo";
    else  if($palabra_ingles=="chicken")
      $traduccion="Pollo";
    else  if($palabra_ingles=="flower")
      $traduccion="Flor";
    else  if($palabra_ingles=="chocolate")
      $traduccion="Chocolate";
    else  if($palabra_ingles=="dinosaur")
      $traduccion="Dinosaurio";
    else
      $traduccion="No hay traduccion";

    echo($traduccion);
?>