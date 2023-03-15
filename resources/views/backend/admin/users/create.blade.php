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
	                <label for="exampleInputEmail1">البريد الالكتروني</label>
	                <input type="text" class="form-control" name="email" >
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">رقم الهاتف</label>
	                <input type="text" class="form-control" name="phone" >
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">كلمة المرور</label>
	                <input type="text" class="form-control" name="password" >
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">المنصب</label>
	                <select class="form-control" name="position">
	                	<option value="0"></option>
	                	@if($pos ??'')
	                		@foreach($pos as $row)
	                			<option value="{{$row->position}}">{{$row->position}}</option>
	                		@endforeach
	                	@endif
	                </select>
	              </div>


	              <div class="form-group">
	                <label for="exampleInputEmail1">الجهات</label>
	                <select class="form-control" name="union_id">
	                	<option value="0"></option>
	                	@if($union ??'')
	                		@foreach($union as $row)
	                			<option value="{{$row->id}}">{{$row->name}}</option>
	                		@endforeach
	                	@endif
	                </select>
	              </div>

	              <div class="form-group">
	                <label for="exampleInputEmail1">النقابة</label>
	                <select class="form-control" name="guild_id">
	                	<option value="0"></option>
	                	@if($guild ??'')
	                		@foreach($guild as $row)
	                			<option  value="{{$row->id}}">{{$row->name}}</option>
	                		@endforeach
	                	@endif
	                </select>
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