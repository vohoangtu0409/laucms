<section id="dangkynhantin">
	<div class="maxwidth">
		<div class="title-dangkynhantin">
			<h2>ĐĂNG KÝ NHẬN TIN</h2>
		</div>
		<div class="mw-1000">
			<form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
	            <div class="row row-15">
	                <div class="col-sm-4 col-12 padding-15">
	                    <div class="newsletter-input">
	                        <input type="text" class="form-control" id="name-newsletter" name="name-newsletter" placeholder="<?=hoten?>" required />
	                        <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
	                    </div>
	                </div>
	                <div class="col-sm-4 col-12 padding-15">
	                    <div class="newsletter-input">
	                        <input type="email" class="form-control" id="email-newsletter" name="email-newsletter" placeholder="<?=nhapemail?>" required />
	                        <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
	                    </div>
	                </div>
	                <div class="col-sm-4 col-12 padding-15">
	                    <div class="newsletter-input">
	                        <input type="number" class="form-control" id="phone-newsletter" name="phone-newsletter" placeholder="<?=sodienthoai?>" required />
	                        <div class="invalid-feedback"><?=vuilongnhapsodienthoai?></div>
	                    </div>
	                </div>
	                <div class="col-sm-11 col-12 padding-15">
	                    <div class="newsletter-input newsletter-area">
	                        <textarea class="form-control" id="noidung-newsletter" name="noidung-newsletter" placeholder="<?=noidung?>" required /></textarea>
	                        <div class="invalid-feedback"><?=vuilongnhapnoidung?></div>
	                    </div>
	                </div>
	                <div class="col-sm-1 col-12 padding-15">
	                    <div class="newsletter-button">
			                <input type="submit" name="submit-newsletter" value="GỬI" disabled>
			                <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
			            </div>
	                </div>
	            </div>
	            
	        </form>
	    </div>
	</div>
</section>