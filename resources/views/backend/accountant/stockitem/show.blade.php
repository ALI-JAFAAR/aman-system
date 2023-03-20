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
                  <th>المخزن</th>
                  <th>التكلفة</th>
                  <th>العدد</th>
                  <th>الملاحظات</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if($stockitem ??'')
                    @foreach($stockitem as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->stock->name}}</td>
                        <td>{{$row->cost}}</td>
                        <td>{{$row->qty}}</td>
                        <td>{{$row->note}}</td>
                        <td>
                          <a href="{{route(Auth::user()->type.'.stockitem-view',$row->id)}}"class="btn btn-warning"> تعديل</a>
                          <a href="{{route(Auth::user()->type.'.stockitem-del',$row->id)}}" class="btn btn-danger"> حذف</a>
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