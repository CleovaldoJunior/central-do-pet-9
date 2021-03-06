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
    <h1>Consultar Pet<img src="https://img.icons8.com/ios-glyphs/30/000000/virus.png"/></h1>
    <p class="lead">Consultar RGA de pet do sistema</p>

</div>
<div class='container'>
    <form action="/consultar" method="post">
        {{ csrf_field() }}
        @if($flag == false)
            <script type='text/javascript'>alert('Pet não encontrado');</script>
        @endif
        <div class="form-group">
            <label for="rga"> RGA:</label>
            <input type="text" class="form-control" name="rga" />
        </div>
        <input type="submit" class="btn btn-primary" value="Consultar" />
    </form>
</div>
</body>
</html>
