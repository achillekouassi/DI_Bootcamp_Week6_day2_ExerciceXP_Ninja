<?php
    function factorielle($nbr) 
    { 
       if($nbr === 0) // condition d'arret 
          return 1;  
      else 
          return $nbr*factorielle($nbr-1); 
    }  
    echo factorielle(8);
?>
