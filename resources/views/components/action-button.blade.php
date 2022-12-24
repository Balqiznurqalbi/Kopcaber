{{-- template --}}
{{-- <x-action-button color="primary">Tampilkan</x-action-button>
primary
secondary
success
danger
warning
info
light
dark --}}

@props([
  'color' => 'primary',
  'buttonType' => '',
])

@php 
$btnType='btn-'.$color;
if($buttonType=='outline'){
  $btnType='btn-outline-'.$color;
}
@endphp
<button  {{ $attributes->merge(['class'=>'btn '.$btnType.'  rounded-pill px-4 '])}} >{!!$slot!!}</button>

