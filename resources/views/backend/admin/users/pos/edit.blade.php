@extends('layouts.app')

@section('content')





<!-- Main content -->
<section class="content">
	<br>
	<br>
	<br>
	<div class="row">

		<div class="col-md-2"></div>

		<div class="col-md-8">
	        <!-- general form elements -->
	        <div class="card card-primary">
	          <div class="card-header">
	            <h3 class="card-title">اضافة</h3>
	          </div>
	          <!-- /.card-header -->
	          <!-- form start -->
	          <form role="form" enctype="multipart/form-data" method="post">
	          	{{csrf_field()}}
	            <div class="card-body">
	              

	              <div class="form-group">
	                <label for="exampleInputEmail1">المنصب</label>
	                <input type="text" class="form-control" value="{{$data->position}}" name="position" >
	              </div>


	            <div class="card-footer">
	            	<br>
	            	<button type="submit" class="btn btn-primary btn-lg btn-block">حفظ</button>
	            	<br>
	            </div>
	          </form>
	        </div>
	        <!-- /.card -->

	        <div class="col-md-2"></div>

      </div>

	</div>

</section>
    <!-- /.content -->

  @endsection