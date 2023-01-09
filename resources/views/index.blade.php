<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment part 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
@include('template.header')


<div class="container-fluid bg-info">
  <div class="row py-3 mt-2 align-items-between justify-content-evenly">
    <div class="  col-md-3 bg-secondary border border-secondary ">
    <p class="text-center sm-margin-top">
      <h3>Create a product</h3>
</p>
      <div class=" sm-pad">
          <form action="{{route('store')}}" method="POST">
              @csrf
              <div class="form-group">
                 <div class="flex">
                   <b>
                     Product&nbsp;type:&nbsp;
                    </b>
                  <select class="form-control d-" id="porduct" name="type">
                    <option value="book">BOOK</option>
                    <option value="cd">CD</option>
                  </select>
                 </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="title" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="firstname" placeholder="first name (optional)">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="sname" placeholder="surname / brand"require>
              </div>
              <div class="form-group">
                  <input type="number" class="form-control" name="price" placeholder="price" required>
              </div>
              <div class="form-group">
                  <input type="number" class="form-control" name="pageslenths" placeholder="page / length" required>
              </div>
              <button type="submit" class="btn btn-primary">ADD NEW</button>
            </form>
      </div>
    </div>
    <div class="col-md-3 bg-dark text-light p-3 border border-secondary">
    <div class="border-around">
      <p class="text-center sm-margin-top">

        <b> BOOK</b>
      </p>
      <div class=" product-box">
        @foreach($bookproducts as $book)
        <div class="product-item">
            <p class="card-text">Title:&nbsp;{{$book['title']}}</p>
            <p class="card-text">First Name:&nbsp;{{$book['firstname']}}</p>
            <p class="card-text">Price: &nbsp;{{$book['price']}}</p>
            <p class="card-text">Pages: &nbsp;{{$book['numpages']}}</p>
            <a href="{{route('edit', $book['id'])}}" class="btn btn-primary">Select</a>
            <hr>
          </div>
        @endforeach
      </div>
    </div>
    </div>
    <div class="col-md-3 bg-dark text-light p-3 border border-secondary">
    <div class="border-around">
    <p class="text-center sm-margin-top">
    <b> CD</b>
    </p>
    <div class=" product-box">

      @foreach($cdproducts as $cd)
      <div class="product-item">
        <p class="card-text">Title: &nbsp;{{$cd['title']}}</p>
        <p class="card-text">First Name: &nbsp;{{$cd['firstname']}}</p>
        <p class="card-text">Price: &nbsp;{{$cd['price']}}</p>
        <p class="card-text">Lenght: &nbsp;{{$cd['playlength']}}</p>
        <a href="{{route('edit', $cd['id'])}}" class="btn btn-primary">Select</a>
         <hr>
    </div>
      @endforeach
    </div>
    </div>
    </div>
  </div>
</div>
@include('template.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>