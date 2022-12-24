{{-- template --}}
{{-- <x-input-check label="This is checkbox" >
    <x-input-check-item label="This is checkbox items " inputId="checkmodelname[1]" description="This is check" />
    <x-input-check-item label="This is checkbox items " inputId="checkmodelname[2]" description="This is check" />
</x-input-check> --}}

{{-- <x-input-check label="This is checkbox" >
    <x-input-check-item label="This is checkbox items " inputId="checkmodelname[1]" description="This is check" />
    <x-input-check-item label="This is checkbox items " inputId="checkmodelname[2]" description="This is check" />
</x-input-check> --}}


@props([
    'inputId'=>'',
    'name'=>'',
    'label'=>'',
    'description'=>'',
    'inline'=>'',
    'formColor'=>'indigo',
    'textColor'=>'gray',
    'shadow'=>'shadow-sm',
])

@php
    $desc='';
    if($description){
        $desc='<small  class="form-text text-muted">'.$description.'</small>';
    }

    if($name == null){
        $modelName = $inputId;
    } else {
        $modelName=$name;
    }
   
    if($inputId){
        $model = $inputId;
    } elseif ($inputId == null){
        $model=$name;
    }

    if($errors->has($model)){
        $formColor='red';
        $textColor='red';
    }
    
    $classInline='';
    if($inline==true){
        $classInline='form-check-inline';
    }
@endphp



<div class="form-check mb-1 {{$classInline}}">
    <input type="checkbox" {{ $attributes->merge(['id'=>$inputId, 'name'=>$modelName, 'class'=>'form-check-input mt-1' ])}} type="checkbox" >
    <label class="form-check-label" for="{{$inputId}}">
        {{$label}}
    </label>
</div>

{!!$desc!!}

{{-- @if($errors->has($model))
    <p class="mt-2 text-sm text-red-600">{{ $errors->first($model) }}</p>
@endif --}}
   



