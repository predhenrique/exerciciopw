<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <script src="{{url('assets/js/script.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>
<div class="container1">
    
  <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/">Exercicio PW 3</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <header>
    <div class="link-paginas">
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="/">
           <i class="fa fa-home"></i>
           Home
           <span class="sr-only">(current)</span>
           </a>
       </li>
     </ul>
     <ul class="navbar-nav ">
       <li class="nav-item">
         <a class="nav-link" href="/cliente">
           <i class="fa fa-link">
             <span class="badge badge-success"></span>
           </i>
           Cliente
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/pedido">
           <i class="fa fa-globe">
             <span class="badge badge-success"></span>
           </i>
           Pedido
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/produto">
           <i class="fa fa-link">
             <span class="badge badge-success"></span>
           </i>
           Produto
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/categoria">
           <i class="fa fa-globe">
             <span class="badge badge-success"></span>
           </i>
           Categoria
         </a>
       </li>
     </ul>
     <div class="formsearch">
     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
     </form>
    </div>
   </div>
    </div>
 </nav>
</header>
        @yield('content')
        <footer>
            <p>todos os direitos reservados.</p>
        </footer>
</body>
</html>