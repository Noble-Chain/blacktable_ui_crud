@extends('layouts.app')
 {{-- @extends('template.master')  --}}
@section('content')

<section>
    <!--for demo wrap-->
   <div class="d-flex header-box justify-content-between align-items-center">
    <h1 class="mb-0">Fixed Table header</h1>
    <a href="{{ route('blog.create') }}" class="btn btn-danger">Create</a>
   </div>
   
   @if(session('status'))
   <div class="alert alert-success">{{ session('status') }}</div>
   @endif
    
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Company</th>
            <th>Address</th>
            <th>Control</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          @foreach ($blogs as $blog)
          <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->name }}</td>
            <td>{{ $blog->company }}</td>
            <td>{{ $blog->address }}</td>
            <td class="d-flex">
              <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('blog.destroy',$blog->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger ms-3" id="delBtn">Del</button>

              </form>
            </td>
          </tr>
         

          @endforeach
         


        </tbody>
      </table>
      <div class=" my-2">
        {{ $blogs->links() }}
      </div>
    </div>
  </section>
  

@endsection