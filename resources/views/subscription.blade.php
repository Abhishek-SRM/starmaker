@extends('layout.master')
@section('title', 'Subscription')

@section('content')
    <!-- BEGIN: Content-->
    <style>
        .card {
            box-shadow: 0px 4px 25px 0px rgb(0 0 0 / 10%) !important;
        }

        .card .btn {
            font-size: 12px;
        }

        .gradient-light-primary {
            background: linear-gradient(118deg, #EC2F4B, #009FFF);
        }

        .dropzone {
            min-height: 265px;
        }

        .dropzone .dz-message {
            top: 30%;
        }

        .dropzone .dz-message:before {
            top: 100px;
            content: "\e872";
            font-size: 50px;
        }
        .nav.nav-tabs .nav-item .nav-link.active{
        overflow: hidden;
        border-radius: 4px;
        color:white !important;
        background: linear-gradient(118deg,#009FFF, #EC2F4B );
     }
     

        .bootstrap-touchspin .bootstrap-touchspin-injected .bootstrap-touchspin-down,
        .bootstrap-touchspin .bootstrap-touchspin-injected .bootstrap-touchspin-up {
            border-radius: 50% !important;
            min-width: 30px;
            min-height: 30px;
        }

        .btn-lg,
        .btn-group-lg>.btn {
            padding: 1rem 5.5rem;
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
                                        <h4 class="card-title">Subscriptions</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="sub-tab-fill" data-toggle="tab"
                                                        href="#sub-fill" role="tab" aria-controls="sub-fill"
                                                        aria-selected="true">All Subscription</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="home-tab-fill" data-toggle="tab"
                                                        href="#home-fill" role="tab" aria-controls="home-fill"
                                                        aria-selected="true">Add Subscription</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="subs-user-fill" data-toggle="tab"
                                                        href="#subs-user-fill" role="tab" aria-controls="user-fill"
                                                        aria-selected="false">Subscribed Users</a>
                                                </li>

                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content pt-1">
                                                <div class="tab-pane active" id="sub-fill" role="tabpanel"
                                                    aria-labelledby="sub-tab-fill">
                                                     @for ($i = 0; $i < 5; $i++)
                                                     <div class="subcription">
                                                    <hr>
                                                    <span class="badge badge-pill badge-success badge-sm">1</span>
                                                    <div class="d-flex justify-content-start align-items-center mb-1">

                                                        <div class="avatar mr-3">
                                                            <img src="{{ asset('app-assets/images/subs.png') }}"
                                                                alt="avtar img holder" height="125" width="125">
                                                        </div>
                                                        <div class="user-page-info">
                                                            <h4>Subscriptions Pack Name</h4>
                                                            <div class="mb-2"><span>Pack Info : Lorem Ipsum is
                                                                    simply dummy text of the printing and
                                                                    typesetting</span></div>
                                                            <span
                                                                class="font-small-2 text-danger font-weight-bold ">Rewards</span><br>
                                                            <div class="card-body p-0">
                                                                <div class="avatar bg-warning mr-1">
                                                                    <div class="avatar-content">
                                                                        <i class="avatar-icon feather icon-award"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar bg-warning mr-1">
                                                                    <div class="avatar-content">
                                                                        <i class="avatar-icon feather icon-award"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar bg-warning mr-1">
                                                                    <div class="avatar-content">
                                                                        <i class="avatar-icon feather icon-award"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar bg-warning mr-1">
                                                                    <div class="avatar-content">
                                                                        <i class="avatar-icon feather icon-award"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="ml-auto mr-3">
                                                            
                                                            <a href=# ><i class="feather icon-edit text-success mr-1"></i></a>
                                                            <a href=#><i class="feather icon-trash text-danger"></i></a>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                   </div>
                                                  @endfor
                                                </div>

                                                <div class="tab-pane" id="home-fill" role="tabpanel"
                                                    aria-labelledby="home-tab-fill">
                                                    <div class="form-group">
                                                        <button type="button"
                                                            class="btn mb-3 btn-grad btn-lg btn-block waves-effect waves-light">Add
                                                            New Subscription Pack
                                                            <lord-icon
                                                            src="https://cdn.lordicon.com/mecwbjnp.json"
                                                            trigger="hover"
                                                            colors="primary:#ffffff,secondary:#08a88a"
                                                            style="width:20px;height:20px; margin-left: 20px">
                                                        </lord-icon></button>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="card">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <form action="#"
                                                                                class=" dropzone dropzone-area dz-clickable"
                                                                                id="dpz-single-file">
                                                                                <div class="dz-message">Drop Image Here
                                                                                    To Upload</div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-12">
                                                            <h4 class="card-title">Create Subscription Pack</h4>                                                                   
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <form class="form form-vertical">
                                                                                <div class="form-body">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="first-name-icon">Pack
                                                                                                    Name</label>
                                                                                                <div
                                                                                                    class="position-relative has-icon-left">
                                                                                                    <input type="text"
                                                                                                        id="first-name-icon"
                                                                                                        class="form-control"
                                                                                                        name="fname-icon"
                                                                                                        placeholder="Pack Name">
                                                                                                    <div
                                                                                                        class="form-control-position">
                                                                                                        <i
                                                                                                            class="feather icon-package"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="first-name-icon">Pack
                                                                                                    description</label>
                                                                                                <div
                                                                                                    class="position-relative has-icon-left">
                                                                                                    <input type="text"
                                                                                                        id="first-name-icon"
                                                                                                        class="form-control"
                                                                                                        name="fname-icon"
                                                                                                        placeholder="Description">
                                                                                                    <div
                                                                                                        class="form-control-position">
                                                                                                        <i
                                                                                                            class="feather icon-alert-circle"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="first-name-icon">Pack
                                                                                                    Value</label>
                                                                                                <div
                                                                                                    class="position-relative has-icon-left">
                                                                                                    <input type="text"
                                                                                                        id="first-name-icon"
                                                                                                        class="form-control"
                                                                                                        name="fname-icon"
                                                                                                        placeholder="Pack Value">
                                                                                                    <div
                                                                                                        class="form-control-position">
                                                                                                        <i
                                                                                                            class="feather icon-dollar-sign"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 sm-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title">Add Rewards</h4>
                                                                    </div>
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <form class="needs-validation" novalidate="">
                                                                                <div class="form-row">
                                                                                    <div class="col-md-6 col-12 mb-3">
                                                                                        <div
                                                                                            class="btn-group dropdown ml-5 mb-1">
                                                                                            <button type="button"
                                                                                                class="btn btn-primary btn-lg btn-block waves-effect waves-light">Add
                                                                                                gift</button>
                                                                                            <button type="button"
                                                                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                                                                                data-toggle="dropdown"
                                                                                                aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <span
                                                                                                    class="sr-only">Toggle
                                                                                                    Dropdown</span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu"
                                                                                                x-placement="bottom-start"
                                                                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(98px, 38px, 0px);">
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-12 mb-3">
                                                                                        <div
                                                                                            class="d-flex align-items-center mb-1">
                                                                                            <div
                                                                                                class="input-group input-group-lg bootstrap-touchspin">
                                                                                                <span
                                                                                                    class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                                                                        class="btn btn-primary bootstrap-touchspin-down"
                                                                                                        type="button">-</button></span><input
                                                                                                    type="number"
                                                                                                    class="touchspin form-control"
                                                                                                    value="3"><span
                                                                                                    class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                                                                        class="btn btn-primary bootstrap-touchspin-up"
                                                                                                        type="button">+</button></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <div class="col-md-6 col-12 mb-3">
                                                                                        <div
                                                                                            class="btn-group dropdown ml-5 mb-1">
                                                                                            <button type="button"
                                                                                                class="btn btn-primary btn-lg btn-block waves-effect waves-light">Add
                                                                                                gift</button>
                                                                                            <button type="button"
                                                                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                                                                                data-toggle="dropdown"
                                                                                                aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <span
                                                                                                    class="sr-only">Toggle
                                                                                                    Dropdown</span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu"
                                                                                                x-placement="bottom-start"
                                                                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(98px, 38px, 0px);">
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                                <a class="dropdown-item"
                                                                                                    href="#">Gift(Rose/Boat)</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-12 mb-3">
                                                                                        <div
                                                                                            class="d-flex align-items-center mb-1">
                                                                                            <div
                                                                                                class="input-group input-group-lg bootstrap-touchspin">
                                                                                                <span
                                                                                                    class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                                                                        class="btn btn-primary bootstrap-touchspin-down"
                                                                                                        type="button">-</button></span><input
                                                                                                    type="number"
                                                                                                    class="touchspin form-control"
                                                                                                    value="3"><span
                                                                                                    class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                                                                        class="btn btn-primary bootstrap-touchspin-up"
                                                                                                        type="button">+</button></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="submit"
                                                                                        class="btn gradient-light-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                                                                    <button type="reset"
                                                                                        class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                                                </div>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="subs-user-fill" role="tabpanel"
                                                    aria-labelledby="user-fill">
                                                      
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
