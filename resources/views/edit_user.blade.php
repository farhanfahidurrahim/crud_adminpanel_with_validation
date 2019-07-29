@extends('layouts.app')
@section('content')

<div class="content-page">
    <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Welcome !</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Bitspeck</a></li>
                            <li class="active">Admin Panel</li>
                        </ol>
                    </div>
                </div>

        		<div class="row">
                    <!-- Basic example -->
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Edit User</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{ url('/update-userdetails/'.$eusr->id)}}" method="post" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$eusr->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$eusr->email}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile_number" value="{{$eusr->mobile_number}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$eusr->address}}" required>
                                    </div>
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Old Photo</label>
                                        <img src="{{ URL::to($eusr->photo)}}" name="old_photo" style="height: 80px; width: 80px;">
                                    </div>
                                    <div class="form-group">
                                    	<img id="image" src="#"/>
                                        <label for="exampleInputEmail1">New Photo</label>
                                        <input type="file" name="photo" accept="image/*" onchange="readURL(this);">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div>
            </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>   

@endsection                       