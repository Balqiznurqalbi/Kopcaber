{{-- template --}}
{{-- <x-input-radio label="This is Radio" >
    <x-input-radio-item label="This is Radio items" inputId="radiomodelname1" name="modelRadio"  value="option1"  />
    <x-input-radio-item label="This is Radio items" inputId="radiomodelname2" name="modelRadio" value="option2"  />
    <x-input-radio-item label="This is Radio items" inputId="radiomodelname3" name="modelRadio" value="option3" disabled />
</x-input-radio> --}}

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
    if($inputLayout=='horizontal') {
        $classGroup='mb-3 row';
        $classColsLabel=$labelWidth.' col-form-label';
        $classColsInput=$inputWidth;
    }elseif ($inputLayout == "vertical"){
        $classGroup='mb-3';
        $classColsLabel='';
        $classColsInput='';
    }
@endphp


<div class="{{$classGroup}}">
    <label for="{{$inputId}}" class="{{$classColsLabel}}">{{$label}}</label>
    <div class="{{$classColsInput}}">

        {{$slot}}

        {!!$desc!!}

        {{-- @if($errors->has($model))
            <p class="mt-2 text-sm text-red-600">{{ $errors->first($model) }}</p>
        @endif --}}
    </div>
</div>



