<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTAURANTE DONA RITA</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <font color="#ff0000" size="6">
        <p>RESTAURANTE DONA RITA</p>
        </font>
        
        
    </header>
    <nav>
        <ul>
            <li>
                <a href="#"><font color="#ff0000">Home</font></a>
            </li>
            <li>
                <a href="#"><font color="#ff0000">Quem somos</font></a>
            </li>
            <li>
                <a href="#"><font color="#ff0000">Contato</font></a>    
            </li>
            
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>
    </div>
    <footer >
    <font color="whrite">
        <p class="rodape">RESTAURANTE DONA RITA<br><br>
        <a href="#">www.Restaurantedonarita.com.br</a> <br>
        Fone: (44) 6666-6666 <br>
        Endereço: Rua Xv de Novembro nº00   <br>
    <div align="center" >
        <p>  RENAN LEUTNER  | RA: 22200684-5 | Curso: SISTEMAS PARA INTERNET</p>
    </div>
    </font>
    </footer>
</body>
</html>