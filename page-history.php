<?php
/* 
Template Name: Наша история
*/
?>

<?php
    get_header();
?>
<div class="aboutus">
        <div class="container">
            <h1 class="title"><?php the_field("aboutus_title") ?></h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="subtitle">
                    <?php the_field("aboutus_subtitle") ?>
                    </div>
                    <div class="aboutus__text">
                    <?php the_field("aboutus_descr") ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="aboutus__img" src="<?php the_field("aboutus_img-1") ?>" alt="история компании">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img class="aboutus__img" src="<?php the_field("aboutus_img-2") ?>" alt="история компании">
                </div>
                <div class="col-lg-6">
                    <div class="subtitle">
                    <?php the_field("aboutus_subtitle-2") ?>
                    </div>
                    <div class="aboutus__text">
                    <?php the_field("aboutus_descr-2") ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="subtitle">
                        Современные технологии
                    </div>
                    <div class="aboutus__text">
                        И даже спустя столько лет мы продолжаем создавать игрушки вручную. Как самые простые, так и те, что идут в ногу со временем. Добавляя электроники и оживляя лучших друзей ребятишек, мы всегда следим за качеством и безопасностью. Каждая отдельная игрушка проходит индивидуальный контроль по всем необходимым стандартам.
                        <br><br>
                        Ведь счастливое лицо ребенка - это лучшая награда для нас!
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="aboutus__img" src="<?php the_field("aboutus_img-3") ?>" alt="мир детства">
                </div>
            </div>
        </div>
    </div>



<?php
    get_footer();
?>