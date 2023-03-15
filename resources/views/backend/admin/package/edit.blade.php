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
	                <label >الاسم</label>
	                <input type="text" class="form-control" name="name" value="{{$data->name}}">
	              </div>
                  <div class="form-group">
	                <label for="exampleInputEmail1">سعر الباقة</label>
	                <input type="number" class="form-control" name="cost" value="{{$data->cost}}">
	              </div>
	              <div class="form-group">
	                <label for="exampleInputEmail1">سقف الباقة</label>
	                <input type="text" class="form-control" name="max_value" value="{{$data->max_value}}">
	              </div>
	              <div class="form-group">
	                <label for="exampleInputEmail1">التفاصيل</label>
	                <textarea id="editor" class="form-control" name="details">{{$data->details}}</textarea>
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