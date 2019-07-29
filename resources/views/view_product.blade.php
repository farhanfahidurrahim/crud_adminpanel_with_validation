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
                            <div class="panel-heading"><h3 class="panel-title">View Product</h3></div>
                            <div class="panel-body">
                                <form role="form" action="#" method="post" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product ID</label>
                                        <p>{{$vprdct->id}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <p>{{$vprdct->product_name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Catgory Name</label>
                                        <p>{{$vprdct->category_id}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Description</label>
                                        <p>{{$vprdct->product_description}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Price</label>
                                        <p>{{$vprdct->product_price}}</p>
                                    </div>
                                    <div class="form-group">
                                    	<img style="height: 80px; width: 80px;" src="{{URL::to($vprdct->photo)}}"/>
                                        <label for="exampleInputEmail1">Product Photo</label>
                                    </div>

                                </form>
                            </div>
                        </div> 
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