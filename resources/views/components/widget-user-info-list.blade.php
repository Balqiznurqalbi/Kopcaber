<!-- widget-user-info-list -->
@props(['label','value'=>'','url'=>'','icon'=>''])

@php
    $span='<span class="nav-link">';
    $spanend='</span>';
    if($url){
        $span='<a href="'.$url.'" class="nav-link">';
        $spanend='</a>';
    }

@endphp
<li class="nav-item">
    {!! $span !!}
        {!! $label !!}&nbsp;<i class="fas {{$icon}}"></i><span class="float-right text-bold">{{$value}}</span>
    {!! $spanend !!}
</li>
         