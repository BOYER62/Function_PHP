<?php

// namespace olivier;

function checkPassword($password) {
    $longueur = strlen($password);
    echo '<h1 class="text-center">Olivier</h1>';

    echo 'Mot de passe : '.$password;
    echo '<p class=text-end></br>Force du mot de passe</p>';
    echo '<div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>';
    echo '<div class=row>';
    echo '<div class=col-4></div>';
    echo '<div class=col-4>';
    
    for($i=0; $i < $longueur; $i++){
      $lettre=$password[$i];
      if ($lettre >='a' && $lettre <='z'){
        $point= $point + 1;
        $minuscule = "d-none";
        echo '1 minuscule';
      }
      elseif($lettre >= 'A' && $lettre <='Z'){
        $point=$point+2;
        echo '1 majuscule';
      }
      elseif($lettre >=0 && $lettre <= 9){
        $point=$point+3;
        echo '1 chiffre';
      }
      else {
        echo 'caractere special';
      }
      print_r($point);
    }
  
    // ...

 
    
    
    echo '<div class="btn btn-primary align-middle" role="alert">
            Le mot de passe doit contenir aux moins:
          </div>';
    echo '<p class="'.$minuscule.'">1 minuscule</p>';
    echo '<p class="majuscule">1 majuscule</p>';
    echo '<p class="nombre">1 nombre</p>';
    echo '<p class="caractere">12 caracteres</p>';
    echo '<p class="special">1 caractere spécial</p>';
    echo '</div>';
    echo '<div class=col-4></div>';
    echo '</div>';
}    
