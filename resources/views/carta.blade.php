@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 style="text-align: center">LA CARTA</h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Entrante') }}</div>
                    @foreach($datE as $value)
                    <div class="card">
                        <div class="card-body " style="padding-bottom: 0px;">
                            <div class="row">
                                <div class=" d-flex justify-content-center bg-image col">
                                    <img src="{{ route('getimageEE', ['filename'=>$value->image])}}" height="70%" width="70%" style="margin-top:60px;float:right;padding-right: 20px;"> 
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
            <div class="card">
                <div class="card-header">Primer plato</div>
                @foreach($datPP as $value)
                <div class="card">
                    <div class="card-body " style="padding-bottom: 0px;">
                        <div class="row">
                            <div class=" d-flex justify-content-center bg-image col">
                                <img src="{{ route('getimagePP', ['filename'=>$value->image])}}" height="70%" width="70%" style="margin-top:60px;float:right;padding-right: 20px;"> 
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
            <div class="card">
                <div class="card-header">Postre</div>
                @foreach($datP as $value)
                <div class="card">
                    <div class="card-body " style="padding-bottom: 0px;">
                        <div class="row">
                            <div class=" d-flex justify-content-center bg-image col">
                                <img src="{{ route('getimageP', ['filename'=>$value->image])}}" height="70%" width="70%" style="margin-top:60px;float:right;padding-right: 20px;"> 
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
            </div>
        </div>
    </div>
</div>
@endsection