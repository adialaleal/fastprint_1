@extends('template.default')
@section('content')
<!-- Início Modal -->
<div class="modal-content" style="padding-top: 80px;">
    <!-- Modal Header -->
    <div class="modal-header" id="tituloModal">
     <h4 class="modal-title" id="myModalLabel" align="center">
      <strong>Formulário de Impressão</strong>
    </h4>
  </div>
  <!-- Modal Body -->
  <div class="modal-body" id="CorpoModal">

    <form class="form-horizontal" role="form" method="post" id="PrintForm" action="/add">
      
      <div class="form-group">
        <label class="col-sm-2 control-label" for="inputNome">Nome</label>
        <div class="col-sm-4"><input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="José Alencar" class="in-line">
        </div>
        <label class="col-sm-2 control-label"
        for="inputSetor">Setor</label>  
        <div class="col-sm-4"><input type="text" class="form-control" id="inputNome" name="inputSetor" placeholder="UniSabin" class="in-line">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="inputRamal">Ramal</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" 
          id="inputRamal" name="inputRamal" placeholder="XXXX" maxlength="4" required/>
        </div>
        <label class="col-sm-2 control-label"
        for="inputEmail3">Email</label>
        <div class="col-sm-6">
          <input type="email" class="form-control"
          id="inputEmail3" name="inputEmail3" placeholder="exemplo@email.com.br" required />

        </div>
      </div>
      <div>
        <h4 class="modal-subtitle" id="myModalLabel" align="text-center">
          <strong>Especificações da Impressão</strong>
        </h4>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"
        for="inputFile">Arquivo</label>
        <div class="col-sm-10">
          <input type="file" class="form-control"
          id="inputFile" name="inputFile" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"
        for="inputCopias">Cópias</label>
        <div class="col-sm-2">
          <input type="text" class="form-control"
          id="inputCopias" name="inputCopias" maxlength="3" required>
        </div>
        <label class="col-sm-2 control-label"
        for="inputPapel">Papel</label>
        <div class="col-sm-4">
          <select class="form-control" id="inputPapel" name="inputPapel" required>
            <option>Comum</option>
            <option>Reciclado</option>
            <option>Alta Gramatura 90g/m²</option>
            <option>Alta Gramatura 115g/m²</option>
            <option>Alta Gramatura 150g/m²</option>
            <option>Alta Gramatura 210g/m²</option>
            <option>Alta Gramatura 240g/m²</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"
        for="inputCor">Colorido</label>
        <div class="col-sm-2">
          <select class="form-control" id="inputCor" name="inputCor" required>
            <option>Sim</option>
            <option>Não</option>
          </select>
        </div>
        <label class="col-sm-2 control-label"
        for="inputAcabamento">Acabamento</label>
        <div class="col-sm-4">
          <select class="form-control" name="inputAcabamento" id="inputAcabamento" required>
            <option>1 Face</option>
            <option>2 Faces</option>
            <option>2 Faces - Borda Curta</option>
            <option>Livreto</option>
            <option>Múltiplo 2/1</option>
            <option>Múltiplo 4/1</option>
          </select>
        </div>
      </div>
      <div>
        <h4 class="modal-subtitle" id="myModalLabel" align="text-center">
          <strong>Observações da Impressão</strong>
        </h4>
      </div>
      <div class="form-group">
        <div class="col-lg-12" align="justify">
          <textarea cols="30" rows="5" class="txtarea col-sm-12" name="inputObs" id="inputObs" maxlength="280" placeholder="Insira aqui demais observações sobre a impressão..."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"
        data-dismiss="modal">
        Fechar
      </button>
      <button type="submit" class="btn btn-success">ENVIAR</button>
    </div>
  </form>
</div>
<!-- Modal Footer -->
</div>

<!-- Fim Modal -->
@stop