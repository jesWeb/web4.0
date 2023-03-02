<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | DSM-54</title>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <link rel="stylesheet" href="{{asset('js/bootstrap.min.css')}}">
    <script>
        $(document).ready(function(){
            $("#estados").on('change',function(){
                var id_estado = $(this).find(":selected").val();
                console.log('id_estado');
                
                if (id_estado == 0) {
                    $("#municipios").html('<option value="0">-- Selecciona un estado antes -- </option>');
                } else {
                    $("#municipios").load('js_municipios?id_estado=' + id_estado);
                }

            });
        });

    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-danger">Formulario de registro</h1>
                <div class="">
                    <div class="row">
                        <div class="col-auto">
                            <select id="estados">
                                <option value="0">--Seleciona un estado --</option>
                                @foreach($estados as $estado)
                                <option value="{{$estado->id_estados}}">{{$estado->nombre}}</option>
                                @endforeach

                            </select>
                            <hr>
                            <select  id="municipios">
                                <option value="0">Selecciona un estado antes --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
