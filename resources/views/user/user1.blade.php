<h1> This is nested view page </h1>


// random output_add_rewrite_var


<h1>{{$data}}</h1>

<h1>{{--$data--}}</h1>

<h1>{{ $array[1] }}</h1>

@foreach($array as $user)

<h2> {{$user}} </h2>

@endforeach

@for($i=0; $i<5; $i++)

<p> for loop value{{$i}}</p>

@endfor


@if(0)
     <h4>hellow this is if block</h4>
@elseif(0)
<h4>hellow this is elseif block</h4>
@else
<h4>hellow this is else block</h4>

@endif

 @php
     function printname(){
     return "hellow thiis a function";
     }

@endphp

     <h1>
          {{ printname() }}
     </h1>

     
