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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
        <span class="title">Nossas soluções</span>
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

    <div id="why-us">
      <div class="my-container">
        <div class="left-side">
          <img src="./assets/img/why-us.png" alt="Por que nos escolher">
          <div class="blue-boxes">
            <div class="big-box"></div>
            <div class="small-box"></div>
          </div>     
        </div>

        <div class="content">
          <span class="title">Por que nos escolher</span>

          <h2>Consultoria financeira que gera resultado.</h2>

          <p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Si num tem leite então bota uma pinga aí cumpadi!Não sou faixa preta cumpadi, sou preto inteiris, inteiris.Atirei o pau no gatis, per gatis num morreus.</p>

          <ul>
            <li>
              <span><i data-feather="arrow-right"></i></span>
              <span>Benefício 1</span>
            </li>
            <li>
              <span><i data-feather="arrow-right"></i></span>
              <span>Benefício 2</span>
            </li>
            <li>
              <span><i data-feather="arrow-right"></i></span>
              <span>Benefício 3</span>
            </li>
          </ul>

          <a href="#" class="btn btn-primary-blue" target="_blank" rel="noopener noreferrer">Conheça nossas soluções</a>
        </div>
      </div>
    </div>

    <div id="banner-2">
      <div class="container">
        <p class="text-center m-auto">Nossa missão é proteger e auxiliar sua empresa nos melhores resultados</p>

        <div class="text-center mt-5">
          <a href="#" class="btn btn-primary-blue" target="_blank" rel="noopener noreferrer">Agendar uma conversa</a>
        </div>
      </div>
    </div>

    <div id="blog">
      <div class="container">
        <div class="text-center">
          <span class="title">Nosso blog</span>
        </div>

        <h2 class="text-center mt-3 mb-5">Alguns dos nossos conteúdos</h2>

        <div class="grid-container">
          <div id="card-1" class="card">
            <img src="./assets/img/blog-img.png" class="card-img-top" alt="Imagem do Blog">
            <div class="card-body">
              <p class="card-text">Mussum Ipsum cacilds vidis</p>
              <div class="my-card-footer">
                <div>
                  <i data-feather="clock"></i>
                  <span>20 Out, 2022</span>
                </div>
                <div>
                  <i data-feather="user"></i>
                  <span>FEA Finance</span>
                </div>
              </div>
            </div>
          </div>

          <div id="card-2" class="card">
            <img src="./assets/img/blog-img.png" class="card-img-top" alt="Imagem do Blog">
            <div class="card-body">
              <p class="card-text">Mussum Ipsum cacilds vidis</p>
              <div class="my-card-footer">
                <div>
                  <i data-feather="clock"></i>
                  <span>20 Out, 2022</span>
                </div>
                <div>
                  <i data-feather="user"></i>
                  <span>FEA Finance</span>
                </div>
              </div>
            </div>
          </div>

          <div id="card-3" class="card">
            <img src="./assets/img/blog-img.png" class="card-img-top" alt="Imagem do Blog">
            <div class="card-body">
              <p class="card-text">Mussum Ipsum cacilds vidis</p>
              <div class="my-card-footer">
                <div>
                  <i data-feather="clock"></i>
                  <span>20 Out, 2022</span>
                </div>
                <div>
                  <i data-feather="user"></i>
                  <span>FEA Finance</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="left-footer">
        <p>Endereço</p>
        <p id="address">Av. Professor Luciano Gualberto, 908 – Butantã – São Paulo – SP-  05508-010</p>

        <div id="social">
          <span><a href="https://instagram.com/feafinance?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener noreferrer"><i data-feather="instagram"></a></i></span>
          <span><a href="https://m.facebook.com/FeaFinance" target="_blank" rel="noopener noreferrer"><i data-feather="facebook"></a></i></span>
          <span><a href="https://youtube.com/channel/UC2wvCceuqHxOJQbMiHlwBvw" target="_blank" rel="noopener noreferrer"><i data-feather="youtube"></a></i></span>
        </div>
      </div>

      <div class="right-side">
        <p>Conheça mais do setor financeiro acompanhando nossa newsletter</p>

        <div class="d-flex align-items-center">
          <form class="d-flex" action="" method="post">
            <input type="email" name="email" id="email" placeholder="Seu melhor e-mail..." />
            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <span id="solvum">Copyright © 2022 Todos os direitos reservados | Site produzido com <i data-feather="heart"></i> por Solvum </span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
  <script src="./js/scripts.js"></script>
</body>
</html>