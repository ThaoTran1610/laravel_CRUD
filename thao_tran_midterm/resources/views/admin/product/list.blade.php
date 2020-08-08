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

        <div class="row" style="color: Red; font-weight: bold;"><marquee direction="left" >&hearts; LIST OF MY PRODUCT &hearts;</marquee></div>
                    
        <table class="table table-hover">
            <thead>
                <tr style=" background: skyblue;">
                    <th>ID</th>
                    <th>Category name</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Price</th>
                    <th>Old Price</th>
                    <th>Image</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($product as $value)
                <tr>
                    <td> {!! $value["id"] !!} </td>
                    <td> {!! $value["cate_id"] !!} </td>
                    <td> {!! $value["name"] !!} </td>
                    <td> {!! $value["code"] !!} </td>
                    <td> {!! $value["price"] !!} </td>
                    <td> {!! $value["oldprice"] !!} </td>
                    <td> {!! $value["image"] !!} </td>
                    
                    <td>
                        <a href="{!! url('admin/product/add') !!}">Add</a>
                        <a href="{!! url('admin/product/edit',$value["id"]) !!}">Edit</a>
                        <a href="{!! url('admin/product/delete',$value["id"]) !!}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div> 


    <div class="row" style="margin-top: 30px; margin-left: 30px">

        <h1><div class="row" style="color: Red; font-weight: bold;"><marquee direction="left" >&hearts; WELCOME TO MY PRODUCT &hearts;</marquee></div></h1>

        @foreach($category as $value)          
        <div class="row" style="font-weight: bold; font color: red">
            <center><h1 style="font-weight: bold; font color: red; padding-top: 20px; background: pink;">{!! $value["name"] !!} </h1></center>
        </div>
        <div class="row">
        
        @foreach($product as $value2)  
        
        <center><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <a href="#" class="thumbnail" style="border: 2px;">
                <img src="{!! asset('public/file_image/images/'.$value2['image']) !!}" style="width: 250px; height: 250px">
                <p>{!! $value2["name"] !!}</p>
                <p>{!! $value2["code"] !!}</p>
                <p style="color: red">{!! $value2["price"] !!} đ</p>
                <button type="submit" class="btn btn-submit" onclick="datmua()" >Đặt mua</button>
            </a>
        </div></center>
       
         @endforeach
        </div>
        @endforeach
    </div>   


    <script type="text/javascript">
        function datmua(){
            alert("Thank for your order!");
        }
    </script>
</body>
</html>
