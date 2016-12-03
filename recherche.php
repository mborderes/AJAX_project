<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    
    <head>
        
        <meta charset="utf-8"/>
        <title> AnnonceÉtudiant </title>
        
        <!-- Librairies externes -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"  crossorigin="anonymous"></script>

        
        <!-- Librairies personnelles --> 
        <link href="./css/style.css" rel="stylesheet" />
        <script src="js/fonctions_globales.js"></script>
        <script src="js/gestion_annonces_dyn.js"></script>

        <script type="text/javascript" src="js/ajout.js"></script>
        
    </head>
    <body>
        
        <header >
            <h1 > <a href="index.html"><img class="logo" src="./images/logo2.png" id="logo"  height="100"/> </a> AnnonceÉtudiant </h1> <!-- 2 t à petites --> 
            <h2>Trouver et postez vos annonces gratuitement !</h2>

            
            <nav class ="navbar navbar-default" id="menu">  
                <div class="container-fluid">
                    <div class="navbar-header ">
            
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left " >
                            <li> <a href="index.php"> Accueil </a></li>
                            <li> <a href="annonces.php"> Annonces </a></li>
                            <li class="active"> <a href="recherche.php"> Rechercher </a></li>
                            <li class = "dropdown"> 
                                <a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button" aria-expanded="false"> Plus <span class="caret"></span></a>
                            </li>
                        </ul>
                      <div class="collapse navbar-collapse" id="login">
        
                       </div>
                    </div>
                    
                </div>
            </nav>
        </header>
        <section class="cf">
            <div id="alertbox">
            </div>
            
        <main>  <!-- Main, norme HTML5 -->
            
            
            <?php 
           // var_dump($_SESSION); 
            //session_destroy();
            ?>
            
                  <div class="panel-group">
              <div class="panel panel-default">


                  <div class="panel-heading recherche"><h3> Rechercher selon vos critères </h3></div>
      <div class="panel-body">
        
      
            <form id="filter-form" class="navbar-form">
                  <label for="filter"> Mot-clé(s) </label>
                  <input type="text" id="filter" name="filter"> 
                
                  <label for="column"> dans </label>
                  <select name="column" id="column"> 
                    <option value="id"> Identifiant </option>
                    <option value="titre"> Titre </option>
                    <option value="description"> Description </option>
                    <option value="categorie"> Catégorie </option>
                    <option value="nom_vendeur"> Vendeur </option>
                    <option value="prix"> Prix </option>
                    <option value="photo"> Photo </option>
                    <option value="rdv_lat"> Latitude </option>
                    <option value="rdv_lon"> Longitude </option>
                    <option value="date_ajout"> Date </option>
                    <option value="all" selected> Tout </option>
                  </select>
                 
                  <button type="submit" class="btn btn-primary">Afficher les données</button>
            </form>
                  </div>
            
    
            </br>
            
            <div id="annonces">
            </div>
                      
            </div></div>
            
        </main>
        <aside>
        
    
            <div class="panel-group">
              <div class="panel panel-default">
                    <div class="panel-heading ajout"><h3> Ajouter une annonce  </h3></div>
                  <div class="panel-body">

            <form id="ajout-form">
               <!-- <fielset> 
                    <legend> Info</legend>-->
                <div class="form-group">
                    <label>Type d'annonce :</label>
                        <select name="categorie">
                            <option value="immobilier">Immobilier</option>
                            <option value="electronique">Électonique</option>
                            <option value="vetement">Vêtement</option>
                            <option value="bijoux">Bijoux</option>
                            <option value="dvd_cd">DVD/CD</option>
                        </select>
                </div>
                
                <div class="form-group">
                    <label>Titre :</label>
                    <input class="form-control input-sm" type="text" name="titre" placeholder="Titre de l'annonce" required/>
                </div>
                
                <div class="form-group">
                    <label>Descriptif :</label> </br>
                    <textarea class="form-control input-sm" name="description" placeholder="Descriptif de l'annonce" rows = "1"></textarea>
                </div>

                <div class="form-group">
                    <label>Prix :</label>
                    <input class="form-control input-sm" type="number" name="prix" placeholder="10 €" required/>
                </div>
                    
                <div class="form-group">    
                    <label>Nom :</label>
                    <input class="form-control input-sm" type="text" name="nom_vendeur" placeholder="" required />
                </div>
                    
                <div class="form-group">    
                    <label>Photo :</label>
                    <input class="form-control input-sm" type="text" name="photo" placeholder="Lien URL vers la photo" />
                </div>
                    
                <div class="form-group ">    
                    <label>Rdv lattitude :</label>
                    <input class="form-control input-sm" type="number" name="rdv_lat" placeholder="" />
                </div>
                <div class="form-group">
                    <label>Rdv longitude :</label>
                    <input class="form-control input-sm"  type="number" name="rdv_lon" placeholder="" />
                </div>
                
                <button class="form-control input-sm " type="submit" class="btn btn-primary">Ajouter l'annonce</button>
                
                <!--</fieldset>-->
                
            </form>
                </div>
    
    </div>
        </aside>
        </section>
        <footer>  
            <p> Tous droits réservés &copy Marianne Borderes et Gonché Danesh </p>
            <p> Dernière mise à jour : <time id="lastModif"></time> </p>
        </footer>

<!--  <script src="js/toggle.js"></script>-->
        
    </body>  <!--Footer dans body -->
    
</html>