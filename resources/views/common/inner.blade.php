
@include('common.header')
<h1>

    this is inner page in view 

</h1>

{{-- chek if view is avalable --}}

@includeIf('common.header');

