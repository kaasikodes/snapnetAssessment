@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('books.store')}}" method="POST" >

<div class="form-group">
    <label for="">title</label>
    <input type="text" name="title" id="">
</div>

<div class="form-group">
<label for="">description</label>
    <input type="text" name="description" id="">
</div>





@csrf




<button type="submit">Submit</button>








</form>
   
</div>
@endsection
