@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 style="text-align: center">LA CARTA DE VINO</h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vinos disponibles') }}</div>
                    @foreach($data as $value)
                    <div class="card">
                        <div class="card-body " style="padding-bottom: 0px;">
                            <div class="row">
                                <div class=" d-flex justify-content-center bg-image col">
                                    <img src="{{ route('getimageV', ['filename'=>$value->image])}}" height="70%" width="70%" style="margin-top:60px;float:right;padding-right: 20px;"> 
                                </div>
                                <div class="col menu-back cartac " style="padding:50px; padding-top: 70px;padding-bottom:20px;margin-bottom:20px">
                                    <h3 ><b>{{$value->name}}</b></h3>
                                    {{ __($value->description) }}<br/><br/><br/><br/>
                                        
                                    Precio: {{$value->precio}}€
                                </div>
                                </div>
                        </div>
                    </div><br>
                @endforeach
            </div><br>
        </div>
    </div>
</div>
@endsection