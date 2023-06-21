<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Solicitudes</title>
    <style>
        /* Estilos para el reporte */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Reporte de Solicitudes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Número de Identificación</th>
                <th>Número de Contacto</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->id }}</td>
                    <td>{{ $solicitud->usuario->name }}</td>
                    <td>{{ $solicitud->usuario->numeroidentificacion }}</td>
                    <td>{{ $solicitud->usuario->telefono }}</td>
                    <td>{{ $solicitud->estadosolicitud->estadoSolicitud }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
