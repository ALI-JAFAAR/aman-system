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
                  <th>المهنة</th>
                  <th>النقابة</th>
                  <th>نوع النشاط</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if($guildsub ??'')
                    @foreach($guildsub as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->guild->name}}</td>
                        <td>{{$row->activity}}</td>
                        <td>
                          <a href="{{route(Auth::user()->type.'.guildsub-view',$row->id)}}"class="btn btn-warning"> تعديل</a>
                          <a href="{{route(Auth::user()->type.'.guildsub-del',$row->id)}}" class="btn btn-danger"> حذف</a>
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