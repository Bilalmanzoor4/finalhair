@extends ('backend/layout/default')
  @section ('content')

<div class="container">
 <aside class="right-side" >


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail"></textarea>
            </div>
        </div>

     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputprice4">price</label>
      <input   name="price" type="price" class="form-control" id="inputprice4" placeholder="price">
    </div>
    <div class="form-group col-md-6">
      <label for="inputrent_price4">rent_price</label>
      <input   name="rent_price" type="rent_price" class="form-control" id="inputrent_price4" placeholder="rent_price">
    </div>
  </div>

   <div class="form-row">
    
    <div class="form-group col-md-6">
        <br> 
      <label for="inputselect_color">Select Colors</label>
  <select id="select_color" name="color[]"  class="selectpicker" multiple data-live-search="true"  multiple="" >
      @foreach ($colorcategories as $category)
  <option value="{{$category->value}}">{{$category->name}}</option>
        @endforeach
   </select>
    </div>
     <div class="form-group col-md-6">
        <br> 
      <label for="inputselect_length">Select length</label>
  <select id="select_length" name="length[]"  class="selectpicker" multiple data-live-search="true"  multiple="">
    @foreach ($lengthcategories as $category)
  <option value="{{$category->value}}">{{$category->name}}</option>
        @endforeach
   </select>
    </div>
  </div>

  <div class="form-row">
     <div class="form-group col-md-6">
    <div class="custom-file">
      <br>
         <label for="inputImage">Choose image</label>
  <input name="image1" type="file" class="custom-file-input" id="customFile">

</div>
 </div>
   <div class="form-group col-md-6">
    <div class="custom-file">
      <br>
         <label for="inputImage">Choose image</label>
  <input name="image2" type="file" class="custom-file-input" id="customFile">

</div>
 </div>
 </div>
 <div class="form-row">
     <div class="form-group col-md-6">
    <div class="custom-file">
      <br>
         <label for="inputImage">Choose image</label>
  <input name="image3" type="file" class="custom-file-input" id="customFile">

</div>
 </div>
   <div class="form-group col-md-6">
    <div class="custom-file">
      <br>
         <label for="inputImage">Choose image</label>
  <input name="image4" type="file" class="custom-file-input" id="customFile">

</div>
 </div>
 </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <br>
      <label for="inputprice4">Delivery Charges</label>
      <input   name="delivery_charges" type="delivery_charges" class="form-control" id="inputdelivery_charges4" placeholder="delivery_charges">
    </div>
    <div class="form-group col-md-6">
        <br>
      <label for="inputrent_price4">Show to Website</label>
    <select id="status" name="status"  class="form-select" >
  <option selected="selected">yes</option>
  <option>no</option>
   </select>
    </div>
  </div>

   <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="text" name="stock" class="form-control" placeholder="stock" style="width: 30%">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

<br>
<br><br><br>
</aside>
</div>



<script>
$(document).ready(function(){

    $('select').selectpicker();
});
</script>



@stop


