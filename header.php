<!DOCTYPE html>
<html lang="pt-br">


<head>


    <link rel="stylesheet" type="text/css" media="all" href='assets/style.css'>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/css/uikit.min.css" />


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit-icons.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página</title>
</head>

<body>

    <header>
        <div class="cabec">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-1-2" style="text-align: left;">
                        (99) 9999-9999
                    </div>

                    <div class="uk-width-1-2" style="text-align: right;">
                        <img src="assets/imagens/facebook.png" width="30px;" alt="Descrição da imagem">
                        <img src="assets/imagens/instagram.png" width="30px;" alt="Descrição da imagem">
                    </div>

                </div>
            </div>

        </div>
    </header>
<div class="menu ">
    <div class="uk-container ">
        <br>

        <div class="uk-hidden-touch " uk-grid>

            <div class="uk-width-1-4" style="text-align: left;">
                <a href="index.php">
                    <img src="assets/imagens/logoquack.png" width="150px" alt="Descrição da imagem">
                </a>
                <br><br>
            </div>

            <div class="uk-width-3-4">
                <br>
                <nav uk-dropnav="align: right">
                    <ul class="uk-subnav uk-flex-right">
                        <li class="uk-active"><a href="planos.php">
                                <h1 class="itemMenu"> PLANOS </h1>
                            </a></li>

                        </li>
                        <!--
                    <li>
                        <a href>Parent <span uk-drop-parent-icon></span></a>
                        <div class="uk-dropdown">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li> -->
                        <li><a href="sobrenos.php">
                                <h1 class="itemMenu"> SOBRE NÓS </h1>
                            </a></li>
                        <li><a href="contato.php">
                                <h1 class="itemMenu"> CONTATO </h1>
                            </a></li>
                        <li><a href="faq.php">
                                <h1 class="itemMenu"> FAQ </h1>
                            </a></li>
                    </ul>
                </nav>
            </div>


        </div>

        <div class="uk-hidden-notouch">
            <div class="uk-child-width-1-2" uk-grid>

                <div style="margin-top: 10px;">



                    <a href="#offcanvas-usage" uk-toggle><span style="color: black;" uk-icon="icon: menu; ratio: 2"></span></a>

                    <div style="background-color: white !important;" id="offcanvas-usage" uk-offcanvas>
                        <div style="background-color: white !important;" class="uk-offcanvas-bar">

                            <button style="color: black;" class="uk-offcanvas-close" type="button" uk-close></button>

                            <div style="color: black;">
                                <h3 style="color: black;"><b>MENU</b></h3>
                                <a style="color: black;" href="index.php">HOME </a> <br><br>
                                <a style="color: black;" href="planos.php">PLANOS </a><br><br>
                                <a style="color: black;" href="sobrenos.php">SOBRE NÓS </a><br><br>
                                <a style="color: black;" href="contato.php">CONTATO </a><br><br>
                                <a style="color: black;" href="faq.php">FAQ </a><br><br>
                            </div>

                        </div>
                    </div>

                </div>

                <div>

                    <div style="text-align: right;">
                        <a href="index.php">
                            <img src="assets/imagens/logoquack.png" width="130px" alt="Descrição da imagem">
                        </a>
                    </div>
                </div>


            </div>

            <br>

        </div>


    </div>
</div>