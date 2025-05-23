<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-contact.css">
    <title>Contact</title>
</head>
<body>

    <header>

        <nav>
            <ul class="main-navlinks">
                <li id="logo"><a href="./index.html"><img src="./logo sabil5.png" alt="logo"></a> </li>
                <div class="container-links">
                    <!-- <li><a href="index.html">Accueil</a></li> -->
                    <li><a href="./about.html" target="_blank">Notre histoire</a></li>
                    <li><a href="actions.html"target="_blank">Nos actions</a></li>
                    <li><a href="./Contact.html">Contact</a></li>
                </div>
                <button type="button" class="hamburger" aria-label="Toggle Navigation" aria-expanded="false">
                    <img src="./image/photos/burger-menu-svgrepo-com.svg" alt="Bouton du menu">
                </button>
                <a href="" class="close-button"></a>
                <span class="donate-button">
                    <img src="./image/photos/donate button.svg" alt="Bouton de don" class="donate-button">
                </span>
            </ul>
            
        </nav>

    </header> 
    
    <div class="pre-form">
        <h2>
            Formulaire de contact 
        </h2>
        <p>
            <span>Vous avez une question, une suggestion ou souhaitez simplement entrer en contact avec nous ?</span>
            <br>
            Notre équipe est à votre écoute ! Remplissez le formulaire ci-dessous, et nous vous répondrons dans les plus brefs délais.
            <br>
            Que ce soit pour rejoindre notre association, proposer un partenariat ou obtenir des informations, n'hésitez pas à nous écrire.
        </p>
    </div>


    <section class="form-contact">
        <form action="traitement.php" method="post">
            <input type="text" id="prenom" name="prenom" value="" placeholder="Entrez votre prénom*" required>
            <input type="text" id="nom" name="nom" value="" placeholder="Entrez votre nom" required>
            <input type="text" id="mail" name="mail" value="" placeholder="Tapez votre adresse e-mail" required>
            <input type="text" id="phone" name="phone" value="" placeholder="Entrez votre numéro de téléphone ( facultatif )">
            <textarea name="message" id="message" placeholder="Entrez votre message" required></textarea>
            <br>
            <button>Envoyer</button>
        </form>
    </section>



    <footer>
        <h2>Nos informations</h2>
        <div class="container-container">
            <div class="container-site">
                <span>Le site</span>
                <li><a href="">Accueil</a></li>
                <li><a href="#about">Qui sommes nous</a></li>
                <li><a href="#actions">Nos actions</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#don">Faire un don</a></li>
            </div>
            <div class="container-missions">
                <span>Nos différentes actions</span>
                <li>Colis alimentaires</li>
                <li>Maraudes</li>
                <li>Distribution vestimentaire</li>
                <li>Colis d'hygiène</li>
                <li>Aide au 3ème age</li>
            </div>
            <div class="container-sociaux">
                <span>Nos réseaux sociaux</span>
                <li><a href="https://www.facebook.com/profile.php?id=61551827338709&locale=fr_FR"
                        target="_blank">Facebook</a></li>
                <li><a href="https://www.tiktok.com/@association.sabil?is_from_webapp=1&sender_device=pc"
                        target="_blank">Tiktok</a></li>
                <li><a href="https://www.instagram.com/association_sabil/" target="_blank">Instagram</a></li>
                <li>sabil.futur@gmail.com</li>
                <li>06 51 96 29 87</li>
            </div>
        </div>
        <div id="trait"></div>
        <div class="Copyrightandicons">
            <div id="Copyright">
                <span>©SabilAsso</span>
            </div>
            <div id="icons">
                <a href="https://www.instagram.com/association_sabil/" target="_blank"><i
                        class="iconoir-instagram"></i></a>
                <a href="https://www.tiktok.com/@association.sabil?is_from_webapp=1&sender_device=pc" target="_blank"><i
                        class="iconoir-tiktok"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61551827338709&locale=fr_FR" target="_blank"><i
                        class="iconoir-facebook"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>