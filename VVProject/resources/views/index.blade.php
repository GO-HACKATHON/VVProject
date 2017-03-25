@extends('layouts.main')

@section('content')
<form class="form-horizontal" action="{{URL::to('form')}}"" method="POST">
          
          <div class="modal-body">
                <h4> Categories </h4>
                {{ csrf_field() }}
              <div class="form-group">
                <div class="col-sm-offset-0 col-sm-4">
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
              <hr>
              <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                    <label>Additional Request</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                </div>
              </div>
              <div class="price">
              	<input type="text" name="price">
              </div>

          </div>
          <div class="modal-footer">
                  <button href="recommendation-list.blade.php" type="submit" class="btn btn-default">Search</button>
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
@endsection