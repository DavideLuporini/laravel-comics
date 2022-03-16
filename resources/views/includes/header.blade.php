<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>header</title>
</head>
<body>
    <header>
        <div class="container d-flex align-center justify-between">
            <img src="{{ asset('images/dc-logo.png') }}" alt="DC LOGO">
            <ul>
                <li>
                    <a href="">characters</a> 
                    <a href="">comics</a> 
                    <a href="">music</a> 
                    <a href="">tv</a> 
                    <a href="">collectables</a> 
                    <a href="">videos</a> 
                    <a href="">fans</a> 
                    <a href="">news</a> 
                    <a href="">shop</a> 
                </li>
            </ul>
            <div>
                <input type="search" placeholder="cerca"> 
                <button type="submit">cerca</button>
            </div>
    </div>

    </header>
    
</body>
</html>