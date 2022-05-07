@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('El menú del dia') }}</div>

                <div class="card-body">
                    @foreach($data as $value)
<<<<<<< Updated upstream
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
=======
                    
                        <div class="menu-back" style="padding-bottom: 0px;">
                            <div class="row">
                                
                                <div class="col menu">
                                    <br><br>
                                    <h1 style="text-align: center; color:black">MENÚ</h1>
                                    
                                    <h3 class="tmenu">ENTRANTE</h3>
                                    {{$value->entrante}}<br/><br/>
                                    <h3 class="tmenu">PRIMER PLATO</h3>

                                    {{ __($value->primer) }}<br/><br/>
                                    <h3 class="tmenu">POSTRE</h3>

                                    {{ __($value->postre) }}<br/><br/><br/><br/>
                                        
                                    Precio: 13,99€

                                    <p class='detalles'>Incluye bebida y café </p>
                                </div>
                            </div>
                        
>>>>>>> Stashed changes
                    </div><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection