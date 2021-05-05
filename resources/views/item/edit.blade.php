<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Editar item {{$item->id}}</title>
</head>
<body>
    <div class="container mt-4" style="width: 35rem;">
       <form action="{{ Route('item.update',$item->id) }}" method="POST">
            {{method_field('PUT')}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            <p>Rellene los siguientes campos:</p>

            <label class="form-label">Nombre</label>
            <input value="{{$item->name}}" name="name" class="form-control ms-10" type="text" placeholder="{{$item->name}}">

            <label class="form-label mt-4">Unidad (medida)</label>
            <input value="{{$item->unit}}" name="unit" class="form-control" type="text" placeholder="{{$item->unit}}">

            <label class="form-label mt-4">Cantidad</label>
            <input value="{{$item->quantity}}" name="quantity" class="form-control" type="number" min="1" max="9" placeholder="{{$item->quantity}}">

            <label class="form-label mt-4">Costo unitario de los materiales</label>
            <input value="{$item->cu_materials}}" name="cu_materials" class="form-control" type="number" min="100" max="2000" placeholder="{{$item->cu_materials}}">

            <label class="form-label mt-4">Costo unitario de la mano de obra</label>
            <input value="{{$item->cu_labor}}" name="cu_labor" class="form-control" type="number" min="0.0" max="100" placeholder="{{$item->cu_labor}}">

            <label class="form-label mt-4">Importe</label>
            <input value="{{$item->amount}}" name="amount" class="form-control" type="number" placeholder="{{$item->amount}}">

            <button type="submit" class="btn btn-primary mt-4 mb-4">EDITAR</button>
       </form>
    </div>
</body>
</html>