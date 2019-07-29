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
                            <li class="active">Add Sale</li>
                        </ol>
                    </div>
                </div>

        		<div class="row">
                    <!-- Basic example -->
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Add Sale</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{ url('/insert-sale')}}" method="post">
                                	@csrf
                                    									<div class="form-group">
                                        <label class="control-label" for="">Customer Name</label>
                                        <div class="controls">
                                          <select id="customer_name" name="customer_name" required>
                                            <option value="" disabled selected>Select Customer</option>
                                        <?php
                                            $customers=DB::table('userDetails')
                                                            ->get();

                                            foreach($customers as $row){?>  
                                            <option value="{{$row->id }}">{{ $row->name }}</option>
                                        <?php } ?>  
                                          </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="">Product</label>
                                        <div class="controls">
                                          <select id="product" name="product" required>
                                            <option value="" disabled selected>Select Product</option>
                                        <?php
                                            $all_info_p=DB::table('products')
                                                            ->get();

                                            foreach($all_info_p as $row){?>  
                                            <option value="{{$row->product_name }}">{{$row->product_name}}</option>
                                        <?php } ?>  
                                          </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="">Quantity</label>
                                        <input type="number" min="1" value="1" class="form-control" name="quantity" id="quantity">
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