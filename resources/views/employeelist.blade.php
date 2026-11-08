

<div>

    <form action="/search_employee" method="get">
        @csrf
    <h1>Search employee</h1>
    <input placeholder="search employee" type="search" name="search_name" id="">
        <button>search</button>
</form>

    @foreach ($employ as $item)


    <ul>
        <li>{{$item->name}}</li>
        <li>{{$item-> password}}</li>
        <li>{{$item->phone}}</li>
        <a href="/delete/{{$item->id}}"><button>delete</button></a>
        <a href="/update/{{$item->id}}"><button>Update</button></a>


    </ul>
        

    @endforeach


    <p>{{$employ->links()}}</p>

</div>

