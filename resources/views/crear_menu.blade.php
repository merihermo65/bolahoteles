@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creación del Menu del Dia') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('crearM') }}" role="form" enctype="multipart/form-data" method="POST" >
                        <input type="hidden" name="_method" value="PUT">
                            {!! csrf_field() !!}
                            

                        <div class="row mb-3">
                            <label for="ent" class="col-md-4 col-form-label text-md-end">{{ __('Entrantes') }}</label>

                            <div class="col-md-6">
                                <select id="ent" class="form-select" aria-label="Default" name="ent">
                                    @foreach($datE as $value)
                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prim" class="col-md-4 col-form-label text-md-end">{{ __('Primer plato') }}</label>

                            <div class="col-md-6">
                                <select id="prim" class="form-select" aria-label="Default" name="prim">
                                    @foreach($datPP as $value)
                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="postre" class="col-md-4 col-form-label text-md-end">{{ __('Postre') }}</label>

                            <div class="col-md-6">
                                <select id="postre" class="form-select" aria-label="Default" name="postre">
                                    @foreach($datP as $value)
                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <!--------------->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
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