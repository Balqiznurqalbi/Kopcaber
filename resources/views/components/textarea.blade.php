{{-- template --}}
{{-- <x-textarea label="Email vertical" type="email" inputId="modelname" inputType="vertical" placeholder="" description="This is Email"  rows="3">Value</x-textarea> --}}

{{-- <x-textarea label="Email" type="email" inputId="modelname"  placeholder="" description="This is Email"  rows="3">Value</x-textarea> --}}

@props([
    'inputId'=>'',
    'name'=>'',
    'label'=>'',
    'inputLayout'=>'horizontal',
    'description'=>'',
    'formColor'=>'indigo',
    'textColor'=>'gray',
    'template'=>'2-10',
    'shadow'=>'shadow-sm',
])

@php
    $desc='';
    if($description){
        $desc='<small  class="form-text text-muted">'.$description.'</small>';
    }


    if($inputId){
        $modelName = $inputId;
        $model = $inputId;
    } elseif ($inputId == null){
        $modelName=$name;
        $model=$name;
    }

    if($errors->has($model)){
        $formColor='red';
        $textColor='red';
    }
    if($template=="2-10"){
        $labelWidth='col-sm-2';
        $inputWidth='col-sm-10';
    }elseif ($template=="3-9"){
        $labelWidth='col-sm-3';
        $inputWidth='col-sm-9';
    }elseif ($template=="4-8"){
        $labelWidth='col-sm-4';
        $inputWidth='col-sm-8';
    }
    if($inputLayout=="horizontal") {
        $classGroup='mb-3 row';
        $classColsLabel=$labelWidth.' col-form-label';
        $classColsInput=$inputWidth;
    }elseif ($inputLayout == "vertical"){
        $classGroup='form-group';
        $classColsLabel='';
        $classColsInput='';
    }
@endphp

<div class="{{$classGroup}}">
    <label for="{{$inputId}}" class="{{$classColsLabel}}">{{$label}}</label>
    <div class="{{$classColsInput}}">
        <textarea {{ $attributes->merge(['id'=>$inputId, 'name'=>$modelName, 'class'=>'form-control' ])}} >{{$slot}}</textarea>
        {!!$desc!!}

        @if($errors->has($model))
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $errors->first($model) }}</strong>
            </span>
        @endif
    </div>
</div>



