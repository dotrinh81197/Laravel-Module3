@extends('layout.blog-layout')
@section('main-content')
<div class="container">
    <h1></h1>
    <form action="{{route('blog.store')}}" method="POST">
        <h1>Create new blog</h1>
        <div class="row container">
           <h2>Title: </h2>
            <input class="title_blog" name="title_blog" type="text" name="title" placeholder="Please content title">

        </div>
        <textarea name="content_blog" id="summernote" cols="100" rows="10"></textarea>      
        <button type="submit" class="btn btn-success btn-lg btn-submit">Submit</button>
        
    </form>
   
</div>

@endsection