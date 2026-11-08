<div>
   



    <h1>
        this is session page in laravel

    </h1>

     <form action="/sesion" method="post">
        {{-- @method('put') --}}
        {{-- @method('patch') --}}
        {{-- @method('delete') --}}
    @csrf
    <input type="text" name="username" id="" placeholder="Enterusername"><br>

    <input type="password" name="password" id="" placeholder="password"><br>

    <button>submit</button>
    
    </form>

</div>
