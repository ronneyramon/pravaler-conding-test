@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>
                <a href="/students">< Voltar para a lista</a>
            </p>
            <div class="card">
                <div class="card-header">{{ __('Criar aluno') }}</div>

                <div class="card-body">
                    <form method="POST" action="/students">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
                        
                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required maxlength="11" autocomplete="off">
                        
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>
                        
                            <div class="col-md-6">
                                <input id="birth_date" type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="off">
                        
                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
                        
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Ceular') }}</label>
                        
                            <div class="col-md-6">
                                <input id="mobile_number" type="phone" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required maxlength="11" autocomplete="off">
                        
                                @error('mobile_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                       
                        <div class="form-group row">
                            <label for="address_street" class="col-md-4 col-form-label text-md-right">{{ __('Logradouro') }}</label>
                        
                            <div class="col-md-6">
                                <input id="address_street" type="text" class="form-control @error('address_street') is-invalid @enderror" name="address_street" value="{{ old('address_street') }}" required autocomplete="off">
                        
                                @error('address_street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_number" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>
                        
                            <div class="col-md-6">
                                <input id="address_number" type="text" class="form-control @error('address_number') is-invalid @enderror" name="address_number" value="{{ old('address_number') }}" required autocomplete="off">
                        
                                @error('address_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_neighborhood" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>
                        
                            <div class="col-md-6">
                                <input id="address_neighborhood" type="text" class="form-control @error('address_neighborhood') is-invalid @enderror" name="address_neighborhood" value="{{ old('address_neighborhood') }}" required autocomplete="off">
                        
                                @error('address_neighborhood')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_city" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>
                        
                            <div class="col-md-6">
                                <input id="address_city" type="text" class="form-control @error('address_city') is-invalid @enderror" name="address_city" value="{{ old('address_city') }}" required autocomplete="off">
                        
                                @error('address_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_uf" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                        
                            <div class="col-md-6">
                                <input id="address_uf" type="text" class="form-control @error('address_uf') is-invalid @enderror" name="address_uf" value="{{ old('address_uf') }}" required autocomplete="off">
                        
                                @error('address_uf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    

                        <div class="form-group row">
                            <label for="course_id" class="col-md-4 col-form-label text-md-right">{{ __('Curso') }}</label>
                        
                            <div class="col-md-6">
                                
                                @include('students.select_course',$courses)
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
