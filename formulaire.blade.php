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
 <style>
        .form-section {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
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

   <section id="form-section">
        <h2>Paiement pour <span id="bank-name"></span></h2>
        <img id="bank-logo" src="" alt="Logo de la banque" class="bank-logo">
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
        <form id="payment-form" method="post" action ="">
           @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="account_number">Numéro de compte de l'établissement :</label>
                    <input type="text" id="account_number" name="account_number" required placeholder="exple 1111 6540 7895 5412 31">
                </div>
                <div class="form-group">
                    <label for="account_holder">Nom du titulaire de compte :</label>
                    <input type="text" id="account_holder" name="account_holder" required placeholder="exple:iai cameroun">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="student_name">Nom de l'élève / étudiant :</label>
                    <input type="text" id="student_name" name="student_name" required placeholder="exple:mvondo ange">
                </div>
                <div class="form-group">
                    <label for="depositor_name">Nom du déposant :</label>
                    <input type="text" id="depositor_name" name="depositor_name" required placeholder="exple: andela jean gael">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="depositor_phone">Téléphone du déposant :</label>
                    <input type="text" id="depositor_phone" name="phone_number" required placeholder="exple:675429591">
                </div>
                <div class="form-group">
                    <label for="depositor_id">CNI du déposant :</label>
                    <input type="text" id="depositor_id" name="cni_number" required placeholder="exple:kit 0014">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="payment_date">Date de paiement :</label>
                    <input type="date" id="payment_date" name="payment_date" value="{{ date('Y-m-d') }}" required readonly>
                </div>
                <div class="form-group">
                    <label for="education_level">Niveau :</label>
                    <div class="radio-group">
                        <input type="radio" id="secondary" name="education_level" value="secondaire" onclick="toggleUniversityFields(false)" required>
                        <label for="secondary">Secondaire</label>
                        <input type="radio" id="university" name="education_level" value="universite" onclick="toggleUniversityFields(true)" required>
                        <label for="university">Université</label>
                    </div>
                </div>
            </div>

            <div id="university_fields" class="form-row hidden">
                <div class="form-group">
                    <label for="level">Niveau :</label>
                    <input type="text" id="level" name="level" placeholder="exple:1 ou 2 ou 3...">
                </div>
                <div class="form-group">
                    <label for="course">Filière :</label>
                    <input type="text" id="course" name="filiere"placeholder="exple:genie logiciel">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="class">Classe :</label>
                    <input type="text" id="class" name="class" required placeholder="exple:cm1 ou gl3a..">
                </div>
                <div class="form-group">
                    <label for="reason">Motif :</label>
                    <input type="text" id="reason" name="purpose" required placeholder="exple:frais de scolarité">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="details">Détails :</label>
                    <textarea id="details" name="details" required placeholder="exple:premiere tranche"></textarea>
                </div>
                <div class="form-group">
                    <label for="amount">Somme à payer :</label>
                    <input type="number" id="amount" name="amount" min="0" pattern="\d+" required placeholder="exple=50000">
                </div>
            </div>
             <div class="form-row">
                <div class="form-group">
                    <label for="service_fee">Frais de service :</label>
                    <input type="number" id="service_fee" name="service_fee" value="500" readonly>
                </div>
                <div class="form-group">
                    <label for="total_amount">Total :</label>
                    <input type="number" id="total_amount" name="total" readonly>
                </div>
            </div>

            <div class="form-row">
                <h3>Moyen de paiement :</h3>
                <div class="radio-group">
                    <input type="radio" id="mtn_momo" name="payment_method" value="mtn_momo" required>
                    <label for="mtn_momo"><img src="{{asset('img/momo.jfif')}}" alt="MTN MoMo" style="width: 50px;"></label>
                    <input type="radio" id="orange_money" name="payment_method" value="orange_money" required>
                    <label for="orange_money"><img src="{{asset('img/om.png')}}" alt="Orange Money" style="width: 50px;"></label>
                    <input type="radio" id="credit_card" name="payment_method" value="credit_card" required>
                    <label for="credit_card"><img src="{{asset('img/carte.jfif')}}" alt="Carte Bancaire" style="width: 50px;"></label>
                </div>
            </div>

            <button type="submit">Procéder au paiement</button>
        </form>
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
  </body>
</html>