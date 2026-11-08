<div>

    <h1>list of all imgaes</h1>
    <a href="/imgform">upload</a>
    <br>
    @foreach ($imgdata as $item)
        <img style="width: 200px; margin:10px" src="{{ asset('storage/' . $item->img) }}" alt="Uploaded image">
        <br>
    @endforeach


</div>
