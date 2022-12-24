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
])


<a  {{ $attributes->merge(['class'=>' '])}} >{!!$slot!!}</a>

