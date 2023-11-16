<?php get_header();?>


<main class="main">

    <section id="about__section" class="about__section">

      <div class="about">
        <img src="<?php echo get_theme_file_uri('/assets/svg/img1arrow.svg') ?>" alt="obrazek strzałki" class="about__section-arrow">
        <div class="about__photo" title="Zdjęcie Karoliny Szymkowicz">
          <div class="about__photo-btn hide-button"><i class="far fa-heart hide-button"></i></div>
          <div class="about__photo-hover">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 28">
              <path
                d="M5 14a7 7 0 0 1 6-2c4 0 7 3 7 8 0 4-3 8-9 8s-9-4-9-10C0 9 5 2 15 0a1 1 0 0 1 1 1 1 1 0 0 1-1 2C9 4 5 8 5 14c-1 1 0 1 0 0zm20 0a7 7 0 0 1 5-2c5 0 8 3 8 8 0 4-3 8-9 8s-9-4-9-10c0-9 5-16 14-18a1 1 0 0 1 2 1 1 1 0 0 1-1 2c-6 1-10 5-11 11h1z">
              </path>
            </svg>
            <h2 class="about__photo-heading">Zasługujesz na najlepszą wersję siebie...</h2>
          </div>
        </div>

        <div class="about__me">

          <h2 class="about__me-heading" data-aos="fade-up" data-aos-duration="1500">Hej, jestem Karolina!</h2>
          <p class="about__me-text" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="1500">
          Prowadzę treningi dla kobiet. Moim celem jest to, byś poznała i wsłuchała się w potrzeby własnego ciała. Zwolnij, odetchnij i daj sobie szanse na lepsze jutro…
          </p>

          <a href="https://karolinaszymkowicz.pl/o-mnie/" class="about__me-button" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">Poznaj mnie</a>
        </div>
      </div>

    </section>


    <section class="offer__section">

      <h2 class="offer__section-heading">Treningi</h2>
      <div class="underline"></div>
      <div class="offer__section-container">


        <div class="offer__section-contact justify-content" data-aos="fade-up" data-aos-duration="1400">
          <h3 class="offer__section-title">Pomoc</h3>
          <p class="offer__section-text">
          Czujesz, że czas coś zrobić dla samej siebie ale nie wiesz od czego zacząć walkę o lepsze jutro i zdrowe ciało? Śmiało napisz do mnie, chętnie Ci pomogę!
          </p>
          <a href="mailto:karolina.szymkowicz@wp.pl" target="_blank" class="offer__section-link-mail section-btn">Napisz do mnie <i class="far fa-envelope"></i></a>
        </div>

        <div class="offer__section-shop justify-content" data-aos="fade-up" data-aos-duration="1400">
          <h3 class="offer__section-title">Oferta</h3>
          <p class="offer__section-text">Zapraszam Cię na treningi indywidualne oraz grupowe. Trenuje oraz edukuje, abyś potrafiła każdego dnia zadbać o siebie, swoje samopoczucie i zdrowe ciało.
          </p>
          <a href="https://karolinaszymkowicz.pl/sklep/" class="offer__section-link-shop section-btn">Zobacz ofertę <i class="fas fa-shopping-cart"></i></a>
        </div>

      </div>

    </section>


    <section class="motto__section">

<div class="motto__section-container">
  <h2 class="motto__section-container-title">moje motto</h2>
  <svg class="motto__section-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 28">
    <path
      d="M5 14a7 7 0 0 1 6-2c4 0 7 3 7 8 0 4-3 8-9 8s-9-4-9-10C0 9 5 2 15 0a1 1 0 0 1 1 1 1 1 0 0 1-1 2C9 4 5 8 5 14c-1 1 0 1 0 0zm20 0a7 7 0 0 1 5-2c5 0 8 3 8 8 0 4-3 8-9 8s-9-4-9-10c0-9 5-16 14-18a1 1 0 0 1 2 1 1 1 0 0 1-1 2c-6 1-10 5-11 11h1z">
    </path>
  </svg>

  <h3 class="motto__section-heading" data-aos="fade-up" data-aos-duration="1500">Moving well to feel good...</h3>
  <p class="motto__section-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
    ... to moje motto i oznacza, że najwyższy czas się ruszyć i zadbać o
    swoje dobre samopoczucie oraz ciało.
  </p>

