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
                            <div class="panel-heading"><h3 class="panel-title">Edit Product</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{ url('/update-product/'.$eprdct->id)}}" method="post" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" value="{{$eprdct->product_name}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputEmail1">Category</label>
                                        <p>{{$eprdct->category_id}}</p>
                                        <div class="controls">

                                          <select id="selectError3" name="category_id" required>
                                            <option value="" disabled selected>Select Category</option>
                                        <?php
                                            $all_published_category=DB::table('categories')
                                                            ->where('publication_status',1)
                                                            ->get();

                                            foreach($all_published_category as $row){?>  
                                            <option value="{{$row->id}}">{{$row->category_name}}</option>
                                        <?php } ?>  
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Desc</label>
                                        <input type="text" class="form-control" name="product_description" value="{{$eprdct->product_description}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Price</label>
                                        <input type="text" class="form-control" name="product_price" value="{{$eprdct->product_price}}" required>
                                    </div>
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Old Photo</label>
                                        <img src="{{ URL::to($eprdct->photo)}}" name="old_photo" style="height: 80px; width: 80px;">
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