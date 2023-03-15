@extends('layouts.app')

@section('content')





<!-- Main content -->
    <section class="content">
      <div class="row">
         
       <h1 style="margin-right:50px"><i class="nav-icon fas fa-users"></i> المستخدمين</h1>
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ً ً </h3>
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
                  <th>الاتحاد \ المؤسسة</th>
                  <th>المنصب</th>
                  <th>النقابة</th>
                  <th>Action</th>
                </tr>
                
                </thead>

                <tbody>

                  @if($users ??'')
                    @foreach($users as $row)
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
                        <td>{{$row->position === '0' ?"Admin":$row->position}}</td>
                        <td>{{$row->guild_id != 0 ? $row->guild->name:''}}</td>
                        <td>
                          <a href="{{route('users-view',$row->id)}}"class="btn btn-warning"> تعديل</a>
                          <a href="{{route('users-del',$row->id)}}" class="btn btn-danger"> حذف</a>
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