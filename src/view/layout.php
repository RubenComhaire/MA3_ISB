<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nationaal Straattheaterfestival Beveren</title>
    <?php echo $css;?>
    <script>
      WebFontConfig = {
        custom: {
          families: ["roboto", "bebas"],
          urls: ["../assets/fonts/fonts.css"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
  </head>
  <body>
    <header class="header">
      <nav class="menu">
        <div class="menu__logo">
          <span class="menu__logo--text1">beverse</span> &nbsp; <span class="menu__logo--text2">feesten</span>
          </div>
        <ul class="menu__items">
          <li><a class="menu__links links--active" href="#">home</a></li>
          <li><a class="menu__links" href="#">programma</a></li>
          <li><a class="menu__links" href="#">contact</a></li>
          <li><a class="menu__links" href="#">faq</a></li>
        </ul>
      </nav>
      <div class="collage">
        <div class="collage__bg">
        <picture class="collage__image">
          <source media="(max-width: 768px)" srcset="./assets/img/home/collage_ss.png">
          <source media="(max-width: 1024px)" srcset="./assets/img/home/collage_sm.png">
          <source media="(max-width: 1440px)" srcset="./assets/img/home/collage_md.png">
          <source media="(max-width: 1920px)" srcset="./assets/img/home/collage_big.png">
          <source media="(max-width: 768px)" srcset="./assets/img/home/collage_ss.webp">
          <source media="(max-width: 1024px)" srcset="./assets/img/home/collage_sm.webp">
          <source media="(max-width: 1440px)" srcset="./assets/img/home/collage_md.webp">
          <source media="(max-width: 1920px)" srcset="./assets/img/home/collage_big.webp">
          <img class="header-collage" src="./assets/img/home/collage_big.png" alt="collage van 4 afbeeldingen met de kleuren rood, groen, geel en blauw. op de afbeeldingen zie je een man die met vuur speelt, poppen van bluauwe vogels, vrouwen in speciale blauwe kleren, en een man die aan het paaldansen is.">
        </picture>
          <div class="collage__inhoud">
            <p class="collage__tag"><span class="dash light collage-dash">&mdash;</span> <span>gratis<span><span class="vertical-dash">&#124;</span> </p>
            <h1 class="collage__htext">
              <span class="collage__htext--black">internationaal</span><br />
              <span class="collage__htext--pink">straat<br />theater<br />festival</span><br />
              <span class="collage__htext--black">beveren</span>
            </h1>
            <p class="collage__htext--datum">24-25-26 augustus 2018</p>
            <br>
            <a href="#" class="button collage__button">programma</a>
          </div>
        </div>
      </div>
      <aside class="social__links">
        <a class="social__link1" href="#"></a>
        <br>
        <a class="social__link2" href="#"></a>
        <br>
        <a class="social__link3" href="#"></a>
      </aside>
    </header>
    <main>
      <article class="overons">
        <h3 class="headline">over ons</h3>
        <p class="overons__text">
          Op vrijdag 24, zaterdag 25 en zondag 26 augustus heeft voor de<br />
          13de keer op rij het Internationaal Straattheaterfestival Beveren
          plaats.<br />
          Humor, acrobatie, een vuuract, en stuntwerk van de bovenste plank
          uit<br />
          België, Nederland, Duitsland, Frankrijk, Spanje, Italië,<br />
          Groot-Brittannië, Argentinië, Guatemala en Canada.
        </p>
        <a href="#" class="button overons__btn">contact</a>
      </article>
      <section class="events">
        <div class="events__block1">
          <h4 class="card events__card"><span class="dash light">&mdash;</span><span>niet te missen events</span></h4>
          <div class="events__spiegelbeeld">
          <picture class="events__spiegelbeeld--image">
            <source media="(max-width: 768px)" srcset="./assets/img/home/spiegelbeeld_ss.jpg">
            <source media="(max-width: 1024px)" srcset="./assets/img/home/spiegelbeeld_sm.jpg">
            <source media="(max-width: 1440px)" srcset="./assets/img/home/spiegelbeeld_md.png">
            <source media="(max-width: 1920px)" srcset="./assets/img/home/spiegelbeeld_big.png">
            <source media="(max-width: 768px)" srcset="./assets/img/home/spiegelbeeld_ss.webp">
            <source media="(max-width: 1024px)" srcset="./assets/img/home/spiegelbeeld_sm.webp">
            <source media="(max-width: 1440px)" srcset="./assets/img/home/spiegelbeeld_md.webp">
            <source media="(max-width: 1920px)" srcset="./assets/img/home/spiegelbeeld_big.webp">
            <img class="spiegelbeeld-image" src="./assets/img/home/spiegelbeeld_big.png" alt="4 mannen met hun rug tegen elkaar, naar vooren kijkend.">
          </picture>
            <div class="events__spiegelbeeld--info">
              <p class="events--datum events__spiegelbeeld--datum">25 augustus, 2018<br />17:00 uur</p>
              <h5 class="events--titel events__spiegelbeeld--titel">spiegelbeeld</h5>
              <p class="events__spiegelbeeld--text">
                Spiegelbeeld is een muzikaal feest met vooral veel sfeer,<br />
                ambiance en gezelligheid zoals dat van park- en pleinfeesten<br />
                verwacht kan worden. De legendarische optredens<br />
                die in het geheugen van Spiegelbezoekers gegrift zitten,<br />
                krijgen bij deze een vervolg.<br />
                In de geest van wat is geweest, genieten van muzikale<br />
                ontdekkingen of van reeds ontdekte muzikanten.
              </p>
              <a class="events--link" href="#">meer info +</a>
            </div>
          </div>
        </div>
        <div class="events__flexbox">
          <div class="events__block2">
            <div class="block__info">
              <p class="events--datum">24 augustus, 2018<br />18:00 uur</p>
              <h5 class="events--titel">voorstellingen<br />en straatacts</h5>
              <a class="events--link" href="#">meer info +</a>
            </div>
            <picture class="events__block2--image">
              <source media="(max-width: 768px)" srcset="./assets/img/home/vrijdag_ss.jpg">
              <source media="(max-width: 1024px)" srcset="./assets/img/home/vrijdag_sm.jpg">
              <source media="(max-width: 1440px)" srcset="./assets/img/home/vrijdag_md.jpg">
              <source media="(max-width: 1920px)" srcset="./assets/img/home/vrijdag_big.jpg">
              <source media="(max-width: 768px)" srcset="./assets/img/home/vrijdag_ss.webp">
              <source media="(max-width: 1024px)" srcset="./assets/img/home/vrijdag_sm.webp">
              <source media="(max-width: 1440px)" srcset="./assets/img/home/vrijdag_md.webp">
              <source media="(max-width: 1920px)" srcset="./assets/img/home/vrijdag_big.webp">
              <img class="block2-image" src="./assets/img/home/vrijdag_big.jpg" alt="een man met een vuurtoorts in zijn hand.">
            </picture>
          </div>
          <div class="events__block3">
            <picture class="events__block3--image">
              <source media="(max-width: 768px)" srcset="./assets/img/home/zaterdag_ss.jpg">
              <source media="(max-width: 1024px)" srcset="./assets/img/home/zaterdag_sm.jpg">
              <source media="(max-width: 1440px)" srcset="./assets/img/home/zaterdag_md.jpg">
              <source media="(max-width: 1920px)" srcset="./assets/img/home/zaterdag_big.jpg">
              <source media="(max-width: 768px)" srcset="./assets/img/home/zaterdag_ss.webp">
              <source media="(max-width: 1024px)" srcset="./assets/img/home/zaterdag_sm.webp">
              <source media="(max-width: 1440px)" srcset="./assets/img/home/zaterdag_md.webp">
              <source media="(max-width: 1920px)" srcset="./assets/img/home/zaterdag_big.webp">
              <img class="block3-image"src="./assets/img/home/zaterdag_big.jpg" alt="een man en vrouw in het paars gekleed. De vrouw kruipt op de man zijn schouders.">
            </picture>
            <div class="block__info">
              <p class="events--datum">25 augustus, 2018<br />14:30 uur</p>
              <h5 class="events--titel">familie<br />voorstellingen</h5>
              <a class="events--link" href="#">meer info +</a>
            </div>
          </div>
        </div>
        <div class="events__block4">
           <picture class="events__block4--image">
              <source media="(max-width: 768px)" srcset="./assets/img/home/zondag_ss.jpg">
              <source media="(max-width: 1024px)" srcset="./assets/img/home/zondag_sm.jpg">
              <source media="(max-width: 1440px)" srcset="./assets/img/home/zondag_md.jpg">
              <source media="(max-width: 1920px)" srcset="./assets/img/home/zondag_big.jpg">
              <source media="(max-width: 768px)" srcset="./assets/img/home/zondag_ss.webp">
              <source media="(max-width: 1024px)" srcset="./assets/img/home/zondag_sm.webp">
              <source media="(max-width: 1440px)" srcset="./assets/img/home/zondag_md.webp">
              <source media="(max-width: 1920px)" srcset="./assets/img/home/zondag_big.webp">
              <img class="block4-image" src="./assets/img/home/zondag_big.jpg" alt="een man en vrouw samen op 1 fiets. De man houdt de vrouw in zijn armen.">
            </picture>
          <div class="block__info">
            <p class="events--datum">&nbsp;26 augustus, 2018<br />&nbsp;14:00 uur</p>
            <h5 class="events--titel">&nbsp;voorstellingen<br />&nbsp;en straatacts</h5>
            <a class="events--link" href="#">&nbsp;meer info +</a>
          </div>
        </div>
      </section>
      <article class="brochure">
        <div class="brochure__inhoud">
          <h5 class="hidden">download brochure</h5>
          <p class="headline brochure__titel">
            Meer dan 50<br />
            verschillende acts
          </p>
          <div class="brochure__flex">
            <hr class="brochure__line"/>
            <p class="brochure__text">
              Geniet van ons goed gevuld programma,<br />
              met meer dan 50 internationale acts<br />
              vol plezier voor jong en oud.
              <br><br>
              <a class="brochure__link" target="_blank" href="assets/img/home/18_07_04_folderstraattheater.pdf">download de brochure</a>
            </p>
          </div>
        </div>
      </article>
      <section class="kijker">
        <h4 class="card kijker__card"><span class="dash light">&mdash;</span>2017 editie in de kijker</h4>
        <iframe class="kijker__vid" width="1280" height="720" src="https://www.youtube.com/embed/lrlscBtuSUM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </section>
      <section class="partners">
        <h3 class="headline">partners</h3>
      </section>
      <section class="contact">
      <h5 class=" headline contact__headline">Locaties</h5>
      <br>
      <iframe class="contact__map" src="https://www.google.com/maps/d/u/0/embed?mid=1WLLsnFpRYYwdMSQakhOVz6lkVjX0E1T6" frameborder="0" width="100%" height="480"></iframe>
        <article class="contact__flex">
        <h5 class="hidden">Meer Info</h5>
          <div class="contact__info">
            <div class="contact__info--voorstelling">
              <p class="contact--titel">locaties voorstellingen</p>
              <ul class="contact__info--list">
                <li><span class="dash2">&mdash;</span> Oude Atletiekplein, Diederik van Beverenlaan</li>
                <li><span class="dash2">&mdash;</span> Speelplaats van BS De Bever</li>
                <li><span class="dash2">&mdash;</span> KA Beveren, Donkvijverstraat</li>
              </ul>
            </div>
            <div class="contact__info--straat">
              <p class="contact--titel">locaties straatacts</p>
              <ul class="contact__info--list">
                <li><span class="dash2">&mdash;</span> Donkvijverstraat</li>
                <li><span class="dash2">&mdash;</span> Yzerhand</li>
                <li><span class="dash2">&mdash;</span> Vrasenestraat</li>
                <li><span class="dash2">&mdash;</span> Warande, N70</li>
                <li><span class="dash2">&mdash;</span> De Grote Markt</li>
              </ul>
            </div>
          </div>
          <aside class="contact__nieuws">
            <h5 class="hidden">Nieuwsbrief</h5>
            <p class="headline contact__nieuws__headline">ontvang de laatste info</p>
            <p class="contact__nieuws__text">
              Wens je graag op de hoogte te blijven van onze updates?<br />
              Schrijf je dan hier in voor onze nieuwsbrief.
            </p>
            <form class="contact__form">
              <input
                class="contact__form__input"
                name="email"
                type="email"
                placeholder="Graag jouw email"
                required
              />
              <button class="contact__form__btn" type="submit">Inschrijven</button>
            </form>
            <div class="contact__social">
              <a class="social__link1" href="#"></a>
              <a class="social__link2" href="#"></a>
              <a class="social__link3" href="#"></a>
            </div>
          </aside>
        </article>
        <article class="contact__meerinfo">
          <div class="contact__meerinfo__box">
            <h6 class="contact--titel">meer info</h6>
              <address class="contact__meerinfo__adres">
                <p>Erik Apers</p>
                <p>03 750 16 29</p>
                <a class="contact__maillink" href="#">erik.apers@beveren.be</a>
                <p>Beveren Waas 9120</p>
              </address>
          </div>
        </article>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__copy">
        <p class="footer__ACP">Algemene voorwaarden &nbsp; Cookie Statement &nbsp; Privacy-beleid</p>
        <p>&copy;Devine 2018-2019 Ruben Comhaire</p>
      </div>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
