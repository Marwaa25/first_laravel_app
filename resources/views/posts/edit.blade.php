@vite(['resources/css/edit.css','resources/js/app.js'])

@extends("master")

@section("content")
  <div class="form-container">
    <form method="POST" action="{{ route('posts.update', $post) }}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">{{__('Title')}}</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" @error('title') class="is-invalid" @enderror autocomplete="title" autofocus>
        @error('title')
          <span class="invalid-feedback">
            <strong>{{$message}}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group">
        <label for="content">{{__('Content')}}</label>
        <textarea name="content" id="content" cols="30" rows="10" @error('content') class="is-invalid" @enderror autocomplete="content">{{ old('content', $post->content) }}</textarea> 
        @error('content')
          <span class="invalid-feedback">
            <strong>{{__("invalidContent")}}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group">
        <button type="submit" class="submit-btn">{{__("Enregistrer")}}</button>
      </div>
    </form>
  </div>
@endsection