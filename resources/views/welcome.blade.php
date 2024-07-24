<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Relaciones muchos a muchos</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-auto">
                <h3>Alumno <span class="badge bg-secondary">{{$alumno->nombre}}</span> cursa las materias: </h3>
                <table class="table table-striped table-hover">
                    <thead class="bg-primary text-white">
                        <th>MATERIAS</th>
                    </thead>
                    <tbody>
                        @foreach($alumno->materias as $registro)
                        <tr>
                            <td>    {{$registro->nombre}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-auto">
                <h3>Materia <span class="badge bg-secondary">{{$materia->nombre}}</span> tiene los alumnos: </h3>
                <table class="table table-striped table-hover">
                    <thead class="bg-primary text-white">
                        <th>ALUMNOS</th>
                    </thead>
                    <tbody>
                        @foreach($materia->alumnos as $registro)
                        <tr>
                            <td>    {{$registro->nombre}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</body>

</html>