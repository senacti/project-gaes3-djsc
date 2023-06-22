<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte de Producciones</title>
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
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Reporte de Producciones</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Producción</th>
                <th>Tipo de Producción</th>
                <th>Estado de Producción</th>
                <th>Novedades Producción</th>
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