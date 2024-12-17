<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php require_once('layout/header.php') ?>
<?php require_once('layout/navigation.php') ?>


<div id="content-wrap">
	<div id="page-header"
		class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
		<div class="page-header-inner tt-wrap">
			<div class="ph-caption">
				<div class="ph-caption-subtitle">
					<div class="ph-appear">Let's Talk</div>
				</div>
				<h1 class="ph-caption-title">
					<div class="ph-appear">Contact</div>
				</h1>
				<div class="ph-caption-title-ghost">
					<div class="ph-appear">Contact</div>
				</div>
			</div>
		</div>
		<div class="tt-scroll-down">
			<a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
				<div class="tt-sd-arrow">
					<div class="tt-sd-arrow-inner"></div>
				</div>
				<div class="tt-sd-text">Scroll</div>
			</a>
		</div>
	</div>
	<div id="page-content">
		<div class="tt-section">
			<div class="tt-section-inner tt-wrap">
				<div class="tt-row tt-lg-row-reverse">
					<div class="tt-col-lg-4">
						<div class="tt-heading margin-bottom-8-p anim-fadeinup">
							<h2 class="tt-heading-title">Get in Touch</h2>
						</div>
						<div class="text-gray anim-fadeinup">
							<p>Manor we shall merit by chief wound no or would. Oh towards between subject
								passage sending mention or it.</p>
						</div>
						<ul class="tt-contact-info padding-bottom-40 anim-fadeinup">
							<li>
								<span class="tt-ci-icon"><i class="fas fa-map-marker-alt"></i></span>
								Suit # 06, 2nd Floor, Arkay Square, Shahra-e-liaquat, Karachi, Pakistan. 
							</li>
							<li>
								<span class="tt-ci-icon"><i class="fas fa-phone"></i></span>
								<a href="tel:+923193329628" class="tt-link">+(92) 319 332 9628</a>
							</li>
							<li>
								<span class="tt-ci-icon"><i class="fas fa-envelope"></i></span>
								<a href="mailto:info@liveasoft.com" class="tt-link">info@liveasoft.com</a>
							</li>
							<li>
								<h6 class="no-margin-bottom margin-top-40">Follow:</h6>
								<div class="social-buttons">
									<ul>
										<li>
											<div class="magnetic-wrap"><a
													href="#"
													class="magnetic-item not-hide-cursor" target="_blank"
													rel="noopener" style=""><i
														class="fab fa-facebook-f"></i></a></div>
										</li>
										<li>
											<div class="magnetic-wrap"><a
													href="#"
													class="magnetic-item not-hide-cursor" target="_blank"
													rel="noopener" style=""><i
														class="fab fa-linkedin"></i></a></div>
										</li>
										<li>
											<div class="magnetic-wrap"><a href="<?= base_url() ?>"
													class="magnetic-item not-hide-cursor" target="_blank"
													rel="noopener" style=""><i
														class="fas fa-globe"></i></a></div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="tt-col-lg-1">
					</div>
					<div class="tt-col-lg-7">
						<form id="tt-contact-form" class="tt-form-filled anim-fadeinup">
							<div class="tt-row">
								<div class="tt-col-md-6">
									<div class="tt-form-group">
										<label>Your Name <span class="required">*</span></label>
										<input class="tt-form-control" type="text" name="Name"
											placeholder="" required>
									</div>
								</div>
								<div class="tt-col-md-6">
									<div class="tt-form-group">
										<label>Email address <span class="required">*</span></label>
										<input class="tt-form-control" type="email" name="Email"
											placeholder="" required>
									</div>
								</div>
							</div>
							<div class="tt-form-group">
								<label>Subject <span class="required">*</span></label>
								<input class="tt-form-control" type="text" name="Subject" placeholder=""
									required>
							</div>
							<div class="tt-form-group">
								<label>Select an option <span class="required">*</span></label>
								<select class="tt-form-control" name="option" required>
									<option value="" disabled selected>Please choose an option</option>
									<option value="Say Hello">Say hello</option>
									<option value="New Project">New project</option>
									<option value="Feedback">Feedback</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="tt-form-group">
								<label>Your Message <span class="required">*</span></label>
								<textarea class="tt-form-control" rows="5" name="Message" placeholder=""
									required></textarea>
							</div>
							<small class="tt-form-text"><em>Fields marked with an asterisk (*) are
									required!</em></small>
							<button type="submit" class="tt-btn tt-btn-primary margin-top-30">
								<div data-hover="Send Message">Send Message</div>
								<span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('layout/subfooter.php') ?>

</div>

<?php require_once('layout/footer.php') ?>