<select id="course_id" type="text" class="form-control @error('course_id') is-invalid @enderror" name="course_id"  required autocomplete="off" autofocus>
    @foreach ($courses as $course)
        <option value="{{$course->id}}" @if((old('course_id') ??  isset($student) ? $student->course_id : '') == $course->id) selected @endif @if($course->status == 'inactive' || $course->institution_id == null) disabled @endif>{{$course->name}}@if($course->status == 'inactive') - inativo @endif @if($course->institution_id == null) - sem instituição associada @endif</option>
    @endforeach
</select>
@error('course_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror