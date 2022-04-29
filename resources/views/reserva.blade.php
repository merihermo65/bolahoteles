@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reserva') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--Hacer función y luego redirigir a la ruta correcta-->
                    <form action="{{ route('res') }}" role="form" enctype="multipart/form-data" method="GET" >
                       <!-- <input type="hidden" name="_method" value="PUT">
                            {!! csrf_field() !!}-->
                            
                        <div class="row mb-3">
                            <label for="start" class="col-md-4 col-form-label text-md-end">{{ __('Data entrada') }}</label>

                            <div class="col-md-6">
                                <input id="start" type="date" class="form-control" name="date1" autofocus>

                            </div>
                        </div>
                                                    
                        <div class="row mb-3">
                            <label for="end" class="col-md-4 col-form-label text-md-end">{{ __('Data sortida') }}</label>

                            <div class="col-md-6">
                                <input id="end" type="date" class="form-control" name="date2" autofocus>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hab" class="col-md-4 col-form-label text-md-end">{{ __('Habitacions disponibles') }}</label>

                            <div class="col-md-6">
                                <!--Hacer un bucle for, con las habitaciones-->
                                <select class="form-select" aria-label="Default">
                                    <option value="">1</option>
                                </select>
                            </div>
                        </div>
                        
                        <!--------------->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reserva') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection