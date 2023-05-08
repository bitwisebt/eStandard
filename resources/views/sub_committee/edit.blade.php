@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border border-dark">
                <div class="card-header p-3 mb-2 text-dark"><h5><i class="fa fa-pencil" aria-hidden="true"></i> {{ __('Update Department/Sector') }}</h5></div>
                <div class="card-body">
                    <form method="POST" action="{{route('department.update',$department->id)}}">
                        @csrf
                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('AU Category') }}</label>

                            <div class="col-md-8">
                                <select class="form-control" name="category_id" id="category_id" autofocus>
                                    <option value="">Select Category</option>
                                    @foreach ($category as $data)
                                    <option value="{{ $data->category_id }}" >{{ ucfirst($data->description) }}</option>
                                    @endforeach
                                </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="au_id" class="col-md-4 col-form-label text-md-right">{{ __('Administrative Unit') }}</label>

                            <div class="col-md-8">
                                <select class="form-control" name="au_id" id="au_id" autofocus required>
                                    <option value="">Select Agency</option>
                                    @foreach ($au as $data)
                                    <option value="{{ $data->au_id }}" {{($data->au_id == $department->au_id) ? 'selected' : '' }}>{{ ucfirst($data->au_name) }}</option>
                                    @endforeach
                                </select>
                                    @error('au_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="station" class="col-md-4 col-form-label text-md-right">{{ __('Dept/Sector ID') }}</label>
                            <div class="col-md-2">
                                <input id="department_id" type="text" class="form-control" name="department_id" value="{{ $department->department_id }}" required autocomplete="false" placeholder="ID" maxlength="4">
                                @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="station" class="col-md-4 col-form-label text-md-right">{{ __('Dept/Sector Code') }}</label>
                            <div class="col-md-3">
                            <input id="code" type="text" class="form-control" name="code" value="{{ $department->code }}" required autocomplete="code" placeholder="Code" maxlength="6">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department_name" class="col-md-4 col-form-label text-md-right">{{ __('Dept/Sector Name') }}</label>
                            <div class="col-md-8">
                            <input id="department_name" type="text" class="form-control" name="department_name" value="{{ $department->department_name }}" required autocomplete="false" placeholder="Department/Sector Name">
                                @error('department_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="accnoid" class="col-md-4 col-form-label text-md-right">{{ __('Account No. ID') }}</label>
                            <div class="col-md-3">
                            <input id="accnoid" type="text" class="form-control" name="accnoid" value="{{ $department->accnoid }}" required autocomplete="false" placeholder="Acc.No.ID" maxlength="20">
                                @error('accnoid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{Form::hidden('_method','PUT')}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info text-white">
                                    {{ __('Update') }}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
	var getUrl = window.location;
	var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]+ "/" + getUrl.pathname.split('/')[2];

        $("#category_id").on('change',function(e){
            console.log(e);
            var id = e.target.value;
            $.get('/json-agency?agency=' + id, function(data){
                console.log(data);
                $('#au_id').empty();
                $('#au_id').append('<option value="">Parent Agency</option>');
                $.each(data, function(index, ageproductObj){
                    
                    $('#au_id').append('<option value="'+ ageproductObj.au_id +'">'+ ageproductObj.au_name + '</option>');
                })
            });
        });
    });
    
</script>