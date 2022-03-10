<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.style')
</head>
<body>
    @include('layouts.header')
    <div class="container">   
        <h1>OK login</h1>
        <form action="">
            <input type="gmail" name="gmail" id="">
            <input type="password" name="password" id="">
            <button>login</button>
        </form>
    </div>
    @include('layouts.footer')
</body>
</html>