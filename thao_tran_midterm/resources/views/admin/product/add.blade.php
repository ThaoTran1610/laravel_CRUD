<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
</head>
<body>
    <div class="container-fluid" style="margin-top: 30px">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <h2 class="page-header"> Add Product <small>&hearts; Th &hearts;</small> </h2>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <form action="{{URL::action('productController@postAddProduct')}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Cate_name:</label>
                    <select class="form-control" name="txtcate_id" style="width: 300px">
                        <option value="">:</option>
                        @foreach($category as $value)
                            <option value="{!! $value['id']!!}">-- {!! $value['name'] !!}</option>
                        @endforeach
                    </select>
            </div>

            <div class="form-group">  
                <label for="">Name: </label>
                <input type="text" class="form-control" name="txtname" placeholder="name" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Code: </label>
                <input type="text" class="form-control" name="txtcode" placeholder="name" style="width: 300px">
            </div> 
            <div class="form-group">
                <label for="">Image: </label>
                <input type="file" name="txtimage">
            </div> 
            
            <div class="form-group">
                <label for="">Price: </label>
                <input type="number" class="form-control" name="txtprice" placeholder="price" style="width: 300px">
            </div> 
            
            <div class="form-group">
                <label for=""> Old Price: </label>
                <input type="number" class="form-control" name="txtoldprice" placeholder="price sale" style="width: 300px">
            </div> 
            
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        
    </div>
    </div>  
</body>
</html>
