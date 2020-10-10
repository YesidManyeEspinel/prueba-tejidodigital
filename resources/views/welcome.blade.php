<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
        .btn-red{
          background: #dc3545;
          color: white;
          font-size: 14px;
          padding-right: 40px;
          padding-left: 40px;
          padding-top: 8px;
          padding-bottom: 8px;
        }
        .containergrid{
            /*margin-top: 1rem;*/
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;

        }
        .grid{
            background: #dc3545;
        }
        .gridper{
            grid-column: 3 / 4;
            grid-row: 1 / 4;
        }
        
        .gridtil{
            text-align: center;
            color: white;
        }
        .form{
            background: white;
            color: black;
            /*align-content: center;*/
            margin: auto;
            padding: 10px;
        }
    </style>
  </head>
  <body>
  <div class="containergrid">
      
    <div class="grid">1</div>
    <div class="grid form d-flex justify-content-center">
      <form class="form-group">
          <input class="form-control mt-4 mb-4" type="text" name="nombre" placeholder="Ingrese su nombre">
          <input class="form-control mt-4 mb-4" type="number" name="edad" placeholder="Digite su edad">
          <div class="d-flex justify-content-center mt-4 mb-4">
              <input id="enviar" type="submit" class="btn btn-lg btn-red" value="ENVIAR">
          </div>
      </form>
    </div>
    <div class="grid gridper">
      <img src="{{asset('img/1.jpg')}}" class="img-fluid">
    </div>
    <div class="grid">
      <img src="{{asset('img/2.jpg')}}" class="img-fluid">
    </div>
    <div class="grid d-flex align-items-center justify-content-center">
      <div class="gridtil">
          <p class="h3 text-center mb-0">Usuarios</p>
          <p id="user" class="display-1 mt-0"><strong></strong></p> 
      </div>
    </div>
    <div class="grid">6</div>
    <div class="grid">
      <img src="{{asset('img/3.jpg')}}" class="img-fluid">
    </div>
      
  </div>

    @include('js')
    <script type="text/javascript">
    $(document).ready(function(){

        $("#enviar").click(function(){

            event.preventDefault();
            let nombre = $("input[name=nombre]").val();
            let edad = $("input[name=edad]").val();
            let _token   = $('meta[name="csrf-token"]').attr('content');
            var url = `{{route('user.store')}}`;
            

            $.ajax({
                url: url,
                type: 'POST',
                data:{
                        nombre:nombre,
                        edad:edad,
                        _token: _token
                    },
                dataType: 'JSON',

                success:function(data){
                    if (data) {

                        $("input[name=nombre]").val('');
                        $("input[name=edad]").val('');
                        query();
                    } else {
                        alert('No se enviaron los datos...')
                    }
                }
            });
        });

        function query() {
          $.ajax({
              url: `{{route('user.index')}}`,
              type: 'GET',
              dataType: 'JSON',

              success:function(data){
                  if (data > 0) {
                      $('#user').find("strong").remove();
                      $("#user").append('<strong>'+data+'</strong>');
                  } else {
                      $("#user").append('<strong>0</strong>');
                  }
              }
          });
        }
        $(document).ready(query());
    });
</script>
  </body>
</html>