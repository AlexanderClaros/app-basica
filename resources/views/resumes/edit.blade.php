@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Resume</div>

        <div class="card-body">
          <form method="POST" action="{{ route('resumes.update',$resume->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name" >Title</label>
                <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                name="title"
                value="{{ old('title')?? $resume->title }}" 
                required autocomplete="title" 
                autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="form-group mb-3">
                <label for="name" >name</label>
                <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                name="name"
                value="{{ old('name') ?? $resume->user->name}}" 
                required autocomplete="name" 
                autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="form-group mb-3">
                <label for="email" >email</label>
                <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email"
                value="{{ old('email') ?? $resume->email}}" 
                required autocomplete="email" 
                autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="form-group mb-3">
                <label for="website" >website</label>
                <input
                type="text"
                class="form-control @error('website') is-invalid @enderror"
                name="website"
                value="{{ old('website'?? $resume->website) }}" >

                @error('website')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="form-group mb-3">
                <label for="picture" >picture</label>
                <input
                type="file"
                class="form-control @error('picture') is-invalid @enderror"
                name="picture">

                @error('picture')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="form-group mb-3">
                <label for="about" >About</label>
                <textarea
                class="form-control @error('picture') is-invalid @enderror"
                name="about">{{ old('about')?? $resume->about }}</textarea>

                @error('picture')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="form-group">
                <skills :skills= "{{ $resume->skills ?? '[]'}}"/>
            </div>
            <div class="row mb-0">
                <div>
                    <button type="submit" class="btn btn-primary">
                        submit
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
