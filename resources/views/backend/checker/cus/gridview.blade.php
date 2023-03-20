@extends('layouts.app')

@section('style')
 
@endsection

@section('content')

<br>
<br>
<!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="row"  style="margin-right: 30px;width: 800px;">
                  <div class="col-12">
                    
                    <form  enctype="multipart/form-data" method="post"  style="width: 400px;">
                      {{csrf_field()}}
                      <div class="row" style="width: 800px;">
                        <input type="text" name="search">
                        <input type="submit" value="بحث" style="margin-left: 16px;">
                        <a href="{{route('cus-table')}}" class="btn btn-primary" style="padding-right: 20px;  width:200px;">
                          <i class="fas fa-rows"></i> عرض افقي
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
<!-- Main content -->
<section class="content">
	
	<br>
	<div class="row d-flex align-items-stretch">

		@if($cus ??'')
			@foreach($cus as $row)

			<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                   <b>موظف الادخال: </b>{{$row->user->name}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                    <br>
                      <h2 class="lead"><b>{{$row->name}}</b></h2>
                      <p class="text-muted text-sm"><b>رقم الهاتف: </b>{{$row->phone}}</p>
                      <p class="text-muted text-sm"><b>المحافظة: </b>{{$row->govs->name}}</p>

                    </div>
                    <div class="col-5 text-center">
                    	<br>
                    	<img src="{{$row->img}}" class=" img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">

                    <a href="{{route('cus-single',$row->id)}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> عرض التفاصيل
                    </a>
                  </div>
                </div>
              </div>
            </div>
           	@endforeach
        @endif


    </div>
    <div>
          {{ $cus->links() }}
        </div>
</section>




@endsection

@section('script')
	
@endsection















