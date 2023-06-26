<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Contratos</title>
    <style>
        /* Estilos para el reporte */
        body {
            font-family: Arial, sans-serif;
            font-size: 10px; /* Reducir el tamaño de la fuente */
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
            padding: 4px; /* Reducir el espaciado interno de las celdas */
            border-bottom: 1px solid #ddd;
            text-align: center; /* Centrar el contenido de las celdas */
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
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
        <img src="{{ asset('img/logo.png') }}" alt=""/>
    </div>
    <h1>Reporte de Contratos</h1>
    <table>
        <thead>
            <tr>
                <th>Contrato ID</th>
                <th>Detalles</th>
                <th>Cantidad</th>
                <th>Estado Contrato</th>
                <th>Subempresa ID</th>
                <th>Nombre Subempresa</th>
                <th>Correo Subempresa</th>
                <th>Teléfono Subempresa</th>
                <th>Estado Subempresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contratos as $contrato)
                <tr>
                    <td>{{ $contrato->id }}</td>
                    <td>{{ $contrato->detalles }}</td>
                    <td>{{ $contrato->cantidad }}</td>
                    <td>{{ $contrato->estado_contrato }}</td>
                    <td>{{ $contrato->id_empresa }}</td>
                    <td>{{ $contrato->subempresa->nombre }}</td>
                    <td>{{ $contrato->subempresa->correo }}</td>
                    <td>{{ $contrato->subempresa->telefono }}</td>
                    <td>{{ $contrato->estado_subempresa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
