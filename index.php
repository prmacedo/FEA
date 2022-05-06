<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>FEA Finance USP</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Hover CSS -->
  <link href="css/hover-min.css" rel="stylesheet">

  <!-- Meu CSS -->
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
  <header>
    <?php require_once './partials/navbar.php' ?>
  </header>

  <main>
    <div id="banner">
      <div class="content container">
        <h1 class="mt-4">
          Facilite e transforme as 
          finanças da sua empresa.
        </h1>

        <div>
          <a href="#" class="btn outline-white-primary-btn px-4 mt-4" target="_blank" rel="noopener noreferrer">Fale com um especialista</a>
        </div>
      </div>
    </div>

    <div id="solutions">
      <div class="container mb-5">
        <span id="title">Nossas soluções</span>
        <h2 class="mt-3">Conheça os serviços que vão aprimorar sua empresa</h2>
      </div>

      <div class="my-card-list container">
        <div id="my-card-1" class="my-card">
          <div class="my-card-front">
            <img src="./assets/img/precificacao.png" alt="Precificação de serviço">
            <div class="my-card-box">
              <span>Precificação de serviço</span>
              <img src="./assets/icon/arrow.svg" alt="Precificação de serviço">
            </div>
          </div>

          <div class="my-card-back">
            <h3>Precificação de serviço</h3>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar fazendo pose.Si num tem leite então</p>
            <a href="#" class="btn my-btn-gray" target="_blank" rel="noopener noreferrer">Saiba mais</a>
          </div>
        </div>

        <div id="my-card-2" class="my-card">
          <div class="my-card-front">
            <img src="./assets/img/viabilidade.png" alt="Viabilidade de projetos">
            <div class="my-card-box">
              <span>Viabilidade de projetos</span>
              <img src="./assets/icon/arrow.svg" alt="Viabilidade de projetos">
            </div>
          </div>

          <div class="my-card-back">
            <h3>Viabilidade de projetos</h3>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar fazendo pose.Si num tem leite então</p>
            <a href="#" class="btn my-btn-gray" target="_blank" rel="noopener noreferrer">Saiba mais</a>
          </div>
        </div>

        <div id="my-card-3" class="my-card">
          <div class="my-card-front">
            <img src="./assets/img/analise.png" alt="Análise Financeira">
            <div class="my-card-box">
              <span>Análise Financeira</span>
              <img src="./assets/icon/arrow.svg" alt="Análise Financeira">
            </div>
          </div>

          <div class="my-card-back">
            <h3>Análise Financeira</h3>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar fazendo pose.Si num tem leite então</p>
            <a href="#" class="btn my-btn-gray" target="_blank" rel="noopener noreferrer">Saiba mais</a>
          </div>
        </div>

        <div id="my-card-4" class="my-card">
          <div class="my-card-front">
            <img src="./assets/img/valuation.png" alt="Valuation Empresarial">
            <div class="my-card-box">
              <span>Valuation Empresarial</span>
              <img src="./assets/icon/arrow.svg" alt="Valuation Empresarial">
            </div>
          </div>

          <div class="my-card-back">
            <h3>Valuation Empresarial</h3>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar fazendo pose.Si num tem leite então</p>
            <a href="#" class="btn my-btn-gray" target="_blank" rel="noopener noreferrer">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  <script src="./js/scripts.js"></script>
</body>
</html>