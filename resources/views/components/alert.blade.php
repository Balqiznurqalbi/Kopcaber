@props([
    'color'=>'alert-success',
    
])
<div class="alert {{$color}} alert-dismissible fade show" role="alert">
    <b>{{$slot}}</b>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>