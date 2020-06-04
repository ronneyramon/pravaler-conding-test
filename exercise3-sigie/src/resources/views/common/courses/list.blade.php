<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">{{ __('Nome') }}</th>
        <th scope="col">{{ __('Duração') }}</th>
        <th scope="col">{{ __('Instituição') }}</th>
        <th scope="col">{{ __('Status') }}</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

        @forelse ($courses as $course)
            <tr>
                <th scope="row">{{$course->id}}</th>
                <td>{{$course->name}}</td>
                <td>{{$course->duration_value}} {{$course->duration_type}}</td>
                <td>{{$course->institution ? $course->institution->name : ''}}</td>
                <td>{{$course->status}}</td>
                <td><a href="/courses/{{$course->id}}">Editar</a> | <a href="/courses/{{$course->id}}/students">Alunos</a></td>
            </tr>                                

        @empty

            

        @endforelse
      
      
  </table>