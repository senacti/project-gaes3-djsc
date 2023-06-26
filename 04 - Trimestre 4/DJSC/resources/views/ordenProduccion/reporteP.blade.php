<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte de las órdenes de Producción</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e9e9e9;
        }

        /* Estilos adicionales para decoración */
        .logo {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px; /* Ajusta el tamaño de la imagen según tus necesidades */
        }
    </style>
</head>
<body>

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo"/>
    </div>

    <h1>Reporte de las órdenes de Producción</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Producción</th>
                <th>Tipo de Producción</th>
                <th>Estado de Producción</th>
                <th>Novedades de Producción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($producciones as $produccion)
            <tr>
                <td>{{ $produccion->id }}</td>
                <td>{{ $produccion->fechaproduccion }}</td>
                <td>{{ $produccion->tipoProduccion->tipoProduccion }}</td>
                <td>{{ $produccion->estadoProduccion->estadoProduccion }}</td>
                <td>{{ $produccion->novedadProduccion->novedadProduccion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
