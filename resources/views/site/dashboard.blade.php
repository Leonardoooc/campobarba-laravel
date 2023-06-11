<!DOCTYPE html>
<html>

<head>
    <title>Campo Barba</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>

<body>

    @include('includes.header')

    <main>
        <div class="content">
        <div id="area-principal">

<div id="area-sobrenos">
    <div class="postagem-sobrenos">
        <div class="dashboard">
          <table>
            <thead>
              <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Data</th>
                <th scope="col">Horario</th>
                <th scope="col">Telefone</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dadosFormularios as $index => $item)
                <tr key="{{ $index }}">
                    <td data-label="Cliente">{{ $item['cliente'] }}</td>
                    <td data-label="Data">{{ $item['data'] }}</td>
                    <td data-label="Horario">{{ $item['horario'] }}</td>
                    <td data-label="Telefone">{{ $item['celular'] }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>
    </main>

    @include('includes.footer')


</body>

</html>