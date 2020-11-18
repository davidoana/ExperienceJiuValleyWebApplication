@extends('layouts.app')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/carousel/img01.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <p>Valea Jiului Freeride Snowboarding</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/carousel/img02.JPG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Capitala longboarding-ului in Romania</h5>
              <p>Traseele sunt unice in lume deoarece drumul este complet inchis pe perioada desfasurarii concursurilor  </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/carousel/img03.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ciclism montan</h5>
              <p>posibilitatile de a explora trasee de freeride in imprejurimile oraselor miniere aflate la baza muntilor </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <h1>Valea Jiului</h1>
        <p class="text-justify">
          Valea Jiului și este cunoscută ca fiind drept cel mai mare domeniu schiabil din România. Dar odata cu topirea zapezii si venire primaverii domeniul schiabil se transforma intr-un adevarat loc de joaca pentru iubitorii de MTB, ciclism, alpinism, longboarding, parasutism si multe altele. Aceasta fosta zona miniera surprinde prin frumusetile sale, prin experientele si activitatiile pe care ti le ofera.
          Totodata recomandam cu cea mai mare caldura explorarea muntelui din toate punctele de vedere. 
          Atat Straja cat si Pasul Vulcan gazduiesc in fiecare an Transylvania Downhill si IDF – International Downhill Federation. 
          Staţiunea Straja este localizată în judeţul Hunedoara, la o altitudine de 1445 de metri, în inima Munţilor Vâlcan, în zona Valea Jiului, la aproximativ 8 km de municipiul Lupeni. 
        </p>
    </div>
@endsection