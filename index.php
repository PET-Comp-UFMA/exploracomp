<?php
require_once('html_header.php');
require_once('header.php');
?>
<body>
<main id="main">
    <!--==========================
            Intro Section
        ============================-->


    <div id="carouselExampleControls" class="carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div id="intro" class="carousel-item active">
                <div class="intro-container wow fadeIn">
                    <h1 class="mb-4 pb-0">ExploraComp<br> Ciência da Computação<br>PETCOMP - UFMA<br> </h1>

                    <!-- <p class="mb-4 pb-0">Deseja participar?</p>
                    <a href="inscricoes.php" class="about-btn scrollto">Inscreva-se!!!</a> -->
                </div>
            </div>
            <div id="intro" class="carousel-item item-2">
                <div class="intro-container wow fadeIn">
                    <h1 class="mb-4 pb-0">ExploraComp<br> Ciência da Computação<br>PETCOMP - UFMA<br> </h1>
                    <p class="mb-4 pb-0">Está perdido?<br>Veja algumas dicas!</p>

                    <a href="https://www.youtube.com/watch?v=6jtOBIICfJc" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true"></a>
                </div>
            </div>
            <div id="intro-2" class="carousel-item item-2">
                <div class="intro-container wow fadeIn">
                    <h1 class="mb-4 pb-0">Se liga!!! <br>Conheça a UFMA </h1>
                    <p class="mb-4 pb-0">Assista o Vídeo!</p>

                    <a href="https://www.youtube.com/watch?v=N7WCivDB9XI" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true"></a>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden"></span>
            </a>
        </div>
    </div>

    <!--==========================
            About Section
        ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-lg-6">
                        <h2>Sobre o Evento</h2>
                        <p>O <strong>ExploraComp</strong> é uma ação promovida pelo <strong>PETComp - Programa de Educação Tutorial em Ciência da Computação da UFMA</strong>, voltada para estudantes do ensino médio, especialmente aqueles de baixa renda, que desejam conhecer de perto o universo da Computação.
                        Durante a atividade, os participantes exploram o curso por meio de oficinas, bate-papos com universitários, demonstrações tecnológicas e visitas guiadas, vivenciando na prática como é estudar na UFMA.
                        O objetivo é apresentar oportunidades de ingresso no ensino superior, inspirar trajetórias acadêmicas e aproximar jovens talentos da tecnologia e da inovação.
                        </p>
                    </div>
                </center>
            </div>
        </div>
    </section>

    <div class="section-header">
        <h2>Mais Sobre</h2>
    </div>

    <section id = "about-2">
        <div class="cards-about" id = "card-programacao">
            <a href="./programacao.php">
                <img src="img/programacao-card.png" alt="">
                <h3>PROGRAMAÇÃO</h3>
            </a>
        </div>

        <div class="cards-about">
            <a href="./localizacao.php">
                <img src="img/localizacao-card.png" alt="">
                <h3>LOCALIZAÇÃO</h3>
            </a>
        </div>

        <div class="cards-about">
            <a href="https://petcompufma.org/" target="_blank">
                <img src="img/petcomp-card.png" alt="">
                <h3>PETCOMP</h3>
            </a>
        </div>

        

    </section>

    <!--====================
            Organização
        ======================-->
    <section id="supporters" class="wow fadeInUp section-with-bg">

        <div class="container ">
            <div class="section-header">
                <h2>Organização</h2>
            </div>

            <div class="row no-gutters supporters-wrap clearfix">
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="https://portais.ufma.br/PortalUfma/index.jsf" target="_blank">
                            <img src="img/supporters/logo-ufma.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="http://www.deinf.ufma.br/" target="_blank">
                            <img src="img/supporters/3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="https://petcompufma.org/" target="_blank">
                            <img src="img/supporters/5.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>
</body>