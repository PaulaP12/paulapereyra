<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Información item</title>
</head>
<body>
    <div class="container mt-4" style="width: 35rem;">
        <div class="card text-dark bg-light col-md-8 offset-md-2">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ucfirst($item->name)}}</h5>
                <p class="card-subtitle">Unidades: {{$item->unit}}</p>
                <p class="card-subtitle">Cantidad: {{$item->quantity}}</p>
                <br><span class="mt-2 text-muted">Costo unitario:</span>
                <p class="card-subtitle"> > Por materiales: {{$item->cu_materials}}</p>
                <p class="card-subtitle"> > Por mano de obra: {{$item->cu_labor}}</p>
                <br><p class="card-subtitle mt-1">Importe: {{$item->amount}}</p>
                
                <a href="{{Route('item.index')}}" class="btn btn-primary mt-4">Regresar</a>
                
                <!-- EDITAR -->
                <a href="{{Route('item.edit',$item->id)}}" class="btn btn-secondary mt-4">Editar</a>

                <!-- BORRAR -->
                <form action="{{Route('item.destroy',$item->id)}}" method="POST">
                    {{method_field('DELETE')}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button class="btn btn-danger mt-4"> Borrar </button>
                </form>                

            </div>
            
        </div>
    </div>
</body>
</html>