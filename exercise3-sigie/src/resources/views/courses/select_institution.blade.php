@php

$institution_id = old('institution_id');
if(!$institution_id){
    if(isset($course)){
        $institution_id = $course->institution_id;
    }
    else {
        $institution_id = '';
    }
}

@endphp
<select id="institution_id" type="text" class="form-control @error('institution_id') is-invalid @enderror" name="institution_id" autocomplete="off" autofocus>
    <option value="">Selecione</option>
    @foreach ($institutions as $institution)
        <option value="{{$institution->id}}" @if($institution_id == $institution->id) selected @endif @if($institution->status == 'inactive') disabled @endif>{{$institution->name}}@if($institution->status == 'inactive') - inativo @endif</option>
    @endforeach
</select>
@error('institution_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror