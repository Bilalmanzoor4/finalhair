@extends ('backend/layout/default')
  @section ('content')


 <aside class="right-side"  >
    <div class="container-fluid" style="width:40%;">
  <div class="container-fluid">

     
  <br><br><br>
   @if ($message = Session::get('success1'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <h2>Add Color Categories</h2>
<form class="form-horizontal" method="POST" action="{{route('/addcolorcategory')}}" >
   @csrf
  <div class="form-group">
    CATEGORY NAME
    <input name="name" type="category-name" class="form-control" id="exampleInputEmail3" placeholder="CATEGORY NAME">
  </div>
  
    <button type="submit" class="btn btn-default">SUBMIT</button>
</form>
</div>
  <div class="container-fluid">

     
  <br><br><br>
   @if ($message = Session::get('success2'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <h2>Add lenght Categories</h2>
<form class="form-horizontal" method="POST" action="{{route('/addlengthcategory')}}" >
   @csrf
  <div class="form-group">
    CATEGORY NAME
    <input name="name" type="category-name" class="form-control" id="exampleInputEmail3" placeholder="CATEGORY NAME">
  </div>
  
    <button type="submit" class="btn btn-default">SUBMIT</button>
</form>
</div>
<br><br>
</div>
</aside>

@stop