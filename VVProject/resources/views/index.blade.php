@extends('layouts.main')

@section('content')
<div class="logo-vv">
  <h1>VV</h1>
  <p>Smartphone Auto Recommendation</p>
</div>
<form class="form-horizontal form-margin" action="{{ URL::to('form') }}"" method="POST">
  <div class="container col-md-6 col-md-offset-3 form-sheet">
      <div class="form-group">
       <div class="col-sm-12">
        <label>Categories</label>
       </div>
        {{ csrf_field() }}
        <div class="col-sm-4">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="game" value="true"> GAME
            </label>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="photography" value="true"> PHOTOGRAPHY
            </label>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="utility" value="true"> UTILITY
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
            <label>Additional Request</label>
            <textarea class="form-control" rows="3" name="description"></textarea>
        </div>
      </div>
      <div class="price">
        <label>Enter your preferable price here -></label>
      	<input class="form-control" type="text" name="price">
      </div>
      <hr>
      <button href="recommendation-list.blade.php" type="submit" class="btn btn-default btn-lg center btn-center">Search</button>
  </div>
</form>
@endsection