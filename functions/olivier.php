<?php

namespace olivier;

function checkPassword($password) {
  // -----------------------------------------------------initialisation des variables----------------------------------------------------

  $longueur = strlen($password);
  $maj =0;
  $minus =0;
  $num =0;
  $specialcount = 0;
  $point = 0;
  
  //-----------------------------------------------------Test du nombre de caractere----------------------------------------------------

    if ($longueur >= 12){
      $caractere = "d-none";
      $point = $point + 20;
    }
    //--------------------------------------------------Test des caracteres special------------------------------------------------------

    if (preg_match('#\W+#', $password)){
      $specialcount++;
      $special = "d-none";
    }
    //--------------------------------------------------Test des majuscule, minuscule et nombre ------------------------------------------

    for($i=0; $i < $longueur; $i++){
        $lettre=$password[$i];
        if ($lettre >='a' && $lettre <='z'){
          $minus++;
          $minuscule = "d-none";
        }
        elseif($lettre >= 'A' && $lettre <='Z'){
          $maj++;
          $majuscule = "d-none";
        }
        elseif($lettre >=0 && $lettre <= 9){
          $num++;
          $nombre = "d-none";
        }
        
      }
      //------------------------------------------------valeur pour la progresse bar

      if ($minus !=0){
        $point = $point + 20;
      }
      if ($maj !=0){
        $point = $point + 20;
      }
      if ($num !=0){
        $point = $point + 20;
      }
      if ($specialcount !=0){
        $point = $point + 20;
      }
      //-------------------------------------------------Couleur de la progresse bar------------------------------------------

      switch($point){
        case 20:  $color='bg-dark';
        break;
        case 40: $color="bg-danger";
        break;
        case 60: $color="bg-warning";
        break;
        case 80: $color="bg-info";
        break;
        case 100: $color="bg-success";
        break;
        default : $color="bg-light";
        break;
      }
    //--------------------------------------------------Affichage du mot de passe---------------------------------------------------

    echo '<h1 class="text-center">Olivier</h1>';

    echo 'Mot de passe : '.$password;
    echo '<p class=text-end></br>Force du mot de passe</p>';
    echo '<div class="progress">
            <div class="progress-bar progress-bar-striped '.$color.'" role="progressbar" style="width: '.$point.'%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>';
    echo '</br>';
    echo '<div class=row>';
    echo '<div class=col-4></div>';
    echo '<div class=col-4>';
    if ($point >= 100){
      echo '<div class="btn btn-success align-center" role="alert">
      OK
      </div>';
    }
    else{
    echo '<div class="btn btn-primary align-middle" role="alert">
            Le mot de passe doit contenir aux moins:
          </div>';
    }
    echo '<p class="'.$minuscule.'">1 minuscule</p>';
    echo '<p class="'.$majuscule.'">1 majuscule</p>';
    echo '<p class="'.$nombre.'">1 nombre</p>';
    echo '<p class="'.$caractere.'">12 caracteres</p>';
    echo '<p class="'.$special.'">1 caractere spécial</p>';
    echo '</div>';
    echo '<div class=col-4></div>';
    echo '</div>';
    //----------------------------------------------------------------Popup------------------------------------------------------
?>
    <form action="index.php" method="GET">
    <div class="modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
