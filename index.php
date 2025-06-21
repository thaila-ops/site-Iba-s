
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iba's Buffet</title>
<base href="http:/ibas_buffet/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <link rel="stylesheet" href="style2.css/style2.css">
  <link href="imagens/Logo.png.jpg" rel="shortcut icon">

</head>

<body>
  <header>
    <div class="container">
      <nav>
        <div class="nav-left">
          <a href="index.php?pagina=home">Home</a>
          <a href="paginas/contato.php?pagina=contato">Contato</a>
        </div>

        
        <img src="imagens/novo logo.jpg" width="160px" alt="ibas">
        

        <div class="nav-right">
          <a href="#sobre">Sobre</a>
          <a href="paginas/catalogo.php?pagina=catalogo">Catálogo</a>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <?php
    //recuperar a variavel
    $pagina = $_GET["pagina"] ?? "home";
    $pagina = "paginas/{$pagina}.php";
    //se a pagina existe
    if (file_exists($pagina)){
      include $pagina;
    }
    else {
      include "paginas/404.php";
    }
    ?>
  </main>

  <section class="banner">
    <div class="banner-content">

      <h1>
        Experiência gastronômica<br> no conforto da sua casa</h1>

      </p>
      Iba's Buffet garante serviços de alta qualidade <br> para eventos em casa com seu toque personalizado.

      </p>

      <div class="btn">
        <a href="paginas/catalogo.php?pagina=catalogo" class="test">Ver Catálogo</a>
      </div>

    </div>


  </section>
  <br>
  <br>
  <hr>
  <main>
    <h2>Sobre nós</h2>
    <div class="texto">
    <p><strong>No Iba’s Buffet</strong>, acreditamos que experiências gastronômicas marcantes podem — e devem —
      acontecer no aconchego do
      seu lar. Nossa proposta vai além de servir pratos refinados: queremos transformar momentos simples em celebrações
      memoráveis.

      Com um toque de sofisticação e cuidado em cada detalhe, levamos até você a alta gastronomia em um formato
      intimista, personalizado e acolhedor. Da seleção dos ingredientes ao atendimento dedicado, tudo é pensado para
      proporcionar uma vivência única, onde o sabor encontra o carinho de um ambiente familiar.

      Cozinhamos com alma, servimos com amor — porque para nós, estar em casa nunca foi tão especial.</p>
    </div>
    <br>
    <hr>
    <br>

    <section class="produtos">
      <div class="grid-produtos">
        <a href="#coquetel" class="produto">
          <img src="imagens/taboa de frios.jpeg" width="140px" alt="coquetel">
          <h3>Coquetel</h3>
        </a>
        <a href="#sobremesas" class="produto">
          <img src="imagens/prato sobremesa.jpeg" width="140px" alt="sobremesas">
          <h3>Doces e sobremesas</h3>
        </a>
        <a href="#jantar" class="produto">
          <img src="imagens/jantar.jpeg" width="140px" alt="jantar">
          <h3>Jantares</h3>
        </a>
        <a href="#arabe" class="produto">
          <img src="imagens/arabe.jpeg" width="140px" alt="arabe">
          <h3>Comida Árabe</h3>
        </a>
      </div>
    </section>
  </main>

 
  <section id="sobre" class="biografia">
    <div class="bio-box">
      <div class="bio-grid">
        <div class="bio-img">
        <img class= "img-perfil" src="imagens/Claudia .jpg" height="auto" alt="claudia viana iba">
        </div>
        <div class="bio-texto">
          <h2>Claudia viana Iba</h2>
          <p>
            Fundadora do Iba’s Buffet, uma mulher guiada por Deus e movida pelo amor à família. Com
            carinho e dedicação, ela transforma cada evento em um momento de cuidado, sabor e acolhimento. Porque para
            ela, cozinhar é servir com o coração — e servir é um ato de fé e amor.
          </p>

        </div>
      </div>
    </div>
  </section>
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
         <a href="mailto:ibasbuffet@outlook.com?subject=contato pelo site&Olá, gostaria de mais informações." target="_blank" >
          <i class="fas fa-envelope me-1"></i> 
        </a>
      </p>
    </div>
  </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</html>