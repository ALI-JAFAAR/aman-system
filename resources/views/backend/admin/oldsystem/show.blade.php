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
                  <th>DisplayName</th>
                  <th>NameofMother</th>
                  <th>BirthDate</th>
                  <th>Mobile</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>CompleteAddress</th>
                  <th>MembershipPackage</th>
                  <th>Unions</th>
                  <th>Carrier</th>
                  <th>profession</th>
                  <th>BusinessStartDate</th>
                  <th>PlaceofWork</th>
                  <th>RegistrationTypeDisplayName</th>
                  <th>PolicyID</th>
                  <th>SocialSecurityNumber</th>
                  <th>SubscriptionDate</th>
                  <th>MembershipEndDate</th>
                  <th>MemberID</th>
                  <th>ResidentID</th>
                </tr>
                </thead>
                <tbody>

                  @if($old ??'')
                    @foreach($old as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        
                        <td>{{$row->DisplayName}}</td>
                        <td>{{$row->NameofMother}}</td>
                        <td>{{$row->BirthDate}}</td>
                        <td>{{$row->Mobile}}</td>
                        <td>{{$row->Gender}}</td>
                        <td>{{$row->Email}}</td>
                        <td>{{$row->CompleteAddress}}</td>
                        <td>{{$row->MembershipPackage}}</td>
                        <td>{{$row->Unions}}</td>
                        <td>{{$row->Carrier}}</td>
                        <td>{{$row->profession}}</td>
                        <td>{{$row->BusinessStartDate}}</td>
                        <td>{{$row->PlaceofWork}}</td>
                        <td>{{$row->RegistrationTypeDisplayName}}</td>
                        <td>{{$row->PolicyID}}</td>
                        <td>{{$row->SocialSecurityNumber}}</td>
                        <td>{{$row->SubscriptionDate}}</td>
                        <td>{{$row->MembershipEndDate}}</td>
                        <td>{{$row->MemberID}}</td>
                        <td>{{$row->ResidentID}}</td>
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