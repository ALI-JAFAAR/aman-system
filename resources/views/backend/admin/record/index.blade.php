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
                  <th>ID                   </th>
                  <th>الاسم الرباعي       </th>
                  <th>رقم الهاتف          </th>
                  <th>كلمة المرور         </th>
                  <th>اسم الام الثلاثي    </th>
                  <th>تاريخ التولد        </th>
                  <th>العنوان             </th>
                  <th>اقرب نقطة دالة      </th>
                  <th>المحافظة            </th>
                  <th>الحزمة              </th>
                  <th>الاتحاد             </th>
                  <th>النقابة             </th>
                  <th>المهنة              </th>
                  <th>العمل               </th>
                  <th>سنوات الخبرة        </th>
                  <th>التصنيف             </th>
                  <th>عنوان العمل         </th>
                  <th>البلد               </th>
                  <th>نوع الهوية          </th>
                  <th>رقم الهوية          </th>
                  <th>الضمان الاجتماعي    </th>
                  <th>كود الاحالة         </th>
                  <th>كود الاحالة الخاص به</th>
                  <th>تاريخ الاشتراك      </th>
                  <th>تاريخ الانتهاء      </th>
                  <th>الجنس               </th>
                  <th>الصورة الشخصية      </th>
                  <th>الملاحظات           </th>
                  <th>Action              </th>
                </tr>
                </thead>
                <tbody>
                  @if($cus ??'')
                    @foreach($cus as $row)
                      <tr>
                        <td>{{$row->id            ??''}}</td>
                        <td>{{$row->name          ??''}}</td>
                        <td>{{$row->phone         ??''}}</td>
                        <td>{{$row->password      ??''}}</td>
                        <td>{{$row->mother        ??''}}</td>
                        <td>{{$row->dob           ??''}}</td>
                        <td>{{$row->address       ??''}}</td>
                        <td>{{$row->point         ??''}}</td>
                        <td>{{$row->govs->name    ??''}}</td>
                        <td>{{$row->package->name ??''}}</td>
                        <td>{{$row->union->name   ??''}}</td>
                        <td>{{$row->guild->name   ??''}}</td>
                        <td>{{$row->guildsub->name??''}}</td>
                        <td>{{$row->job           ??''}}</td>
                        <td>{{$row->work_years    ??''}}</td>
                        <td>{{$row->categorize    ??''}}</td>
                        <td>{{$row->job_address   ??''}}</td>
                        <td>{{$row->country       ??''}}</td>
                        <td>{{$row->card->name    ??''}}</td>
                        <td>{{$row->card_no       ??''}}</td>
                        <td>{{$row->gov_insurance ??''}}</td>
                        <td>{{$row->reverral      ??''}}</td>
                        <td>{{$row->reverral_user ??''}}</td>
                        <td>{{$row->join_date     ??''}}</td>
                        <td>{{$row->end_date      ??''}}</td>
                        <td>{{$row->gender        ??''}}</td>
                        <td>
                          <img src="{{$row->img}}" width="50px" height="80">
                        </td>
                        <td>{{$row->note}}</td>
                        <td>
                          <a href="{{route('record-view',$row->id)}}"class="btn btn-warning"> عرض السجل</a>
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