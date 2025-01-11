<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22currentColor%22%20class%3D%22bi%20bi-person-fill-gear%22%20viewBox%3D%220%200%2016%2016%22%3E%3Cpath%20d%3D%22M11%205a3%203%200%201%201%2D6%200%203%203%200%200%201%206%200m%2D9%208c0%201%201%201%201%201%201h5.256A4.5%204.5%200%200%201%208%2012.5a4.5%204.5%200%200%201%201.544%2D3.393Q8.844%209.002%208%209c%2D5%200%2D6%203%2D6%204m9.886%2D3.54c.18%2D.613%201.048%2D.613%201.229%200l.043.148a.64.64%200%200%200%2E921.382l.136%2D.074c.561%2D.306%201.175.308.87.869l%2D.075.136a.64.64%200%200%200%2E382.92l.149.045c.612.18.612%201.048%200%201.229l%2D.15.043a.64.64%200%200%200%2D.38.921l.074.136c.305.561%2D.309%201.175%2D.87.87l%2D.136%2D.075a.64.64%200%200%200%2D.92.382l%2D.045.149c%2D.18.612%2D1.048.612%2D1.229%200l%2D.043%2D.15a.64.64%200%200%200%2D.921%2D.38l%2D.136.074c%2D.561.305%2D1.175%2D.309%2D.87%2D.87l.075%2D.136a.64.64%200%200%200%2D.382%2D.92l%2D.148%2D.045c%2D.613%2D.18%2D.613%2D1.048%200%2D1.229l.148%2D.043a.64.64%200%200%200%2E382%2D.921l%2D.074%2D.136c%2D.306%2D.561.308%2D1.175.869%2D.87l.136.075a.64.64%200%200%200%2E92%2D.382zM14%2012.5a1.5%201.5%200%201%200%2D3%200%201.5%201.5%200%200%200%203%200%22%2F%3E%3C%2Fsvg%3E">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('usuarios.index') }}">Gestão de Usuários</a>
        </div>
    </nav>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
