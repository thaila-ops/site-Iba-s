<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $email = $_POST['email'] ?? '';
    $qtdpessoas = $_POST['qtdpessoas'] ?? '';
    $local = $_POST['local'] ?? '';
    $tipo_evento = $_POST['tipo_evento'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $conteudo = "==== NOVO ORÇAMENTO ====\n";
    $conteudo .= "Nome: $nome\n";
    $conteudo .= "Telefone: $telefone\n";
    $conteudo .= "Email: $email\n";
    $conteudo .= "Convidados: $qtdpessoas\n";
    $conteudo .= "Local: $local\n";
    $conteudo .= "Tipo de Evento: $tipo_evento\n";
    $conteudo .= "Mensagem: $mensagem\n";
    $conteudo .= "-------------------------\n";

    file_put_contents("orcamentos.txt", $conteudo, FILE_APPEND);

    echo "<script>alert('Orçamento enviado com sucesso!');</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iba's Buffet</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css/style.css" />
  <link rel="shortcut icon" href="imagens/Logo.png.jpg" />
</head>

<body>
  <header>
    <div class="container">
      <nav>
        <div class="nav-left">
          <a href="#">Home</a>
          <a href="#">Contato</a>
        </div>
        <img src="imagens/novo logo.jpg" width="160px" alt="ibas" />
        <div class="nav-right">
          <a href="#">Sobre</a>
          <a href="#">Catálogo</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="container my-5">
    <section class="paragrafo">
      <h1>Iba´s Buffet</h1>
      <h2>Receba nosso carinho e cuidado desde o primeiro contato!</h2>
      <p>Acolher você é um presente. Estamos prontos para ouvir, sonhar e servir ao seu lado</p>
      <blockquote>
        "Tudo que fizerem, faça de todo o coração, como para o Senhor, e não para os homens." <br />
        – Colossens 3:23
      </blockquote>
    </section>

    <h3 class="mt-5">Entre em contato conosco</h3>

<form class="row g-3 needs-validation" method="POST" novalidate>
>


    <form class="row g-3" method="POST" action="">
      <div class="col-md-4">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nome" required />
      </div>

      <div class="col-md-4">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" name="telefone" class="form-control" id="telefone" required />
      </div>

      <div class="col-md-4">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" required />
      </div>

      <div class="col-md-3">
        <label for="qtdpessoas" class="form-label">Convidados</label>
        <select name="qtdpessoas" class="form-select" required>
          <option value="">Selecione</option>
          <option value="20 a 50 pessoas">20 a 50</option>
          <option value="50 a 100 pessoas">50 a 100</option>
          <option value="100 a 200 pessoas">100 a 200</option>
          <option value="200 a 300 pessoas">200 a 300</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="local" class="form-label">Local do Evento</label>
        <input type="text" name="local" class="form-control" id="local" required />
      </div>

      <div class="col-md-3">
        <label class="form-label">Tipo de Evento</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="Casamento" id="casamento" required />
          <label class="form-check-label" for="casamento">Casamento</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="Aniversário" id="aniversario" />
          <label class="form-check-label" for="aniversario">Aniversário</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="Corporativo" id="corporativo" />
          <label class="form-check-label" for="corporativo">Corporativo</label>
        </div>
      </div>

      <div class="col-12">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea name="mensagem" class="form-control" id="mensagem" rows="3" required></textarea>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar Orçamento</button>
      </div>
    </form>
  </main>

  <footer class="footer text-center py-4">
    <div class="container">
      <p>"Realizando as promessas de Deus". (Hebreus 10:36)</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
