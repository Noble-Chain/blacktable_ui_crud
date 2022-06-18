@extends('template.master')
@section('content')

<div class="login-box">
    <h2>Login</h2>
    <form action="{{ route('blog.update',$blog->id) }}" method="post">
      @csrf
      @method('put')
      <div class="user-box">
        <input type="text" value="{{ $blog->name }}" name="name" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="company" value="{{ $blog->company }}" required="">
        <label>Company</label>
      </div>
      <div class="user-box">
        <input type="text" name="address" value="{{ $blog->address }}" required="">
        <label>Address</label>
      </div>
      
      
       <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </button> 
    </form>
  </div>


@endsection