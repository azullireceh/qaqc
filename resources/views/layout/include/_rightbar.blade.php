<div id="col-right" class="col-right ">
			<div class="container-fluid primary-content">
				<!-- PRIMARY CONTENT HEADING -->
				<div class="primary-content-heading clearfix">
					<h2>DASHBOARD</h2>
					<ul class="breadcrumb pull-left">
						<li><i class="icon ion-home"></i><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li class="active">Dashboard v1</li>
					</ul>
					<div class="sticky-content pull-right">
						<div class="btn-group btn-dropdown">
							<button type="button" class="btn btn-default btn-sm btn-favorites" data-toggle="dropdown"><i class="icon ion-android-star"></i> Favorites</button>
							<ul class="dropdown-menu dropdown-menu-right list-inline">
								<li><a href="#"><i class="icon ion-pie-graph"></i> <span>Statistics</span></a></li>
								<li><a href="#"><i class="icon ion-email"></i> <span>Inbox</span></a></li>
								<li><a href="#"><i class="icon ion-chatboxes"></i> <span>Chat</span></a></li>
								<li><a href="#"><i class="icon ion-help-circled"></i> <span>Help</span></a></li>
								<li><a href="#"><i class="icon ion-gear-a"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="icon ion-help-buoy"></i> <span>Support</span></a></li>
							</ul>
						</div>
						<button type="button" class="btn btn-default btn-sm btn-quick-task" data-toggle="modal" data-target="#quick-task-modal"><i class="icon ion-edit"></i> Quick Task</button>
					</div>
					<!-- quick task modal -->
					<div class="modal fade" id="quick-task-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Quick Task</h4>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label for="task-title" class="control-label sr-only">Title</label>
											<div class="col-sm-12">
												<input type="text" class="form-control" id="task-title" placeholder="Title">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label sr-only">Description</label>
											<div class="col-sm-12">
												<textarea class="form-control" name="task-description" rows="5" cols="30" placeholder="Description"></textarea>
											</div>
										</div>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save Task</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- end quick task modal -->
				</div>
				<!-- END PRIMARY CONTENT HEADING -->
				<div class="widget widget-no-header widget-transparent bottom-30px">
					<!-- QUICK SUMMARY INFO -->
					<div class="widget-content">
						<h3 class="sr-only">QUICK SUMMARY INFO</h3>
						<div class="row">
							<div class="col-sm-3 text-center">
								<div class="quick-info horizontal">
									<i class="icon ion-thumbsup pull-left bg-seagreen"></i>
									<p>3700 <span>LIKES</span></p>
								</div>
							</div>
							<div class="col-sm-3 text-center">
								<div class="quick-info horizontal">
									<i class="icon ion-arrow-graph-up-right pull-left bg-orange"></i>
									<p>27% <span>GROWTH</span></p>
								</div>
							</div>
							<div class="col-sm-3 text-center">
								<div class="quick-info horizontal">
									<i class="icon ion-cash pull-left bg-green"></i>
									<p>$5,400 <span>PROFIT</span></p>
								</div>
							</div>
							<div class="col-sm-3 text-center">
								<div class="quick-info horizontal">
									<i class="icon ion-person-stalker pull-left bg-blue"></i>
									<p>7285 <span>USERS</span></p>
								</div>
							</div>
						</div>
					</div>
					<!-- END QUICK SUMMARY INFO -->
				</div>
				<div class="row">
					<div class="col-md-8">
						<!-- CHART WITH JUSTIFIED TAB -->
						<div class="widget">
							<div class="widget-header clearfix no-padding">
								<h3 class="sr-only"><span>SALES AND VISITS STAT</span></h3>
								<ul id="dashboard-stat-tab" class="nav nav-pills nav-justified">
									<li class="active"><a href="#tab-sales" data-cid="#dashboard-sales-chart">Sales</a></li>
									<li class=""><a href="#tab-visits" data-cid="#dashboard-visits-chart">Visits</a></li>
								</ul>
							</div>
							<div id="dashboard-stat-tab-content" class="widget-content tab-content">
								<div class="tab-pane fade in active" id="tab-sales">
									<div class="flot-chart" id="dashboard-sales-chart"></div>
								</div>
								<div class="tab-pane fade" id="tab-visits">
									<div class="flot-chart" id="dashboard-visits-chart"></div>
								</div>
							</div>
						</div>
						<!-- END CHART WITH JUSTIFIED TAB -->
					</div>
					<div class="col-md-4">
						<!-- ORDER STATUS -->
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-bag"></i> <span>ORDER STATUS</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
									<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>Status</th>
											<th>Order Number</th>
											<th>Amount</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><span class="label label-warning">Pending</span></td>
											<td><a href="#">ORD834580</a></td>
											<td>$320</td>
										</tr>
										<tr>
											<td><span class="label label-success">Completed</span></td>
											<td><a href="#">ORD834565</a></td>
											<td>$400</td>
										</tr>
										<tr>
											<td><span class="label label-warning">Pending</span></td>
											<td><a href="#">ORD834577</a></td>
											<td>$80</td>
										</tr>
										<tr>
											<td><span class="label label-danger">Error</span></td>
											<td><a href="#">ORD834543</a></td>
											<td>$307</td>
										</tr>
										<tr>
											<td><span class="label label-info">On-Process</span></td>
											<td><a href="#">ORD834528</a></td>
											<td>$160</td>
										</tr>
										<tr>
											<td><span class="label label-success">Completed</span></td>
											<td><a href="#">ORD834565</a></td>
											<td>$122</td>
										</tr>
										<tr>
											<td><span class="label label-success">Completed</span></td>
											<td><a href="#">ORD834512</a></td>
											<td>$760</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END ORDER STATUS -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<!-- MAP -->
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-location"></i> <span>SALES ORIGINS</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
									<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="data-visualization-map">
									<div class="row">
										<div class="col-md-9">
											<div class="map"></div>
											<p class="text-muted"><i class="icon ion-android-information"></i> Click the text legend to see interactivity in action.</p>
										</div>
										<div class="col-md-3">
											<div class="areaLegend legend-right"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END MAP -->
					</div>
					<div class="col-md-4">
						<!-- COMPLETENESS METER -->
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-person"></i> <span>COMPLETE YOUR PROFILE</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
									<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="completeness-meter">
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-info completeness-progress" data-transitiongoal="60"></div>
									</div>
									<p class="complete-info">Your profile is <strong class="completeness-percentage">60%</strong> complete, please provide information below:</p>
									<p><a href="#" id="complete-phone-number" data-type="text" data-pk="1" data-title="Phone number">Add your phone number</a></p>
									<p>
										<a href="#" id="complete-sex" data-type="select" data-pk="1" data-value="" data-prepend="Select sex" data-title="Select sex"></a>
									</p>
									<p><a href="#" id="complete-birthdate" data-type="combodate" data-value="1984-05-23" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select date of birth">Select date of birth</a></p>
									<p><a href="#" id="complete-nickname" data-type="text" data-pk="1" data-title="Nickname" data-placeholder="your nickname">Add your nickname</a></p>
								</div>
							</div>
							<div class="widget-footer">
								<a href="#">View my profile</a>
							</div>
						</div>
						<!-- END COMPLETENESS METER -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<!-- TASK PROGRESS -->
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-android-list"></i> <span>TASK PROGRESS</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
									<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<ul class="task-list list-unstyled">
									<li>
										<p>Updating Users Settings <span class="label label-danger">23%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
												<span class="sr-only">23% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Load &amp; Stress Test <span class="label label-success">80%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Data Duplication Check <span class="label label-success">100%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
												<span class="sr-only">Success</span>
											</div>
										</div>
									</li>
									<li>
										<p>Server Check <span class="label label-warning">45%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Mobile App Development <span class="label label-danger">10%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
												<span class="sr-only">10% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Ticket <a href="#">#7465</a> <span class="label label-warning">35%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
												<span class="sr-only">35% Complete</span>
											</div>
										</div>
									</li>
								</ul>
								<br/>
								<a href="#">View all tasks</a> <span class="badge">15</span>
							</div>
						</div>
						<!-- END TASK PROGRESS -->
					</div>
					<div class="col-md-4">
						<!-- NEWS FEED WIDGET -->
						<div class="widget widget-live-feed">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-paper-airplane"></i> <span>NEWS FEED</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Refresh" class="btn btn-link"><i class="icon ion-ios-refresh-empty"></i></a>
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
									<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="media activity-item">
									<i class="icon ion-checkmark-circled pull-left text-success"></i>
									<div class="media-body">
										<p class="activity-title">The system is running well, no error found</p>
										<small class="text-muted">2m ago</small>
									</div>
								</div>
								<div class="media activity-item">
									<i class="icon ion-unlocked pull-left text-danger"></i>
									<div class="media-body">
										<p class="activity-title">You have unsecure file permission on the server. Go to <a href="">File Manager</a> to fix it</p>
										<small class="text-muted">6m ago</small>
									</div>
								</div>
								<div class="media activity-item">
									<i class="icon ion-person pull-left text-info"></i>
									<div class="media-body">
										<p class="activity-title">New user <a href="#">Michael</a> registered</p>
										<small class="text-muted">10m ago</small>
									</div>
								</div>
								<div class="media activity-item">
									<i class="icon ion-bug pull-left text-info"></i>
									<div class="media-body">
										<p class="activity-title">New <a href="">bug report</a> has been submitted</p>
										<small class="text-muted">15m ago</small>
									</div>
								</div>
								<div class="media activity-item">
									<i class="icon ion-printer pull-left text-warning"></i>
									<div class="media-body">
										<p class="activity-title">You have <a href="#">pending documents</a> on the printer server.</p>
										<small class="text-muted">23h ago</small>
									</div>
								</div>
								<div class="media activity-item">
									<i class="icon ion-close-circled pull-left text-danger"></i>
									<div class="media-body">
										<p class="activity-title">Background job <a href="#">#783458</a> has failed. See the <a href="#">logs</a></p>
										<small class="text-muted">Today</small>
									</div>
								</div>
								<div class="media activity-item">
									<i class="icon ion-flag pull-left text-success"></i>
									<div class="media-body">
										<p class="activity-title">Project <a href="#">Social Boost</a> has been flagged as finished</p>
										<small class="text-muted">Yesterday</small>
									</div>
								</div>
								<button type="button" class="btn btn-default center-block"><i class="icon ion-ios-refresh"></i> Load more</button>
							</div>
						</div>
						<!-- END NEWS FEED WIDGET -->
					</div>
					<div class="col-md-4">
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-person"></i> <span>EMPLOYEE OF THE MONTH</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Refresh" class="btn btn-link"><i class="icon ion-ios-refresh-empty"></i></a>
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
									<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
								</div>
							</div>
							<div class="widget-content text-center">
								<img src="assets/img/avatar145px.png" class="img-circle" alt="Avatar" />
								<h4>Jack Bay</h4>
								<hr class="dashed" />
								<ul class="list-unstyled text-muted">
									<li>Most on-time</li>
									<li>Most attitude, talkative and independent</li>
									<li>Most fit and healthy</li>
									<li>Most hard worker</li>
								</ul>
								<hr class="dashed" />
								<button type="button" class="btn btn-large btn-primary"><i class="icon ion-thumbsup"></i> Appreciate!</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-sidebar">
				<!-- CHAT -->
				<div class="widget widget-chat-contacts">
					<div class="widget-header clearfix">
						<h3 class="sr-only">CHAT</h3>
						<div class="btn-group btn-group-justified widget-header-toolbar visible-lg">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs"><i class="icon ion-plus-circled"></i> Add</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn dropdown-toggle btn-xs btn-success" data-btnclass="btn-success" data-toggle="dropdown">Online <span class="caret"></span></button>
								<ul class="dropdown-menu dropdown-menu-right chat-status" role="menu">
									<li><a href="#" class="online" data-btnclass="btn-success">Online</a></li>
									<li><a href="#" class="away" data-btnclass="btn-warning">Away</a></li>
									<li><a href="#" class="busy" data-btnclass="btn-danger">Busy</a></li>
									<li><a href="#" class="offline" data-btnclass="btn-default">Offline</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-content">
						<strong>Online (4)</strong>
						<ul class="list-unstyled chat-contacts">
							<li>
								<a href="#" id="theusername"><img src="{{asset('admin/assets2/img/user1.png')}}" class="img-circle" alt="Antonius">Antonius</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user2.png')}}" class="img-circle" alt="Antonius">Michael Smith</a>
							</li>
							<li class="away">
								<a href="#"><img src="{{asset('admin/assets2/img/user3.png')}}" class="img-circle" alt="Antonius">Stella Ray</a>
							</li>
							<li class="busy">
								<a href="#"><img src="{{asset('admin/assets2/img/user4.png')}}" class="img-circle" alt="Antonius">Jane Doe</a>
							</li>
						</ul>
						<strong>Offline (6)</strong>
						<ul class="list-unstyled chat-contacts contacts-offline">
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user5.png')}}" class="img-circle" alt="John Simmons">John Simmons</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user6.png')}}" class="img-circle" alt="Jack Bay">Jack Bay</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user7.png')}}" class="img-circle" alt="Daraiana">Daraiana</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user8.png')}}" class="img-circle" alt="Alessio Ferrara">Alessio Ferrara</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user9.png')}}" class="img-circle" alt="Sorana">Sorana</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets2/img/user10.png')}}" class="img-circle" alt="Regan Morton">Regan Morton</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END CHAT -->
			</div>
		</div>