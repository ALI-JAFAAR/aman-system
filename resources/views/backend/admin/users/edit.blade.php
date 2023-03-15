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
	                <label for="exampleInputEmail1">البريد الالكتروني</label>
	                <input type="text" class="form-control" name="email" value="{{$data->email}}">
	            </div>

	            <div class="form-group">
	                <label for="exampleInputEmail1">رقم الهاتف</label>
	                <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
	            </div>

	            <div class="form-group">
	                <label for="exampleInputEmail1">كلمة المرور</label>
	                <input type="text" class="form-control" name="password_show" value="{{$data->password_show}}">
	            </div>

	            <div class="form-group">
	                <label for="exampleInputEmail1">المنصب</label>
	                <select class="form-control" name="position">
	                	<option value="{{$data->position}}">{{$data->position}}</option>
	                	@if($pos ??'')
	                		@foreach($pos as $row)
	                			<option value="{{$row->position}}">{{$row->position}}</option>
	                		@endforeach
	                	@endif
	                </select>
	            </div>


	            <div class="form-group">
	                <label for="exampleInputEmail1">الاتحاد</label>
	                <select class="form-control" name="union_id">
	                	<option value="{{$data->union_id}}">{{$data->union_id !=0 ? $data->union->name:''}}</option>
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
	                	<option value="{{$data->guild_id}}">{{$data->guild_id !=0 ? $data->guild->name:''}}</option>
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