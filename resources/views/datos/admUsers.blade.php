<!DOCTYPE html>
<html lang="es-Mx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdmUsers|Dsm54</title>
    <!-- jquery -->
    <script src="{{asset('js/jquery-3.3.1.js') }} "> </script>
    <!-- css-boostrap -->
    <link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet" href="">

    <script>
       

    </script>
</head>

<body>

    <div class="container">
        <h1 class=" mt-3">
            Administrador de estudiantes
        </h1>
        <div class="row">
            <!-- barra de busqueda -->
            <div class="col-12">
                <form action="{{route('admUsers')}}" method="get">
                    <div class="row mt-4">
                        <div class="col-4 my-1">
                            <input type="text" id="marca" class="form-control" name="textSearch" pattern="^[a-z A-Z]{3,}$" autocomplete="off">
                        </div>

                        <div class="col-auto my-1  ">
                            <input type="submit" class="btn btn-primary" id="submit" value="Buscar">
                        </div>

                    </div>
                </form>
            </div>
            <!-- tabla de alumnos -->
           
        </div>
</body>

</html>
