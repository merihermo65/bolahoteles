@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('El menú del dia') }}</div>

                <div class="card-body">
                    @foreach($data as $value)
                    <div class="card">
                        <div class="card-body " style="padding-bottom: 0px;">
                            <div class="row">

                                <div class="col">
                                    {{$value->entrante}}<br/><br/>
                                    {{ __($value->primer) }}<br/><br/>
                                    {{ __($value->postre) }}<br/><br/><br/><br/>
                                        
                                    Precio: 13,99€
                                </div>
                                </div>
                        </div>
                    </div><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection