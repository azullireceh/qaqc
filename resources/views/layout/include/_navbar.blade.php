<nav class="top-bar navbar-fixed-top" role="navigation">
			<div class="logo-area">
				<a href="#" id="btn-nav-sidebar-minified" class="btn btn-link btn-nav-sidebar-minified pull-left"><i class="icon ion-arrow-swap"></i></a>
				<a class="btn btn-link btn-off-canvas pull-left"><i class="icon ion-navicon"></i></a>
				<div class="logo pull-left">
					<a href="/">
						<img src="{{asset('admin/assets/img/queenadmin-logo.png')}}" alt="Sanksi In Quality" />
                    </a>
				</div>
			</div>
			<form class="form-inline searchbox hidden-xs" role="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon ion-ios-search"></i></span>
						<input type="search" class="form-control" placeholder="search the site ...">
					</div>
				</div>
			</form>
			<div class="top-bar-right pull-right">
				<div class="action-group hidden-xs hidden-sm">
					<ul>
						<!-- skins -->
						<li class="action-item skins">
							<form id="style-switcher">
								<div class="btn-group open">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="icon ion-ios-gear-outline"></i>
									</a>
									<div class="arrow"></div>
									<ul class="dropdown-menu" role="menu">
																				<li>
											<label class="fancy-checkbox">
												<input type="checkbox" id="fixed-top-nav" checked="checked"><span>Fixed Top Navigation</span></label>
										</li>
										<li data-toggle="popover" data-placement="top" data-container="body" data-content="If checked, try expanding <strong>Pages</strong> menu item on left sidebar. Disabled on minified sidebar." data-trigger="hover">
											<label class="fancy-checkbox">
												<input type="checkbox" id="fixed-left-nav"><span>Fixed Left Navigation</span></label>
										</li>
										<li class="menu-item-footer"><a href="#" title="Reset Style" class="reset-style">Reset Style</a></li>
									</ul>
								</div>
							</form>
						</li>
						<!-- end skins -->
						<!-- notification: inbox -->
						<li class="action-item inbox">
							<div class="btn-group">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon ion-ios-email-outline"></i><span class="count">2</span>
								</a>
								<div class="arrow"></div>
								<ul class="dropdown-menu" role="menu">
									<li class="menu-item-header">You have 2 unread messages</li>
									<li class="inbox-item clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user1.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Antonius</h5>
													<p class="text">The problem just happened this morning. I can't see ...</p>
													<span class="timestamp text-muted">4 minutes ago</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item unread clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user2.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Michael</h5>
													<p class="text">Hey dude, cool theme!</p>
													<span class="timestamp text-muted">2 hours ago</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item unread clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user3.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Stella</h5>
													<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
													<span class="timestamp text-muted">Oct 6</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user4.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Jane Doe</h5>
													<p class="text"><i class="icon ion-reply text-muted"></i> Please check the status of your ...</p>
													<span class="timestamp text-muted">Oct 2</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user5.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">John Simmons</h5>
													<p class="text"><i class="icon ion-reply text-muted"></i> I've fixed the problem :)</p>
													<span class="timestamp text-muted">Sep 12</span>
												</div>
											</div>
										</a>
									</li>
									<li class="menu-item-footer">
										<a href="#">View All Messages</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- end notification: inbox -->
						<!-- notification: general -->
						<li class="action-item general">
							<div class="btn-group">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon ion-ios-bell-outline"></i><span class="count">8</span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li class="menu-item-header">You have 8 notifications</li>
									<li>
										<a href="#">
											<i class="icon ion-chatbubble text-success"></i>
											<span class="text">New comment on the blog post</span>
											<span class="timestamp text-muted">1 minute ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-person-add text-success"></i>
											<span class="text">New registered user</span>
											<span class="timestamp text-muted">12 minutes ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-chatbubble text-success"></i>
											<span class="text">New comment on the blog post</span>
											<span class="timestamp text-muted">18 minutes ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-ios-cart text-danger"></i>
											<span class="text">4 new sales order</span>
											<span class="timestamp text-muted">4 hours ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-edit yellow-font"></i>
											<span class="text">3 product reviews awaiting moderation</span>
											<span class="timestamp text-muted">1 day ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-chatbubble text-success"></i>
											<span class="text">New comment on the blog post</span>
											<span class="timestamp text-muted">3 days ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-chatbubble text-success"></i>
											<span class="text">New comment on the blog post</span>
											<span class="timestamp text-muted">Oct 15</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon ion-alert-circled text-danger"></i>
											<span class="text text-danger">Low disk space!</span>
											<span class="timestamp text-muted">Oct 11</span>
										</a>
									</li>
									<li class="menu-item-footer">
										<a href="#">View All Notifications</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- end notification: general -->
					</ul>
				</div>
				<div class="logged-user">
					<div class="btn-group">
						<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('admin/assets/img/user-loggedin.png')}}" alt="Sebastian" /><span class="name">Sebastian <i class="icon ion-ios-arrow-down"></i></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">
									<i class="icon ion-ios-person"></i>
									<span class="text">Profile</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon ion-ios-gear"></i>
									<span class="text">Settings</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon ion-power"></i>
									<span class="text">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="action-group visible-lg-inline-block">
					<ul>
						<li class="action-item chat">
							<a href="#" id="toggle-right-sidebar" class="toggle-right-sidebar"><i class="icon ion-ios-chatboxes-outline"></i><span class="count">5</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>