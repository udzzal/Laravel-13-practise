<div>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updata database</title>
</head>
<body>

    <h1>Update form</h1>

    <form action="/update/{{$emp->id}}" method="post">
    @csrf
    <input placeholder="username" type="text" name="name" id=""  value="{{$emp->name}}"><br>
    <input placeholder="password" type="password" name="password" value="{{$emp->password}}"><br>
    <input placeholder="phone number" type="int" name="phone"  value="{{$emp->phone}}"><br>
    
    <button>updata</button>

    </form>

</body>
</html>


</div>

