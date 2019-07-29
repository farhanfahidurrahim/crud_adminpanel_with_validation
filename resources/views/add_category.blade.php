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
                            <li class="active">Add Category</li>
                        </ol>
                    </div>
                </div>

        		<div class="row">
                    <!-- Basic example -->
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Add Category</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{ url('/insert-category')}}" method="post">
                                	@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" class="form-control" name="category_name" placeholder="Enter name" required>
                                    </div>
                                    <div class="control-group hidden-phone">
							 			 <label class="control-label" for="textarea2">Category Description</label>
							  			<div class="controls">
											<textarea class="cleditor" name="category_description" rows="3" required></textarea>
							  			</div>
									</div>
                                    <div class="control-group hidden-phone">
                                        <label class="control-label" for="textarea2">Publication Status</label>
                                        <div class="controls">
                                          <input type="checkbox" name="publication_status" value="1" required>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div>
            </div>
		</div>
	</div>
</div>  

@endsection                       