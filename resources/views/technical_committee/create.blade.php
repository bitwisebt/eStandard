@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header p-3 mb-2">Technical Committee</div>

                <div class="card-body">
                    <form method="POST" action="{{route('technical-committee.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="station" class="col-md-4 col-form-label text-md-right">{{ __('Technical Committee') }}</label>
                            <div class="col-md-8">
                                <textarea id="technical_committee" rows="5" type="text" class="form-control" name="technical_committee" placeholder="Technical Committee" autofocus>{{ old('technical_committee') }}</textarea>
                                @error('technical_committee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-info text-white">
                                    {{ __('Save') }}
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

