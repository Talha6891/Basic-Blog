<x-app-layout>

<div style="padding-left: 40%; padding-top: 10%">

    <form action="{{url('view_post')}}" method="GET">

        @csrf

        <div style="padding-left: 140px; padding-top:10px">
        <input type="submit" value="View my Post" style="background-color: greenyellow; cursor:pointer; padding:10px; border-radius:10px;">
       </div>


    </form>




    <label style="padding-left: 20%;  font-size:20px; font-weight:bold; text-align:center;">Add a Post</label>

    <form action="{{ url('upload_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
        </div>
        <br><br>
        <div>
            <label for="">upload a image</label>
            <input type="file" name="image">
        </div>
        <br><br>
        <input type="submit" style="background-color: skyblue; cursor:pointer; padding:10px; border-radius:10px;">
    </form>
</div>

</x-app-layout>
