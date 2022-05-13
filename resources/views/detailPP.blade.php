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
                                     <h3 class="tmenu">DETALLE</h3> <br>
                                     <div>
                                        {{$element->name}}
                                        <img src="{{ route('getimagePP', ['filename'=>$element->image])}}" height="70%" width="70%" style="margin-top:60px;float:right;padding-right: 20px;"> 
                                     </div>
                                    </div>
                             
                        </div>
                    </div><br>
                    
            </div><br>
    </div>
</div>
@endsection