<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Dashboard | Contest Creater</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/colors/blue.css') }}">
@yield('css')
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth ">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{url('/')}}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="#" class="current">Home</a>
						</li>

						<li><a href="#">Contests</a>
						</li>

						<li><a href="#">Dashboard</a>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			@guest
			<!-- Right Side Content / End -->
			<div class="right-side">

				<div class="header-widget">
					<a href="{{route('login')}}" class=" log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
				</div>

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

			@else
			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">
					
					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-bidders.html">
												<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
												<span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-jobs.html">
												<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
												<span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>
					
					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
									<div class="user-name">
									{{ Auth::user()->name }} <span> {{ Auth::user()->type }} </span>
									</div>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
							
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->
            @endguest
            

		</div>
	</div>
	<!-- Header / End -->

</header>


<!-- Dashboard Container -->
<div class="dashboard-container">

<!-- Dashboard Sidebar
================================================== -->
<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
                <span class="hamburger hamburger--collapse" >
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>
            
            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">

                    <ul data-submenu-title="Start">
                        <li class="active"><a href="{{url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                        <li><a href="#"><i class="icon-material-outline-question-answer"></i> Public Profile</a></li>
                        <li><a href="#"><i class="icon-material-outline-star-border"></i> Saved Contests</a></li>
                        <li><a href="#"><i class="icon-material-outline-rate-review"></i> Search Contests </a></li>
                    </ul>
                    
                    <ul data-submenu-title="Organize and Manage">
                        <li><a href="#"><i class="icon-material-outline-business-center"></i> My Contests </a>
                            <ul>
                                <li><a href="#">Manage Contests</a></li>
                            </ul>	
                        </li>
                    </ul>

                    <ul data-submenu-title="Account">
                        <li><a href="#"><i class="icon-material-outline-settings"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                    
                </div>
            </div>
            <!-- Navigation / End -->

        </div>
    </div>
</div>
<!-- Dashboard Sidebar / End -->


