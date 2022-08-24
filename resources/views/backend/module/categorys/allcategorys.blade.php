@extends ('backend/layout/default')
  @section ('content')

 <aside class="right-side" >
     <div class="container-fluid"  style="width:70%;">


                  @if ($message = Session::get('success1'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

                    <h2>Color Categories</h2>

                    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('addcategory') }}"> Create New Category</a>
            </div>
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>CATEGORY NAME</th>
                                                <th>Action</th>
                                            </tr>
                                            
                                               @foreach ($colorcategories as $category)

                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
<td><a class="btn btn-danger" 
    href="{{route('deletecolorcategory',$category->id)}}">Delete</a>
                                           </tr>

                                           @endforeach
                                        

                                      </table>
                                  </div> 
                                  <br><br>



                  @if ($message = Session::get('success2'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

                                   <h2>Length Categories</h2>
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>CATEGORY NAME</th>
                                                <th>Action</th>
                                            </tr>
                                            
                                               @foreach ($lengthcategories as $category)

                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
<td><a class="btn btn-danger" 
    href="{{route('deletelengthcategory',$category->id)}}">Delete</a>
                                           </tr>

                                           @endforeach
                                        

                                      </table>
                                  </div> 
</div>
</aside>

@stop