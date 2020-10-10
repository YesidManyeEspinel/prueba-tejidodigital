<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      .btn-red{
          background: #dc3545;
          color: white;
          font-size: 14px;
          padding-right: 34px;
          padding-left: 34px;
          padding-top: 12px;
          padding-bottom: 12px;
        }
      .grid3{
        grid-column: 1 / 3;
        grid-row: 1 / 3;
      }
    </style>
  </head>
  <body>
  <div class="container-fluid">
      
    <div class="row m-0 p-0">
      <div class="col-8 m-0 p-0">
        <div class="row m-0 p-0">

        <div class="col-6 bg-danger m-0 p-0">1</div>
        <div class="col-6 d-flex justify-content-center m-0 p-0">
          <form class="form-group">
            <input class="form-control mt-4 mb-4" type="text" name="nombre" placeholder="Ingrese su nombre">
            <input class="form-control mt-4 mb-4" type="number" name="edad" placeholder="Digite su edad">
            <div class="mt-4 mb-4">
              <input type="submit" class="btn btn-lg btn-red" value="ENVIAR">
            </div>
          </form>
        </div>
        <div class="col-lg-6 m-0 p-0">
          <img src="{{asset('img/2.jpg')}}" class="img-fluid">
        </div>
        <div class="col-lg-6 bg-danger m-0 p-0">5</div>
        <div class="col-lg-6 bg-danger m-0 p-0">6</div>
        <div class="col-lg-6 m-0 p-0">
          <img src="{{asset('img/3.jpg')}}" class="img-fluid">
        </div>

      </div>
      </div>
      <div class="col-4 m-0 p-0">
        <img src="{{asset('img/1.jpg')}}" class="img-fluid">
      </div>
    </div>
  </div>
    @include('js')
  </body>
</html>