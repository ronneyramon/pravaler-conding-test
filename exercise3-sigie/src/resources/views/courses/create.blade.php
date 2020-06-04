@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>
                <a href="/courses">< Voltar para a lista</a>
            </p>
            <div class="card">
                <div class="card-header">{{ __('Criar curso') }}</div>

                <div class="card-body">
                    <form method="POST" action="/courses">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration_value" class="col-md-4 col-form-label text-md-right">{{ __('Duração') }}</label>

                            <div class="col-md-6">

                                <div class="input-group my-group"> 
            
                                    <input id="duration_value" type="text" class="form-control @error('duration_value') is-invalid @enderror" name="duration_value" value="{{ old('duration_value') }}" required autocomplete="off">

                                    <select id="duration_type" class="form-control @error('duration_type') is-invalid @enderror" name="duration_type" value="{{ old('duration_type') }}" required autocomplete="off" autofocus>
                                        <option value="hours">Hora(s)</option>
                                        <option value="days">Dia(s)</option>
                                        <option value="weeks">Semana(s)</option>
                                        <option value="months">Mese(s)</option>
                                        <option value="years">Ano(s)</option>
                                    </select>
                    
                                    
                                    @error('duration_value')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                                  
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institution_id" class="col-md-4 col-form-label text-md-right">{{ __('Instituição') }}</label>
                        
                            <div class="col-md-6">                                
                                @include('courses.select_institution')
                            </div>
                        </div>
                        <div class="offset-md-4 col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_active" value="active" @if((old('status') ?? 'active') == 'active') checked @endif>
                                <label class="form-check-label" for="status_active">{{ __('Ativo') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_inactive" value="inactive" @if((old('status') ?? 'active') == 'inactive') checked @endif>
                                <label class="form-check-label" for="status_inactive">{{ __('Inativo') }}</label>
                            </div>
                        </div>                 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-md-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Criar') }}
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
