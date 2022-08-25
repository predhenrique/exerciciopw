@extends('templates.template')
@section('content')

    <body>
    <section class="pagina-cadastro">
    <h1>Cadastro de novo cliente</h1>

    <p>Por favor, preencha todos os campos para realizar o cadastro!</p>
    
    <br>
    <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Primeiro nome</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Segundo nome</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Insira o e-mail" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Por favor insira um e-mail válido.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Cidade</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
      <div class="invalid-feedback">
        Por favor digite uma cidade.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Estado</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
      <div class="invalid-feedback">
        Por favor digite um estado.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">CEP</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
      <div class="invalid-feedback">
        Por favor digite um CEP válido.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Aceito os termos e condições.
      </label>
      <div class="invalid-feedback">
        Você deve concordar antes de enviar.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
<br>
<section>
<div style="overflow-x:auto;">
<table border="1">
<thead>
<tr><th colspan="6">Clientes</th></tr>
<th>Nome</th>
<th>Sobrenome</th>
<th>E-mail</th>
<th>Cidade</th>
<th>Estado</th>
<th>CEP</th>
</thead>
<tr>
<td>Ana Maria</td>
<td>da Silva</td>
<td>anamaria@email.com</td>
<td>São Paulo</td>
<td>SP</td>
<td>042589-855</td>
</tr>
<tr>
<td>Paulo</td>
<td>Henrique</td>
<td>paulo@email.com</td>
<td>São Paulo</td>
<td>SP</td>
<td>04265-847</td>
</tr>
</table>
</div>
</section>
</body>

@endsection  