<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>LISTADO DE ITEMS ({{$cantidad}})</title>
</head>
<body>
    <div class="container mt-4">
        <p style="text-align:center;margin:10px;"><a href="{{Route('item.create')}}" class="btn btn-warning ">CREAR NUEVO ITEM</a></p>

        Primeros 5 items:
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Items</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">C.Unitario (Materiales)</th>
                    <th scope="col">C.Unitario (Mano de obra)</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            @foreach ($items as $item)
                @if($item->id <= 5)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ucfirst($item->name)}}</td>
                        <td>{{$item->unit}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->cu_materials}}</td>
                        <td>{{$item->cu_labor}}</td>
                        <td>{{$item->amount}}</td>
                    </tr>
                @endif
            @endforeach

        </table>
        <span><u>Total de datos</u>: {{$cantidad}} </span>
    </div>
</body>
</html>