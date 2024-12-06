@extends('connect.master')
@section('title', 'Iniciar Sesión')
@section('content')
    <div class="box box-login shadow">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/img/2510_logo.png') }}" alt="Logo 2510">
            </a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/login']) !!}
            <label for="email" class="mbuttom5">Correo Electrónico:</label>
            <div class="input-group mb-3">
                <span class="input-group-text"  id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                </span>
                {!! Form::email('email', null, ['class' => 'form-control']) !!} 
            </div>
            <label for="password" class="mtop15 mbuttom5">Contraseña:</label>
            <div class="input-group mb-3">
                <span class="input-group-text"  id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>
                </span>
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop-btn']) !!}
            {!! Form::close() !!}

            @if (Session::has('message'))
                <div class="container">
                    <div class="mtop15 alert alert-{{ Session::get('typealert') }}" style="display: none;">
                        {{ Session::get('message') }}
                        @if ($errors -> any())
                        <ul>
                            @foreach($errors -> all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif 
                        <script>
                            $('.alert').slideDown();
                            setTimeout(function(){ $('.alert').slideUp(); }, 10000)
                        </script>
                    </div>
                </div>
            @endif

            <div class="footer mtop15">
                <a href="{{ url('/register') }}">Registrarse</a>
                <a href="{{ url('/recover') }}">Recuperar Contraseña</a>
            </div>
        </div>
    </div>
@stop