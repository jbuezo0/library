<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body>
    <br><br>
    <div class="columns">
    <div class="column"></div>
    <div class="column">
      <h1 class="subtitle is-2 has-text-centered">Editar Cliente</h1>
    <form method="post" action="{{ route('client.update', $client->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
        <input type="text" name="codigo" value="{{$client->code}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder="Codigo"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
        <input type="text" name="fullname" value="{{$client->fullname}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder="Name"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
        <input type="text" name="birthdate" value="{{$client->birthdate}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder="Fecha"><br>
          </div>
        </div>
        <div class="field is-rounde">
          <div class="control is-rounde">
            <div class="select is-large is-rounded is-fullwidth">
              <select name="is_active" value="{{$client->is_active}}" >
                <option value="1" >Activo</option>
                <option value="0">Inactivo</option>
              </select>
            </div>
          </div>
        </div>

        <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded" required>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
