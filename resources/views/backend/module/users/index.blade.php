@extends ('backend/layout/default')
  @section ('content')

 <aside class="right-side" >
    <div class="container-fluid">

         <br><br><br>
                      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>users</h2>
            </div>
           
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Image</th>
            <th>Email</th>
            <th>User Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td><img src="upload/{{ $user->image }}" style="height: 50px; width: 50px; "></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->type }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $users->links() !!}
    </div>
</aside>

@stop