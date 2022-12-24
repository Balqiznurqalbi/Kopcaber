{{-- template --}}
{{-- <x-multi-input label="">
    <div class="col-sm-3"><x-input  type="text" inputId=""  placeholder="" inputLayout="vertical" value="{{ old('',$model->) }}"></x-input></div>
    <div class="col-sm-3"><x-input  type="text" inputId=""  placeholder="" inputLayout="vertical" value="{{ old('',$model->) }}"></x-input></div>
</x-multi-input> --}}

@props([
    'label'=>'',
    'inputLayout'=>'horizontal',
    'description'=>'',
    'template'=>'2-10',
])

@php
    $desc='';
    if($description){
        $desc='<small  class="form-text text-muted">'.$description.'</small>';
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

    $layoutLabel='<label  class="'.$classColsLabel.'">'.$label.'</label>';
    if ($inputLayout == 'vertical'){
        if ($label == null) {
            $layoutLabel='';
        }
    }
    
@endphp


<div class="{{$classGroup}}">
    {!!$layoutLabel!!}
    <div class="{{$classColsInput}}">
        <div class="row">
            {!!$slot!!}
        </div>
    </div>
</div>



