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
    <input type="submit" value="Libros" class="button is-primary is-medium is-fullwidth is-rounded">
    <br>
    <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
        <tr>
          <th>Libro</th>
          <th>Autor</th>
          <th>Paginas</th>
          <th>Copias Totales</th>
          <th>Copias Disponibles</th>
          <th></th>
        </tr>

    @foreach($book as $book)

    <tr>
      <td>{{ $book->name }}</td>
      <td>{{ $book->autor }}</td>
      <td>{{ $book->page }}</td>
      <td>{{ $book->total_copies }}</td>
      <td>{{ $book->available_copies }}</td>
      <td><a href="{{ route('book.show', $book->id) }}" class="button is-dark">Detalle</a></td>
    </tr>

    @endforeach
    </table>

    <div class="has-text-centered">
      <a href="{{ route('book.create') }}"><h1 class="button is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
    </div>
  </div>

    <div class="column"></div>

  </div>
  </body>
</html>
