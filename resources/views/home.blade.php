@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'App shop | Dashboard')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('http://lorempixel.com/1920/950/technics/')">
</div>
    <div class="main mrtop">
        <div class="container col-12">
            <h2 class="text-center">Dashboard</h2>
            <div class="section">
                <div class="team">
                    <div class="col-10 mx-auto">
                            <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                    <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">dashboard</i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">schedule</i>
                                            Schedule
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">list</i>
                                            Tasks
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-space">
                                    <div class="tab-pane active" id="dashboard-1">
                                      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                                      <br><br>
                                      Dramatically visualize customer directed convergence without revolutionary ROI.
                                    </div>
                                    <div class="tab-pane" id="schedule-1">
                                      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                      <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    </div>
                                    <div class="tab-pane" id="tasks-1">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

        @include('includes.footer')

@endsection



