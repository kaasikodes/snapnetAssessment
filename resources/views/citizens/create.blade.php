@extends('layouts.app')

@section('content')
<div class="container">
   Citizen Register Form
<form action="{{route('citizens.store')}}" method="POST" >

<div class="form-group">
    <label for="">name</label>
    <input type="text" name="name" id="">
</div>

<div class="form-group">
   <p for="">Select a gender</p>
   <label for=""> Male</label>
    <input type="radio" name="gender" id="" value = "male">
   <label for=""> female</label>

    <input type="radio" name="gender" id="" value = "female">

</div>

<div class="form-group">
    <label for="">address</label>
    <textarea name="address" id="" cols="30" rows="10" placeholder = "address"></textarea>
</div>

<div class="form-group">
    <label for="">phone</label>
    <input type="text" name="phone" id="">
</div>

<div class="form-group">
    <label for="">Select a ward</label>
    <select name="ward_id" id="">
        @if(isset($wards))
        @foreach( $wards as $ward)
        <option value="{{$ward->id}}">{{$ward->name}}</option>
     
        @endforeach
        @endif
    </select>
</div>
<div class="form-group">
    <label for="">Select a LGA</label>
    <select name="lga_id" id="">
        @if(isset($lgas))
        @foreach( $lgas as $lga)
        <option value="{{$lga->id}}">{{$lga->name}}</option>
     
        @endforeach
        @endif
    </select>
</div>
<div class="form-group">
    <label for="">Select a State</label>
    <select name="state_id" id="">
        @if(isset($states))
        @foreach( $states as $state)
        <option value="{{$state->id}}">{{$state->name}}</option>
     
        @endforeach
        @endif
    </select>
</div>
@csrf

<button type="submit">Submit</button>

</form>
</div>

@endsection
