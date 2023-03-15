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
                  <label for="exampleInputEmail1">اسم الاتحاد</label>
                  <input type="text" class="form-control" value="{{$data->name}}" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">نسبة النقابة</label>
                  <input type="text" class="form-control" value="{{$data->cost}}" name="cost">
                </div>
                
                

                <div class="form-group">
                  <label for="exampleInputEmail1">المحافظة</label>
                  <select type="text" class="form-control" name="union_id">
                    <option value="{{$data->union_id}}"> {{$data->union_id !=0?$data->union->name:''}}</option>
                    @if($union ??'')
                      @foreach($union as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">شعار النقابة</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">اختر ملف</label>
                    </div>
                  </div>
                  <div>
                    <br>
                    <img src="{{$data->img}}"  width="120px" height="150px">
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">توقيع مدير النقابة</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="sign" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">اختر ملف</label>
                    </div>
                  </div>
                  <div>
                    <br>
                    <img src="{{$data->sign}}"  width="120px" height="150px">
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