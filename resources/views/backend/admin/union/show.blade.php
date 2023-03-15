@extends('layouts.app')

@section('content')



<br>
<br>
<br>

<!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>الاسم</th>
                  <th>المحافظة</th>
                  <th>نسبة المبيعات</th>
                  <th>تكلفة المبيعات</th>
                  <th>شعار الاتحاد</th>
                  <th>توقيع مدير الاتحاد</th>
                </tr>
                </thead>
                <tbody>
                  @if($union)
                    @foreach($union as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->gov->name}}</td>
                        <td>{{$row->cost_persent}}</td>
                        <td>{{$row->cost}}</td>
                        <td>
                          <img src="{{$row->img}}" width="50px" height="80">
                        </td>
                        <td>
                          <img src="{{$row->sign}}" width="50px" height="80">
                        </td>
                        <td>
                          <a href="{{route('union-view',$row->id)}}"class="btn btn-warning"> تعديل</a>
                          <a href="{{route('union-del',$row->id)}}" class="btn btn-danger"> حذف</a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  @endsection