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
	              
	            	<div class="row">
	            		





		            	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">الاسم الرباعي</label>
				            	<input type="text" class="form-control" name="name" value="{{$data->name}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">اسم الام</label>
				            	<input type="text" class="form-control" name="mother" value="{{$data->mother}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">رقم الهاتف</label>
				            	<input type="number" class="form-control" name="phone"  value="{{$data->phone}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">التولد</label>
				            	<input type="date" class="form-control" name="dob" value="{{$data->dob}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">الجنس</label>
				            	<select type="text" class="form-control" name="gender">
				            		<option value="{{$data->name}}">{{$data->gender}}</option>
				            		<option value="ذكر">ذكر</option>
				            		<option value="انثى">انثى</option>
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">البريد الالكتروني</label>
				            	<input type="email" class="form-control" name="email" value="{{$data->email}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">العنوان ( محلة , زقاق , دار)</label>
				            	<input type="text" class="form-control" name="address" value="{{$data->address}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">اقرب نقطة دالة</label>
				            	<input type="text" class="form-control" name="point" value="{{$data->point}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">المحافظة</label>
				            	<select type="text" class="form-control" name="gov_id">
				            		<option  value="{{$data->gov_id}}">{{$data->govs->name}}</option>
				            		@if($gov ??'')
				            			@foreach($gov as $row)
				            				<option value="{{$row->id}}">{{$row->name}}</option>
				            			@endforeach
				            		@endif
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">الحزمة</label>
				            	<select type="text" class="form-control" name="package_id">
				            	<option  value="{{$data->package_id ??''}}">{{$data->package->name??''}}</option>
				            		@if($package ??'')
				            			@foreach($package as $row)
				            				<option value="{{$row->id}}">{{$row->name}}</option>
				            			@endforeach
				            		@endif
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">الاتحاد</label>
				            	<select type="text" id="unionx" class="form-control" onchange="union()" name="union_id">
				            	<option value="{{$data->union_id ??''}}">{{$data->union->name ??''}}</option>
				            		@if($union ??'')
				            			@foreach($union as $row)
				            				<option value="{{$row->id}}">{{$row->name}}</option>
				            			@endforeach
				            		@endif
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">النقابة</label>
				            	<select id="guildx" type="text" class="form-control" onchange="guild()" name="guild_id">
				            	<option  value="{{$data->guild_id ??''}}">
				            		@if($data->guild_id != null)
				            			 {{$data->guild->name}}
				            		@endif
				            	</option>
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">المهنة</label>
				            	<select type="text" id="guildsubx" class="form-control" name="guild_sub_id">
				            		<option  value="{{$data->guild_sub_id}}">
				            			@if($data->guild_sub_id != null)
				            				 {{$data->guildsub->name}}
				            			@endif
				            		</option>
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">التخصص</label>
				            	<input type="text" class="form-control" name="job" value="{{$data->job}}">
				            </div>
		              	</div>

		              	<div class="col-md-3">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">سنوات العمل</label>
				            	<select type="text" class="form-control" name="work_years">
				            		<option value="{{$data->work_years}}"> {{$data->work_years}}</option>
				            		<option value="1" >  1 </option>
    			            		<option value="2" >   2 </option>
    			            		<option value="3" >   3 </option>
    			            		<option value="4" >   4 </option>
    			            		<option value="5" >   5 </option>
    			            		<option value="6" >   6 </option>
    			            		<option value="7" >   7 </option>
    			            		<option value="8" >   8 </option>
    			            		<option value="9" >   9 </option>
    			            		<option value="10">   10 </option>
    			            		<option value="11" >  11 </option>
    			            		<option value="12" >  12 </option>
    			            		<option value="13" >  13 </option>
    			            		<option value="14" >  14 </option>
    			            		<option value="15" >  15 </option>
    			            		<option value="16" >  16 </option>
    			            		<option value="17" >  17 </option>
    			            		<option value="18" >  18 </option>
    			            		<option value="19" >  19 </option>
    			            		<option value="20">   20 </option>
    			            		<option value="21" >  21 </option>
    			            		<option value="22" >  22 </option>
    			            		<option value="23" >  23 </option>
    			            		<option value="24" >  24 </option>
    			            		<option value="25" >  25 </option>
    			            		<option value="26" >  26 </option>
    			            		<option value="27" >  27 </option>
    			            		<option value="28" >  28 </option>
    			            		<option value="29" >  29 </option>
    			            		<option value="30">   30 </option>
				            		
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-3">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">التصنيف</label>
				            	<select type="text" class="form-control" name="categorize">
				            		<option  value="{{$data->categorize}}"> {{$data->categorize}}</option>
					            	<option value="مساعد" > مساعد </option>
					            	<option value="ممارس" > ممارس </option>
					            	<option value="مؤهل"  > مؤهل  </option>
					            	<option value="مختص"  > مختص  </option>
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">عنوان العمل</label>
				            	<input type="text" class="form-control" name="job_address" value="{{$data->job_address}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">البلد</label>
				            	<select type="text" class="form-control" name="country">
				            		<option value="{{$data->country}}"> {{$data->country}}</option>
				            		<option value="العراق">العراق</option>
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">نوع الهوية</label>
				            	<select type="text" class="form-control" name="card_id">
				            	<option value="{{$data->card_id ??''}}">{{$data->card->name??''}}</option>
				            		@if($card ??'')
				            			@foreach($card as $row)
				            				<option value="{{$row->id}}">{{$row->name}} {{$row->type}}</option>
				            			@endforeach
				            		@endif
				            	</select>
				            </div>
		              	</div>

		              	<div class="col-md-3">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">رقم التامين</label>
				            	<input type="text" class="form-control" name="insurance" value="{{$data->insurance}}">
				            </div>
		              	</div>
		              	
		              	<div class="col-md-3">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">الضمان الاجتماعي</label>
				            	<input type="text" class="form-control" name="gov_insurance" value="{{$data->gov_insurance}}">
				            </div>
		              	</div>
		              	
		              	

		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">تاريخ الاشتراك</label>
				            	<input type="date" class="form-control" name="join_date" value="{{$data->join_date}}">
				            </div>
		              	</div>

		              	<div class="col-md-6">
	                        <div class="form-group ">
	                            <label for="photo"> الصورة الشخصية</label>
	                            <input type="file" multiple class="form-control" name="img"  >
	                        </div> 
		              	</div>


		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">المستمسكات  (الهوية وجه)</label>
				            	<input type="file" multiple class="form-control" name="imgs[]"  >
				            </div>
		              	</div>
		              	
		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">المستمسكات (الهوية  ظهر)</label>
				            	<input type="file" multiple class="form-control" name="imgs[]"  >
				            </div>
		              	</div>
		              	
		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">المستمسكات  (بطاقة السكن وجه)</label>
				            	<input type="file" multiple class="form-control" name="imgs[]"  >
				            </div>
		              	</div>
		              	
		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">المستمسكات (بطاقة السكن ظهر)</label>
				            	<input type="file" multiple class="form-control" name="imgs[]"  >
				            </div>
		              	</div>
		              	
		              	<div class="col-md-6">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1"> المستمسكات اخرى</label>
				            	<input type="file" multiple class="form-control" name="imgs[]"  >
				            </div>
				            <div class="row">
				            	<div class="col-md-12">
				            		@foreach($data->imgs as $rows)
				            			<img src="{{$rows->img}}" width="50px" height="50px">
				            		@endforeach
				            	</div>
				            </div>
		              	</div>

		              	<div class="col-md-12">
		              		<br><br>
		              	</div>


		              	<div class="col-md-12">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">كود الاحالة</label>
				            	<input type="text" class="form-control" name="reverral" value="{{$data->reverral}}">
				            </div>
		              	</div>

		              	<div class="col-md-12">
		              		<div class="form-group">
				            	<label for="exampleInputEmail1">الملاحظات</label>
				            	<textarea  class="form-control" name="note">{{$data->note}}</textarea>
				            </div>
		              	</div>

















	            	</div>

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

