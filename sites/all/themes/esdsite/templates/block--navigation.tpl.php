<?php 
	$main_menu = menu_navigation_links('main-menu', $level = 0);
	print theme('links', array(
		'links' => $main_menu,
		'attributes' => array(
			'id' => 'user-menu',
			'class' => array('links', 'clearfix'),
		),
		'heading' => array(
			'text' => t('Main menu'),
			'level' => 'h2',
			'class' => array(''),
		),
	));
?>
<header>
	<span>Empire State Development</span>
	<nav>
		<ul>
			<li><a href="">Why NYS?</a>
			</li>
			<li><a href="">Doing Business in NYS</a>
			<ul>
				<li><a href="">How NYS Can Help</a>
				</li>
				<li><a href="">Tax Based Incentives</a>
					<ul>
						<li><a href="">NYS Tax Credit Program</a>
						</li>
						<li><a href="">NYS Tax Free Program</a>
						</li>
						<li><a href="">NYS Film Tax Credit Program</a>
						</li>
						<li><a href="">NYS Tax Credit Program</a>
						</li>
					</ul>
				</li>
				<li><a href="">Operational Support</a>
					<ul>
						<li><a href="">Business Mentor NYS</a>
						</li>
						<li><a href="">NYS Expert Marketing Assistance</a>
						</li>
						<li><a href="">NYS Entrepreneurial Assistance</a>
						</li>
						<li><a href="">NYS Entrepreneurial Assistance</a>
						</li>
					</ul>
				</li>
				<li><a href="">Innovation Support Development</a>
					<ul>
						<li><a href="">Tech Research Centers of Excellence</a>
						</li>
						<li><a href="">University/Business Centers of Advanced Technology</a>
						</li>
						<li><a href="">Centers of Advanced Technology</a>
						</li>
						<li><a href="">NYS Business Incubator Programs</a>
						</li>
						<li><a href="">NYS Innovation VC Fund</a>
						</li>
					</ul>
				</li>
				<li><a href="">Growth Support</a>
					<ul>
						<li><a href="">NYS Job Development Fund</a>
						</li>
						<li><a href="">Minority & Women Owned Development Fund</a>
						</li>
					</ul>
				</li>
				<li><a href="">Small Business Hub</a>
				</li>
				<li><a href="">Minority & Woman Owned Business Development</a>
					<ul>
						<li><a href="">Certification</a>
							<ul>
								<li><a href="">NYS Contract System Profile</a>
								</li>
								<li><a href="">NYS Contract System Certification Application</a>
								</li>
								<li><a href="">NYS Contract Reports</a>
								</li>
							</ul>
						</li>
						<li><a href="">MWBE Business Programs</a>
							<ul>
								<li><a href="">Minority & Women Owned Development Fund</a>
								</li>
								<li><a href="">Entrepreneurial Assistance Program</a>
								</li>
								<li><a href="">MWBE News & Reports</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			</li>
			<li><a href="">Industries</a>
			</li>
			<li><a href="">Regions</a>
				<ul>
					<li><a href="">Western New York</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Western New York</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Finger Lakes</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Southern Tier</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Central New York</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">North Country</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Mohawk Valley</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Mid-Hudson</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Capital District</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">New York City</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
					<li><a href="">Long Island</a>
						<ul>
							<li><a href="">Plans</a>
							</li>
							<li><a href="">Resources</a>
							</li>
							<li><a href="">Meetings</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="">About Us</a>
			</li>
		</ul>
	</nav>
</header>