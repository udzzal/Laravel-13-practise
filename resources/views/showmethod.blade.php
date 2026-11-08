<div>

    <h1>this is show mwthod </h1>

    <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
    

    <form action="/formuser" method="post">
        {{-- @method('put') --}}
        {{-- @method('patch') --}}
        @method('delete')
    @csrf
    <input type="text" name="username" id="" placeholder="Enterusername"><br>

    <input type="password" name="password" id="" placeholder="password"><br>

    <button>submit</button>
    
    </form>
</div>