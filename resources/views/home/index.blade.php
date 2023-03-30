<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <nav>
        <label class="logo">Web Blog</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>

            @if (Route::has('login'))

            @auth
            <li><a href="{{ url('/dashboard') }}" class="btn btn-success">{{Auth::user()->name}}</a></li> 

            @else

            <li><a href="{{ route('register') }}" class="btn btn-success">Register</a></li>
            <li><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>

            @endauth
            @endif

        </ul>
    </nav>

    @foreach($post as $post)

    <div class="dev_deg">
        <h1>{{$post->username}}</h1>
        <p>{{$post->description}}</p>
            <img src="post/{{$post->image}}" alt="image" height="300px" width="100%">
    </div>

    @endforeach

</body>
</html>