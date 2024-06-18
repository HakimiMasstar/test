@extends('layouts.admin-panel')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
      </div>

    <div>
      <form method="post" action="{{route('datas.update', ['data'=>$data->id])}}">
        @csrf
        @method('PUT')
          <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif" value="{{ old('name', $data->name) }}">
              @if($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
              @endif
          </div>
          <div class="mb-3">
              <label class="form-label">Color</label>
              <input type="color" name="color" class="form-control form-control-color @if($errors->has('color')) {{'is-invalid'}} @endif" style="width: 100px; height: 100px;" value="{{ old('color', $data->color) }}" title="Choose your color">
              @if($errors->has('color'))
                <div class="invalid-feedback">{{ $errors->first('color') }}</div>
              @endif
          </div>
          <div class="mb-3">
              <label class="form-label">Shape</label>
              <select name="shape" class="form-select @if($errors->has('shape')) {{'is-invalid'}} @endif">
                  <option hidden value="">Choose shape</option>
                  <option value="square" @if(old('shape', $data->shape) == 'square') selected @endif>Square</option>
                  <option value="triangle" @if(old('shape', $data->shape) == 'triangle') selected @endif>Triangle</option>
                  <option value="circle" @if(old('shape', $data->shape) == 'circle') selected @endif>Circle</option>
              </select>
              @if($errors->has('shape'))
                <div class="invalid-feedback">{{ $errors->first('shape') }}</div>
              @endif
          </div>
          <div class="text-end mb-3">
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
      </form>
    </div>

</main>

@endsection