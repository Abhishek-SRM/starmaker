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

        .nav.nav-tabs .nav-item .nav-link.active {
            overflow: hidden;
            border-radius: 4px;
            color: white !important;
            background: linear-gradient(118deg, #009FFF, #EC2F4B);
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

        .btn-grad {
            background-image: linear-gradient(to right, #DC2424 0%, #4A569D 51%, #DC2424 100%)
        }

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
            background-position: right center;
            /* change the direction of the change here */
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
                                        <h4 class="card-title">Top-Up Recharge</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">                                       
                                            <!-- Tab panes -->
                                            <div class="tab-content pt-1">
                                                <div class="tab-pane active" id="sub-fill" role="tabpanel"
                                                    aria-labelledby="sub-tab-fill">
                                                    <div class="row">
                                                        @foreach ($packs as $pack)
                                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                                <div class="card border-warning text-center bg-transparent">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <img src="{{ asset('app-assets/images/svg/coin-svgrepo-com.svg') }}"
                                                                                alt="element 05" width="100"
                                                                                class="mb-1">
                                                                            <h4 class="card-title">{{$pack->packprice}} INR</h4>
                                                                            <p class="card-text">{{$pack->packbonus}}%</p>
                                                                            <button type="submit"
                                                                                class="btn gradient-light-primary mb-1 waves-effect waves-light">{{$pack->packcoins}}</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
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
