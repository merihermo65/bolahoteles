@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('La nostre Carta') }}</div>
                    @foreach($datE as $value)
                        <div class="card">
                            <div class="card-body ">
                                <div class="d-flex justify-content-center bg-image">
                                    <img src="{{ route('getimageEE', ['filename'=>$value->image])}}" class="avatar" height="50%" width="50%">
                                </div>
                                <div>{{ __($value->description) }}</div>
                            </div>
                        </div><br>
                    @endforeach
            </div><br>
            <div class="card">
                <div class="card-header">Primer plato</div>
                @foreach($datPP as $value)
                <div class="card">
                    <div class="card-body ">
                        <div class="d-flex justify-content-center bg-image">
                            <img src="{{ route('getimagePP', ['filename'=>$value->image])}}" class="avatar" height="50%" width="50%">
                        </div>
                        <div>{{ __($value->description) }}</div>
                    </div>
                </div><br>
            @endforeach
            </div><br>
            <div class="card">
                <div class="card-header">Primer plato</div>
                @foreach($datP as $value)
                <div class="card">
                    <div class="card-body ">
                        <div class="d-flex justify-content-center bg-image">
                            <img src="{{ route('getimageP', ['filename'=>$value->image])}}" class="avatar" height="50%" width="50%">
                        </div>
                        <div>{{ __($value->description) }}</div>
                    </div>
                </div><br>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection