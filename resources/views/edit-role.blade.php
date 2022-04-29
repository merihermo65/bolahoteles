@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR ROLS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($users as $user)
                    <div style="border-radius:5px; border: 5px solid rgb(184 143 42); background-color:rgb(203 159 46); border-bottom: 0;" class="card-header"> <div class="container-avatar">
                        <img src="{{ route('getavatar', ['filename'=>$user->id])}}" class="avatar">  {{$user->name}} {{$user->surname}} | {{$user->email}} | role: {{$user->role}}
                        <button class="boton-roles btn-primary btn">Modificar rol</button>
                    
                    
                    </div> </div>
                    
                    @endforeach

                    
                </div>
                <br>
                <div style=" margin: 0 auto;"> {{ $users->links() }}</div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection
