<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    

    {{-- @if($errors->any())

    @foreach ($errors->all() as $e)

    <li style="color:red">{{$e}}</li>
        
    @endforeach

    @endif --}}



    <form action="/form" method="POST">
        

        @csrf
        <input type="text" name="username" placeholder="enter user name" value="{{old('username')}}"><br>
        @error('username')

            <span style="color: brown">{{$message}}</span><br>

        @enderror

        <input value="{{old('email')}}" type="text" name="email" placeholder="enter user email"><br>
         @error('email')

            <span style="color: brown">{{$message}}</span><br>

        @enderror

        <input value="{{old('phone')}}" type="text" name="phone" placeholder="enter user phone number"><br>
        @error('phone')

            <span style="color: brown">{{$message}}</span><br>

        @enderror

        <input type="date" name="date" id=""><br>
        <label for="">Gender</label>
        <input type="radio" {{old('gender')=='male'?'checked':''}} name="gender" id="" value="male"><span>male</span>
        <input type="radio" {{old('gender')=='female'?'checked':''}} name="gender" id="" value="female"><span>female</span>
        <input type="radio" {{old('gender')=='3rd gender'?'checked':''}}  name="gender" id="" value="3rd gender"><br><span>3rdgender</span>

        <input type="checkbox" {{in_array('laravel',old('skill',[]))?'checked':''}} name="skill[]" value="laravel" id=""><span>laravel</span>
        <input type="checkbox" name="skill[]" value="react" id=""><span>react</span>
        <input type="checkbox" name="skill[]" value="vue" id=""><span>vue</span><br>

        <button>Add user</button>
    </form>


</body>
</html>