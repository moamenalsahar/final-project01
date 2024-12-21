<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    <h1>Wellcome {{$name}}</h1>
    <form action="about" method="post">
    <input type="text" name="name" >

    <select name="citys">
        @foreach($cites as $city)
        <option value="">{{$city}}</option>
        @endforeach

    </select>

    <input type="submit" value="submit">
    </form>
</body>
</html>