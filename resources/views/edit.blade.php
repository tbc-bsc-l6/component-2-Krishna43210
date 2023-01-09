<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update and delete</title>
</head>
<body>
@include('template.header')
<div class="row bg-success py-3 justify-content-center">
    <div class="col-md-3 bg-secondary border border-secondary my-3 py-3">
            <span >
                <h3><b class="">EDIT</b></h3>
            </span>
        <div class="float-right">    
            
        </div>
            <form action="{{route('update', $shopproduct[0]['id'] )}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <input type="hidden" class="form-control" name="type" value="{{$shopproduct[0]['type']}}">
                    <input type="text" class="form-control" name="title" value="{{$shopproduct[0]['title']}}" placeholder="title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="firstname" value="{{$shopproduct[0]['firstname']}}" placeholder="first name (optional)">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="sname" value="{{$shopproduct[0]['mainname']}}" placeholder="surname / brand">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="price" value="{{$shopproduct[0]['price']}}" placeholder="price">
                </div>
                <div class="form-group">
                    @if($shopproduct[0]['type']=='book')
                        <input type="number" placeholder="pages / playlength" name="pagelengths" class="my-2 p-2 form-control border capitalize" value="{{$shopproduct[0]['numpages']}}"/>
                    @else
                        <input type="number" placeholder="pages / playlength" name="pagelengths" class="my-2 p-2 form-control border capitalize" value="{{$shopproduct[0]['playlength']}}"/>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <a class="btn btn-danger float-right" href="{{route('delete', $shopproduct[0]['id'])}}">DELETE</a>
            </form>

            <div class="delete">
            </div>
    </div>
</div>
@include('template.footer')
</body>
</html>