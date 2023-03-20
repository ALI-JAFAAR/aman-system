@extends('layouts.app')

@section('style')
 
@endsection

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
	            <div class="card-body">
	            	<div class="row">

		              	<div class="col-md-12">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">نوع الخدمة</label>
				            	<select type="text" class="form-control" id="service" onchange="services()">
				            		<option></option>
				            		<option value="org">هوية مؤسسة امان للخدمات العامة والتنمية المستدامة</option>
				            		<option value="guild">الاتحاد العام لنقابات العمال في العراق</option>
				            		<option value="audiance">بطاقة خدمات امان للجمهور </option>
				            	</select>
				            </div>
		              	</div>
	              	</div>
	            </div>

	            <div class="card-footer">
	            </div>

	          </form>

	        </div>

	        <div class="col-md-2"></div>

      </div>

	</div>

</section>
    <!-- /.content -->

  @endsection

@section('script')
	

	<script>

		function services(){
			var x = $('#service').find(":selected").val();
			console.log(x);
			if(x =='org'){
				window.location = '{{route('cus-org',['2','4'])}}';
			}
			if(x =='guild'){
				window.location = '{{route('cus-guild',['3','5'])}}';
			}
		}

	</script>


@endsection