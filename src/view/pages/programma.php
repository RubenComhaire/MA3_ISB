<header class="header">
    <nav class="menu">
        <div class="menu__logo">
            <span class="menu__logo--text1">beverse</span> &nbsp; <span class="menu__logo--text2">feesten</span>
        </div>
        <ul class="menu__items">
            <li><a class="menu__links" href="index.php">home</a></li>
            <li><a class="menu__links  links--active" href="index.php?page=programma">programma</a></li>
            <li><a class="menu__links" href="#">contact</a></li>
            <li><a class="menu__links" href="#">faq</a></li>
        </ul>
    </nav>
    <div class="programma_head">
        <h1 class="programma__htext">
            <span class="programma__htext--pink">2018</span><br />
            <span class="programma__htext--black">Programma</span>
        </h1>
        <p class="programma__head__smalltext">Geniet van ons goed gevuld programma,<br />
            met meer dan 50 internationale acts<br />
            vol plezier voor jong en oud.</p>
    </div>
    <aside class="programma__social">
        <a class="social__link1__p" target="_blank" href="https://www.facebook.com/straattheaterfestivalbeveren/"></a>
        <br>
        <a class="social__link2__p" target="_blank" href="https://twitter.com/hashtag/beversefeesten?src=hash"></a>
        <br>
        <a class="social__link3__p" target="_blank"
            href="https://www.instagram.com/explore/locations/375292120/beverse-feesten/"></a>
    </aside>
</header>
<main>
    <section class="programma">
        <form class="programma__filter">
            <input type="hidden" name="action" value="filter" />
            <ul class="programma__filter__dag">
                <li class="filter__dag filter__vrijdag">
                    <input class="dag__input" type='radio' value='vrijdag' name='dag' id='vrijdag' checked />
                    <label class="dag__label" for='vrijdag'>vrijdag</label>
                </li>
                <li class="filter__dag filter__zaterdag">
                    <input class="dag__input" type='radio' value='zaterdag' name='dag' id='zaterdag' />
                    <label class="dag__label" for='zaterdag'>zaterdag</label>
                </li>
                <li class="filter__dag filter__zondag">
                    <input class="dag__input" type='radio' value='zondag' name='dag' id='zondag' />
                    <label class="dag__label" for='zondag'>zondag</label>
                </li>
            </ul>
            <div class="programma__filter__others">
                <ul class="programma__filter__types">
                    <li class="filter__type filter__alles">
                        <input class="type__input" type='radio' value='alles' name='type' id='alle' checked />
                        <label class="type__label" for='alle'>alles</label>
                    </li>
                    <li class="filter__type filter__voorstelling">
                        <input class="type__input" type='radio' value='voorstelling' name='type' id='voorstelling' />
                        <label class="type__label" for='voorstelling'>voorstelling</label>
                    </li>
                    <li class="filter__type filter__straat">
                        <input class="type__input" type='radio' value='straatact' name='type' id='straatacts' />
                        <label class="type__label" for='straatacts'>straatacts</label>
                    </li>
                </ul>
                <div class="filter__type filter__advanced">
                    <div>
                        <label for='drop'>Sorteren op: </label>
                        <select class="filter__drop" name="filter__drop" id="drop">
                            <option value="tijdasc">starttijd &#8638;</option>
                            <option value="tijddesc">starttijd &#8642;</option>
                        </select>
                    </div>
                    <span class="hidden">Search</span>
                    <input type="search" id="search" name="search" class="advanced__search" placeholder="zoeken"
                        value="">
                </div>
            </div>
            <hr class="filter__line">
        </form>
    </section>
    <section class="events__grid">
        <ul class="events__list">
            <?php
              foreach($events as $event){
            ?>
            <li class='events__list__event'>
                <span class="card event__card"><span
                        class="light">&mdash;</span>&nbsp;<?php echo $event["Type"];?></span>
                <a class="event__link" href="index.php?page=detail">
                    <picture class="events__list__image">
                        <source srcset="./assets/img/programma/<?php echo $event["afbeelding2"];?>" type="image/webp">
                        <source srcset="./assets/img/programma/<?php echo $event["afbeelding"];?>">
                        <img class="" src="./assets/img/programma/<?php echo $event["afbeelding"];?>"
                            alt="<?php echo $event["alt"];?>">
                    </picture>
                    <div class="event__info">
                        <span class='event__perf'><?php echo $event["Performer"];?></span>
                        <br>
                        <span class='event__act'><?php echo $event["Act"];?></span>
                        <br>
                        <span class='event__uur'><?php echo $event["Start uur"];?></span>
                    </div>
                </a>
            </li>
            <?php
              }
            ?>
        </ul>
    </section>
    <section class="programma__foot">
        <div class="programma__map" id="div-that-holds-the-iframe"></div>
    </section>
</main>