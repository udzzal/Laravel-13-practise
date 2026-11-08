


<div>

    <a href="/about">about page</a>

    <h3>{{URL::previous()}}</h3>
    <h3>{{URL::current()}}</h3>
    <h3>{{URL()->full()}}</h3>

    <a href="{{URL::to('about',['anil'])}}">about </a>

</div>