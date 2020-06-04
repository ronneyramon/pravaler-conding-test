@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Instituições') }}</div>

                <div class="card-body">
                    <p>
                    <a class="btn btn-primary" href="/institutions/create" role="button">{{ __('Criar Instituição') }}</a>
                    </p>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Nome') }}</th>
                            <th scope="col">{{ __('CNPJ') }}</th>
                            <th scope="col">{{ __('Status') }}</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>

                            @forelse ($institutions as $institution)
                                <tr>
                                    <th scope="row">{{$institution->id}}</th>
                                    <td>{{$institution->name}}</td>
                                    <td>{{$institution->cnpj}}</td>
                                    <td>{{$institution->status}}</td>
                                    <td><a href="/institutions/{{$institution->id}}">Editar</a></td>
                                </tr>                                

                            @empty

                                

                            @endforelse
                          
                          
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection