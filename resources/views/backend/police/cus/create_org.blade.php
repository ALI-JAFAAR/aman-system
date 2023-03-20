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
	          	{{csrf_field()}}
	            <div class="card-body">

	              <div class="row">

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الاسم الرباعي</label>
			            	<input type="text" class="form-control" name="name" >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">اسم الام</label>
			            	<input type="text" class="form-control" name="mother"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">رقم الهاتف</label>
			            	<input type="number" class="form-control" name="phone"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">التولد</label>
			            	<input type="date" class="form-control" name="dob"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الجنس</label>
			            	<select type="text" class="form-control" name="gender">
			            		<option value="ذكر">ذكر</option>
			            		<option value="انثى">انثى</option>
			            	</select>
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">البريد الالكتروني</label>
			            	<input type="email" class="form-control" name="email"  >
			            </div>
	              	</div>
	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">المحافظة</label>
			            	<select type="text" class="form-control" name="gov_id">
			            		<option></option>
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
			            	<label for="exampleInputEmail1">العنوان ( محلة , زقاق , دار)</label>
			            	<input type="text" class="form-control" name="address"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">اقرب نقطة دالة</label>
			            	<input type="text" class="form-control" name="point"  >
			            </div>
	              	</div>

	              

	              	<div class="col-md-6">
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
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">المهنة</label>
			            	<input type="text" class="form-control" name="job">
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">سنوات العمل</label>
			            	<select type="text" class="form-control" name="work_years">
			            		<option value="1" >    1 </option>
			            		<option value="2" >    2 </option>
			            		<option value="3" >    3 </option>
			            		<option value="4" >    4 </option>
			            		<option value="5" >    5 </option>
			            		<option value="6" >    6 </option>
			            		<option value="7" >    7 </option>
			            		<option value="8" >    8 </option>
			            		<option value="9" >    9 </option>
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

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">عنوان العمل</label>
			            	<input type="text" class="form-control" name="job_address"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">البلد</label>
			            	<select type="text" class="form-control" name="country">
			            	<option value="العراق">العراق</option>
			            	</select>
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">نوع الهوية</label>
			            	<select type="text" class="form-control" name="card_id">
			            	<option></option>
			            		@if($card ??'')
			            			@foreach($card as $row)
			            				<option value="{{$row->id}}">{{$row->name}} {{$row->type}}</option>
			            			@endforeach
			            		@endif
			            	</select>
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الضمان الاجتماعي</label>
			            	<input type="text" class="form-control" name="gov_insurance"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">تاريخ الاشتراك</label>
			            	<input type="date" class="form-control" name="join_date"  >
			            </div>
	              	</div>

	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الصورة الشخصية</label>
			            	<input type="file"  class="form-control" name="img"  required>
			            </div>
	              	</div>


	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">المستمسكات  (الهوية وجه)</label>
			            	<input type="file"  class="form-control" name="imgs[]"  required>
			            </div>
	              	</div>
	              	
	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">المستمسكات  (الهوية ظهر)</label>
			            	<input type="file"  class="form-control" name="imgs[]"  required>
			            </div>
	              	</div>
	              	
	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">المستمسكات  (بطاقة السكن وجه)</label>
			            	<input type="file"  class="form-control" name="imgs[]"  required>
			            </div>
	              	</div>
	              	
	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">المستمسكات  (بطاقة السكن ظهر)</label>
			            	<input type="file"  class="form-control" name="imgs[]"  required>
			            </div>
	              	</div>
	              	
	              	<div class="col-md-6">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">اخرى</label>
			            	<input type="file"  class="form-control" name="imgs[]"  >
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<br><br>
	              	</div>


	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض القلب والشرايين (الضغط – شرايين القلب – عضل القلب – جلطة في الدماغ – نزيف في الدماغ – سائر امراض القلب والشرايين)	</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q1"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q1" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>




	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض الجهاز التنفسي ماعدا السرطان (الربو –انسداد القصبات الهوائية – تشمع الرئة – امراض أخرى)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q2"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q2" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>


	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض الجهاز الهضمي ماعدا السرطان (قولون – التهاب الامعاء – جيوب في الامعاء – امراض المرارة – الكبد – البنكرياس)	</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q3"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q3" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض الكلى والمسالك البولية (حصوة – التهاب – قصور – تكيس)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q4"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q4" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض العضم ماعدا السرطان او الاطراف المزروعة</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q5"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q5" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض الجهاز العصبي ماعدا السرطان (شلل الاطفال – انهيار عصبي – تليف لويحي – الصرع ...)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q6"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q6" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">السكري او امراض الغدد ماعدا السرطان</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q7"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q7" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض الاذن، الانف والحنجرة او العين ماعدا السرطان</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q8"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q8" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض الدم ماعدا الامراض الخبيثة (فقر الدم)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q9"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q9" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض خبيثة (اورام خبيثة وامراض خبيثة في الدم)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q10"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q10" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الامراض المنتقلة جنسيا ومرض او فيروس الايدز	</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q11"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q11" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">امراض اخرى. حوادث او عمليات تنظير او فحوصات تشخيصية سابقة او مستقبلية على علم مسبق بها	</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q12"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q12" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1"> هل تتناول اي دواء او تتابع اي علاج</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q13"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q13" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">للنساء: هل انت حامل في الوقت الحاضر	</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q14"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q14" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الامراض والعاهات الخلقية</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q15"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q15" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الامراض النفسية (كأبة – توتر)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q16"   value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q16" checked   value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">هل تعاني من عوارض متعلقة بالأمراض المذكورة اعاله (اوجاع ظهر – اوجاع صدر – اوجاع مفاصل)</label>
			            	<br>
			            	<div class="row">
			            		<div class="col-md-4">
			            			نعم<input type="radio" name="q17" value="1"> 
			            		</div>
			            		<div class="col-md-4">
			            			كلا<input type="radio" name="q17" checked  value="0">
			            		</div>
			            	</div>
			            	
			            	 
							<br>
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">كود الاحالة</label>
			            	<input type="text" class="form-control" name="reverral">
			            </div>
	              	</div>

	              	<div class="col-md-12">
	              		<div class="form-group">
			            	<label for="exampleInputEmail1">الملاحظات</label>
			            	<textarea  class="form-control" name="note"></textarea>
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
		




	</script>


@endsection















