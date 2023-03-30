<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>

    </x-app-layout>

    <div style="padding-left: 40%; padding-top:10%">
    <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        
            <label for="">Update Description</label>
            <input type="text" name="description" value="{{$data->description}}">
        <br><br>

        <div>
            <label for="">Current Image</label>
            <img src="/post/{{$data->image}}" alt="" height="400px" width="200px" >
        </div>
        <br><br>
        <div>
            <label for="">Change Image</label>
            <input type="file" name="image">
        </div>
        <br><br>
        <input type="submit"  value="Update Post" style="background-color: greenyellow; cursor:pointer; padding:10px; border-radius:10px;">
    </form>
</div>

    </form>
</body>
</html>