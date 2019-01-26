<header class="header">
    <nav class="menu">
        <div class="menu__logo">
            <span class="menu__logo--text1">beverse</span> &nbsp; <span class="menu__logo--text2">feesten</span>
        </div>
        <ul class="menu__items">
            <li><a class="menu__links" href="index.php">home</a></li>
            <li><a class="menu__links  links--active"
                    href="index.php?page=programma&amp;Dag=<?php echo $details["dag"];?>">programma</a></li>
            <li><a class="menu__links" href="#">contact</a></li>
            <li><a class="menu__links" href="#">faq</a></li>
        </ul>
    </nav>
    <div class="detail">
        <a class="detail__terug" href="index.php?page=programma&amp;Dag=<?php echo $details["dag"];?>"><span
                class="detail__terug-replace">terug</span></a>
        <picture class="detail__head__image">
            <source media="(max-width: 1024px)" srcset="./assets/img/detail/<?php echo $details["detail_afb2sm"];?>"
                type="image/webp">
            <source media="(max-width: 1920px)" srcset="./assets/img/detail/<?php echo $details["detail_afb2lg"];?>"
                type="image/webp">
            <source media="(max-width: 1024px)" srcset="./assets/img/detail/<?php echo $details["detail_afb1sm"];?>">
            <source media="(max-width: 1920px)" srcset="./assets/img/detail/<?php echo $details["detail_afb1lg"];?>">
            <img class="detail__image" src="./assets/img/detail/<?php echo $details["detail_afb1lg"];?>"
                alt="<?php echo $details["detail_alt"];?>">
        </picture>
        <p class="detail__tag"><span class="light">&mdash; </span><?php echo $details["Type"];?></p>
        <p class="detail__performer"><?php echo $details["Performer"];?> <span
                class="detail__nat">(<?php echo $details["Land"];?>)</span></p>
        <p class="detail__act"><?php echo $details["Act"];?></p>
        <p class="detail__datum"><?php echo $details["dag"];?> <?php echo $details["datum"];?></p>
        <div class="detail__uuren">
            <p class="detail__info-titel">Speeluren</p>
            <p class="detail__info-text">
                <?php
                  if(!empty($details["Start uur"]) && !empty($details["Eind uur"])) {
                ?>
                <?php echo $details["Start uur"];?>h - <?php echo $details["Eind uur"];?>h
                <?php
                  } elseif(!empty($details["Start uur"]) && empty($details["Eind uur"])){
                ?>
                <?php echo $details["Start uur"];?>h
                <?php
                  }elseif(empty($details["Start uur"]) && empty($details["Eind uur"])){
                ?>
                Loop van de dag
                <?php
                  }
                ?>
            </p>
        </div>
        <div class="detail__locatie">
            <p class="detail__info-titel">Locatie</p>
            <p class="detail__info-text"><?php echo $details["Locatie"];?></p>
        </div>
    </div>
</header>
<main>
    <section class="act">
        <p class="act__duur">
            <?php
              if(!empty($details["Duur"])){
            ?>
            <?php echo $details["Duur"];?>uten</p>
        <?php
              }
            ?>
        <p class="act__titel">
            <?php
              if(!empty($details["Act"])){
            ?>
            <?php echo $details["Act"];?></p>
        <?php
              }else{
                ?>
        <?php echo $details["Performer"];?></p>
        <?php
              }
            ?>
        <div class="act__info">
            <hr class="act__info__line" />
            <p class="act__info__text">
                <?php echo $details["act_info"];?>
            </p>
        </div>
    </section>
    <?php
      if(!empty($details["comp_vid"])) {
    ?>
    <section class="performer">
        <div class="performer__vidbox">
            <embed class="performer__vidbox__vid"
                src="http://www.youtube.com/v/<?php echo $details["comp_vid"];?>?version=3&amp;hl=en_US&amp;rel=0&amp;autohide=1&amp;autoplay=1"
                wmode="transparent" type="application/x-shockwave-flash" width="1280" height="720"
                allowfullscreen="true" title="Adobe Flash Player">
        </div>
        <article class="performer__info">
            <p class="performer__info__titel">meer weten over</p>
            <p class="performer__info__name"><?php echo $details["Performer"];?></p>
            <a class="performer__info__link"
                href="<?php echo $details["Website"];?>"><?php echo $details["Website"];?></a>
            <p class="performer__info__box-1"><?php echo $details["comp_info_block1"];?>
            </p>
            <p class="performer__info__box-2"><?php echo $details["comp_info_block2"];?></p>
        </article>
    </section>
    <?php
    }
    ?>
</main>