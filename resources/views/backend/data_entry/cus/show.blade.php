@extends('layouts.app')

@section('content')




<br>
<br>
<div class="row no-print">

              </div>
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
                  <th>ID                  </th>
                  <th>الاسم الرباعي        </th>
                  <th>تاريخ التولد        </th>
                  <th>المحافظة            </th>
                  <th>الحزمة              </th>
                  <th>النقابة             </th>
                  <th>المهنة              </th>
                  <th>العمل               </th>
                  <th>التصنيف             </th>
                  <th>عنوان العمل         </th>
                  <th>رقم التامين         </th>
                  <th> الحالة      </th>
                  <th> تاريخ المعاملة      </th>
                  <th>  الملاحظات      </th>
                  <th>Action              </th>
                </tr>
                </thead>
                <tbody>
                  @if($cus ??'')
                    @foreach($cus as $row)
                      <tr>
                        <td>{{$row->id            ??''}}</td>
                        <td>{{$row->name          ??''}}</td>
                        <td>{{$row->dob           ??''}}</td>
                        <td>{{$row->govs->name    ??''}}</td>
                        <td>{{$row->package->name ??''}}</td>
                        <td>{{$row->guild->name   ??''}}</td>
                        <td>{{$row->guildsub->name??''}}</td>
                        <td>{{$row->job           ??''}}</td>
                        <td>{{$row->categorize    ??''}}</td>
                        <td>{{$row->job_address   ??''}}</td>
                        <td>{{$row->insurance     ??''}}</td>
                        <td>{{$row->status==0?"قيد التدقيق":"تمت الطباعه"}}</td>
                        <td>{{$row->created_at     ??''}}</td>
                        <td>{{$row->note     ??''}}</td>
                        <td>
                          <a href="{{route(Auth::user()->type.'.cus-view',$row->id)}}"class="btn btn-warning"> تعديل</a>
                          <a href="{{route(Auth::user()->type.'.cus-del',$row->id)}}" class="btn btn-danger"> حذف</a>
                          <br><br>
                          @if($row->status ==0)
                            <a href="{{route(Auth::user()->type.'.cus-status-print',$row->id)}}" class="btn btn-success">اتمام التدقيق</a>
                          @else
                            <a href="{{route(Auth::user()->type.'.cus-print',$row->id)}}" class="btn btn-success">طباعة</a>
                          @endif
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
        <div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  @endsection