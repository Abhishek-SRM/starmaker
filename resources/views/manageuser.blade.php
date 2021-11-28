@extends('layout.master')
@section('title', 'Manage Users')

@section('content')
    <!-- BEGIN: Content-->
    <style>
        .card{
            box-shadow: 0px 4px 25px 0px rgb(0 0 0 / 10%) !important;
        }
     .card .btn{
         font-size: 12px;
     }
     #nav-tabs{
        border-radius: 20px;
     }
     .nav.nav-tabs .nav-item .nav-link.active{
        overflow: hidden;
        border-radius: 4px;
        color:white !important;
        background: linear-gradient(118deg,#009FFF, #EC2F4B );
     }
     
     .btn-grad {background-image: linear-gradient(to right, #DC2424 0%, #4A569D  51%, #DC2424  100%)}
         .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
    
    </style>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="col-md-12 col-12">
                    <section id="nav-filled">
                        <div class="row">
                            <div class="col-sm-12 p-0">
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <h4 class="card-title">Users</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active shadow mr-2" id="home-tab-fill" data-toggle="tab"
                                                        href="#home-fill" role="tab" aria-controls="home-fill"
                                                        aria-selected="true">All Users</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link shadow ml-2" id="profile-tab-fill" data-toggle="tab"
                                                        href="#profile-fill" role="tab" aria-controls="profile-fill"
                                                        aria-selected="false">Banned Users</a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content pt-1">
                                                <div class="tab-pane active" id="home-fill" role="tabpanel"
                                                    aria-labelledby="home-tab-fill">
                                                    <div class="row">
                                                        @foreach ($users as $user)
                                                        <div class="col-xl-3 col-md-6 col-sm-12 profile-card-1">
                                                            <div class="card" style="height: 299.663px;  box-shadow: 0px 4px 25px 0px rgb(0 0 0 / 10%) !important;">
                                                                <div class="card-header mx-auto">
                                                                    <div class="avatar avatar-xl">
                                                                        <img class="img-fluid"
                                                                            src="{{ asset('app-assets/images/portrait/small/avatar-s-12.jpg') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="card-content">
                                                                    <div class="card-body text-center">
                                                                        <h4>{{$user->first_name}}</h4>
                                                                        <p>{{$user->bio}}</p>
                                                                        <div
                                                                            class="card-btns d-flex justify-content-between">
                                                                            <button
                                                                                class="btn btn-sm p-1 gradient-light-primary waves-effect waves-light">Edit
                                                                                Details</button>
                                                                            <button
                                                                                class="btn btn-sm p-1 btn-outline-primary waves-effect waves-light">Ban
                                                                                User</button>
                                                                        </div>
                                                                        <hr class="my-2">
                                                                        <div class="d-flex justify-content-between">
                                                                            <div class="float-left">
                                                                                <i
                                                                                    class="feather icon-clock text-warning mr-50"></i>
                                                                                    10/05/2021
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach   
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="profile-fill" role="tabpanel"
                                                    aria-labelledby="profile-tab-fill">
                                                    <div class="row">
                                                        @for ($i = 0; $i < 6; $i++)
                                                        <div class="col-xl-3 col-md-6 col-sm-12 profile-card-1">
                                                            <div class="card" style="height: 299.663px;  box-shadow: 0px 4px 25px 0px rgb(0 0 0 / 10%) !important;">
                                                                <div class="card-header mx-auto">
                                                                    <div class="avatar avatar-xl">
                                                                        <img class="img-fluid"
                                                                            src="{{ asset('app-assets/images/avatar/avatar.svg') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="card-content">
                                                                    <div class="card-body text-center">
                                                                        <h4>Zoila Legore</h4>
                                                                        <p class="">Backend Dev</p>
                                                                        <div
                                                                            class="card-btns d-flex justify-content-between">
                                                                            <button
                                                                                class="btn btn-sm p-1 gradient-light-primary waves-effect waves-light">Unban User</button>
                                                                            <button
                                                                                class="btn btn-sm p-1  btn-outline-primary waves-effect waves-light">Extend Ban</button>
                                                                        </div>
                                                                        <hr class="my-2">
                                                                        <div class="d-flex justify-content-between">
                                                                            <div class="float-left">
                                                                                <i
                                                                                    class="feather icon-clock text-warning mr-50"></i>
                                                                                    10/05/2021
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endfor   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
    
    <!-- END: Content-->
@endsection
