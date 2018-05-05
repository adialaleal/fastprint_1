@extends('template.default')
@section('content')
<header>
  <div class="header-content">
    <div class="header-content-inner">
      <img src="/img/world.svg" width="28%"/>
    </div>
    <a href="#about" class="btn btn-primary btn-xl page-scroll">Confira</a>
  </div>
</header>
<section class="bg-primary" id="about" align="center">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-heading">Descomplicamos!</h2>
        <hr class="light">
        <p class="text-faded">Você quer imprimir, mas não sabe como configurar suas impressões, ou se perde em meio a tantas opções? Fique tranquilo, nós trouxemos até você esta solução onde tudo se tornou mais fácil!</p>
      </div>
      </div>
    </div>
    <aside class="bg-dark">
  <div class="container text-center">
    <!-- Botão que chama o Modal --> 
    <div class="call-to-action">
      <h2>Comece a imprimir agora mesmo!</h2>
      <!-- Button trigger modal -->
      <button class="btn btn-primary btn-lg" onclick="location.href='{{url('form')}}'">Imprimir</button>
    </div>
    <!-- Termino do botão -->
  </div>
</aside>
</section>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Estamos sempre por perto!</h2>
        <hr class="primary">
        <p>Surgiu alguma dúvida? Não sabe bem o que fazer? Estamos sempre prontos e preparados para te atender!</p>
      </div>
      <div class="col-lg-6 text-center">
        <i class="fa fa-phone fa-3x sr-contact"></i>
        <p>Ramal: 8156</p>
      </div>
      <div class="col-lg-6 text-center">
        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
        <p><a href="mailto:impressoes@wdbsb.com.br">Mande nos seu email</a></p>
      </div>
    </div>
  </div>
</section>


<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Script para troca de informação dentro do Modal -->
<script type="text/javascript">
  function sendForm(idFormulario, pagina, divAlvo) {
    $.ajax({
      url:pagina,
      type: "post",
      data: $("#"+idFormulario).serialize(),
      dataType: 'html',
      beforeSend: function() {
        /*console.log('Before send Ajax...'); */
      },
      afterSend: function() {
        console.log('After send Ajax...');
      },
      success: function(d, textStatus, xhr) {
        /*if (isEmpty(d)) */
        console.log('Conteúdo com '+d.length+' caracteres.');
        $("#"+divAlvo).html(d);
        /*console.log('Ajax success!');*/
      },
      error: function(xhr, textStatus, errorThrown) {
        console.log(divAlvo+': '+textStatus);
      },
    });
  }
  function processaFormulario() {
    sendForm('PrintForm','input.php', 'CorpoModal');
    sendForm('','tituloModal.php', 'tituloModal');
    return false;
  }
</script>

@stop
