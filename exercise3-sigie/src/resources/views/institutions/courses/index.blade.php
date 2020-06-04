@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Cursos da instituição') }} {{$institution->name}}</div>

                <div class="card-body">
                    <p>
                    <a class="btn btn-primary" href="/courses/create" role="button">{{ __('Criar curso') }}</a>
                    </p>
                    @include('common.courses.list', [ 'courses' => $institution->courses])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection