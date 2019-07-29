@extends('layouts.app')
@section('content')

<div class="content-page">
    <div class="content">
            <div class="container">
            	<!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Datatable</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Bitspeck</a></li>
                            <li class="active">All Catgory</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Category</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Category ID</th>
                                                    <th>Category Name</th>
                                                    <th>Category Description</th>
                                                    <th>Publication Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            	@foreach($actgr as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
													<td class="center">{{ $row->category_name }}</td>
													<td class="center">{{ $row->category_description }}</td>
													<td class="center">
														@if($row->publication_status==1)
														<span class="label label-success">Active</span>
														@else
															<span class="label label-danger">Unactive</span>
														@endif
													</td>

	                                            </tr>    
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

			</div>
		</div>
	</div>
@endsection