

<div>
    <h1>upload file</h1>
    
    <form action="{{url('/file')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="" >
        <button>submit</button>

    </form>

    @error('file')
        <p style="color: brown">
            {{$message}}
        </p>
    @enderror
    

</div>