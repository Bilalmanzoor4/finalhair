  @extends ('default')

  @section ('content')

<style type="text/css">
    
body {
   
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    
</style>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        <form action="{{route('updateprofile')}}" method="Post" enctype="multipart/form-data" >
                @csrf
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
               @if($user->image)
                 <img class="rounded-circle mt-5" width="150px" height="150px" src="{{asset('upload/profile/'.$user->image)}}" >
                 @endif
                <div class="col-md-12"><label class="labels">Upload Image</label><input type="file" name="image"  class="form-control" ></div>
                <br>
                <span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"  value="{{$user->name}}"  name="name"></div>
                  
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control"  value="{{$user->mobile}}" name="mobile" ></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" value="{{$user->email}}"  name="email"  readonly></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control"  value="{{$user->address1}}" name="address1" ></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control"  value="{{$user->address2}}" name="address2" ></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" value="{{$user->pincode}}"  name="pincode"></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control"  value="{{$user->city}}"  name="city"></div>
                    
                </div>
                <div class="row mt-3">
                      <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="{{$user->state}}"  name="state" ></div>
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" value="{{$user->country}}" name="country" ></div>
                </div>
                <div class="mt-5 text-center"><input class="btn btn-dark"  type="submit" value="Update"></div>
        </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Change Password</span><span class="border px-3 p-1 add-experience"><i class=""></i>&nbsp;Update</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
               
            </div>
        </div>
    </div>
</div>
</div>
</div>


@stop