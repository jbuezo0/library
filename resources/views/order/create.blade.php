<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body><br><br><br>
<div class="columns">

  <div class="column"></div>

  <div class="column">
    <input type="submit" value="Libros" class="button is-dark is-medium is-fullwidth is-rounded">
    <br>
    {{Session::get('books')}}
    <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
        <tr>
          <th>Libro</th>
          <th>Autor</th>
          <th> Disponibles</th>
          <th></th>
        </tr>

    @foreach($book as $book)

    <tr>
      <td>{{ $book->name }}</td>
      <td>{{ $book->autor }}</td>
      <td>{{ $book->available_copies }}</td>
      <td><a href="/add/{{ $book->id }}" class="button is-dark">Agregar Orde</a></td>
    </tr>

    @endforeach
    </table>


  </div>

    <div class="column"></div>

  </div>
  </body>
</html>
