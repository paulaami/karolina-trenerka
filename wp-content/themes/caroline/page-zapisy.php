
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preload" as="font" crossorigin="anonymous" type="font/otf" href="<?php echo get_theme_file_uri('/fonts/Quentin.otf'); ?>">
  <link rel="preload" as="font" crossorigin="anonymous" type="font/woff" href="<?php echo get_theme_file_uri('/fonts/quentin.woff'); ?>">
  <link rel="preload" as="font" crossorigin="anonymous" type="font/woff2" href="<?php echo get_theme_file_uri('/fonts/quentin.woff2'); ?>">
<?php wp_head();?>
</head>

<body <?php body_class();?> id="custom-page">
  <header>
    <div class="header__logo">
      <div class="header__logo-shadow section-shadow"></div>
      <h1 class="header__logo-text">Karolina Szymkowicz</h1>
    </div>
  </header>

  <section class="main__section">
    <img aria-hidden="true" class="main__section-flower" src="<?php echo get_theme_file_uri('/img/zion_leaves_3.png') ?>" data-aos="fade-right"
      data-aos-duration="1000" alt="rysunek kwiatka" />
    <div class="main__section-container">
      <div class="main__section-box" data-aos="fade" data-aos-delay="500" data-aos-duration="1000">
        <p class="main__section-box-heading small-uppercase-style">
          miło cię widzieć!
        </p>
        <h2 class="main__section-box-title">Dołącz do bezpłatnego miesięcznego wyzwania! </h2>
        <p class="small-lowercase-style">
          Jeśli chcesz wziąć udział w bezpłatnych treningach live na darmowej platformie zoom - wypełnij <a
            href="#form">poniższy formularz</a>, podając swoje imię oraz adres
          email.
        </p>
        <h3 class="main__section-box-start">Startujemy 05 października</h3>
        <p>Do zobaczenia na macie!</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 165.7 97.7">
          <path
            d="M162.9 71c-2.3 5.8-3.2 12.1-2.9 18.3-6-21.3-19.9-39.7-37.1-53.5C102 19.1 76.4 9.8 50.3 5 34.5 2 18.4.7 2.3 0 1.7 0 .7.1.3.5c-.4.3-.5.8.2.8 28.2 1.1 56.7 4.5 83.1 14.8 22.8 8.9 43.7 23.3 58.3 43.2 7.3 9.9 12.8 21.2 15.8 33.2-3.8-2-7.6-4.1-11.4-6.1-.6-.3-1.3-.1-1.9.1-.2.1-1.3.7-.8.9l17.7 10.2c.5.3 3 0 2.8-.9-2.1-8.7-1.5-17.8 1.7-26.1.2-.8-2.6-.4-2.9.4z">
          </path>
        </svg>
      </div>
    </div>
  </section>

  <section class="form__section">
    <div class="form__section-container">
      <div class="form__section-container-photobox">
        <div class="form__section-container-photobox-one calendar" data-aos="fade" data-aos-delay="500"
          data-aos-duration="1000">
          <h3>Wtorki godz 19.00</h3>
          <p class="small-uppercase-style">Wzmacnianie</p>
          <img class="rating-stars" src="<?php echo get_theme_file_uri('/assets/svg/gym.svg') ?>" alt="ocena stopnia trudności">
          <p class="small-lowercase-style">Trening o <span>średniej intensywności</span> mający na celu poprawę postawy
            ciała po przez wzmocnienie poszczególnych partii mięśni a przy okazji spaleniu trochę kalorii.</p>
          <p class="training-time"><img src="<?php echo get_theme_file_uri('/assets/svg/clock.svg') ?>" alt="obrazek zegara"> czas trwania 50'</p>
        </div>
        <div class="form__section-container-photobox-two calendar" data-aos="fade" data-aos-delay="600"
          data-aos-duration="1000">
          <h3>Czwartki godz 19.00</h3>
          <p class="small-uppercase-style">Zdrowy kręgosłup</p>
          <img class="rating-stars" src="<?php echo get_theme_file_uri('/assets/svg/mata.svg') ?>" alt="ocena stopnia trudności">
          <p class="small-lowercase-style">Trening o <span>niskiej intensywności.</span> Rozruch dla kręgosłupa i
            bioder. Idealny po całym dniu w pracy oraz jako dodatek do treningów wzmacniających.</p>
          <p class="training-time"><img src="<?php echo get_theme_file_uri('/assets/svg/clock.svg') ?>" alt="rysunek zegara"> czas trwania 40'</p>
        </div>
      </div>

      <div id="form" class="form__section-container-signup" data-aos="fade" data-aos-delay="800" data-aos-duration="1000">
        <p class="small-uppercase-style">zapisy</p>
        <h2>Wypełnij formularz</h2>
        <p class="small-lowercase-style">
          Wystarczy wypełnić formularz, aby dołączyć do mojej grupy
          treningowej. Treningi odbywają sie na żywo na darmowej platformie
          Zoom.
        </p>
        <div class="form__section-container-signup-form"><?php the_content (); ?></div>
      </div>
    </div>
  </section>

  <section class="section__menu">
    <div class="section__menu-shadow section-shadow"></div>
    <div class="section__menu-container" data-aos="fade-down" data-aos-duration="1000">
      <p class="section__menu-text small-uppercase-style">menu</p>
      <h2 class="section__menu-heading">Sprawdź co nowego</h2>
      <div class="section__menu-container-list">
        <ul>
          <li class="small-uppercase-style"><a href="https://karolinaszymkowicz.pl/sklep/" target="_blank">01. Wykup
              trening</a></li>
          <li class="small-uppercase-style"><a href="https://karolinaszymkowicz.pl/" target="_blank">02. Odwiedź
              stronę</a></li>
          <li class="small-uppercase-style"><a href="https://karolinaszymkowicz.pl/blog/" target="_blank">03. Poczytaj
              bloga</a></li>
          <li class="small-uppercase-style"><a href="https://karolinaszymkowicz.pl/o-mnie/" target="_blank">04. Poznaj
              mnie</a></li>
          <li class="small-uppercase-style"><a href="https://karolinaszymkowicz.pl/kontakt/" target="_blank">05.
              Skontaktuj się ze mną</a></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section__about">
    <div class="section__about-shadow section-shadow"></div>
    <div class="section__about-container">
      <div class="section__about-container-photo" id="slider" data-aos="fade" data-aos-delay="700"
        data-aos-duration="1000">
        <img src="<?php echo get_theme_file_uri('/img/karo-trening-M.jpg') ?>" alt="zdjęcie Karoliny na treningu" />
        <img src="<?php echo get_theme_file_uri('/img/karolina-trening-M.jpg') ?>" alt="zdjęcie Karoliny podczas treningu" />
      </div>

      <div class="section__about-container-text" data-aos="fade" data-aos-delay="500" data-aos-duration="1000">
        <h2>Zanim przejedziemy dalej...</h2>
        <h3>Witajcie!</h3>
        <p>Jestem Karolina.</p>
        <p class="small-lowercase-style">
          Prowadzę treningi dla kobiet. Moim celem jest, abyś wsłuchała się i
          poznała potrzeby własnego ciała. Zwolnij, odetchnij i daj sobie szanse na lepsze jutro…
        </p>
        <a class="small-uppercase-style" href="https://karolinaszymkowicz.pl/o-mnie/"> O mnie &#8594;</a>
      </div>
    </div>
  </section>

  <section class="opinion__section">
    <div class="opinion__section-header">
      <h2 class="small-uppercase-style">opinie o moich treningach</h2>
      <p data-aos="fade" data-aos-delay="600" data-aos-duration="1000">Okiem Podopiecznych</p>
      <img aria-hidden="true" src="<?php echo get_theme_file_uri('/img/flower3.png') ?>" alt="rysunek kwiatka" />
    </div>

    <div class="opinion__section-container carousel" data-aos="fade" data-aos-delay="700" data-aos-duration="1000">
      <div class="opinion__section-box">
        <div class="opinion__section-box-photo">
          <img class="opinion__section-box-img" src="<?php echo get_theme_file_uri('/img/JuliaW-profile.jpg') ?>" alt="Zdjęcie podopiecznej Julii W." />
        </div>
        <p class="opinion__section-box-text small-lowercase-style">
          "Treningi z Karoliną to czysta przyjemność. Nie ma drugiej tak bardzo wyrozumiałej i cierpliwej trenerki. Zajęcia są zawsze dostosowane indywidualnie, nie są ani zbyt lekkie, ani zbyt ciężkie. Karolina zwraca szczególnie uwagę na jakość i poprawność wykonywanych ćwiczeń, co jest według mnie najważniejsze podczas treningu. Po pół roku współpracy widzę znaczną poprawę mojej sylwetki, więc polecam każdemu treningi z Karoliną."
        </p>
        <p class="opinion__section-box-signature">Julia W.</p>
      </div>

      <div class="opinion__section-box">
        <div class="opinion__section-box-photo">
          <img class="opinion__section-box-img" src="<?php echo get_theme_file_uri('/img/AnnaK-profile.jpg') ?>" alt="Zdjęcie podopiecznej Anny K." />
        </div>
        <p class="opinion__section-box-text small-lowercase-style">
          "Od niedawna trenuję z Karoliną, a już widzę poprawę, wzmocnienie i stabilizację w ciele. Skuteczność Karoliny
          wynika z tego, że posiada konkretną wiedzę o układzie ruchu, a nie działa w ciemno. Poczucie humoru i
          dostosowanie intensywności ćwiczeń indywidualnie sprawia, że trenuje się z przyjemnością! Nawet jak się mega
          nie chce, to po treningu wraca energia. Polecam najmocniej!"
        </p>
        <p class="opinion__section-box-signature">Anna K.</p>
      </div>

      <div class="opinion__section-box">
        <div class="opinion__section-box-photo photo-three">
          <img class="opinion__section-box-img" src="<?php echo get_theme_file_uri('/img/MartaP-profile.jpg') ?>" alt="Zdjęcie podopiecznej Marty P." />
        </div>
        <p class="opinion__section-box-text small-lowercase-style">
          "Trenuje z Karolina od pewnego czasu i dopiero dzięki jej treningom zrozumiałam jak poprawnie wykonywać
          ćwiczenia, że treningi cardio to nie wszystko. Nauczyłam
          się jak ważne jest wzmacnianie ciała. Karolina to bardzo profesjonalny trener ( wiem co mowie, kilku miałam)
          wie w jakim momencie i jak przekazać informacje, że ćwiczenie jest zle wykonywane. Jest bardzo wyrozumiała,
          nie pośpiesza. Jeżeli widzi, że dane ćwiczenie sprawia trudność umie go tak wkomponować w trening, że nie jest
          już tak trudne jak na początku. Treningi Karoliny to nie tylko ciężary ( ich tez nie brakuje) ale także
          mobilność, o której całkowicie zapominamy. Dodatkowo na profilu Karoliny jest baardzo dużo wiedzy
          teoretycznej, której tak łatwo nie znajdzie się na innych profilach."
        </p>
        <p class="opinion__section-box-signature">Marta P.</p>
      </div>
    </div>
  </section>

  <section class="section__social">
    <img aria-hidden="true" class="flower" src="<?php echo get_theme_file_uri('/img/flower3.png') ?>" data-aos="fade-right" data-aos-duration="1000"
      alt="rysunek kwiatka" />
    <div class="section__social-container" data-aos="fade" data-aos-delay="500" data-aos-duration="1000">
      <h3>Znajdziesz Mnie Tutaj:</h3>
      <div class="section__social-container-list">
        <a class="small-uppercase-style" target="_blank" href="https://www.instagram.com/karolina_trenerka/"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <circle cx="256" cy="255.833" r="80"></circle>
            <path
              d="M177.805 176.887c21.154-21.154 49.28-32.93 79.195-32.93s58.04 11.838 79.195 32.992c13.422 13.42 23.01 29.55 28.232 47.55H448.5v-113c0-26.51-20.49-47-47-47h-288c-26.51 0-49 20.49-49 47v113h85.072c5.222-18 14.81-34.19 28.233-47.614zM416.5 147.7c0 7.07-5.73 12.8-12.8 12.8h-38.4c-7.07 0-12.8-5.73-12.8-12.8v-38.4c0-7.07 5.73-12.8 12.8-12.8h38.4c7.07 0 12.8 5.73 12.8 12.8v38.4zm-80.305 187.58c-21.154 21.153-49.28 32.678-79.195 32.678s-58.04-11.462-79.195-32.616c-21.115-21.115-32.76-49.842-32.803-78.842H64.5v143c0 26.51 22.49 49 49 49h288c26.51 0 47-22.49 47-49v-143h-79.502c-.043 29-11.687 57.664-32.803 78.78z">
            </path>
          </svg>
          instagram
        </a>
        <a class="small-uppercase-style" target="_blank" href="https://www.facebook.com/Moving-well-to-feel-good-104945625010928/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
              d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z">
            </path>
          </svg>
          facebook
        </a>
      </div>
      <a class="section__social-container-link" target="_blank" href="https://www.instagram.com/karolina_trenerka/">@karolina_trenerka</a>
    </div>
  </section>

  <footer class="footer">
    <div class="footer__container">
      <div class="footer__container-top">
        <a class="footer__container-top-link">to top
          <svg class="to-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
              d="M277.375 427V167.296l119.702 119.702L427 256 256 85 85 256l29.924 29.922 119.701-118.626V427h42.75z">
            </path>
          </svg>
        </a>
      </div>
      <div class="footer__container-policy">
        <a class="footer__container-text small-uppercase-style" target="_blank" href="https://karolinaszymkowicz.pl/regulamin-strony/">Regulamin</a>
        <span>|</span>
        <a class="footer__container-text small-uppercase-style" target="_blank" href="<?php echo site_url('/polityka-prywatnosci'); ?>">Polityka prywatności</a>
      </div>
      <div class="footer__container-copyrights">
        <a class="footer__container-text small-uppercase-style" target="_blank" href="https://www.instagram.com/milko.design/">© 2021
          milko design</a>
      </div>
    </div>
    <?php wp_footer();?>
  </footer>
  <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./js/aos.js"></script>
  <script src="./js/slick.js"></script>
  <script src="./js/footer.js"></script> -->
</body>

</html>