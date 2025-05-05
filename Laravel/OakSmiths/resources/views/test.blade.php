<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OakSmiths</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>


<header>
    <div class="logo">
    <img src="{{ asset('/storage/img/logo1.png')}}" />
    </div>
    <nav>
      <ul>
        <li><a href="#">Início</a></li>
        <li><a href="#">Quem Somos</a></li>
        <li><a href="#">Propriedades</a></li>
        <li><a href="#">Cadastrar</a></li>
        <li><a href="#">Entrar</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="texto-hero">
      <h1>OAK SMITHS</h1>
      <br><br>
      <h2>Timeless woodwork - Marcenaria que atravessa gerações.</h2>
      <br>
      <p>
        Na OakSmiths, cada móvel é criado para durar, carregando consigo tradição, autenticidade e 
        um design pensado para permanecer atual com o passar dos anos. 
        Unimos técnicas artesanais e inovação para entregar peças que contam histórias e acompanham gerações.
      </p>
    </div>
  </section>
  
  <section class="sobre">
    <h2>Sobre a empresa</h2>
    <div class="conteudo-sobre">
    <img src="{{ asset('/storage/img/mesa.rustica.png')}}" />
      <p>
        Nós somos uma loja online especializada em móveis planejados sob medida, com foco na personalização, qualidade e design diferenciado. A Oak Smiths tem como propósito, oferecer uma experiência prática e acolhedora, onde os clientes podem entrar em contato diretamente conosco, descrever seus critérios e preferências, e receber soluções exclusivas em marcenaria. Unimos o cuidado artesanal à comodidade digital para criar peças únicas que valorizam cada ambiente.
    </div>
  </section>

  <script src="script.js"></script>

</body>
</html>