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
 
    <title>EasePayShool - Banque</title>
    <style>
    /* Style pour la modal */
    .modal {
        display: none; /* Par défaut, la modal est cachée */
        position: fixed; /* Position fixe pour couvrir tout l'écran */
        z-index: 1; /* Au-dessus de tout le reste */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Pour faire défiler la modal si nécessaire */
        background-color: rgba(0,0,0,0.5); /* Fond semi-transparent */
        
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* Centrer la modal verticalement */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Largeur de la modal */
        max-width: 600px; /* Largeur maximale */
        border-radius: 10px;
        position: relative;
         
    }

</style>

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
                <li><a href="{{route('easepayschool.paiement')}}">Paiement</a></li>
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



<!-- Modal -->
<div id="bankModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Authentification</h2>
         @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="bankDetails">
            <!-- Logo de la banque et formulaire d'authentification seront insérés ici -->
        </div>
    </div>
</div>


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
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Custom JavaScript -->
<script>
    function selectBank(bankName, logoUrl) {
        // Afficher la modal
        var modal = document.getElementById('bankModal');
        modal.style.display = "block";

        // Afficher le logo et le formulaire
        var bankDetails = document.getElementById('bankDetails');
        bankDetails.innerHTML = `
            <img src="${logoUrl}" alt="${bankName}">
            <form action="/rechercher/${bankName}" method="POST">
                @csrf
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="bank-id">Motde Passe:</label>
                <input type="password" id="password" name="pwd" required><br><br>
                <button type="submit">Rechercher</button>
            </form>
        `;
    }

    function closeModal() {
        var modal = document.getElementById('bankModal');
        modal.style.display = "none";
    }
</script>


  </body>
</html>