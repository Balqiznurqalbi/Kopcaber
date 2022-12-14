{{-- template --}}
{{-- <x-input label="Name" type="text" inputId="modelname"  placeholder="" description="This is Name" value="" ></x-input> --}}

{{-- <x-input label="Password vertical" type="password" inputId="modelname" inputType="vertical" placeholder="" description="This is Password" value="" ></x-input> --}}

@props([
    'inputId'=>'',
    'name'=>'',
    'label'=>'',
    'type'=>'text',
    'inputLayout'=>'horizontal',
    'description'=>'',
    'formColor'=>'indigo',
    'textColor'=>'gray',
    'shadow'=>'shadow-sm',
    'leading'=>'',
    'template'=>'2-10',
    'trailing'=>'',
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
    $inputGroupStart='';
    $inputGroupEnd='';
    $leadingSection='';
    $trailingSection='';
    if ($leading || $trailing) {
        $inputGroupStart='<div class="input-group mb-3">';
        $inputGroupEnd='</div>';
    }
    if ($leading) {
        $leadingSection='<span class="input-group-text leading">'.$leading.'</span>';
    }
    if ($trailing) {
        $trailingSection='<span class="input-group-text trailing">'.$trailing.'</span>';
    }
@endphp


<div class="{{$classGroup}}">
    {!!$layoutLabel!!}
    <div class="{{$classColsInput}}">

        {!!$inputGroupStart!!}
            {!!$leadingSection!!}
            <input type="{{ $type }}" {{ $attributes->merge(['id'=>$inputId, 'name'=>$modelName, 'class'=>'form-control' ])}}/>
            {!!$trailingSection!!}
        {!!$inputGroupEnd!!}

        {!!$desc!!}

        @if($errors->has($model))
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $errors->first($model) }}</strong>
            </span>
        @endif
    </div>
</div>



