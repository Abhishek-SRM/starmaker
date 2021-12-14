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
                                        <div class="tab-pane" id="home-fill" role="tabpanel"
                                            aria-labelledby="home-tab-fill">
                                            <form class="form-group" action="{{ url('addpack') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div action="#"
                                                                        class=" dropzone dropzone-area dz-clickable"
                                                                        id="dpz-single-file">
                                                                        <div class="dz-message">Drop Image Here
                                                                            To Upload</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-12">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-icon">Pack
                                                                                    Name</label>
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="first-name-icon"
                                                                                        class="form-control"
                                                                                        name="packname"
                                                                                        placeholder="Pack Name">
                                                                                    <div class="form-control-position">
                                                                                        <i class="feather icon-package"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="first-name-icon">Pack
                                                                                    Price</label>
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="first-name-icon"
                                                                                        class="form-control"
                                                                                        name="packprice"
                                                                                        placeholder="Price">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-alert-circle"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="first-name-icon">Pack
                                                                                    Bonus(%)</label>
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="first-name-icon"
                                                                                        class="form-control"
                                                                                        name="packbonus"
                                                                                        placeholder="Enter Pack Bonus in %">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-dollar-sign"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="first-name-icon">Total
                                                                                    Coins</label>
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="first-name-icon"
                                                                                        class="form-control"
                                                                                        name="packcoins"
                                                                                        placeholder="Enter Total Coins">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-dollar-sign"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn gradient-light-primary mb-1 waves-effect waves-light">Add</button>
                                                                        </div>

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
