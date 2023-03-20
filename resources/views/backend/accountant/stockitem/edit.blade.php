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
                  <label for="exampleInputEmail1">اسم المخزن</label>
                  <input type="text" class="form-control" value="{{$data->name}}" name="name">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">المخزن</label>
                  <select class="form-control" name="stock_id">
                    <option value="{{$data->stock_id}}">{{$data->stock->name}}</option>
                    @if($stock ??'')
                      @foreach($stock as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">التكلفة</label>
                  <input type="text" class="form-control" value="{{$data->cost}}" name="cost" >
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">العدد</label>
                  <input type="number" class="form-control" value="{{$data->qty}}" name="qty" >
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">الملاحظات</label>
                  <textarea type="text" class="form-control" name="note">{{$data->note}}</textarea>
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