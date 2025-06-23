<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iba's Buffet</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link rel="stylesheet" href="../style.css/style.css" />
    <link href="imagens/Logo.png.jpg" rel="shortcut icon">

</head>
<base href="http:/ibas_buffet/">
<a href="https://wa.me/5544999212043" class="whatsapp-float" target="_blank" title="Fale conosco no WhatsApp">
    <i class="fab fa-whatsapp me-1"></i>
</a>

<body>

<?php
$page = $_GET['page'] ?? 1;

switch ($page) {
  case 1:
    include 'paginas/catalogo/page1.php';
    break;
  case 2:
    include 'paginas/catalogo/page2.php';
    break;
  case 3:
    include 'paginas/catalogo/page3.php';
    break;
  case 4:
    include 'paginas/catalogo/page4.php';
    break;
  default:
    include 'paginas/404.php';
}
?>

    <header>
        <div class="container">
            <nav>
                <div class="nav-left">
                    <a href="index.php?pagina=home">Home</a>
                    <a href="paginas/contato.php?pagina=contato">Contato</a>
                </div>


                <img src="imagens/novo logo.jpg" width="160px" alt="ibas">


                <div class="nav-right">
                    <a href="index.php#sobre">Sobre</a>
                    <a href="paginas/catalogo.php?pagina=catalogo">Catálogo</a>
                </div>
            </nav>
        </div>
    </header>
    <div class="menu">
        <div class="dish">
            <img src="imagens/Tábua de frios .jpg" alt="tabua de frios">
            <div class="descricao">
                <h2>Mesa de Frios</h2>
                <p>Queijos</p>
                <ol>
                    <li>Parmesão</li>
                    <li>Provolone</li>
                    <li>Gouda </li>
                    <li>Nozinho</li>
                    <li>Gorgonzola</li>
                </ol>
            </div>
        </div>

        <div class="dish">
            <div class="descricao">

                <p>Embutidos.</p>
                <ol>
                    <li>Salame Italiano</li>
                    <li>Lombinho Defumado</li>
                    <li>Copa</li>
                    <li>Peito de Peru Defumado</li>
                </ol>
            </div>
            <img src="imagens/Queijo Brie .jpg" alt="Brie">
        </div>

        <div class="dish">
            <div class="descricao">
                <p>Complemento.</p>
                <ol>
                    <li>Azeitona Verde e Preta</li>
                    <li>Ovo de Codorna</li>
                    <li>Palmito</li>
                    <li>torradas</li>
                    <li>frutas</li>
                </ol>
            </div>
        </div>

        <div class="dish">
            <img src="imagens/Coquetel .jpg" alt="Coquetel">
            <div class="descricao">
                <h2>Ramequuins</h2>
                <p>(Assados)</p>
                <ol>
                    <li>Risoto</li>
                    <li>Batata Recheada</li>
                    <li>Escondidinho de Carne Seca</li>
                    <li>Penne</li>

                </ol>
            </div>
        </div>
        <div class="dish">
            <div class="descricao">
                <p>Finger Foods</p>
                <ol>
                    <li>Mini Quiche</li>
                    <li>Canapés de Pepino Quente</li>
                    <li>Canapés de Figo e Cream Cheease</li>
                    <li>Espetinhos de Frios</li>
                    <li>Espetinhos de Frango</li>
                    <li>Espetinhos de Peito de Peru a California</li>
                    <li>Pardúlas</li>
                    <li>Baguetes com Tomate e Parmesão</li>
                    <li>Tabletes Finas de Alho Poró</li>
                    <li>Pastel Assado de Lombo e Ameixa </li>
                    <li>Pastel Assado de Ricota e Tomate Seco </li>
                    <li>Pastel Assado de Chester com Abacaxi</li>
                    <li>Massa Wrap: Rúcula, Tomate Seco e Ricota</li>
                    <li>Baquetes: Peito de Peru, Gorgonzola e Frango</li>
                    <li>Empadinhas: Frango, Palmito, Bacalhau e Carne Seca</li>
                    <li>Croquete de Bacalhau</li>
                    <li>Empadão: Alho Poró, Frango, Palmito e Aspargos</li>
                </ol>
                <img src="imagens/ .jpg" alt="Coquetel">
            </div>
        </div>
        <div class="dish">
            <div class="descricao">
                <p>Salgados Fritos e Assados </p>
                <ol>
                    <li>Pastel de Vento</li>
                    <li>Coxinhas</li>
                    <li>Quibe</li>
                    <li>Risoles</li>
                    <li>Empadinhas</li>
                    <li>Esfiha</li>
                 </ol>
            </div>
        </div>

   <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="?pagina=catalogo&page=1">1</a>
</li>
    <li class="page-item"><a class="page-link" href="?pagina=catalogo&page=2">2</a>
</li>
    <li class="page-item"><a class="page-link" href="?pagina=catalogo&page=3">3</a>
</li>
<li class="page-item"><a class="page-link" href="?pagina=catalogo&page=4">4</a>
</li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<footer class="footer">
    <div class="container">

        <p>
            "Realizando as promessas de Deus". <br>
            (Hebreus 10:36)
        </p>
        <hr>
        <p>
            <a href="https://www.facebook.com/share/1AePV4BFf4/?mibextid=wwXIfr" title="Facebook">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/ibasbuffet?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="mailto:ibasbuffet@outlook.com?subject=contato pelo site&Olá, gostaria de mais informações."
                target="_blank">
                <i class="fas fa-envelope me-1"></i>
            </a>
        </p>
    </div>
</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>

</html>