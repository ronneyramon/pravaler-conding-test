@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>
                <a href="/institutions">< Voltar para a lista</a>
            </p>
            <div class="card">
                <div class="card-header">{{ __('Editar instituição') }}</div>

                <div class="card-body">
                    <form method="POST" action="/institutions/{{ $institution->id }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $institution->name }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('CNPJ') }}</label>

                            <div class="col-md-6">
                                <input id="cnpj" type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') ?? $institution->cnpj }}" required maxlength="14" autocomplete="off">

                                @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="offset-md-4 col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_active" value="active" @if(( old('status') ?? $institution->status) == 'active') checked @endif>
                                <label class="form-check-label" for="status_active">{{ __('Ativo') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_inactive" value="inactive" @if(( old('status') ?? $institution->status) == 'inactive') checked @endif>
                                <label class="form-check-label" for="status_inactive">{{ __('Inativo') }}</label>
                            </div>
                        </div>                                  
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-md-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="/institutions/{{ $institution->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            {{ __('Apagar') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
