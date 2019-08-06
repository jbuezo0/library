<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body><br><br>

    <div class="columns">
      <div class="column"></div>

    <div class="column">
      <input type="submit" value="Nuevo Cliente" class="button is-success is-medium is-fullwidth is-rounded"  required><br>

    <form method="post" action="{{ route('client.store') }}">

        {{ csrf_field() }}
        <div class="field">
          <div class="control">
            <input type="text" name="code"  class="input is-danger is-large has-text-centered is-rounded" required placeholder="Codigo"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="fullname" class="input is-danger is-large has-text-centered is-rounded"  required placeholder="Nombre"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="date" name="birthdate" class="input is-danger is-large has-text-centered is-rounded"  required placeholder="Fecha Nacimiento"><br>
          </div>
        </div>

        <div class="field is-rounde">
          <div class="control is-rounde">
            <div class="select is-large is-rounded is-fullwidth">
              <select name="is_active"  >
                <option value="1" >Activo</option>
                <option value="0">Inactivo</option>
              </select>
            </div>
          </div>
        </div>

        <input type="submit" value="Guardar" class="button is-dark is-medium is-fullwidth is-rounded"  required>
    </form>
  </div>

  <div class="column"></div>

  </div>
  </body>
</html>
