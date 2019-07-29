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
                            <div class="panel-heading"><h3 class="panel-title">View User</h3></div>
                            <div class="panel-body">
                                <form role="form" action="#" method="post" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <p>{{$vusr->name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <p>{{$vusr->email}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <p>{{$vusr->mobile_number}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <p>{{$vusr->address}}</p>
                                    </div>
                                    <div class="form-group">
                                    	<img style="height: 80px; width: 80px;" src="{{URL::to($vusr->photo)}}"/>
                                        <label for="exampleInputEmail1">Photo</label>
                                    </div>

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