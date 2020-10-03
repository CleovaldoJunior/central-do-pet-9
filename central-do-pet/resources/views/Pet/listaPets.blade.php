<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
  <h1>Listar Pets</h1>
    <table border='1'>
      @foreach ($pets as $pet)
        <tr>
          <td><a href=' /view/pet/{{$pet->id}}'>{{$pet->id}}</a></td>
          <td>{{ $pet->rga }}</td>
          <td>{{ $pet->nome }}</td>
          @if($auth ?? '')
            <td>
                <a href='/editar/pet/{{ $pet->id }}'>Editar</a>
                <a href='/remover/pet/{{ $pet->id }}'>Remover</a>
            </td>
          @endif
        </tr>
      @endforeach
    </table>
    <a href="/adicionar/pet">Inserir Nova</a>
  </body>
</html>
