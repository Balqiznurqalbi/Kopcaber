@props([
    'inputId'=>'',
    'name'=>'',
    'label'=>'',
    'check'=>'',
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



    if($inputId){
        $model = $inputId;
    } elseif ($inputId == null){
        $model=$name;
    }

    $modelName=$name;

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
    <input type="radio" {{ $attributes->merge(['id'=>$inputId, 'name'=>$modelName, 'class'=>'form-check-input mt-1' ])}} >
    <label class="form-check-label" for="{{$inputId}}">
        {{$label}}
    </label>
</div>

{!!$desc!!}

@if($errors->has($model))
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $errors->first($model) }}</strong>
            </span>
@endif




