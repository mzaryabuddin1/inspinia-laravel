<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php require_once('layout/header.php') ?>
<?php require_once('layout/navigation.php') ?>


<div id="content-wrap">
	<div id="page-header"
		class="ph-full ph-cap-xxlg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
		<div class="page-header-inner tt-wrap">
			<div class="ph-caption">
				<div class="ph-caption-subtitle">
					<div class="ph-appear">Let's Talk</div>
				</div>
				<h1 class="ph-caption-title">
					<div class="ph-appear">Work<br> With Us</div>
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
		<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-2">
			<div class="tt-section-inner tt-wrap">
				<div class="tt-heading tt-heading-xlg anim-fadeinup">
					<h3 class="tt-heading-subtitle">A project, an idea, a question?</h3>
					<h2 class="tt-heading-title"><a href="mailto:<?= $email; ?>" class="tt-link"
							data-cursor="<i class='fas fa-envelope'></i>"><?= $email; ?> <span
								class="hide-from-sm">↗</span></a></h2>
				</div>
				<ul class="tt-contact-info anim-fadeinup">
					<li class="text-xlg">
						<span class="tt-ci-icon"><i class="fas fa-map-marker-alt"></i></span>
						<?= $address; ?>
					</li>
					<li class="text-xlg">
						<span class="tt-ci-icon"><i class="fas fa-phone"></i></span>
						<a href="tel:<?= $phone_format; ?>" class="tt-link"><?= $phone; ?></a>
					</li>
					<li>
						<h6 class="no-margin-bottom margin-top-30">Follow:</h6>
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
		</div>
		<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
			<div class="tt-section-inner tt-wrap">
				<div class="tt-page-nav tt-pn-stroke">
					<a href="<?= base_url() ?>contact-us" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-envelope'></i>">
						<div class="tt-pn-title">Let's talk</div>
						<div class="tt-pn-hover-title">Let's talk</div>
					</a>
					<div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('layout/subfooter.php') ?>

</div>

<?php require_once('layout/footer.php') ?>

</body>

</html>
