@extends('layouts.app')

@section('content')

    <div class="row form-signin w-100 justify-content-center align-items-center h-100">
        <div class="card p-4  ">
            <img class="mb-4"
                src="data:image/jpeg;base64,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"
                alt="">

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="text-center">
                    @csrf

                    <h1 class="h3 mb-4 font-weight-normal">S'identifier</h1>
                    <div class="form-group row">

                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Entrer l'email...">

                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            </div>
                        @enderror

                    </div>


                    <div class="form-group row">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password"
                            placeholder="Entrer le mot de passe...">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group row mb-0 d-block">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    @endsection
