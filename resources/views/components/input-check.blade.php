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



