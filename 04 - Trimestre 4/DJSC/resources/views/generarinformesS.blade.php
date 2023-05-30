<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>informes solicitudes</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>
       <button type="button" class="btn btn-success btn-lg">generar informe</button>
      </nav>
    <table class="table">
       
        <thead>
          <tr>
            
            <th scope="col">id solocitud</th>
            <th scope="col">nombre</th>
            <th scope="col">numero de identificacion</th>
            <th scope="col">numero de contacto </th>
            
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>empresa 1</td>
            <td>1</td>
            <td>1234123412</td>
          
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>empresa 2</td>
            <td>2</td>
            <td>1234123412</td>
          
             
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>empresa 3</td>
            <td>3</td>
            <td>1234123412</td>
            
          </tr>
        </tbody>
      </table>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>