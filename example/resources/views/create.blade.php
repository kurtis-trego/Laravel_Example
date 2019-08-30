<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Item
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('test.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">First Name:</label>
              <input type="text" class="form-control" name="firstName"/>
          </div>
          <div class="form-group">
            <label for="price">Last Name:</label>
            <input type="text" class="form-control" name="lastName"/>
        </div>
          <div class="form-group">
              <label for="quantity">Fare Price:</label>
              <input type="text" class="form-control" name="fare"/>
          </div>
          <div class="form-group">
                <label for="company">Company :</label>
                <input type="text" class="form-control" name="company"/>
            </div>
            <div class="form-group">
              <label for="company">Account Number:</label>
              <input type="text" class="form-control" name="accountNumber"/>
          </div>
          <div class="form-group">
            <label for="company">Fare Date (YYYY-MM-DD):</label>
            <input type="text" class="form-control" name="fareDate"/>
        </div>
        <div class="form-group">
          <label for="company">Pickup Time(24H, No Colon):</label>
          <input type="text" class="form-control" name="pickupTime"/>
      </div>
      <div class="form-group">
        <label for="company">Pickup City:</label>
        <input type="text" class="form-control" name="pickupCity"/>
    </div>
    <div class="form-group">
      <label for="company">Pickup State (XX):</label>
      <input type="text" class="form-control" name="pickupState"/>
  </div>
          <button type="submit" class="btn btn-primary">Book Limo</button>
      </form>
  </div>
</div>
@endsection