<div class="col-md-8">
    <div class="row mt-5 pt-5 pl-5">
        <div class="col-md-10">
            
            <h1 class="dashbaord-heading pt-2">Settings</h1>

        </div>
        <div class="col-md-2 justify-content-center" style="text-align: center;"><a href="{{ route('addFunds') }}">
            <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3"><img src="/images/border_color.png" width="10" height="10"><span class="pr-1 pl-2">Edit</span></a></button>
        </div>
    </div>
    <hr>
    <div class="container">
        <!-- Code for First Row -->
        <div class="row">
            <!-- code for left columns 1st row -->
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <h1 class = "profile-heading">Profile</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xl-4">
                    <a href="#" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <span class="nav_logo-name pt-3 mt-3"><img src="/images/Frame 40.png" alt="logo" width = "100px" height = "100px"></span>
                    </a>
                    
                    <a href="#" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <h2 class="user-name-setting">{{$userData->name}}</h2>
                    </a>

                    </div>
                    <div class="col-sm-12 col-xl-8 p-4">
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Full Name</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>{{$userData->name}}</h1>
                                
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Date of birth</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>25-09-2002</h1>
                                
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Username</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>{{$userData->name}}</h1>
                                
                            </div>
                        </div>
                        
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Email</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>{{$userData->email}}</h1>
                                
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Password</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>************</h1>
                                
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Phone</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>+92123456789</h1>
                                
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-sm-6 col-md-6">
                                <h1 class='left-summary'>Two Factor</h1>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <h1 class='right-summary'>Enabled</h1>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                    
                </div>

            </div>
            <div class="col-sm-12 col-xl-4">
                <div class="row">
                    <h1 class = "profile-heading">Notifications</h1>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                        <div class="row pt-3">
                            <h1 class='right-summary'>Email</h1>

                        </div>
                        <div class="row p-2">
                            <div class="col-sm-8 col-md-8 pt-2">
                                <h1 class='left-summary'>Order Updates</h1>

                            </div>
                            <div class="col-sm-4 col-md-4">
                                <!-- Default checked -->
                                <div class="custom-control custom-switch pb-2">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm-8 col-md-8 pt-2">
                                <h1 class='left-summary'>Billing Update</h1>

                            </div>
                            <div class="col-sm-4 col-md-4">
                                <!-- Default checked -->
                                <div class="custom-control custom-switch pb-2">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row pt-1">
                            <h1 class='right-summary'>In App</h1>

                        </div>
                        <div class="row p-2">
                            <div class="col-sm-8 col-md-8 pt-2">
                                <h1 class='left-summary'>Order Updates</h1>

                            </div>
                            <div class="col-sm-4 col-md-4">
                                <!-- Default checked -->
                                <div class="custom-control custom-switch pb-2">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                </div>
                                
                            </div>
                            <div class="col-sm-8 col-md-8 pt-2">
                                <h1 class='left-summary'>Billing Updates</h1>

                            </div>
                            <div class="col-sm-4 col-md-4">
                                <!-- Default checked -->
                                <div class="custom-control custom-switch pb-2">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                    <label class="custom-control-label" for="customSwitch4"></label>
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                    
                </div>

            </div>
            
            



        </div>
        <!-- Code for Second Row -->
        <div class="row">
            <div class="col-sm-12 col-xl-8">
                <div class="row">
                    <h1 class = "profile-heading">Sessions</h1>
                </div>
                <div class="row pt-3 mt-3">
                    <table class="table table-striped">
                        <thead class="table-head">
                            <tr>
                                <th scope="col" colspan="4">Device</th>
                                <th scope="col" colspan="2">IP</th>
                                <th scope="col" colspan="2">Last Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sessions as $session)
                            <tr>
                                <th scope="row">{{ $session->id }}</th>
                                <td>{{ $session->user_agent }}</td>
                                <td>{{ $session->ip_address }}</td>
                                <td>{{ $session->last_activity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>




            </div>
            <div class="col-sm-12 col-xl-4">
                <div class="row">
                    <h1 class = "profile-heading">Link to Social Networks</h1>
                </div>
                <div class="row p-4">
                    <div class="col-sm-12 col-md-4">
                        <img src="/images/Group.png" alt="">

                    </div>
                    <div class="col-sm-12 col-md-7 pt-3">
                        <h1 class='right-summary'>Link To Google</h1>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-sm-12 col-md-4">
                        <img src="/images/Twitter-Logo.wine 1.png" alt="">

                    </div>
                    <div class="col-sm-12 col-md-7 pt-3">
                        <h1 class='right-summary'>Link To Twitter</h1>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-sm-12 col-md-4">
                        <img src="/images/face.png" alt="">

                    </div>
                    <div class="col-sm-12 col-md-7 pt-3">
                        <h1 class='right-summary'>Link To Facebook</h1>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>