@extends('templates.template')
@section('content')

<body>
    <section class="abaproduto">
    <div class= "abaproduto1">
    <h1>Produto</h1>
    <br>
    <form action="#">
      <label for="lname">Produto</label><br>
        <input class="form-control" type="text" placeholder="insira o produto"><br>
      <label for="lname">Categoria</label><br>
        <input class="form-control" type="text" placeholder="insira a categoria"><br>
      <label for="lname">Valor</label><br>
        <input class="form-control" type="text" placeholder="valor"><br>
        <button type="button" class="btn btn-primary">Enviar</button>
    </form> 
    <br><br>
    <br>
    <h1>Estoque</h1>
    <br>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Categoria</th>
        <th>Valor</th>
    </tr>
    @foreach($produtos as $pro)
  <tr>
    <td>{{$pro->idProduto}}</td>
    <td>{{$pro->produto}}</td>
    <td>{{$pro->categoria}}<</td>
    <td>{{$pro->valor}}<</td>
  </tr>
    @endforeach
    </table>
    </div>
    </section>

</body>

@endsection  