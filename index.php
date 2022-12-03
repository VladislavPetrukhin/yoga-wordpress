<?php get_header(); ?>
<body>
<div class="site">
<!--<nav>-->
<!--    <div class="nav-wrapper">-->
<!--        <a href="#" class="brand-logo">Logo</a>-->
<!--        <ul id="nav-mobile" class="right hide-on-med-and-down">-->
<!--            <li><a href="">Home</a></li>-->
<!--            <li><a href="">About</a></li>-->
<!--            <li><a href="">Courses</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->


<div class="navigation">
    <ul class="nav-group">
<!--        <a href="#" class="brand-logo"><img class="responsive-img" src="src/logo.png" alt="Oops!"></a>-->
        <li class="nav-elem"><a href="#home">Главная</a></li>
        <li class="nav-elem"><a href="#about">О йоге</a></li>
        <li class="nav-elem"><a href="#instructor">Инструктор</a></li>
<!--        <li class="nav-elem"><a href="#more">Подробнее</a></li>-->
        <li class="nav-elem"><a href="#gallery">Галерея</a></li>
<!--        <li class="nav-elem"><a href="#predprsm">Предпросмотр</a></li>-->
        <li class="nav-elem"><a href="#course">Наш курс</a></li>
<!--        <li class="nav-elem"><a href="#feedback">Отзывы</a></li>-->
        <li class="nav-elem"><a href="#tours">Йога-туры</a></li>
        <li class="nav-elem"><a href="#contacts">Контакты</a></li>



<!--                <li class="nav-elem"><a href="">Home</a></li>-->
<!--                <li class="nav-elem"><a href="">About</a></li>-->
<!--                <li class="nav-elem"><a href="">Courses</a></li>-->

    </ul>
</div>

    <div class="menu">
        <input type="checkbox" id="active" class="checkbox">
        <label for="active" class="menu-btn"><span class="lol"></span></label>
        <label for="active" class="close"></label>
        <div class="wrapper">
            <ul>
                <li><a  id="btn1" href="#home">Главная</a></li>
                <li><a  id="btn2" href="#about">О йоге</a></li>
                <li><a  id="btn3" href="#instructor">Инструктор</a></li>
                <li><a  id="btn4" href="#gallery">Галерея</a></li>
                <li><a  id="btn5" href="#course">Наш курс</a></li>
                <li><a  id="btn6" href="#tours">Йога-туры</a></li>
                <li><a  id="btn7" href="#contacts">Контакты</a></li>
            </ul>
        </div>
    </div>




<div class="section1" id="home">
<!--    <div class="mountains img responsive-img"></div>-->

    <img src="http://yoga/wp-content/themes/yoga-ne/assets/src/mountains.jpg" class="img responsive-img img-desktop" alt="Oops!">
    <img src="http://yoga/wp-content/themes/yoga-ne/assets/src/mountains-1280px.jpg" class="img responsive-img img-1280px" alt="Oops!">
    <img src="http://yoga/wp-content/themes/yoga-ne/assets/src/mountains-600px.jpg" class="img responsive-img img-600px" alt="Oops!">
    <img src="http://yoga/wp-content/themes/yoga-ne/assets/src/mountains-420px.jpg" class="img responsive-img img-420px" alt="Oops!">

    <div class="cont1">
        <div class="avatar"><img class="responsive-img" src="<?= CFS()->get('avatar') ?>" alt="Oops!"></div>
        <div class="text1-box">
<h1 class="text1"><?= CFS()->get('text1') ?></h1>
    <h1 class="text2"><?= CFS()->get('text2') ?></h1>
        <h1 class="text3"><?= CFS()->get('text3') ?></h1>
</div>
    </div>
    </div>


<div class="section2" id="about">

   <div class="text-yoga-container">

       <div class="wave-box text-yoga" style="text-align: right">
           <div class="wave">
            <span>Й</span><span>О</span><span>Г</span><span>А</span>
           </div>
       </div>

<!--<div class="text-yoga">ЙОГА</div>-->
<div class="box-yoga">
    <div class="row">
    <div class="yoga-card col s6"><img class="arrow1 responsive-img" src="http://yoga/wp-content/themes/yoga-ne/assets/src/arrow-curved2.png" alt=""></div>
    <div class="yoga-card col s6"><img class="arrow2 responsive-img" src="http://yoga/wp-content/themes/yoga-ne/assets/src/arrow-curved.png" alt=""></div>
    </div>
    <div class="row">
    <div class="yoga-card col s6"><p class="yoga-p1"><?= CFS()->get('yoga-p1') ?></p>
    </div>
    <div class="yoga-card col s6"><p class="yoga-p2"><?= CFS()->get('yoga-p2') ?></p>
    </div>
    </div>
    <div class="row">
    <div class="yoga-card col s6"><img class="arrow3 responsive-img" src="http://yoga/wp-content/themes/yoga-ne/assets/src/arrow-straight2.png" alt=""></div>
    <div class="yoga-card col s6"><img class="arrow4 responsive-img" src="http://yoga/wp-content/themes/yoga-ne/assets/src/arrow-straight.png" alt=""></div>
    </div>
        <div class="row">
    <div class="yoga-card yoga-card-box col s6"><div>Здоровье и красота</div>
        <img class="heart heart-pulse responsive-img" src="http://yoga/wp-content/themes/yoga-ne/assets/src/heart.png" alt="">
    </div>
    <div class="yoga-card yoga-card-box col s6"><div>Спокойствие и
        гармония,<br> психическое равновесие</div>
        <img class="calm responsive-img animation_move" src="http://yoga/wp-content/themes/yoga-ne/assets/src/calm.png" alt="">
    </div>
        </div>

</div>


   </div>



</div>


<div class="section3" id="instructor">

    <div class="row">
        <div class="col s12 xl10 text-about">
            <p><?= CFS()->get('text-about') ?></p>
             </div>
        <div class="col s12 xl2 ava-about"><img class= "responsive-img" src="<?= CFS()->get('ava-about') ?>" alt="Oops!"></div>
    </div>

</div>


    <div class="section4"  id="more">
        <div style="display: flex">
            <h3 class="text-more">Немного подробнее о йоге</h3>
        </div>



<!--        <div class="acor-container">-->
<!--        <form>-->
<!---->
<!--            --><?php
//            $loop = CFS()->get('chacor');
//            foreach ($loop as $row) {
//                ?>
<!---->
<!--            <input type="radio" name="chacor" id="chacor1"/>-->
<!--            <label for="chacor1">--><?//= $row['chacor-title'] ?><!--</label>-->
<!--            <div class="acor-body">-->
<!--                <p>--><?//= $row['chacor-text'] ?><!--</p>-->
<!--            </div>-->
<!--            --><?php
//                }
//            ?>
<!--        </form>-->
<!--        </div>-->
        <div class="acor-container">
            <form>
                <input type="radio" name="chacor" id="chacor1" checked="checked" />
                <label for="chacor1">Lorem ipsum dolor sit amet.</label>
                <div class="acor-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis consectetur maxime numquam tempora vel?</p>
                </div>

                <input type="radio" name="chacor" id="chacor2" />
                <label for="chacor2">Lorem ipsum dolor sit amet.</label>
                <div class="acor-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid laudantium provident rerum sapiente sunt.</p>
                </div>

                <input type="radio" name="chacor" id="chacor3" />
                <label for="chacor3">Lorem ipsum dolor sit amet.</label>
                <div class="acor-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi facere magnam natus quasi, ratione vero.</p>
                </div>

                <input type="radio" name="chacor" id="chacor4" />
                <label for="chacor4">Lorem ipsum dolor sit amet.</label>
                <div class="acor-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi facere magnam natus quasi, ratione vero.</p>
                </div>

                <input type="radio" name="chacor" id="chacor5" />
                <label for="chacor5">Lorem ipsum dolor sit amet.</label>
                <div class="acor-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi facere magnam natus quasi, ratione vero.</p>
                </div>
            </form>
        </div>

    </div>




    <div class="section5" id="gallery">

        <div style="display: flex">
            <h3 class="text-more" style="margin-bottom: -200px">Наши фотографии</h3>
        </div>

        <div class="carousel">

            <?php
                        $loop = CFS()->get('carousel-block');
                        foreach ($loop as $row) {
                            ?>

            <a class="carousel-item"><img class="responsive-img" alt="Oops!" src="<?= $row['carousel-image'] ?>"></a>


             <?php
                        }
             ?>
        </div>



    </div>

    <div class="section6"  id="predprsm">
    <div style="display: flex">
        <h3 class="text-more"><?= CFS()->get('text-predprsm') ?></h3>
    </div>
        <div class="video">
        <div class="video-container"><iframe width="560" height="315" src="<?= CFS()->get('video-predprsm') ?>" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
        </div>
    </div>

    <div class="section7"  id="course">
        <div class="row">
        <div class="col s12 l6"><img class="responsive-img img-include" src="<?= CFS()->get('image-include') ?>" alt="Oops"></div>
        <div class="col s12 l6 cont">

            <div class="include-course">
                <h3><?= CFS()->get('title-include') ?></h3>
                <div class="include-paragraph">
                <?php
                $loop = CFS()->get('include-block');
                foreach ($loop as $row) {
                    ?>
                <p><i class="fa fa-check" aria-hidden="true"></i><?= $row['include-text'] ?></p>
                    <?php
                }
                ?>
                </div>
<!--                <div class="buy"><button class="custom-btn btn-7"><span style="margin: auto">Купить</span></button></div>-->
                <div class="buy"><button class="Animated_button button-53 line-btn line-btn-three buy-button"><span style="margin: auto">Купить</span></button></div>
            </div>

        </div>
        </div>


    </div>

    <div class="section8" id="feedback">

        <div class="feedback #f5f5f5 grey lighten-3">
            <div class="ava-feedback"><img class="responsive-img" src="<?= CFS()->get('image-feedback') ?>" alt="Oops!">
                <h3><?= CFS()->get('name-feedback') ?></h3>
            </div>

            <p>
                <?= CFS()->get('text-feedback') ?>
                </p>
        </div>
        </div>




    <div class="section-tour" id="tours">
        <div class="tour-text-box">
            <h3 class="title-tour">Йога-туры</h3>


            <p class="tour-p">
                <?= CFS()->get('text-tour') ?>
            </p>
        </div>

        <div class="carousel carousel-slider center carousel2">
            <!--        <div class="carousel-fixed-item center">-->
            <!--            <a class="btn waves-effect white grey-text darken-text-2">button</a>-->
            <!--        </div>-->
            <div class="carousel-item red white-text" href="#one!">
                <h2>Первая страна</h2>
                <p class="white-text">Здесь будет фото и комментарий</p>
            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <h2>Вторая страна</h2>
                <p class="white-text">Здесь будет фото и комментарий</p>
            </div>
            <div class="carousel-item green white-text" href="#three!">
                <h2>Третья страна</h2>
                <p class="white-text">Здесь будет фото и комментарий</p>
            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <h2>Четвертая страна</h2>
                <p class="white-text">Здесь будет фото и комментарий</p>
            </div>
        </div>

        <div class="tour-text-box">
            <h3 class="next-title-tour">Ближайшие йога-туры</h3>
            <div class="tour-card-container">

            <?php
            $loop = CFS()->get('tour-card-block');
            foreach ($loop as $row) {
                ?>

                <div class="tour-card-box">
                    <div class="tour-card row">
                        <div class="col s12 l6 xl3 tour-card-img"><img class="responsive-img" src="<?= $row['tour-card-image'] ?>" alt="Oops!"></div>
                        <div class="col s12 l6 xl9 tour-card-info">
                            <h3 class="tour-card-title"><?= $row['tour-card-country'] ?></h3>
                            <h4 class="tour-card-date"><?= $row['tour-card-date'] ?></h4>
                            <p class="tour-card-p">

                                <?= $row['tour-card-text'] ?>

                            </p>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>

            </div>

        </div>


    </div>




    <div class="section9" id="contacts">
        <div style="display: flex">
            <h3 class="text-more">Наши контакты:</h3>
        </div>
        <div class="contacts">
            <button class="whatsapp-button"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
            <button class="facebook-button"><i class="fa fa-facebook" aria-hidden="true"></i></button>
            <button class="telegram-button" style="margin-right: 0"><i class="fa fa-telegram" aria-hidden="true"></i></button>
        </div>
    </div>

    <div class="section10">
        <div>
        <h1><?= CFS()->get('bye-title') ?></h1>
        <div class="end-img"><img class="responsive-img" src="<?= CFS()->get('bye-image') ?>" alt="Oops!"></div>
        </div>

    </div>

<?php get_footer(); ?>