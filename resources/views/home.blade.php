@extends('layouts.app')

@section('content')

<div style="main-content">
    <div class="concept concept-one">
        <div class="hover hover-1"></div>
        <div class="hover hover-2"></div>
        <div class="hover hover-3"></div>
        <div class="hover hover-4"></div>
        <div class="hover hover-5"></div>
        <div class="hover hover-6"></div>
        <div class="hover hover-7"></div>
        <div class="hover hover-8"></div>
        <div class="hover hover-9"></div>
        <h1>RESTAURANT BOLA</h1>
        <p>Has resrevat ja la teva taula? <br> Clica aquí i reserva-la facil i ràpidament<br><br><br><br><br><br> <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="gooey">
                    <!-- in="sourceGraphic" -->
                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                    <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                    <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                </filter>
            </defs>
        </svg>
        
        <a id="gooey-button" href="{{ route('reservaDinar') }}">
            Reservar Taula
            <span class="bubbles">
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
            </span>
        </a></p>
        
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top: 20px;">
            <div class="card">
                <div class="card-header">{{ __('Events Recents') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($eventos as $evento)
                    <div style="border-radius:5px; border: 5px solid #402d15; background-color:#000000c9; border-bottom: 0;" class="card-header"> <div class="container-avatar">
                    <h2>{{$evento->title}}</h2>
                    
                    </div> </div>
                        <div class="card-body2" style=" color:white; background-color:#3a291087; border-radius:5px; border: 5px solid #402d15; margin-bottom: 25px;">
                            @if ($evento->image)
                            <img style="margin:10px auto;
                            padding:13px;
                            width: 100%;
                            margin: 0 auto;
                            height: 400px;
                            background-size: 100% 100%;
                            background-repeat:no-repeat;
                            background-size: cover;" src="{{route('getimagee', ['filename'=>$evento->image])}}" >
                            @endif
                                {{$evento->description}}  <br>
                                {{\FormatTime::timeago($evento->created_at)}}
                                
                        </div>
                    
                    @endforeach

                    
                </div>
                <br>
               <div style=" margin: 0 auto;"> {{ $eventos->links() }}</div>
               <br>

            </div>
        </div>
    </div>
</div>
@endsection
