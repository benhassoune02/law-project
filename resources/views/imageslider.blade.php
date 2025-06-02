<!DOCTYPE html>
<html>
  <head>
    <title>Custom Slider</title>

<style>
.custom-slider {
  display: none;
  max-width: 1600px; 
  max-height: 1200px;
}

.slide-container {
  max-width: 1800px; 
  margin-top: 15px;
}
.prev, .next {
  cursor: pointer;
  position: absolute;        
  top: 50%;
  transform: translateY(-50%);
  width: 120px;
  height: 120px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: white;
  font-size: 60px;
  background-color: rgba(0,0,0,0);
  transition: background-color 0.6s ease;
}
.prev{ left: 15px; }
.next { right: 15px; }
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.5);
}
.slide-text {
  position: absolute;
  color: #ffffff;
  font-size: 27px;
  padding: 15px;
  bottom: 15px;
  width: 100%;
  text-align: center;
}
.slide-index {
  color: #ffffff;
  font-size: 25px;
  padding: 15px;
  position: absolute;
  top: 0;
}
.slide-img{ 
  width: 100%; 
  height: 500px;
  object-fit: cover;
  object-position: center;
 }
.slide-dot{ 
    text-align: center;
    margin-top: 20px; 
}
.dot {
  cursor: pointer;
  height: 20px;
  width: 20px;
  margin: 0 10px;
  background-color: #999999;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover { background-color: #111111; }
.fade {
  animation-name: fade;
  animation-duration: 1s;
}
@keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}



    #contain {
    /* max-width: 800px; */
   
    /* padding: 20px; */
    border-radius: 8px;
    margin-top: 41px;
    }

    h3 {
    font-size: 36px;
    color: #012034;
    margin-right: 40px;
    margin-left: 120px;

    }

    p {
        margin-top: 12px;
 
    
    margin-left: 120px; 
}


.main{
    display: flex;
    text-align: center;
    padding: 40px 0;
    margin: 40px 0;
    background: #ddd;
    color: #000;
}

.etapimg{
    margin-left: 70px;
    border: 2px solid #de1a2b;
    padding: 30px;
    border-radius: 50%;
    display: inline-block;
    font-size: 40px;
    font-weight: 20px;
}

.pelele{
    margin-right: 30px;
}

.disponibilité{
  margin-right: 25px; 
}

h4{
    color: #de1a2b;
    margin-top: 21px;
    margin-left: 100px;
}

.but {
           
            padding: 20px;
            border-radius: 10px;
        }

        button {
            background-color: red;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-left: 120px;
            margin-top: 30px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button:hover {
            background-color: rgb(109, 0, 0);
        }

.bottom{

  background: #ddd;
}
h2{
  font-family: Oswald;
  color: #012034;
  font-size: 30px;
  margin-top: 20px;
  font-weight: 500;
  line-height: 1.1;
  margin-left: 175px;
  margin-block-start: 0.83em;
  margin-block-end: 0.83em;

 
}
#etape {
  margin-top: 20px;
  background-color: #999999;
}

#etape h3{
  margin-top: 20px;
  margin-left: 488px;
  background-color: #999999;
}

.rotate-on-hover {
  transition: transform 0.3s ease-in-out;
}

.rotate-on-hover:hover {
  transform: rotate(360deg);
}
.footer{
  display: flex;
  justify-content: space-between;
  color: aliceblue;
  background-color: rgba(2, 61, 124, 0.89);
  
}

.footer h5{
  margin-top: 14px;
}
.footer p{
  margin-right: 204px;
}

.custom-slider {
      display: flex;
      overflow: hidden;
    }

    .slide-card {
      flex: 0 0 100%;
      box-sizing: border-box;
      padding: 20px;
      text-align: center;
      transition: transform 0.5s ease;
    } 

    .glide {
            width: 100%;
            overflow: hidden;
            margin-top: 0px;
            margin-bottom: 90px;
            padding-top: 12px;
            padding-bottom: 12px;
            background: #c5c5c5;
        }

        .glide__track {
            width: 100%;
            overflow: hidden;
        }

        .glide__slides {
            display: flex;
            list-style: none; /* Remove list style */
            padding: 0; /* Remove default padding */
            margin: 0; /* Remove default margin */
        }

  .glide__slide {
    flex: 0 0 auto;
    width: 300px; /* Adjust the width as needed */
    height: 400px;/* Adjust as needed */
    background-color: #fff; /* Card background color */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Card box shadow */
    overflow: hidden;
    cursor: pointer; /* Change cursor to hand */
}

        .card-body {
            padding: 20px;
            margin-right: 30px;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .info-line {
            height: 1px;
            background-color: #3490dc; /* Line color */
            margin: 10px 0; /* Adjust as needed */
        }

        .card-text {
            margin-bottom: 8px;
        }

        h5{
            color: #17a2b8;
            margin-left: 
        }
        .custom-image-size {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

.btn-info {
    padding: 10px 20px;
    background-color: #17a2b8;
    margin-left: 116px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-info:hover {
    background-color: #138496;
}
</style>
  </head>
  <body>
    <div class="slide-container">
      <div class="custom-slider fade">
        
        <img class="slide-img" src="https://thumbs.dreamstime.com/z/legal-law-concept-statue-lady-justice-scales-justice-sky-background-legal-law-concept-statue-lady-justice-173619370.jpg?w=2048">
      </div>
      <div class="custom-slider fade">
        
        <img class="slide-img" src="https://cdn.britannica.com/51/190451-050-0E9B50F5/soundblock-Wood-scales-books-stack-background-leather.jpg">
        
      </div>
      <div class="custom-slider fade">
        <img class="slide-img" src="https://thatnewdesignsmell.net/wp-content/uploads/2021/09/funny-laws-that-should-be-made.jpg">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div class="slide-dot">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
  </body>
  <div id="contain">
        <h3>
        Consultation juridique : conseil juridique par un avocat en ligne
        </h3>
        <p>
        Notre première mission est de répondre à toutes vos questions et inquiétudes. Il suffit de vous rendre sur notre site internet et de nous contacter par mail ou par téléphone.

        Nous mettons à votre disposition des professionnels compétents dans tous les domaines du droit. Ils sont habilités à prodiguer un conseil juridique personnalisé afin de vous aider à régler un problème juridique ou un litige de manière adéquate et rapide. Vous aurez ainsi toutes les informations nécessaires et vous bénéficierez des conseils les plus prodigieux afin que vous puissiez mener à bien vos affaires.
        </p>
  </div>

  <div class="main">
    <div >
        <div class="etapimg">
            <img class="rotate-on-hover" src="https://www.consultation-juridique.net/wp-content/uploads/2020/08/euro-1.png" >
            
        </div>
        <div class="pelele">
            <h4>
                Transparence
            </h4>
            <p >des grilles tarifaires flexibles et souples</p>
        </div>
    </div>
    <div>
        <div class="etapimg">
            <img id="img2" class="rotate-on-hover" src="https://www.consultation-juridique.net/wp-content/uploads/2020/08/expertise.png" >
            
        </div>
        <div class="pelele">
            <h4>
                Expertise
            </h4>
            <p id="parag">un service d’assistance juridique en ligne à votre service 7 jours /7 et 24heures /24</p>
        </div>
    </div>
    <div>
        <div class="etapimg">
            <img class="rotate-on-hover" src="https://www.consultation-juridique.net/wp-content/uploads/2020/08/simplicite.png" >
            
        </div>
        <div class="disponibilité"> 
            <h4>
                Disponibilité
            </h4>
            <p >des conseillers juridiques spécialisés dans les différentes disciplines du Droit</p>
        </div>
        <div class="but" >
            <button>
                <a href="{{ route('contact') }}">Avez-vous des questions ?</a>
            </button>
        </div>
        
    </div>  
    
  </div>
  <div id="about-section" style="max-width: 1200px; margin: auto; text-align: left; display: flex; align-items: center;">
    <div id="about" style="flex: 1;">
        <h3 style="font-size: 36px; color: #012034; margin-bottom: 20px;">
            ABOUT US
        </h3>
       
        <p style="font-size: 18px; color: #333; margin-bottom: 20px;  margin-right: 20px;">
            Notre engagement premier est de vous offrir un service exceptionnel répondant à toutes vos préoccupations et interrogations. Vous pouvez facilement nous joindre en explorant notre plateforme en ligne ou en nous contactant par courrier électronique et téléphone.
            <br><br>
            Nos experts, spécialisés dans divers domaines du droit, sont prêts à fournir des conseils juridiques sur mesure pour vous assister dans la résolution efficace et rapide de tout problème juridique ou litige. Vous disposerez ainsi de toutes les informations nécessaires, bénéficiant de conseils avisés pour mener à bien vos affaires.
        </p>
    </div>
    
    <div class="aboutimg" style="flex: 1;">
        <img src="https://swiver.io/wp-content/uploads/2022/03/avocat.jpg" alt="About Us Image" style="width: 100%; max-width: 800px; height: auto; border-radius: 8px; margin-bottom: 20px;">
    </div>
</div>

    <div class="bottom">
      <h3 style="font-size: 36px; color: #012034; margin-top: 40px;">
        Une consultation juridique en ligne pour plus d’efficacité
      </h3>
      <p>
        Depuis chez vous et avec un simple clic, ou le simple geste de composer le numéro, notre plateforme est à votre disposition afin de vous éclairer sur un point précis, une question de droit ou pour vous proposer un accompagnement juridique en ligne personnalisé et rapide. Vous aurez ainsi l’occasion de connaître la nature de votre affaire juridique afin de vous préparer à toutes les circonstances, et savoir quelle procédure suivre pour pouvoir être à votre avantage quel que soit l’objet de votre combat. Elle s’engage à ce que votre besoin soit parfaitement approvisionné dans les délais les plus rapides. Vous aurez ainsi l’occasion de connaître le type de votre affaire juridique afin de vous préparer à tous les enjeux, et savoir quelle procédure suivre pour pouvoir être à votre avantage. Vous aurez des informations fiables et correctes, qui sont mises à jour et qui vous seront fournies dans la transparence totale. Ne pensez pas qu’une consultation classique a plus de valeur que celle qui se fait par correspondance, puisque les avocats engagés à vous répondre par téléphone connaissant tous les secrets du droit et savent comment répondre à toutes les demandes, vu qu’ils maîtrisent les textes de loi applicable à tous. Ils respectent le code de la déontologie et les règles du métier. Leur amour du travail les poussent à faire de votre satisfaction leur priorité.
      </p>
    </div>
    <div id="conseil-section" >
      <h2>Conseil juridique en ligne avec des conseillers juridiques performants</h2>
      <p>Un conseiller juridique en ligne est un homme de droit qui sait répondre à toutes vos questions juridiques afin de vous aider à régler votre affaire depuis chez vous et sans avoir besoin de vous déplacer jusqu’au cabinet. Notre équipe s’engage à vous fournir une explication simple, claire et objective à votre problème. Ses conseils sont ciblés, fiables et bien structurés pour que vous puissiez les utiliser de manière optimale ultérieurement.</p>
      <p>Ayant pour mission de vous assister, vous accompagner et vous apporter l’aide juridique que vous attendez de notre part, nous avons mis en place une procédure de conseil juridique personnalisée et sur mesure. Nous sommes à votre service tout au long de la semaine et à n’importe quelle heure pour vous fournir  nos conseils avisés en ce qui concerne vos problèmes d’ordre juridique en matière de :</p>
      <p>
        <i class="fa fa-check-square" aria-hidden="true">* Droit de la famille</i><br>
        <i class="fa fa-check-square" aria-hidden="true">* Droit du travail</i><br>
        <i class="fa fa-check-square" aria-hidden="true">* Droit commercial</i><br>
        <i class="fa fa-check-square" aria-hidden="true">* Droit civil</i><br>
      </p>
      <p>Que vous ayez besoin de nos conseils concernant une procédure de divorce,  la signature d’un contrat de travail ou la rédaction d’un contrat commercial, nous saurons vous apporter notre assistance juridique et vous assurer des conseils juridiques de qualité. Quelle que soit votre problématique nos conseillers aguerris sont en mesure de vous apporter des solutions stratégiques, fiables et efficaces.</p>
    </div>
    <div id="etape"><h3>ETAPES DE CONSULTATION</h3></div>
    <div class="main">
      <div >
          <div class="etapimg">
              1
              
          </div>
          <div class="pelele">
              <h4>
                  Se connecter
              </h4>
              <p >Il faut se connecter a votre compte sur notre site web </p>
              
          </div>
      </div>
      <div>
          <div class="etapimg">
              2
              
          </div>
          <div class="pelele">
              <h4>
                  Poser la question
              </h4>
              <p id="parag">Il est nécessaire de bien préciser votre cas </p>
          </div>
      </div>
      <div>
          <div class="etapimg">
              3
          </div>
          <div class="disponibilité"> 
              <h4>
                  Réponse dans 24h
              </h4>
              <p >L'avocat répondra à  ta question dans moins de 24 heures et t'aidera à comprendre bien ta situation</p>
          </div>
      </div>  
      
</div>

<div class="container" style="margin-bottom: 60px;">

  <div style="text-align: center; background-color: #999999; padding: 10px; padding-right: 10px; ">
      <h3 class="text-center" style="display: inline-block; margin-left: 12px;  ">NOS MEILLEURS AVOCATS !</h3>
  </div>
</div>

  <div class="glide">
      <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
              @foreach($users as $user)
                  <li class="glide__slide">
                      <div class="card mx-auto mb-3">
                          <div class="card-body">
                              @if ($user->image)
                                <img src="{{ asset($user->image) }}" class="custom-image-size">
                              @endif
                              <h5 class="card-title">{{ $user->name }}</h5>
                              <div class="info-line"></div> 
                              <p class="card-text"><strong>Number of Contributions:</strong> {{ $user->contributions_count }}</p>
                              <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                              <p class="card-text"><strong>N° de télephone:</strong> {{ $user->telephone }}</p>
                              <a href="{{ route('lawyers') }}" class="btn btn-info">More about Lawyers ...</a>
                          </div>
                      </div>
                  </li>
              @endforeach
          </ul>
      </div>
  </div>
</div>

<div class="footer">
  <h5>&copy;2032 | Tous droits réservés. Consultation Juridique</h5>

  <p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>       +212-710965248</p>

  <p>avocat@gmail.com</p>
</div>  
   

  <script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("custom-slider");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
function scrollToSection(sectionId, event) {
    event.preventDefault(); // Prevent the default behavior of the anchor element
    var section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
  </script>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("custom-slider");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>
        <!-- Include Glide.js -->
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

        <!-- Initialize Glide.js -->
        <script>
          new Glide('.glide', {
              type: 'carousel',
              perView: 3, 
              focusAt: '0', 
              breakpoints: {
                  768: {
                      perView: 1
                  }
              }
          }).mount();
      </script>
</html>