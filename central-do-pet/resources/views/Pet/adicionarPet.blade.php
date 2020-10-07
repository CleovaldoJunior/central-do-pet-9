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
          <a class="nav-link" href="#">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Equipe</a>
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

  <h1>Cadastrar pet <img src="https://img.icons8.com/ios-glyphs/30/000000/hachiko.png"/></h1>
  <p class="lead">Cadastro geral dos pets do sistema</p>

  </div>
<div class='container'>

    <form action="/adicionar/pet" method="post">
      {{ csrf_field() }}

      <div class="form-group">
      <label for="contato">Nome:</label>
      <input type="text" class="form-control" name="nome" />
      </div>

      <div class="form-group">
      <label for="sexo">Sexo:</label>
      <select class="form-control" name="sexo">
                <option value="Macho">Macho</option>
                <option value="Femea">Femea</option>
            </select>
      </div>

      <div class="form-group">
      <label for="sexo">Castrado:</label>
      <select class="form-control" name="sexo">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
      </div>

      <div class="form-group">
      <label for="contato">Necessidades Especiais:</label>
      <input type="text" class="form-control" name="necessidades_especiais" />
      </div>

      <div class="form-group">
      <label for="data_de_nascimento">Data de nascimento:</label>
      <input type="date" class="form-control" name="data_de_nascimento" />
      </div>

      <div class="form-group">
      <label for="contato">ID do Dono:</label>
      <input type="text" class="form-control" name="dono_id" />
      </div>

      <input type="submit" class="btn btn-primary" value="Cadastrar" />

        @error('nome')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
        @error('sexo')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
        @error('castrado')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
        @error('data_de_nascimento')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
      <br>
    </form>
  </div>
  </body>
</html>
