@extends('home')

@section('conteudo')

<div class="row">
    <h2>Login</h2>
    
    <form action="{{ route('site.login') }}" method="POST">
        {{ csrf_field() }}
        @include('login.formLogin')
    </form>
</div>

@endsection