<section id="dangkynhantin">
	<div class="maxwidth">
		<div class="title-main">
			<h2><?=dangkynhankhuyenmai?></h2>
			<p><?=$slogan['ten'.$lang]?></p>
		</div>
		<form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="newsletter-input">
                                <input type="text" class="form-control" id="name-newsletter" name="name-newsletter" placeholder="<?=hoten?>" required />
                                <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                            </div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="newsletter-input">
						        <input type="email" class="form-control" id="email-newsletter" name="email-newsletter" placeholder="<?=nhapemail?>" required />
						        <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
						    </div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="newsletter-input">
						        <input type="number" class="form-control" id="phone-newsletter" name="phone-newsletter" placeholder="<?=sodienthoai?>" required />
                                <div class="invalid-feedback"><?=vuilongnhapsodienthoai?></div>
						    </div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="newsletter-input">
						        <input type="text" class="form-control" id="address-newsletter" name="address-newsletter" placeholder="<?=diachi?>" required />
                                <div class="invalid-feedback"><?=vuilongnhapdiachi?></div>
						    </div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="newsletter-input newsletter-area">
                        <textarea class="form-control" id="noidung-newsletter" name="noidung-newsletter" placeholder="<?=noidung?>" required /></textarea>
                        <div class="invalid-feedback"><?=vuilongnhapnoidung?></div>
                    </div>
				</div>
			</div>
		    <div class="newsletter-button">
		        <input type="submit" name="submit-newsletter" value="<?=nhankhuyenmai?>" disabled>
		        <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
		    </div>
		</form>
	</div>
</section>