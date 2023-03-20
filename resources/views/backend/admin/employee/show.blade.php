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
                  <th>البريد الالكتروني</th>
                  <th>رقم الهاتف</th>
                  <th>كلمة المرور</th>
                  <th> المؤسسة</th>
                  <th>المنصب</th>
                  <th>الراتب الشهري</th>
                  <th>حالة الحساب</th>
                  <th>المستمسكات</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if($employee ??"")
                    @foreach($employee as $row)
                    <tr>
                      <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->password_show}}</td>
                        <td>
                            @if($row->org_id !=0)
                              <p>مؤسسة امان</p>
                            @endif
                            @if($row->unioin_id != 0 || $row->union_id != null)
                               {{$row->union->name}}
                            @endif
                          </td>
                        <td>{{$row->position }}</td>
                        <td>{{$row->salary }}</td>
                        <td>{{$row->active ==0?"معطل":"فعال" }}</td>  
                        <td>
                            @foreach($row->imgs as $x)
        	                	<img src="{{$x->img}}"  width="200" height="200" style="padding:15px;">
        	                @endforeach
                        </td>
                        <td>
                          <a href="{{route(Auth::user()->type.'.employee-view',$row->id)}}"class="btn btn-warning"> تعديل</a>
                          <a href="{{route(Auth::user()->type.'.employee-del',$row->id)}}" class="btn btn-danger"> حذف</a>
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