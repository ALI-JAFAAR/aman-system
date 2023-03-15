@extends('layouts.app')

@section('content')

<br><br><br>
<div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">السجل الاداري</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">السجل المهني</a></li>
                  <li class="nav-item"><a class="nav-link " href="#settings" data-toggle="tab">السجل الصحي</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane " id="activity" style="direction: rtl !important;">
                      
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">الاسم</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->name}}
                      </p>

                    </div>
                    <!-- /.post -->
                    
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">التولد</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->name}}
                      </p>

                    </div>
                    <!-- /.post -->
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">الجنس</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->name}}
                      </p>

                    </div>
                    <!-- /.post -->
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">الحالة الاجتماعية</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->name}}
                      </p>

                    </div>
                    <!-- /.post -->
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">رقم الهاتف</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->phone}}
                      </p>

                    </div>
                    <!-- /.post -->
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">البريد الالكتروني</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->email===null? "  ": $cus->email}}
                      </p>

                    </div>
                    <!-- /.post -->
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block" style="float:right !important">
                        <span class="username">
                          <a href="#" style="color:#000">عنوان السكن</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$cus->address}}
                      </p>

                    </div>
                    <!-- /.post -->
                    



                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          {{$cus->created_at}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <h3 class="timeline-header"><a href="#">عنوان العمل</a> {{$cus->job_address}}</h3>

                        </div>
                      </div>
                      <!-- END timeline item -->
                      
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane " id="settings">
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>


  @endsection