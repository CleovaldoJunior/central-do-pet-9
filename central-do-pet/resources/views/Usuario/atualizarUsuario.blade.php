<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Atualizar usuario</h1>
<form action="/atualizar/usuario" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$usuario->id}}">
    Nome: <input type="text" name="nome" />
    <br>
    Sexo: <input type="text" name="sexo" />
    <br>
    Contato: <input type="text" name="contato" />
    <br>
    Email: <input type="text" name="email">
    <br>
    Funcao: <input type="text" name="funcao">
    <br>
    Endereco: <input type="text" name="endereco" />
    <br>
    Data de nascimento: <input type="date" name="data_de_nascimento" />
    <br>
    Senha: <input type="password" name="senha" />
    <br>
    <input type="submit" value="atualizar" />
</form>
</body>
</html>