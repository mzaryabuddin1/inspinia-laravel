<header id="tt-header" class="tt-header-fixed">
	<div class="tt-header-inner">
		<div class="tt-header-col">
			<div class="tt-logo">
				<a href="<?= base_url() ?>">
					<img src="<?= base_url() ?>assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo">
					<img src="<?= base_url() ?>assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo">
				</a>
			</div>
		</div>
		<div class="tt-header-col">
			<div id="tt-ol-menu-toggle-btn-wrap">
				<div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
					<div class="tt-ol-menu-toggle-btn-text">
						<span class="text-menu" data-hover="Open">Menu</span>
						<span class="text-close">Close</span>
					</div>
				</div>
				<div class="tt-ol-menu-toggle-btn-holder">
					<a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
				</div>
			</div>
			<nav class="tt-overlay-menu tt-ol-menu-count">
				<div class="tt-ol-menu-ghost">Explore</div>
				<div class="tt-ol-menu-holder">
					<div class="tt-ol-menu-inner tt-wrap">
						<div class="tt-ol-menu-content">
							<ul class="tt-ol-menu-list">
								<li class="<?= $pagetab === "home" ? "active" : "" ?>"><a href="<?= base_url() ?>">Home</a></li>
								<li class="tt-ol-submenu-wrap <?= $pagetab === "about" ? "active" : "" ?>">
									<div class="tt-ol-submenu-trigger">
										<a href="#">About</a>
										<div class="tt-ol-submenu-caret-wrap">
											<div class="tt-ol-submenu-caret magnetic-item"></div>
										</div>
									</div>
									<div class="tt-ol-submenu">
										<ul class="tt-ol-submenu-list">
											<li class="<?= $title === "About Us" ? "active" : "" ?>"><a href="<?= base_url() ?>about-us">About Us</a></li>
											<li  class="<?= $title === "About Team" ? "active" : "" ?>"><a href="<?= base_url() ?>about-team">About Team</a></li>
										</ul>
									</div>
								</li>
								<li class="tt-ol-submenu-wrap <?= $pagetab === "contact" ? "active" : "" ?>">
									<div class="tt-ol-submenu-trigger">
										<a href="#">Contact</a>
										<div class="tt-ol-submenu-caret-wrap">
											<div class="tt-ol-submenu-caret magnetic-item"></div>
										</div>
									</div>
									<div class="tt-ol-submenu">
										<ul class="tt-ol-submenu-list">
											<li class="<?= $title === "Contact Us" ? "active" : "" ?>"><a href="<?= base_url() ?>contact-us">Contact Form</a></li>
											<li class="<?= $title === "Find Us" ? "active" : "" ?>"><a href="<?= base_url() ?>find-us">Find Us</a></li>
										</ul>
									</div>
								</li>
							</ul>
							<ul class="tt-ol-menu-social">
								<li>
									<h6 class="tt-ol-menu-social-heading">Social Links:</h6>
								</li>
								<li><a href="https://www.facebook.com/liveasoftofficial/" target="_blank" rel="noopener">Facebook</a></li>
								<li><a href="https://wa.me/923193329628?text=Hi" target="_blank" rel="noopener">WhatsApp</a></li>
								<li><a href="<?= base_url() ?>"  rel="noopener">Website</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>
