<header class="header">
    <nav class="menu">
        <div class="menu__logo">
            <span class="menu__logo--text1">beverse</span> &nbsp; <span class="menu__logo--text2">feesten</span>
        </div>
        <ul class="menu__items">
            <li><a class="menu__links" href="index.php">home</a></li>
            <li><a class="menu__links  links--active" href="index.php?page=programma&amp;Dag=vrijdag">programma</a></li>
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
        <form class="programma__filter" method="get" action="index.php">
            <input type="hidden" name="page" value="programma" />
            <input type="hidden" name="action" value="filter" />
            <input type="hidden" name="Dag" id="dag" value="<?php echo $Dag; ?>" />
            <ul class="programma__filter__dag">
                <li class="filter__dag filter__vrijdag">

                    <a class="dag__label <?php if($Dag == "vrijdag"){ echo active; }?>"
                        href="index.php?page=programma&amp;Dag=vrijdag">vrijdag</a>

                </li>
                <li class="filter__dag filter__zaterdag">
                    <a class="dag__label <?php if($Dag == "zaterdag"){ echo active; }?>"
                        href="index.php?page=programma&amp;Dag=zaterdag">zaterdag</a>
                </li>
                <li class="filter__dag filter__zondag">
                    <a class="dag__label <?php if($Dag == "zondag"){ echo active; }?>"
                        href="index.php?page=programma&amp;Dag=zondag">zondag</a>
                </li>
            </ul>
            <div class="programma__filter__others">
                <ul class="programma__filter__types">
                    <li class="filter__type filter__alles">
                        <input class="type__input" type='radio' value="alles" name='type' id='alle'
                            <?php if($type == "alles"){ ?> checked <?php } ?> />
                        <label class="type__label" for='alle'>alles</label>
                    </li>
                    <li class="filter__type filter__voorstelling">
                        <input class="type__input" type='radio' value="voorstelling" name='type' id='voorstelling'
                            <?php if($type == "voorstelling"){ ?> checked <?php } ?> />
                        <label class="type__label" for='voorstelling'>voorstelling</label>
                    </li>
                    <li class="filter__type filter__straat">
                        <input class="type__input" type='radio' value="straatact" name='type' id='straatacts'
                            <?php if($type == "straatact"){ ?> checked <?php } ?> />
                        <label class="type__label" for='straatacts'>straatacts</label>
                    </li>
                </ul>
                <div class="filter__type filter__advanced">
                    <div>
                        <label for='drop'>Sorteren op: </label>
                        <select class="filter__drop" name="drop" id="drop">
                            <option value="tijdasc" <?php if($drop == "tijddesc"){ ?> selected <?php } ?>>starttijd
                                &#8638;</option>
                            <option value="tijddesc" <?php if($drop == "tijddesc"){ ?> selected <?php } ?>>starttijd
                                &#8642;</option>
                        </select>
                    </div>
                    <span class="hidden">Search</span>
                    <input type="search" id="search" name="search" class="advanced__search" placeholder="zoeken"
                        value="<?php echo $search;?>">
                    <input type="submit" value="Filter" class="programma__filter__submit">
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
            <li class="events__list__event">
                <span class="card event__card"><span
                        class="light">&mdash;</span>&nbsp;<?php echo $event["Type"];?></span>
                <a class="event__link" href="index.php?page=detail&amp;id=<?php echo $event["id"];?>">
                    <picture class="events__list__image">
                        <source srcset="./assets/img/programma/<?php echo $event["afbeelding2"];?>" type="image/webp">
                        <source srcset="./assets/img/programma/<?php echo $event["afbeelding"];?>">
                        <img class="" src="./assets/img/programma/<?php echo $event["afbeelding"];?>"
                            alt="<?php echo $event["alt"];?>">
                    </picture>
                    <div class="event__info">
                        <span class='event__perf'><?php echo $event["Performer"];?></span>
                        <br>
                        <?php
                          if(!empty($event["Act"])){
                        ?>
                        <span class='event__act'><?php echo $event["Act"];?></span>
                        <?php
                        }else{
                          ?>
                        <span class='event__act'><?php echo $event["Performer"];?></span>
                        <?php
                          }
                        ?>
                        <br>
                        <?php
                          if(!empty($event["Start uur"])){
                        ?>
                        <span class='event__uur'><?php echo $event["Start uur"];?></span>

                        <?php
                          }else{?>
                        <span class='event__uur'>Loop van de dag</span>
                        <?php
                        }
                        ?>

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