<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicacion Todo List en laravel</title>
</head>
<body>
  
<form action="{{ url('/') }}" method="post">
@csrf
<input type="text" name="task" id="task">

<input type="button" value="Agregar tarea">

</form>

</body>
</html>