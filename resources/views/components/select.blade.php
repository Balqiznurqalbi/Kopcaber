{{-- template --}}
{{-- <x-select label="Select vertical" inputId="selectthis2" inputType="vertical"  description="This is Email">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</x-select> --}}

{{-- <x-select label="Select" inputId="selectthis" description="This is Email">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</x-select> --}}

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
    'template'=>'2-10',
    'disabled'=>'',
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
        $classColsInput='col-sm-12';
    }
    $layoutLabel='<label for="'.$inputId.'" class="'.$classColsLabel.'">'.$label.'</label>';
    if ($inputLayout == 'vertical'){
        if ($label == null) {
            $layoutLabel='';
        }
    }

@endphp


    @section('plugins.Select2', true)
    <div class="{{$classGroup}}">
        {!!$layoutLabel!!}
        <div class="{{$classColsInput}}">

            <div class="row">
                <div {{ $attributes->merge(['class'=>'pr-0 w-100']) }}>
                    @if ($disabled == 'disabled')
                        <x-adminlte-select2 name="{{$modelName}}" id="{{$inputId}}" class="form-control" disabled>
                            {{$slot}}
                        </x-adminlte-select2>
                        @else
                        <x-adminlte-select2 name="{{$modelName}}" id="{{$inputId}}" class="form-control">
                            {{$slot}}
                        </x-adminlte-select2>
                    @endif
                </div>
            </div>
                
            {!!$desc!!}
        </div>
    </div>



{{-- <div>
    {!!$layout1!!}
        {!!$title!!}
        <div class="{{$mt1}} w-full sm:col-span-2">
            <select  {{ $attributes->merge(['id'=>$inputId, 'name'=>$inputId, 'class' => 'block focus:ring-'.$formColor.'-500 focus:border-'.$formColor.'-500 w-full shadow-sm text-'.$textColor.'-900  sm:text-sm border-'.$textColor.'-300 rounded-md'])}}>
                {{ $slot }}
            </select>
        </div>
    {!!$layout2!!}
        {!!$desc!!}
        @if($errors->has($model))
            <p class="mt-2 text-sm text-red-600">{{ $errors->first($model) }}</p>
        @endif
    {!!$layout3!!}
</div> --}}



