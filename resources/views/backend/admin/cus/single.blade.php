@extends('layouts.app')

@section('content')
<br><br>

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                	<a href="{{route('cus-status-print',$cus->id)}}" type="button" class="btn btn-primary" style="margin-right: 15px;width: 100px;">
                    	<i class="fas fa-print"></i> طباعة
                  	</a>
                  	
                  	<a href="{{route('cus-view',$cus->id)}}" type="button" class="btn btn-warning" style="margin-right: 15px;width: 100px;">
                    	<i class="fas fa-print"></i> تعديل
                  	</a>
                </div>
              </div>
<br>
<div class="row">
          <div class="col-12">


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
              	
              	

              	<div class="col-6">
              		الاسم الرباعي : {{$cus->name ??''}}
              	</div>
              	<div class="col-6">
              		رقم الهاتف : {{$cus->phone  ??''}}
              	</div>



              	<div class="col-6">
              		كلمة المرور : {{$cus->password  ??''}}
              	</div>
              	<div class="col-6">
              		اسم الام : {{$cus->mother  ??''}}
              	</div>



              	<div class="col-6">
              		تاريخ الميلاد : {{$cus->dob  ??''}}
              	</div>
              	<div class="col-6">
              		العنوان : {{$cus->address  ??''}}
              	</div>



              	<div class="col-6">
              		البريد الالكتروني : {{$cus->email  ??''}}
              	</div>
              	<div class="col-6">
              		اقرب نقطة دالة : {{$cus->point  ??''}}
              	</div>



              	<div class="col-6">
              		المحافظة : {{$cus->govs->name  ??''}}
              	</div>
              	<div class="col-6">
              		الباقة : {{$cus->package->name  ??''}}
              	</div>



              	<div class="col-6">
              		الاتحاد : {{$cus->union->name??''}}
              	</div>
              	<div class="col-6">
              		النقابة : {{$cus->guild->name ??''}}
              	</div>



              	<div class="col-6">
              		التخصص : {{$cus->guildsub->name  ??''}}
              	</div>
              	<div class="col-6">
              		المهنة : {{$cus->job  ??''}}
              	</div>



              	<div class="col-6">
              		سنوات العمل : {{$cus->work_years  ??''}}
              	</div>
              	<div class="col-6">
              		عنوان العمل : {{$cus->job_address  ??''}}
              	</div>



              	<div class="col-6">
              		البلد : {{$cus->country  ??''}}
              	</div>
              	<div class="col-6">
              		الهوية : {{$cus->card->name  ??''}}
              		النوع : {{$cus->card->type  ??''}}
              	</div>



              	<div class="col-6">
              		رقم الهوية : {{$cus->card_no  ??''}}
              	</div>
              	<div class="col-6">
              		الضمان الاجتماعي : {{$cus->gov_insurance  ??''}}
              	</div>



              	<div class="col-6">
              		كود الاحالة : {{$cus->reverral  ??''}}
              	</div>
              	<div class="col-6">
              		كود الاحالة الخاص به : {{$cus->reverral_user  ??''}}
              	</div>



              	<div class="col-6">
              		تاريخ الانظمام : {{$cus->join_date  ??''}}
              	</div>
              	<div class="col-6">
              		تاريخ الانتهاء : {{$cus->end_date  ??''}}
              	</div>


              	<div class="col-6">
              		التصنيف : {{$cus->categorize  ??''}}
              	</div>
              	<div class="col-6">
              		الملاحظات : {{$cus->note  ??''}}
              	</div>


              	<div class="col-6">
              		المستخدم الذي ادخل البيانات : {{$cus->user->name  ??''}}
              	</div>
              	<div class="col-6">
              		حالة الهوية : 
              			@if($cus->status == 0)

              				<b style="color:red;font-size: 18px;">قيد التدقيق</b>

              			@else($cus->status == 1)
              				<b style="color:green;font-size: 18px;"> تمت الطباعه</b>
              			@endif
              	</div>



              	<div class="col-6">
              		حالة الاستلام : 
              			@if($cus->delivery_status ==0)
              				
              				<b style="color:red;font-size: 18px;">  لم يتم الارسال </b>
              			
              			@elseif($cus->delivery_status == 1)
              				
              				<b style="color:red;font-size: 18px;">	تم الارسال الى شركة التوصيل </b>
              			
              			@elseif($cus->delivery_status ==2)
              				
              				<b style="color:green;font-size: 18px;">	تم التوصيل</b>
              			
              			@else
              				
              				<b style="color:red;font-size: 18px;">	تم الرفض </b>
              			
              			@endif
              	</div>


              </div>
              <!-- info row -->
              <br><br><br>
              <div class="row invoice-info">
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>السؤال</th>
                      <th>الاجابة</th>
                    </tr>
                    </thead>
                    <tbody>
                    	@for($i=0;$i<17;$i++)
	                    	<tr>
		                      <td>{{$ques[$i]}}</td>
		                      <td>{{$ans[$i]}}</td>
		                    </tr>
                    	@endfor
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-12">
                  
                	<p class="lead">المستمسكات:</p>
                  
                  	@foreach($cus->imgs as $row)

	                	<img src="{{$row->img}}"  width="500" height="300" style="padding:15px;">

	                	

	                @endforeach
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
     <br><br><br>
@endsection