</div>
</section>



    <section class="opinion__section">
      <h2 class="opinion__section-header">Podopieczni o mnie</h2>


      <div class="opinion__section-container carousel">
        <?php ?>

        <div class="opinion__section-box">
          <div class="opinion__section-box-photo"><img class="opinion__section-box-img" src="<?php echo get_theme_file_uri('/img/KarolinaS.jpg') ?>" alt="Zdjęcie podopiecznej Karoliny S."></div>
          <p class="opinion__section-box-text">"Bardzo polecam ćwiczenia z Karoliną wszystkim tym, którzy nawet
            nieszczególnie przepadają za fitnessami. Karolina jest perfekcjonistką. Już po pierwszych zajęciach online
            poczułam różnice. Zwraca uwagę na ułożenie naszego ciała, na to aby ćwiczenia wykonywać niekoniecznie szybko
            ale przede wszystkim we właściwy sposób. Szuka rozwiązań abyśmy dobrze czuli się w swoim ciele. Ma ogromną
            wiedzę! Kiedy poskarżyłam się na ból pleców od razu przygotowała ćwiczenia, które pomogły. To niesamowita
            dziewczyna z ogromnym potencjałem! Będę polecać każdemu."</p>
          <p class="opinion__section-box-signature">Karolina S.</p>
        </div>


        <div class="opinion__section-box">
          <div class="opinion__section-box-photo"><img class="opinion__section-box-img" src="<?php echo get_theme_file_uri('/img/ZofiaK.jpg') ?>" alt="Zdjęcie podopiecznej Zosi K."></div>
          <p class="opinion__section-box-text">"Polecam treningi z Karoliną. Przede wszystkim jej ogromne zaangażowanie i
            precyzja w każdym ćwiczeniu. Kontrolowany i bezpieczny ruch - moje ciało to uwielbia. Warto zacząć trenować
            z Karoliną. Po dwóch miesiącach widzę ogromną zmianę w zakresie ruchu, kondycji. Ciało staje się napięte,
            kręgosłup przestał doskwierać. Polecam zrobić coś dla ciała i umysłu. Karolina - dla mnie najlepsza
            trenerka! Zapisz się na trening - nie pożałujesz."</p>
          <p class="opinion__section-box-signature">Zosia K.</p>
        </div>

        <div class="opinion__section-box">
          <div class="opinion__section-box-photo photo-three"><img class="opinion__section-box-img" src="<?php echo get_theme_file_uri('/img/PaulinaR.jpg') ?>" alt="Zdjęcie podopiecznej Pauliny R."></div>
          <p class="opinion__section-box-text">"Przez bardzo długi czas nie mogłam wyrobić sobie nawyku regularnego
            ćwiczenia. Przyszła pandemia a co za tym idzie, jeszcze więcej czasu spędzałam siedząc. Zawsze gdy miałam
            przypływ chęci aby zacząć coś robić zabierałam się do tego w nieodpowiedni sposób przez co zazwyczaj po 2-3
            próbach chęci gdzieś uciekały.. Karolina namówiła mnie na ćwiczenia i tak się zaczęło. Wypytała o wszystko i
            dobrała trening do mojego trybu życia i pracy jaką wykonuję. Dziś mija pół roku odkąd ćwiczymy razem.
            Karolina zaraziła mnie chęcią do ćwiczeń!"</p>
          <p class="opinion__section-box-signature">Paulina R.</p>
        </div>
      </div>
    </section>




    <section class="blog__section" id="blog">
      <h2 class="blog__section-heading">Odkryj Bloga</h2>

      <div class="blog__list">

        <div class="blog__item">
          <div class="blog__item-photo">
            <img src="<?php echo get_theme_file_uri('/img/Karolina-photo2.jpg') ?>" alt="Zdjęcie Karoliny podczas treningu" class="blog__item-img" />
          </div>
          <h3 class="blog__item-heading heading-one">Treningi</h3>
          <p class="blog__item-text">Ćwiczenia dla kobiet, które cieszą się świadomym treningiem oraz pragną zadbać o odpowiedni balans zarówno w swoim ciele jak i w życiu.
          </p>
          <a href="https://karolinaszymkowicz.pl/kategoria/trening/" class="blog__item-link link-one">Moje ćwiczenia</a>
        </div>

        <div class="blog__item">
          <div class="blog__item-photo">
            <img src="<?php echo get_theme_file_uri('/img/zdrowy-posilek.jpg') ?>" alt="Zdjęcie posiłku Karoliny" class="blog__item-img" />
          </div>
          <h3 class="blog__item-heading heading-two">dieta</h3>
          <p class="blog__item-text">
            W mojej kuchni dominują zdrowe i pożywne posiłki, chętnie podzielę się z Wami swoimi przepisami i odkryciami kulinarnymi.
          </p>
          <a href="https://karolinaszymkowicz.pl/kategoria/dieta/" class="blog__item-link link-two">Moje posiłki</a>
        </div>

        <div class="blog__item">
          <div class="blog__item-photo">
            <img src="<?php echo get_theme_file_uri('/img/Karolina-photo1.jpg') ?>" alt="Motywujące zdjęcie Karoliny" class="blog__item-img" />
          </div>
          <h3 class="blog__item-heading heading-three">Motywacja</h3>
          <p class="blog__item-text">
          Tak, jak ważna jest zdrowa dieta i regularne ćwiczenia, powinniśmy dbać o swoje pozytywne nastawienie na codzień, które postaram Wam się tutaj przekazać.
          </p>
          <a href="https://karolinaszymkowicz.pl/kategoria/motywacja/" class="blog__item-link link-three">Motywacja</a>
        </div>

      </div>
    </section>

  <section class="blog__posts">
    <div class="container">
      <h2 class="blog__posts-heading">Najnowsze wpisy</h2>
      <div class="row">
      <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
);

$blog_posts = new WP_Query($args);
if ($blog_posts->have_posts()):
    while ($blog_posts->have_posts()): $blog_posts->the_post();
        ?>
										<article class="col-12 col-md-6">
						        <a href="<?php the_permalink();?>">
						          <?php
        if (has_post_thumbnail()):
            the_post_thumbnail('caroline-blog', array('class' => 'img-fluid'));
        endif;
        ?>
						          </a>
										<h3><a class="blog__posts-title" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
										<div class="excerpt"><?php the_excerpt();?></div>
				            <a class="blog__posts-btn" href="<?php the_permalink();?>">Przeczytaj</a>
										</article>
										<?php
    endwhile;
else:
?>
        <p>Brak postów</p>
        <?php endif;?>
    </div>
      </div>
  </section>


  <section class="section__instagram">
    <div class="section__instagram-container">
      <h2 class="section__instagram-heading">Instagram</h2>
    <?php echo do_shortcode('[instagram-feed]'); ?></div>
  </section>
  </main>

<?php
get_footer();
?>