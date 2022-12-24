<!-- widget-user -->
@props(['title','icon','color'=>'primary'])
<div class="card card-widget widget-user-2">
    <div class="widget-user-header bg-{{$color}}">
        <div class="d-flex">
            <i class="fas {{$icon}}  fa-3x"></i>
            <h3 style="font-size: 18px;font-weight: 300;margin: 7px;margin-left: 15px; ">{{$title}}</h3>
        </div>
    </div>
    <div class="card-footer p-0">
        <ul class="nav flex-column">
            {!!$slot!!}
        </ul>
    </div>
</div>