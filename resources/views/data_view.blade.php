<div>

    <h1>user data jason placeholder</h1>

    {{print_r($jsondata)}}

    @foreach ($jsondata as $jsondatas)

    <ul>
        <li>
            <span>userid: </span><span><b>{{$jsondatas->id}}</b></span>
        </li>
        <li>
            <span>use title: </span><span><b>{{$jsondatas->title}}</b></span>
        </li>
        <li>
            <span>user body: </span><span><b>{{$jsondatas->body}}</b></span>
        </li>
    </ul>
        
    @endforeach

</div>
<br>
<div>

    <ul>
        @foreach ($data as $iteam)

            <li>{{ $iteam->name }}</li>
            <li>{{ $iteam->email }}</li>
            <li>{{ $iteam->city }}</li>
            <li>{{ $iteam->created_at }}</li>
            <li>{{ $iteam->updated_at }}</li>

        @endforeach
    </ul>
</div>