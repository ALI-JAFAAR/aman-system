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
	                <label for="exampleInputEmail1">النشاط</label>
	                <select type="text" class="form-control" name="activity">
	                	<option></option>
	                	@if($activity ??'')
	                		@foreach($activity as $row)
	                			<option value="{{$row->name}}">{{$row->name}}</option>
	                		@endforeach
	                	@endif
	                </select>
	              </div>
	              <div class="form-group">
	                <label for="exampleInputEmail1">النقابة</label>
	                <select type="text" class="form-control" name="guild_id">
	                	<option></option>
	                	@if($guild ??'')
	                		@foreach($guild as $row)
	                			<option value="{{$row->id}}">{{$row->name}}</option>
	                		@endforeach
	                	@endif
	                </select>
	              </div>
	              
	              <div class="row">
	              		<div class="col-md-10">
	              			<div id="placeholder">
					            <div class="form-group" id="template">
					            	<label for="exampleInputEmail1">المهنة</label>
					                <input type="text" class="form-control" name="name[]">
					            </div>
				            </div>
	              		</div>

			            <div class="col-md-2">
			            	<button type="button" class="btn btn-danger" name="add" onclick="Add();">اضافة حقل اخر</button>
			            </div>
			        </div>
	              
	              

	              


	            </div>
	            <!-- /.card-body -->

	            <div class="card-footer">
	              <button type="submit" class="btn btn-primary btn-lg btn-block">حفظ</button>
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
  
    @section('script')

<script type="text/javascript">
	var _counter = 0;
	function Add() {
	  _counter++;
	  var oClone = document.getElementById("template").cloneNode(true);
	  oClone.id += (_counter + "");
	  document.getElementById("placeholder").appendChild(oClone);
	}
</script>

  @endsection