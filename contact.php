<?php

/************************************************************************
*                       FORMULAIRE ESPACE CLIENT                        *
*************************************************************************/
        // Initialisation des variables
        // contiendra nos éventuels messages d'erreur de validation du formulaire
    $errors = array();
    $validate = "";

        // variables des attributs "value" du formulaire
    $nom = "";
    $email = "";
    $pays = "";
    $message = "";

        // Variable booléenne de formulaire soumis
    $Sent = false;

        // Est-ce que le formulaire a été soumis ?
    if (!empty($_POST)) {

        $nom  = trim( strip_tags( $_POST["nom"] ) );
        $email     = trim( strip_tags( $_POST["email"] ) );
        $pays   = trim( strip_tags( $_POST["pays"] ) );
        $message   = trim( strip_tags( $_POST["message"] ) );

        /*_________________ Début de la validation ____________________*/

        // ---------------- NOM ----------------
        // est-ce que la personne a renseigné son nom ?
        if(empty($nom)) {
            $errors[] = "Please provide an nom!";
        }
        // taille minimale du nom
        else if(strlen($nom) < 2) {
            $errors[] = "nom too short!";
        }
        // taille maximale du nom
        else if(strlen($nom) > 100) {
            $errors[] = "nom too long!";
        }

        // ---------------- MAIL ----------------
        if (empty($email)) {
            $errors[] = "Please provide an email!";
        }
        else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            $errors[] = "Your email is not valid!";
        }

        // ---------------- pays ----------------
        if (!empty($pays)) {
            // taille minimale du nom
            if(strlen($pays) < 3) {
                $errors[] = "pays too short!";
            }
            elseif (!preg_match("#^[a-zA-Z]+$#", $pays)) {
                $errors[] = "Your pays should be in letters!";
            }
        }

        // ---------------- MESSAGE ----------------
        // est-ce que la personne a renseigné son mot de passe ?
        if(empty($message)) {
            $errors[] = "Please provide a message!";
        }
        /*__________________ Fin de la validation ____________________*/

        // si le formulaire est valide, 
        if (empty($errors)) {

            $Sent = true;
            $validate = "envoyé";

        }

    } // fin du if formulaire soumis ?

?>



<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Guide de parapente au Maroc | Abderahim Derbani</title>
<meta name="Description" content="Abderrahim Derbani, guide de parapente au Maroc, sur les circuits d'Agadir et de Marrakech." />
<META NAME="Keywords" CONTENT="guide parapente Maroc, parapente, Maroc, découvrir le maroc, parapentiste, dépaysement, authenticité">

	
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
</head>

<body>

	<div id="container">
    
    <div id="header">
        <div id="boutonplus">+</div>
        <div id="boutonmoins">-</div>
        <div id="bijour">
            <span class="font85">Bijour</span><span class="font29">. Je suis <strong>Abderrahim Derbani</strong></span><br/>
            <span class="font23"> &nbsp;et je suis <strong><span class="font35">guide</span></strong> pour <strong><span class="font35">parapentistes</span></strong> au <strong><span class="font35">Maroc</span></strong></span>
        </div>
    </div>


    <div id="contacts">
        <h2>Contact</h2>

        <form action="contact.php" class="formContact" method="POST" novalidate>
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>"/>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>"/>
            </div>
            <div>
                <label for="pays">Pays :</label>
                <input type="text" name="pays" id="pays" value="<?php echo $pays; ?>"/>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea name="message" id="message"><?php echo $message; ?></textarea>
            </div>
            <div>
                <input type="submit" value="ENVOYER" class="env"/>
            </div>
        </form>  
        <div id="commentaires">
            <div class="errors">
                <ul>
                <?php 
                    // Affiche les messages d'erreur contenu dans notre array
                    // si l'array est vide la boucle est ignorée
                    foreach($errors as $error) {
                        echo '<li>' . $error . '</li>'; 
                    }
                ?>
                </ul>
            </div>
            <div class="validates">
                <?php 
                    if ($Sent) {
                        echo $validate;
                    }
                ?>
            </div>
        </div>      

    </div>






    <div id="footerborder"></div>
    
    <div id="footer">
    
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-5.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-5.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-23.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-23.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-3.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-3.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-22.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-22.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-6.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-6.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-36.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-36.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-10.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-10.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-11.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-11.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-12.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-12.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-24.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-24.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-26.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-26.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-30.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-30.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-41.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-41.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-31.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-31.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-32.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-32.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-43.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-43.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-1.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-1.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-46.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-46.jpg" class="pics"></a>
    
        
    <div class="clear"></div><br />
    
    <div id="subfooter">&copy;Abderrahim Derbani <?= date('Y'); ?> | site par <a href="http://www.webolic.com" target="_blank">Webolic</a></div>
    
    </div>
    
</div>

    
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="app.js"></script>

    
    


        
</body>
</html>
