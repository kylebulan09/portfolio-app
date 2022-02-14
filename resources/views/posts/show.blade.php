@extends('posts.nav')
@section('content')
<div class="show-container">
    <div style="padding:0 0 20px;">
        <div>
            <div>
                <h2> Show Project</h2>
            </div>
        </div>
    </div>
   
    <div>
        <div>
            <div>
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div>
            <div>
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
        <div>
            <div>
                <strong>Status:</strong>
                {{ $post->status}}
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="button btn-delete" href="{{ route('posts.index') }}"> Back</a>
    </div>
    <div style="padding:20px 0 0 0;">
    <h1>Images</h1>
    <h1>If any...</h1>
    </div>
</div>
@endsection