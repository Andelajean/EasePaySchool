<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('img/site.webmanifest')}}">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<!-- -->
 
    <title>EasePayShool - Payement</title>
  </head>
  <body>
     <!-- Conteneur de chargement -->
    <div id="loading">
        <div class="spinner"></div>
    </div>
   <div id="app-content">  
   
            
    <nav>
     <img src="{{ asset('img/Logo Coach Sportif Nominatif Typographique Moderne Minimaliste Noir Jaune_20240611_073743_0000.png') }}" class="circular-logo" alt="Logo">
            <ul class="nav-links">
            <li><a href="{{route('register')}}">S'Inscrire</a></li>
                <li><a href="{{route('login')}}">Se Connecter</a></li>
                <li><a href="/">Accueil</a></li>
                <li><a href="{{route('easepayschool.about')}}">A Propos</a></li>
                <li><a href="{{route('easepayschool.contact')}}">Conctact</a></li>
                <li><a href="{{route('easepayschool.banque')}}">Banque</a></li>
                <li><a href="{{route('easepayschool.help')}}">Aide</a></li>
            </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir une Banque</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="payment-section">
        <h2>Effectuer vos paiements ici</h2>
        <h2>Choisissez la banque</h2>
        <div class="bank-container">
            <div class="bank" onclick="selectBank('Afriland First Bank', 'img/afriland.png')">
                <img src="{{asset('img/afriland.png')}}" alt="Afriland First Bank">
                <p>Afriland First Bank</p>
            </div>
            <div class="bank" onclick="selectBank('Atlantique Banque', 'img/atlantic.jfif')">
                <img src="{{asset('img/atlantic.jfif')}}" alt="Atlantique Banque">
                <p>Atlantique Banque</p>
            </div>
            <div class="bank" onclick="selectBank('Bange Bank', 'img/bange bank.png')">
                <img src="{{asset('img/bange bank.png')}}" alt="Bange Bank">
                <p>Bange Bank</p>
            </div>
            <div class="bank" onclick="selectBank('BGFI Bank', 'img/bgfibank.png')">
                <img src="{{asset('img/bgfibank.png')}}" alt="BGFI Bank">
                <p>BGFI Bank</p>
            </div>

            <div class="bank" onclick="selectBank('BICEC', 'img/bicec.jfif')">
                <img src="{{asset('img/bicec.jfif')}}" alt="BICEC">
                <p>BICEC</p>
            </div>
            <div class="bank" onclick="selectBank('CCA Bank', 'img/cca.jfif')">
                <img src="{{asset('img/cca.jfif')}}" alt="CCA Bank">
                <p>CCA Bank</p>
            </div>
            <div class="bank" onclick="selectBank('Commercial Bank', 'img/commercial bank.png')">
                <img src="{{asset('img/commercial bank.png')}}" alt="Commercial Bank">
                <p>Commercial Bank</p>
            </div>
            <div class="bank" onclick="selectBank('EcoBank', 'img/ecobank.jfif')">
                <img src="{{asset('img/ecobank.jfif')}}" alt="EcoBank">
                <p>EcoBank</p>
            </div>
            
            <div class="bank" onclick="selectBank('Express Union', 'img/express union.png')">
                <img src="{{asset('img/express union.png')}}" alt="Express Union">
                <p>Express Union</p>
            </div>
            <div class="bank" onclick="selectBank('SCB', 'img/scb.png')">
                <img src="{{asset('img/scb.png')}}" alt="SCB">
                <p>SCB</p>
            </div>
            <div class="bank" onclick="selectBank('SGBC', 'img/sgbc.jfif')">
                <img src="{{asset('img/sgbc.jfif')}}" alt="SGBC">
                <p>SGBC</p>
            </div>
            <div class="bank" onclick="selectBank('UBA', 'img/uba.png')">
                <img src="{{asset('img/uba.png')}}" alt="UBA">
                <p>UBA</p>
            </div>
            <div class="bank" onclick="selectBank('Vision Finance ', 'img/vision finance.jfif')">
                <img src="{{asset('img/vision finance.jfif')}}" alt="Vision Finance">
                <p>Vision Finance</p>
            </div>
            <!-- Ajoutez les autres banques de la même manière -->
        </div>
    </section>
    

  <!-- footer -->
      <footer>
          <footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">A Propos</div>
         <p>EasePaySchool est une plate forme qui vous evite des déplacements unitiles.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact </div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+237 659 454 737 / 620 690 733</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>easepayschool@dev.gmail</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Nos Services</div>
       <div><a href="#">Web Design, Development</a></div>
       <div><a href="#">Sécurité Informatique</a></div>
       <div><a href="#">Developpement Dekstop</a></div>
       <div><a href="#">Developpement Mobile</a></div>
       <div><a href="#">Mobile Application Design</a></div>
       <div><a href="#">Vidéo Surveillance</a></div>
       <div><a href="#">Réseau Informatique</a></div>
     </div>
     <div class="right box">
       <div class="topic">Nous Suivre</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Envoyer">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i> <img classe="icone" src="{{asset('img/facebook.png')}}"  width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-instagram"></i><img classe="icone" src="{{asset('img/logotik.jfif')}}"  width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-twitter"></i><img classe="icone" src="{{asset('img/logox.png')}}"  width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-youtube"></i><img classe="icone" src="{{asset('img/youtubet.png')}}" width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-linkedin-in"><img classe="icone" src="{{asset('img/logolin.png')}}" width="30px" height="30px"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright &#169; 2024 <a href="#">EasePaySchool</a> All rights reserved</p>
   </div>
 </footer>
  </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/style.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   
    <script>
        function selectBank(bankName, bankLogo) {
            // Rediriger vers la page du formulaire avec les paramètres de la banque sélectionnée
            const url = `formulaire?bankName=${encodeURIComponent(bankName)}&bankLogo=${encodeURIComponent(bankLogo)}`;
            window.location.href = url;
        }
    </script>
  </body>
</html>