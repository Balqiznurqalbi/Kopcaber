
@props([
    'label'=>'',
    'color'=>'btn-secondary',
    
])

<div class="btn-group">
    <button type="button" {{ $attributes->merge(['class' => 'btn '.$color.' dropdown-toggle']) }} data-toggle="dropdown" aria-expanded="false">
     {{ $label }}
    </button>
    <div class="dropdown-menu">
        {{$slot}}
    </div>
</div>