@section('script')
	

	<script>

		
		
		function union(){
			$("#guildx").each(function() {
				$(this).empty();
			});
			$("#guildsubx").each(function() {
				$(this).empty();
			});
			var x = $('#unionx').find(":selected").val();
			$.ajax({
			    type: "GET",
			    url: '{{asset('api/union')}}'+'/'+x,
			    dataType: 'json',
			    success: function(data){
			    	// alert(data['data'].length);
			    	for(var i=0;i<data['data'].length;i++){
			       		console.log(data['data'][i].name);
			       		$("#guildx").append('<option value='+data['data'][i].id+'>'+data['data'][i].name+'</option>');
			    	}
			    }
			 });
		}


		function guild(){
			var x = $('#guildx').find(":selected").val();
			$("#guildsubx").each(function() {
				$(this).empty();
			});
			$.ajax({
			    type: "GET",
			    url: '{{asset('api/guild')}}'+'/'+x,
			    dataType: 'json',
			    success: function(data){
			    	// alert(data['data'].length);
			    	for(var i=0;i<data['data'].length;i++){
			       		console.log(data['data'][i].name);
			       		$("#guildsubx").append('<option value='+data['data'][i].id+'>'+data['data'][i].name+'</option>');
			    	}
			    }
			 });
		}
		


		function photoPreview(input , image ) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {

                    $(image).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        
        $("#photo").change(function() {

                photoPreview(this , '#photo_pr');
        });


	</script>


@endsection