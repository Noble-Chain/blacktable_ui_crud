@extends('template.master')
@section('content')

@if($errors->any())
<div class="alert alert-danger  ">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="login-box">
    <h2>Login</h2>
    <form action="{{ route('blog.store') }}" method="post">
      @csrf
      <div class="user-box">
        <input type="text" name="name" required="">
        <label>Name</label>
        
      </div>
      <div class="user-box">
        <input type="text" name="company" required="">
        <label>Company</label>
      </div>
      <div class="user-box">
        <input type="text" name="address" required="">
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