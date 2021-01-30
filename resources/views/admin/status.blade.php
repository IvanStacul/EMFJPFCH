@if( session('status') )
<div class="alert bg-teal color-palette alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-check"></i> {{session('status')}}</h5>
</div>
@endif
