@extends('posts.nav')
 
@section('content')
<div class="index-container">
    <div>
        <div>
            <div>
                <h2>My Projects</h2>
            </div>
            <div>
                <a class="button btn-create" href="{{ route('posts.create') }}"> Create new project</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table-project">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->status }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
   
                    <a class="button btn-show" href="{{ route('posts.show',$post->id) }}">Show</a>
    
                    <a class="button btn-edit" href="{{ route('posts.edit',$post->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button id="del" class="button btn-delete" type="submit" onclick="return confirm('Are you sure you want to delete this project, {{ $post->title }}?');" style="background-color: red;color:white;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
</div>  
@endsection