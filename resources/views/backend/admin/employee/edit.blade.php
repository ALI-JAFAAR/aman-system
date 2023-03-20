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
                  <input type="text" class="form-control" name="password" value="{{$data->password_show}}">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">الراتب الشهري</label>
                  <input type="text" class="form-control" name="salary" value="{{$data->salary}}">
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
                  <label for="exampleInputEmail1">حالة الحساب</label>
                  <select class="form-control" name="active">
                    <option value="{{$data->active==0?"معطل":"فعال"}}">{{$data->active==0?"معطل":"فعال"}}</option>
                    <option value="0">معطل</option>
                    <option value="1">فعال</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">الصلاحيات</label>
                  <select class="form-control" name="type">
                    <option value="{{$data->type}}">
                      @if($data->type == "accountant")
                        محاسب
                      @elseif($data->type == "checker")
                        مدقق
                      @elseif($data->type == "data_entry")
                         مدخل بيانات  
                      @else
                         جهة امنية او الاستخبارات 
                      @endif
                    </option>


                    <option  value="accountant">محاسب</option>

                    <option  value="checker"> مدقق</option>

                    <option  value="data_entry"> مدخل بيانات</option>

                    <option  value="police"> جهة امنية او الاستخبارات</option>


                  </select>
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