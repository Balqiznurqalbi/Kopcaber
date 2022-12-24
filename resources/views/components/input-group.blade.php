@props([
    'inputId'=>'',
    'name'=>'',
    'inputWidth'=>'col-sm-12',
    'label'=>'',
    'type'=>'text',
    'inputLayout'=>'horizontal',
    'description'=>'',
    'formColor'=>'indigo',
    'textColor'=>'gray',
    'shadow'=>'shadow-sm',
    'prepend'=>'',
    'append'=>'',
    'template'=>'2-10',

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
        $classColsInput=$inputWidth.' row';
    }elseif ($inputLayout == 'vertical'){
        $classGroup='form-group';
        $classColsLabel='';
        $classColsInput='';
    }

    $layoutLabel='<label for="'.$inputId.'" class="'.$classColsLabel.'">'.$label.'</label>';
    if ($inputLayout == 'vertical'){
        if ($label == null) {
            $layoutLabel='';
        }
    }
    $prependSlot='';
    $appendSlot='';
    if ($prepend != null){
        $prependSlot='<div class="input-group-prepend">
            <span class="input-group-text">'.$prepend.'</span>
        </div>';
    }
    if ($append != null){
        $appendSlot='<div class="input-group-prepend">
            <span class="input-group-text">'.$append.'</span>
        </div>';
    }
@endphp

<div class="{{$classGroup}}">
    {!!$layoutLabel!!}
    <div class="{{$classColsInput}} ">
        <div class="input-group {{$inputWidth}} pr-0">
            {!!$prependSlot!!}
            <input type="{{ $type }}" {{ $attributes->merge(['id'=>$inputId, 'name'=>$modelName, 'class'=>'form-control' ])}} >
            {!!$appendSlot!!}
        </div>

        @if($errors->has($model))
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $errors->first($model) }}</strong>
            </span>
        @endif
    </div>
    {!!$desc!!}



</div>

