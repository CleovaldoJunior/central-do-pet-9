<html>
<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Nav bar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #E14B56;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listar/pets">Adotar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/consultar">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listar/funcionarios">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ajuda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
    </div>
</nav>
</head>

<body>
  <div class='jumbotron'>

  <h1>Cadastrar vacina <img src="https://img.icons8.com/android/24/000000/syringe.png"/></h1>
  <p class="lead">Cadastro geral de vacinas do sistema</p>

  </div>
<div class='container'>
    @if(trim(Auth::user()->funcao) != trim("Administrador") and trim(Auth::user()->funcao) != trim("Médico Veterinário"))
        <script type="text/javascript">
            window.location = "/paineladm";
        </script>
    @endif
    <form action="/adicionar/vacina" method="post">
      {{ csrf_field() }}

      <div class="form-group">
      <label for="historico_id">ID do histórico:</label>
      <input type="text" class="form-control" name="historico_id" />
      </div>

      <div class="form-group">
      <label for="vacina">Vacina</label>
      <input type="text" class="form-control" name="vacina" />
      </div>

      <div class="form-group">
      <label for="data">Data:</label>
      <input type="date" class="form-control" name="data" />
      </div>

      <input type="submit" class="btn btn-primary" value="Cadastrar" />

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <script type='text/javascript'>alert('{{ $error }}');</script>
                  @endforeach
              </ul>
          </div>
      @endif
    </form>
  </div>
  </body>
</html>
