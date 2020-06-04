<select id="institution_id" type="text" class="form-control @error('institution_id') is-invalid @enderror" name="institution_id" autocomplete="off" autofocus>
    <option value="">Selecione</option>
    @foreach ($institutions as $institution)
        <option value="{{$institution->id}}" @if((old('institution_id') ?? isset($course) ? $course->institution_id : '') == $institution->id) selected @endif>{{$institution->name}}</option>
    @endforeach
</select>
@error('institution_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror