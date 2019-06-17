<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->

    <title>Security Group</title>

    <!-- common css -->
    <link rel="stylesheet" href="/css/front.css">

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">

</head>

<body>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="/">Главная</a></li>
                    <li><a href="about-me.html">Обо мне</a></li>
                    <li><a href="contact.html">Контакты</a></li>
                </ul>

                <ul class="nav navbar-nav text-uppercase pull-right">
                @if(Auth::check())
                    <li><a href="/profile">Мой профиль</a></li>
                    <li><a href="/logout">Выйти</a></li>
                @else
                    <li><a href="/register">Регистрация</a></li>
                    <li><a href="/login">Вход</a></li>
                @endif
                    
                </ul>

            </div>
            <!-- /.navbar-collapse -->


            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               @if(session('status'))
                    <div class="alert alert-info">
                        {{session('status')}}
                    </div>
                @endif
           </div>
       </div>
   </div>
	@yield('content')

<!--footer start-->
<div id="footer">
    <div class="footer-instagram-section">
        <h3 class="footer-instagram-title text-center text-uppercase">Instagram</h3>

        <div id="footer-instagram" class="owl-carousel">

            <div class="item">
                <a href="#"><img src="/images/ins-1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-4.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-6.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-7.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-8.jpg" alt=""></a>
            </div>

        </div>
    </div>
</div>

<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/images/footer-logo.png" alt=""></div>
                    <div class="about-content">КТО МЫ?
RT Security Group - проект RT Services Limited, международной компании, предоставляющей услуги в сфере интернет-безопасности.
Основное направление деятельности RT Services Limited - разработка программного обеспечения и информационно-обучающих материалов в сфере IT-безопасности.

                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">Контактная информация</h4>

                        <p> Belarus , Minsk</p>

                        <p> Phone: </p>

                        <p>rtemirov1998@gmail.com</p>
                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">О Нас</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>ПОЧЕМУ МЫ?
Мы предлагаем уникальные решения в сфере информационной безопасности, эффективных аналогов которым на рынке нет.

Помимо уникальных решений мы предлагаем качественные информационные продукты, осознавая невозможность достижения высокого уровня анонимности и безопасности в сети одними программными решениями.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Katya</h4>

                                            <h4>Программист</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>НАШ КЛЮЧ К УСПЕХУ
Мы делаем упор на комплексный подход, включающий:
качественные знания в вопросах безопасности и анонимности в сети,
индивидуальные решения в виде персональных VPN- и proxy-серверов, необходимые для комплексной защиты данных программы.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Diana</h4>

                                            <h4>Ассистент</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>КТО МЫ?
RT Security Group - проект RT Services Limited, международной компании, предоставляющей услуги в сфере интернет-безопасности.
Основное направление деятельности RT Services Limited - разработка программного обеспечения и информационно-обучающих материалов в сфере IT-безопасности.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>Менеджер</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Напишите нам</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase"></a>
                            <span class="p-date"></span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2019 <a href="#">Blog, </a> Designed with <i
                            class="fa fa-heart"></i> by <a href="#">Rustam and Utkir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- js files -->
<script src="/js/front.js"></script>
</body>
</html>