@extends('layouts.master')

@section('title')
  @lang('translation.client_category.edit_client_category')
@endsection


@section('content')
  @component('components.breadcrumb')
    @slot('li_1')
      @lang('translation.client_category.client_category')
    @endslot
    @slot('li_2')
      {{ route('client-categories.index') }}
    @endslot
    @slot('title')
      @lang('translation.client_category.edit_client_category')
    @endslot
  @endcomponent

  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form class="needs-validation" novalidate action="{{ route('client-categories.update', $clientCategory->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-8">

                <div class="row mb-4">
                  <label for="name" class="col-sm-3 col-form-label">@lang('translation.client_category.name')</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $clientCategory->name) }}" required>
                    <div class="valid-feedback">
                      @lang('validation.good')
                    </div>
                    <div class="invalid-feedback">
                      @lang('validation.required', ['attribute' => __('translation.client_category.name')])
                    </div>
                  </div>
                </div>


                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <div>
                      <button class="btn btn-primary" type="submit">@lang('buttons.submit')</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>


        </div>
      </div>
      <!-- end card -->
    </div> <!-- end col -->
  </div>
@endsection
