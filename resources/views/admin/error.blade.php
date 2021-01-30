@if($errors->any())
<div class="alert bg-danger color-palette alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-ban"></i> Error!</h5>
  <ul>
    @foreach ($errors->all() as $e)
      <li>{{$e}}</li>
    @endforeach
  </ul>
</div>
@endif
