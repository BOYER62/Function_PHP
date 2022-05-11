<?php
    namespace olivier;
    require_once("functions/olivier.php");  
?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP - Les fonctions</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/spacelab/bootstrap.min.css">    

    </head>
    <body>
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Test mot de passe
            </button>
        </div>

        <div class="container py-3">
            
            
                <?php
            
            if (isset($_GET['password'])) {

                $password = $_GET['password'];

                // I use my personal function with my namespace
                // ...
                checkPassword($password);
            }
            else {
                ?>

                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Bonjour et bienvenue 🙂</h4>
                    <p>Vérifions si votre mot de passe est bien sécurisé !</p>
                    <hr>
                    <p>Pour celà, il vous suffit de le renseigner directement dans l'URL comme dans l'example ci-dessous :</p>
                    <a href="index.php?password=motdepasse" class="link-primary mb-0">index.php?password=motdepasse</a>
                </div>

                <?php
            }

            ?>

        </div>

        <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mot de passe</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="../index.php" method="get">
            <fieldset>
                <label class="form-label mt-4" for="password"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tester un mot de passe</font></font></label>
                <input class="form-control" id="password" name="password" type="text" placeholder="">
            </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Tester</button>
        </div>
        </form>
      </div>
    </div>
  </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
