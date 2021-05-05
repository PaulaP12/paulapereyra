<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Agregar nuevo ítem</title>
</head>
<body>
    <div class="container mt-4" style="width: 35rem;">
        <h1 style="text-transform:uppercase;font-size:30px;">Agrega un nuevo item al listado</h1>
        <p>Rellene los siguientes campos:</p>
        <form action="{{Route('item.store')}}" method="POST" class="ms-10" style="font-size: 12px;text-transform: uppercase;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            <label class="form-label mt-4">Nombre</label>
            <input name="name" class="form-control ms-10" type="text">

            <label class="form-label mt-4">Unidad (medida)</label>
            <input name="unit" class="form-control" type="text">

            <label class="form-label mt-4">Cantidad</label>
            <input name="quantity" class="form-control" type="number" min="1" max="9" placeholder="Entre 1 y 9">

            <label class="form-label mt-4">Costo unitario de los materiales</label>
            <input name="cu_materials" class="form-control" type="number" min="100" max="2000" placeholder="Entre 100 y 2000">

            <label class="form-label mt-4">Costo unitario de la mano de obra</label>
            <input name="cu_labor" class="form-control" type="number" min="0.0" max="100" placeholder="Hasta 100">

            <label class="form-label mt-4">Importe</label>
            <input name="amount" class="form-control" type="number">

            <button type="submit" class="btn btn-primary mt-4 mb-4">AGREGAR</button>
        </form>
    </div>
</body>
</html>