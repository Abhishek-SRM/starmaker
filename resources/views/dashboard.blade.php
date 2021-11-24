@extends('layout.master')
@section('title','Homepage')

@section('content')
      <!-- BEGIN: Content-->
      <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">View Details <i class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Last 7 Days
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Year</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart"></div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <p class="mb-0">Goal: $100000</p>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Users: 100K</p>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Retention: 90%</p>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Duration: 1yr</p>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <section id="basic-tabs-components">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Users</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link mr-4 active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">New Users</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">Banned Users</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                                                   @for ($i = 0; $i < 4; $i++)
                                                                   <div class="d-flex justify-content-start align-items-center mb-1">
                                                                    <div class="avatar mr-2">
                                                                        <img src="{{asset('app-assets/images/profile/pages/page-09.jpg')}}" alt="avtar img holder" height="35" width="35">
                                                                    </div>
                                                                    <div class="user-page-info">
                                                                        <p class="mb-0 font-weight-bold">Rockose</p>
                                                                        <span class="font-small-2">Cake sesame snaps cupcake </span>
                                                                    </div>
                                                    
                                                                </div>
                                                                   @endfor
                                                                </div>
                                                                <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                                                    <div class="table-responsive">
                                                                        @for ($i = 0; $i < 4; $i++)
                                                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                                                         <div class="avatar mr-2">
                                                                             <img src="{{asset('app-assets/images/profile/pages/page-09.jpg')}}" alt="avtar img holder" height="35" width="35">
                                                                         </div>
                                                                         <div class="user-page-info">
                                                                             <p class="mb-0 font-weight-bold">Rockose</p>
                                                                             <span class="font-small-2">Cake sesame snaps cupcake </span>
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
                    
                    <div class="row">
                        <div class="col-lg-8 col-sm-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Payment Details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>Transaction ID</th>
                                                    <th>Amount</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sigma11</td>
                                                    <td>#9887767654</td>
                                                    <td>₹8767</td>
                                                    <td>14:58 26/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>Arcane</td>
                                                    <td>#9887767654</td>
                                                    <td>₹8767</td>
                                                    <td>14:58 26/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>Britania</td>
                                                    <td>#9887767654</td>
                                                    <td>₹8767</td>
                                                    <td>14:58 26/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>Envy</td>
                                                    <td>#9887767654</td>
                                                    <td>₹8767</td>
                                                    <td>14:58 26/07/2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 sm-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <section id="basic-tabs-components">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Subscription</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            @for ($i = 0; $i < 4; $i++)
                                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                             <div class="avatar mr-2">
                                                                 <img src="{{asset('app-assets/images/profile/pages/page-09.jpg')}}" alt="avtar img holder" height="35" width="35">
                                                             </div>
                                                             <div class="user-page-info">
                                                                 <p class="mb-0 font-weight-bold">Rockose</p>
                                                                 <span class="font-small-2">Cake sesame snaps cupcake </span>
                                                             </div>
                                             
                                                         </div>
                                                            @endfor
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
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection