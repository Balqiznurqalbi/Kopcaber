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
  'target' => '',
  
])


  <a  {{ $attributes->merge(['class'=>'btn btn-'.$color.' rounded-pill px-4 ','target'=>$target])}} >{!!$slot!!}</a>

