@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Alunos do curso') }} {{$course->name}}</div>

                <div class="card-body">
                    <p>
                    <a class="btn btn-primary" href="/students/create" role="button">{{ __('Criar Aluno') }}</a>
                    </p>                    
                    @include('common.students.list', [ 'students' => $course->students])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection