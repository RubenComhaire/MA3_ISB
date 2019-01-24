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
        <a class="social__link1__p" href="#"></a>
        <br>
        <a class="social__link2__p" href="#"></a>
        <br>
        <a class="social__link3__p" href="#"></a>
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
                    <label for='drop'>Sorteren op: </label>
                    <select class="filter__drop" name="filter__drop" id="drop">
                        <option value="tijdasc">starttijd &#8638;</option>
                        <option value="tijddesc">starttijd &#8642;</option>
                    </select>
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
            <li class='event'>
                <a href="#">
                    <span class=""><?php echo $event["Type"];?></span>
                    <img src="<?php echo $event["afbeelding"];?>" alt="<?php echo $event["alt"];?>" class="">
                    <span class=''><?php echo $event["Performer"];?></span>
                    <span class=''><?php echo $event["Act"];?></span>
                    <span class=''><?php echo $event["Startuur"];?></span>
                </a>
            </li>
            <?php
              }
            ?>
        </ul>
    </section>
    <iframe class="contact__map" src="https://www.google.com/maps/d/u/0/embed?mid=1WLLsnFpRYYwdMSQakhOVz6lkVjX0E1T6"
        frameborder="0" width="100%" height="480"></iframe>
</main>