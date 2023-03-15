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
	                <label for="exampleInputEmail1">الاسم</label>
	                <input type="text" class="form-control" name="name" >
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">الباقة</label>
	                <select type="text" class="form-control" name="package_id">
	                	<option></option>
	                	@if($package ??'')
	                		@foreach($package as $row)
	                			<option value="{{$row->id}}">{{$row->name}}</option>
	                		@endforeach
	                	@endif
	                </select>
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">النسبة او المبلغ</label>
	                <input type="number" class="form-control" name="cost" >
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">شعار الشريك</label>
	                <input type="file" class="form-control" name="img" >
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">تفاصيل اخرى او ملاحظات</label>
	                <textarea type="text" class="form-control" name="details" ></textarea>
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