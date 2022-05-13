@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Platos') }}</div>
                   
                    <div class="card">
                        <div class="card-body " style="padding-bottom: 0px;">
                            <div class="row">
                                </div> 
                               
                                <div class="col menu-back cartac " style="padding:50px; padding-top: 70px;padding-bottom:20px;margin-bottom:20px">
                                    <br><h1 style="text-align: center;color:black">LA CARTA</h1>
                                     <h3 class="tmenu">ENTRANTES</h3> <br>
                                    @foreach($datE as $value)
                                        <a style="text-decoration:none;color:black" href="{{ route('detailE', ['filename'=>$value->id]) }}">{{$value->name}} ----------------- Precio: {{$value->precio}}€</a>   <br>
                                    @endforeach

                                    <br> <h3 class="tmenu">PRIMEROS PLATOS</h3> <br>
                                    @foreach($datPP as $value)
                                    <a style="text-decoration:none;color:black" href="{{ route('detailPP', ['filename'=>$value->id]) }}">{{$value->name}} ----------------- Precio: {{$value->precio}}€ </a>  <br>
                                    @endforeach

                                    <br> <h3 class="tmenu">POSTRES</h3> <br>
                                    @foreach($datP as $value)
                                    <a style="text-decoration:none;color:black" href="{{ route('detailP', ['filename'=>$value->id]) }}">{{$value->name}} ----------------- Precio: {{$value->precio}}€ </a>  <br>
                                    @endforeach

                                </div>
                             
                        </div>
                    </div><br>
                    
            </div><br>
    </div>
</div>
@endsection