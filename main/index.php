<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg font-header custom-header custom-header-top">
        <img src="img/bars-solid.svg" class="burgerImg col-sm-2" onclick="burger()">
        <ul class="navbar-nav ml-auto col-5 ml-n5 burgermenu" id="burgermenu">
            <li class="nav-item active">
                <a class="nav-link text-white mr-10" href="#">
                    <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-10 MobileDN">
                        <rect y="1.52588e-05" width="20" height="1" fill="white"/>
                        <rect x="5" y="3.00002" width="15" height="1" fill="white"/>
                        <rect x="10" y="6.00002" width="10" height="1" fill="white"/>
                    </svg>   
                    Головна                     
                </a>
            </li>
            <li class="nav-item mr-8">
                <a class="nav-link text-white" href="#">Про нас</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link text-white" href="#">Послуги</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link text-white" href="#">Портфоліо</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Контакти</a>
                </li>
        </ul>
        <a class="navbar-brand col-3" href="#">
            <img src="img/logo.svg" alt="" class="logo">
        </a>
        
        <div class="collapse navbar-collapse justify-content-end width mr-151 col-4 col-sm-6" id="navbarResponsive">
            <ul class="navbar-nav ml-auto mr-151">
                <li class="nav-item active dropdown">
                    <a class="nav-link text-white mr-10 dropdown-toggle" data-toggle="dropdown" href="#">Укр</a>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Submenu 1-1</a></li>
                        <li><a href="#">Submenu 1-2</a></li>
                        <li><a href="#">Submenu 1-3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">+38(0342)71-24-59</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">+38(050)731-94-22</a>
                </li>
                
            </ul>
        </div>
    </nav>
      
      
    <header class="cHeight">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Перший слайд -->
            <div class="carousel-item active bg-image">
              <div class="carousel-caption d-none d-md-block pos">
                <h2 class="display-4 customText">Досвід. Якість. Репутація</h2>
                <p class="lead customText2">Поєднання дизайну інтерєрів, архітектури та будівельного досвіду більше 10 років</p>
              </div>
            </div>
            <!-- Другий слайд -->
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Second Slide</h2>
                <p class="lead">This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Третій слайд -->
            <div class="carousel-item bg-image">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Third Slide</h2>
                <p class="lead">This is a description for the third slide.</p>
              </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                
              </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                
            </a>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg font-header custom-header header5" id="myHeader">
        <img src="img/bars-solid.svg" class="burgerImg col-sm-2" onclick="burger2()">
        <ul class="navbar-nav ml-auto col-5 burgermenu mobileColor" id="burgermenu2">
            <li class="nav-item active">
                <a class="nav-link text-dark mr-10 mobileColor" href="#">
                    <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-10 MobileDN ">
                        <rect y="1.52588e-05" width="20" height="1" fill="white"/>
                        <rect x="5" y="3.00002" width="15" height="1" fill="white"/>
                        <rect x="10" y="6.00002" width="10" height="1" fill="white"/>
                    </svg>   
                    Головна                     
                </a>
            </li>
            <li class="nav-item mr-8">
                <a class="nav-link text-dark mobileColor" href="#">Про нас</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link text-dark mobileColor" href="#">Послуги</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link text-dark mobileColor" href="#">Портфоліо</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark mobileColor" href="#">Контакти</a>
                </li>
        </ul>
        <a class="navbar-brand col-3" href="#">
            <img src="img/logo2.png" alt="" class="logo">
        </a>
        
        <div class="collapse navbar-collapse justify-content-end width mr-151 col-4" id="navbarResponsive">
            <ul class="navbar-nav ml-auto mr-151">
                <li class="nav-item active dropdown">
                    <a class="nav-link text-dark mr-10 dropdown-toggle" data-toggle="dropdown" href="#">Укр</a>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Submenu 1-1</a></li>
                        <li><a href="#">Submenu 1-2</a></li>
                        <li><a href="#">Submenu 1-3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="#">+38(0342)71-24-59</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="#">+38(050)731-94-22</a>
                </li>
                
            </ul>
        </div>
    </nav>
      












      <!-- Page Content -->
    <section class="pt-5 customContent" id="section">
        <div class="container">  
            
            <div class="row">
                <img src="img/Line Y.png" alt="" class="linePos1 line">
                <img src="img/Line Y.png" alt="" class="linePos2 line">
                <img src="img/Line Y.png" alt="" class="linePos3 line">
                <img src="img/Line Y.png" alt="" class="linePos4 line">
                <img src="img/Line Y.png" alt="" class="linePos5 line">
                <div class="col-1"></div>
                <div class="col-11">
                    <img src="img/contentImg1.jpg" alt="" class="ContentImgSize">
                </div>
                <!-- <div class="col-8">
                    <span>
                        Наші послуги
                    </span>
                    <span>
                        Досвід Якість Репутація
                    </span>
                </div> -->
            </div>
            <div class="row py-3 wow bounceInRight cRowC1">
                <div class="col-2"></div>
                <div class="col-5 custom3">
                    <span class="text3 leftText"><b>Дизайн і архітектура</b></span>
                    <img src="img/lineX.png" alt="" class="lineX1 posLineX">
                    <ul class="text-muted textSize1 ContentList1">
                        <li>
                            Дизайн інтерєрів (3D візуалізація, повний пакет робочих креслень, технічна документація, технічний та авторський нагляд)

                        </li>
                        <li>
                            Дизайн екстр'єрів
                        </li>
                        <li>
                            Ландшафтний дизайн
                        </li>
                        <li>
                            Архітектурне проектування приватних і громадських об'єктів готелів, ресторанів, відпочинкових комплексів тощо. 
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <img src="img/7-min1.png" alt="" class="imgContent1">
                </div>
                <div class="col-2"></div>
            </div>


            <div class="row py-3 wow bounceInLeft cRowC2">
                <div class="col-2"></div>
                <div class="col-3">
                    <img src="img/6-min (1) 1.png" alt="" class="imgContent2">
                </div>
                <div class="col-5 custom3">
                    <span class="text3 textRight"><b>Ремонтні роботи</b></span>
                    <img src="img/lineX.png" alt="" class="lineX2 posLineX">
                    <ul class="text-muted textSize1 ContentList2">
                        <li>
                            Опалення та кондиціювання
                        </li>
                        <li>
                            Електрика, сигналізація, інтернет
                        </li>
                        <li>
                            Сантехніка, каналізація
                        </li>
                        <li>
                            Всі види внутрішніх і зовнішніх робіт 
                        </li>
                        <li>
                            Столярні роботи
                        </li>
                        <li>
                            Постачання матеріалів
                        </li>
                        <li>
                            Ремонт "під ключ"
                        </li>
                    </ul>
                </div>
                
                <div class="col-2"></div>
            </div>

            <div class="row py-3 wow bounceInRight cRowC1">
                <div class="col-2"></div>
                <div class="col-5 custom4">
                    <span class="text3 leftText"><b>Меблі</b></span>
                    <img src="img/lineX.png" alt="" class="lineX3 posLineX">
                    <ul class="text-muted textSize1 ContentList3">
                        <li>
                            Кухні, спальні, вітальні, дитячі Шафи-купе, гардеробні

                        </li>
                        <li>
                            М'які меблі
                        </li>
                        <li>
                            Салові меблі
                        </li>
                        <li>
                            Меблі в стилі LOFT 
                        </li>
                        <li>
                            Комплексне рішення для готелів, ресторанів, офісів і тд
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <img src="img/6-min 2.png" alt="" class="imgContent3">
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row py-3 wow bounceInLeft cRowC2">
                <div class="col-2"></div>
                <div class="col-3">
                    <img src="img/5-min 1.png" alt="" class="imgContent4">
                </div>
                <div class="col-5 custom3">
                    <span class="text3 textRight"><b>Комплектація</b></span>
                    <img src="img/lineX.png" alt="" class="lineX4 posLineX">
                    <ul class="text-muted textSize1 ContentList4">
                        <li>
                            Шпалери
                        </li>
                        <li>
                            Текстиль
                        </li>
                        <li>
                            Декоративні штукатурки
                        </li>
                        <li>
                            Поліуретан
                        </li>
                        <li>
                            Освітлення (внутрішнє і зовнішнє)
                        </li>
                        <li>
                            Паркетна дошка
                        </li>
                    </ul>
                </div>
                
                <div class="col-2"></div>
            </div>
        </div>

        <!-- <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-tabs  justify-content-center">
                    <li class="active text-dark"><a href="#">Home</a></li>
                    <li class="text-dark"><a href="#">Menu 1</a></li>
                    <li class="text-dark"><a href="#">Menu 2</a></li>
                    <li class="text-dark"><a href="#">Menu 3</a></li>
                </ul>
            </div>

            <div class="row customMansory" data-masonry='{"percentPosition": true }'>
                <img class="masonre" src="img/m1.jpg" alt="">
                <img class="masonre" src="img/m2.jpg" alt="">
                <img class="masonre" src="img/m3.jpg" alt="">
                <img class="masonre" src="img/m4.jpg" alt="">
                <img class="masonre" src="img/m5.png" alt="">
                <img class="masonre" src="img/m6.jpg" alt="">
                <img class="masonre" src="img/m7.jpg" alt="">
            </div>
        </div> -->

        



        <div class="container m-5 h-100 customInfo">
            <h1>Наші клієнти</h1>
            <ul class="d-flex justify-content-center customListInfo">
                <li>Готельно ресторанний комплекс cruse de gustos</li>
                <li>Кав'ярня kimbo</li>
                <li>Ресторація хата багата</li>
                <li>Готель Тавель</li>
                <li>Заклади здорового харчування E2GO</li>
                <li>Паб кольт</li>                
                <li>Ресторан рів'єра</li>
            </ul>
        </div>

        <!-- maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d523.2309332214035!2d24.70537739551674!3d48.919514184321486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4730c11517dd609f%3A0x8421aaaa28e9bafa!2sShevchenka%20St%2C%206%2C%20Ivano-Frankivs&#39;k%2C%20Ivano-Frankivs&#39;ka%20oblast%2C%2076000!5e0!3m2!1spl!2sua!4v1626380298903!5m2!1spl!2sua" style="border:0;" allowfullscreen="" loading="lazy" class="customMap"></iframe>
        <div class="container-fluid customForm bg-dark text-white">
            <div class="row  bg-dark p-5 cForm2">
                <div class="col-4 bg-dark SizeBlock">
                    <span class="fSizeForm">+38(0342)71-24-59</span>
                    <span class="fSizeForm">+38(050)731-94-22</span>
                    <h1>Наші контакти</h1>
                    <span class="fSizeForm "><img src="img/MapMark.svg" class="MapIcon">ІВАНО-ФРАНКІВСЬК, ВУЛ. ШЕВЧЕНКА 6</span>
                </div>
                <div class="col-4 bg-dark">
                    <img src="img/logo.svg" class="logoForm" alt="">
                </div>
                <div class="col-4 bg-dark formInputs">
                    <input type="text" placeholder="Ім'я" name="name">
                    <input type="text" placeholder="Номер телефону" name="phone">
                    <input type="email" name="" id="" placeholder="Email" name="email">
                    <textarea cols="32" name="message" rows="5" class="mb-1" name="text"> Повідомлення
                    </textarea>
                    <input type="submit" value="Відправити">
                    <?php
                    
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['text'];
                    
                    $mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";
                    
                    $send = mail($email, $name, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
                    
                    if ($send == 'true') {echo "Сообщение отправлено";}
                    
                    else {echo "Ой, что-то пошло не так";}
                    ?>
                </div>
            </div>
        </div>
        <footer class="container-fluid d-flex justify-content-center h-10 align-items-center flex-column">
            <img src="img/logo2.png" class="footerLogo">
            <div class="footerText">
                <span>ArtLine &#169; 2019 Всі права захищені.</span>
                <span>Правила та обов'язки</span>
            </div>
        </footer>
    </section>
      <script src="js/main.js"></script>
      <script src="js/WOW.js"></script>
      
</body>
</html>
