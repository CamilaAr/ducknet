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
                        <img src="caminho/para/sua/imagem.jpg" alt="Descrição da imagem">
                        <img src="caminho/para/sua/imagem.jpg" alt="Descrição da imagem">
                    </div>

                </div>
            </div>

        </div>
    </header>
    <div class="uk-container">
        <br>

        <div uk-grid>

            <div class="uk-width-1-4" style="text-align: left;">
                <img src="caminho/para/sua/imagem.jpg" alt="Descrição da imagem">

            </div>

            <div class="uk-width-3-4">
                <nav uk-dropnav="align: right">
                    <ul class="uk-subnav uk-flex-right">
                        <li class="uk-active"><a href="#">
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
                        <li><a href="#">
                                <h1 class="itemMenu"> SOBRE NÓS </h1>
                            </a></li>
                        <li><a href="#">
                                <h1 class="itemMenu"> CONTATO </h1>
                            </a></li>
                        <li><a href="#">
                                <h1 class="itemMenu"> FAQ </h1>
                            </a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>