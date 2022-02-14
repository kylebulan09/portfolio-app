@extends('posts.nav')
   
@section('content')
<div class="edit-container">
    <div>
        <div style="padding:0 0 20px;">
            <div>
                <h2>Edit Project</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('posts.update',$post->id) }}" method="POST" id=edit-form>
        @csrf
        @method('PUT')
   
         <div>
            <div>
                <div>
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $post->title }}"  placeholder="Title">
                </div>
            </div>
            <div>
                <div>
                    <div><strong>Description:</strong></div>
                    <textarea class="" style="height:150px" name="description" placeholder="Description">{{ $post->description }}</textarea>
                </div>
            </div>
            <div>
            <label for="status"><strong>Status:</strong></label>
                <select name="status" id="status">
                    @foreach ($status as $stat => $value)
                    <option value="{{ $value }}" {{ $value == $post->status ? "selected" : "" }}>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="bottom">
              <a class="button btn-delete" href="{{ route('posts.index') }}"> Back</a>
              <button type="submit" class="button btn-show" onclick="return confirm('Are you sure you want to edit this project, {{ $post->title }}?');">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection