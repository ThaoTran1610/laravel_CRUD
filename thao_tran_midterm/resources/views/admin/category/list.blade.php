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

        <div class="row" style="color: Red; font-weight: bold;"><marquee direction="left" >&hearts; WELCOME TO MY CATEGORY &hearts;</marquee></div>
                    
        <table class="table table-hover">
            <thead>
                <tr style=" background: skyblue;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($category as $value)
                <tr>
                    <td> {!! $value["id"] !!} </td>
                    <td> {!! $value["name"] !!} </td>
                    <td>
                        <a href="{!! url('admin/category/add') !!}">Add</a>
                        <a href="{!! url('admin/category/edit',$value["id"]) !!}">Edit</a>
                        <a href="{!! url('admin/category/delete',$value["id"]) !!}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>
