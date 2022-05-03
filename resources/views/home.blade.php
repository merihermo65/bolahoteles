@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <h1 style="text-align: center; color:white">{{$evento->title}}</h1>
                    
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
