@extends('posts.nav')
  
@section('content')
<div class="create-container">
<div style="padding:0 0 20px;">
    <div>
        <div>
            <h2>Create New Project</h2>
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
   
<form action="{{ route('posts.store') }}" method="POST" id="create-form">
    @csrf
        <div>
            <div>
                <strong>Title:</strong>
                <input type="text" name="title" placeholder="Title">
            </div>
            <div>
                <div><strong>Description:</strong></div>
                <textarea style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
            <div>
                <label for="status"><strong>Status:</strong></label>
                <select name="status" id="status">
                    <option value selected></option>
                    <option value="Pending">Pending</option>
                    <option value="Ongoing">Ongoing</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>
            <div class="bottom">
                <a class="button btn-delete" href="{{ route('posts.index') }}"> Back</a>
                <button type="submit" class="button btn-show">Submit</button>
            </div>
        </div>
        
   
</form>
</div>
@endsection