<?php include('php/secction/header.php') ?>
<?php include('php/secction/subheader.php') ?>
<!-- pagebanner -->

<!-- End Pagebanner -->

<!-- breadcrumb -->
<section class="page-title-area text-white bg_cover" style="background-image: url(img/bg/13.png);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Reviews</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.php">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Reviews</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->
<!--====== End Page-title-area section ======-->

<br><br><br><br>
<div class="review-container">
	<div id="form_container">
		<div class="row" style="min-height: 579px">
			<div class="col-lg-5">
				<div id="left_form">
					<figure><img src="img/slider/pagebanner1.jpg" alt=""></figure>
					<h2>Reviews</h2>
					<p>We value your feedback! Please take a moment to share your thoughts on your recent experience
						with our product/service. Your input helps us improve and provide better solutions to meet your
						needs.</p>
					<a href="#0" id="more_info" data-bs-toggle="modal" data-bs-target="#more-info"><i
							class="pe-7s-info"></i></a>
				</div>
			</div>
			<div class="col-lg-7">

				<div id="wizard_container">
					<div id="top-wizard">
						<div id="progressbar"></div>
					</div>
					<!-- /top-wizard -->
					<form name="review" id="wrapped" method="POST" action="review_send.php">
						<input id="website" name="website" type="text" value="">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">

							<div class="step">
								<h3 class="main_question"><strong>1/2</strong>How do you describe your overall
									satisfaction?</h3>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group clearfix">
											<label class="rating_type">Service provided</label>
											<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-1-5"
													name="rating_input_1" value="5 Stars"><label for="rating-input-1-5"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-4"
													name="rating_input_1" value="4 Stars"><label for="rating-input-1-4"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-3"
													name="rating_input_1" value="3 Stars"><label for="rating-input-1-3"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-2"
													name="rating_input_1" value="2 Stars"><label for="rating-input-1-2"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-1"
													name="rating_input_1" value="1 Star"><label for="rating-input-1-1"
													class="rating-star"></label>
											</span>
										</div>
										<div class="form-group clearfix">
											<label class="rating_type">Product's quality</label>
											<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-2-5"
													name="rating_input_2" value="5 Stars"><label for="rating-input-2-5"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-4"
													name="rating_input_2" value="4 Stars"><label for="rating-input-2-4"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-3"
													name="rating_input_2" value="3 Stars"><label for="rating-input-2-3"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-2"
													name="rating_input_2" value="2 Stars"><label for="rating-input-2-2"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-1"
													name="rating_input_2" value="1 Star"><label for="rating-input-2-1"
													class="rating-star"></label>
											</span>
										</div>
										<div class="form-group clearfix">
											<label class="rating_type">Support</label>
											<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-3-5"
													name="rating_input_3" value="5 Stars"><label for="rating-input-3-5"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-4"
													name="rating_input_3" value="4 Stars"><label for="rating-input-3-4"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-3"
													name="rating_input_3" value="3 Stars"><label for="rating-input-3-3"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-2"
													name="rating_input_3" value="2 Stars"><label for="rating-input-3-2"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-1"
													name="rating_input_3" value="1 Star"><label for="rating-input-3-1"
													class="rating-star"></label>
											</span>
										</div>
										<div class="form-group clearfix">
											<label class="rating_type">General satisfaction</label>
											<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-4-5"
													name="rating_input_4" value="5 Stars"><label for="rating-input-4-5"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-4-4"
													name="rating_input_4" value="4 Stars"><label for="rating-input-4-4"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-4-3"
													name="rating_input_4" value="3 Stars"><label for="rating-input-4-3"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-4-2"
													name="rating_input_4" value="2 Stars"><label for="rating-input-4-2"
													class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-4-1"
													name="rating_input_4" value="1 Star"><label for="rating-input-4-1"
													class="rating-star"></label>
											</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row pb-5">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="comments" class="form-control required"
												style="height:100px;"
												placeholder="Help us to improve, write your comments here!"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- /step -->

							<!-- <div class="step"> -->
							<!-- <h3 class="main_question"><strong>2/3</strong>Your review and comments</h3> -->

							<!-- /row -->
							<!-- </div> -->
							<!-- /step -->

							<div class="submit step">
								<h3 class="main_question"><strong>2/2</strong>Please fill with your details</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="firstname" class="form-control required"
												placeholder="First name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="lastname" class="form-control required"
												placeholder="Last name">
										</div>
									</div>
								</div>
								<!-- /row -->

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control required"
												placeholder="Your Email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="telephone" class="form-control"
												placeholder="Your Telephone">
										</div>
									</div>
								</div>
								<!-- /row -->
								<br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group terms">
											<input name="terms" type="checkbox" class="icheck required" value="yes">
											<label>Please accept <a href="#" data-bs-toggle="modal"
													data-bs-target="#terms-txt">terms and conditions</a> ?</label>
										</div>
									</div>
								</div>
							</div>
							<!-- /step-->
						</div>
						<!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward">Backward </button>
							<button type="button" name="forward" class="forward">Forward</button>
							<button type="submit" name="process" class="submit">Submit</button>
						</div>
						<!-- /bottom-wizard -->
					</form>
				</div>
				<!-- /Wizard container -->
			</div>
		</div><!-- /Row -->
	</div><!-- /Form_container -->
</div>

<?php

function paintStars($qty)
{
	switch ($qty) {
		case '1 Star':
			return '<span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
		case '2 Stars':
			return '
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            ';
		case '3 Stars':
			return '
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            ';
		case '4 Stars':
			return '
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            ';
		case '5 Stars':
			return '
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            ';
		default:
			return "";
	}
}


?>


<!----->
<div class="testimonials">

	<?php

	include('conection.php');

	$query = "SELECT * FROM resenas";

	if ($result = $conn->query($query)) {

		while ($row = $result->fetch_assoc()) {
			?>


	<div class="testimonial-card">
		<div class="testimonial-comments">
			<b>
				<?php echo $row['review'] ?>
			</b>
		</div>

		<ul>
			<li>Service provided:
				<?php echo paintStars($row['service_provided']) ?>
			</li>
			<li>Product Quality:
				<?php echo paintStars($row['product_quality']) ?>
			</li>
			<li>Support:
				<?php echo paintStars($row['support']) ?>
			</li>
			<li>General Satisfaction:
				<?php echo paintStars($row['general_satisfaction']) ?>
			</li>
		</ul>
		<div class="testimonial-title">
			<?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
		</div>
	</div>



	<?php
		}

		$result->free();

	}



	?>

</div>



<!----->



<?php include('php/secction/subfooter.php') ?>

<?php include('php/secction/footer.php') ?>