<!-- Dashboard Content
================================================== -->
<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner" >
        
        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>{{ Auth::user()->name }}</h3>
            <span>We are glad to see you again!</span>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </nav>
        </div>

        <!-- Fun Facts Container -->
        <div class="fun-facts-container">
            <div class="fun-fact" data-fun-fact-color="#36bd78">
                <div class="fun-fact-text">
                    <span>Total Participation</span>
                    <h4>21</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
            </div>
            <div class="fun-fact" data-fun-fact-color="#b81b7f">
                <div class="fun-fact-text">
                    <span>Contests Won!</span>
                    <h4>4</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
            </div>
            <div class="fun-fact" data-fun-fact-color="#efa80f">
                <div class="fun-fact-text">
                    <span>Saved Contests</span>
                    <h4>8</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
            </div>

            <!-- Last one has to be hidden below 1600px, sorry :( -->
            <div class="fun-fact" data-fun-fact-color="#2a41e6">
                <div class="fun-fact-text">
                    <span>This Month Views</span>
                    <h4>987</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
            </div>
        </div>
        
        <!-- Row -->
        <div class="row">

            <div class="col-xl-8">
                <!-- Dashboard Box -->
                <div class="dashboard-box main-box-in-row">
                    <div class="headline">
                        <h3><i class="icon-feather-bar-chart-2"></i> Your Profile Views</h3>
                        <div class="sort-by">
                            <select class="selectpicker hide-tick">
                                <option>Last 6 Months</option>
                                <option>This Year</option>
                                <option>This Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="content">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart" width="100" height="45"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Box / End -->
            </div>
            <div class="col-xl-4">

                <!-- Dashboard Box -->
                <!-- If you want adjust height of two boxes 
                     add to the lower box 'main-box-in-row' 
                     and 'child-box-in-row' to the higher box -->
                <div class="dashboard-box child-box-in-row"> 
                    <div class="headline">
                        <h3><i class="icon-material-outline-note-add"></i> Notes</h3>
                    </div>	

                    <div class="content with-padding">
                        <!-- Note -->
                        <div class="dashboard-note">
                            <p>Meeting with candidate at 3pm who applied for Bilingual Event Support Specialist</p>
                            <div class="note-footer">
                                <span class="note-priority high">High Priority</span>
                                <div class="note-buttons">
                                    <a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                    <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Note -->
                        <div class="dashboard-note">
                            <p>Extend premium plan for next month</p>
                            <div class="note-footer">
                                <span class="note-priority low">Low Priority</span>
                                <div class="note-buttons">
                                    <a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                    <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Note -->
                        <div class="dashboard-note">
                            <p>Send payment to David Peterson</p>
                            <div class="note-footer">
                                <span class="note-priority medium">Medium Priority</span>
                                <div class="note-buttons">
                                    <a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                    <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="add-note-button">
                            <a href="#small-dialog" class="popup-with-zoom-anim button full-width button-sliding-icon">Add Note <i class="icon-material-outline-arrow-right-alt"></i></a>
                        </div>
                </div>
                <!-- Dashboard Box / End -->
            </div>
        </div>
        <!-- Row / End -->

        <!-- Row -->
        <div class="row">

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box">
                    <div class="headline">
                        <h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
                        <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
                                <i class="icon-feather-check-square"></i>
                        </button>
                    </div>
                    <div class="content">
                        <ul class="dashboard-box-list">
                            <li>
                                <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                <span class="notification-text">
                                    <strong>Michael Shannah</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
                                </span>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                </div>
                            </li>
                            <li>
                                <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                <span class="notification-text">
                                    <strong>Gilber Allanis</strong> placed a bid on your <a href="#">iOS App Development</a> project
                                </span>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                </div>
                            </li>
                            <li>
                                <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                <span class="notification-text">
                                    Your job listing <a href="#">Full Stack Software Engineer</a> is expiring
                                </span>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                </div>
                            </li>
                            <li>
                                <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                <span class="notification-text">
                                    <strong>Sindy Forrest</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
                                </span>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                </div>
                            </li>
                            <li>
                                <span class="notification-icon"><i class="icon-material-outline-rate-review"></i></span>
                                <span class="notification-text">
                                    <strong>David Peterson</strong> left you a <span class="star-rating no-stars" data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a> task
                                </span>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box">
                    <div class="headline">
                        <h3><i class="icon-material-outline-assignment"></i> My Contests</h3>
                    </div>
                    <div class="content">
                        <ul class="dashboard-box-list">
                            <li>
                                <div class="invoice-list-item">
                                <strong>Professional Plan</strong>
                                    <ul>
                                        <li><span class="unpaid">Loose</span></li>
                                        <li>Contest: #326</li>
                                        <li>Date: 12/08/2018</li>
                                    </ul>
                                </div>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button">Finish</a>
                                </div>
                            </li>
                            <li>
                                <div class="invoice-list-item">
                                <strong>Professional Plan</strong>
                                    <ul>
                                        <li><span class="paid">Won</span></li>
                                        <li>Contest: #264</li>
                                        <li>Date: 10/07/2018</li>
                                    </ul>
                                </div>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray">View Invoice</a>
                                </div>
                            </li>
                            <li>
                                <div class="invoice-list-item">
                                <strong>Professional Plan</strong>
                                    <ul>
                                        <li><span class="paid">Won</span></li>
                                        <li>Contest: #211</li>
                                        <li>Date: 12/06/2018</li>
                                    </ul>
                                </div>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray">View Invoice</a>
                                </div>
                            </li>
                            <li>
                                <div class="invoice-list-item">
                                <strong>Professional Plan</strong>
                                    <ul>
                                        <li><span class="paid">Won</span></li>
                                        <li>Contest: #179</li>
                                        <li>Date: 06/05/2018</li>
                                    </ul>
                                </div>
                                <!-- Buttons -->
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray">View Invoice</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row / End -->

        <!-- Footer -->
        <div class="dashboard-footer-spacer"></div>
        <div class="small-footer margin-top-15">
            <div class="small-footer-copyrights">
                © 2018 <strong>CreateContent</strong>. All Rights Reserved.
            </div>
            <ul class="footer-social-links">
                <li>
                    <a href="#" title="Facebook" data-tippy-placement="top">
                        <i class="icon-brand-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Twitter" data-tippy-placement="top">
                        <i class="icon-brand-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Google Plus" data-tippy-placement="top">
                        <i class="icon-brand-google-plus-g"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="LinkedIn" data-tippy-placement="top">
                        <i class="icon-brand-linkedin-in"></i>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Footer / End -->

    </div>
</div>
<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>

</body>

</html>