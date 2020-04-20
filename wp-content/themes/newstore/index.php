<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewSrore
 */
$layout_class = newstore_blog_layout();
get_header();
do_action( 'newstore_before_blog_post');
?>

<div class="container-full space blog-post-index">
	<div class="container">
		<div id="primary" class="content-area row justify-content-center">
			<main id="main" class="site-main <?php echo esc_attr($layout_class); ?>" style = "max-width: 100%;flex:100%;display:none;">
				<div class="main-container container">
					<div id = "logo_div" class="logo-panel" style = "width: 401px;height: 401px;">
						<svg id="layer" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
							<defs>
								<pattern id="smallGrid" width="20" height="20" patternUnits="userSpaceOnUse">
									<path d="M 20 0 L 0 0 0 20" fill="none" stroke="gray" stroke-width="1"/>
								</pattern>
								<pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse">
									<rect width="100" height="100" fill="url(#smallGrid)"/>
									<path d="M 100 0 L 0 0 0 100" fill="none" stroke="gray" stroke-width="1"/>
								</pattern>
							</defs>
							<circle id = "circle" cx="200" cy="200" r="200" stroke="black" stroke-width="1" fill="url(#grid)"/>
							<path id="curve" style = "fill: transparent;" d="M 55,140 A160,160 0,0,1 345,140" stroke-width = "5" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)"/>
							<text id="family-text" class="svg-class" style = "font-size: 37px;font-family: stencil;" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">
								<textPath id = "family-textpath" class="svg-class" xlink:href="#curve">
									LOPEZ'S DISTELLERY
								</textPath>
							</text>
							<text id = "house-text" class="svg-class"  style = "font-size: 45px;font-family: stencil;" x="100" y="180" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">TEQUILA</text>
							<text id = "highlight-text1" class="svg-class"  style = "font-size: 17px;font-family: stencil;" x="100" y="130" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">PREMIUM BARREL AGED</text>
							<text id = "highlight-text2" class="svg-class"  style = "font-size: 25px;font-family: stencil;" x="100" y="230" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">Vintage Reserve</text>
							<text id = "highlight-text3" class="svg-class"  style = "font-size: 30px;font-family: stencil;" x="90" y="350" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">Covid-19 Edition</text>
							<text id = "city-text" class="svg-class"  style = "font-size: 20px;font-family: stencil;" x="120" y="270" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">MIAMI, FLORIDA</text>
							<text id = "date-text" class="svg-class"  style = "font-size: 20px;font-family: stencil;" x="150" y="300" onmousedown="mouseDown(evt)" onmousemove="move(evt)" onmouseup="endMove(evt)" onmouseout="endMove(evt)">EST. 2020</text>
							<image id = "logo-image" style="display: none;" width = "250" x = "100" y="100" xlink:href="<?php echo get_template_directory_uri();?>/images/logo/Logo1.png"/>
							<ellipse id="spigot" cx="200" cy="330" rx="40" ry="70" style="fill:gray;opacity: 0.7;stroke:#4f4d4d;stroke-width:2;"></ellipse>
						</svg>
						<p class="text-center" style="font-size: 16px; font-weight: bold; padding-top: 10px;">Please avoid text on this colored grey area , as it will be covered by the barrel's spigot</p>
					</div>
					<div class="option-panel">
						<div class="logo-sidebar">
							<div class="logo-nav">
								<div class = "logo-button-container">
									<div class = "logo-button logo-button--active logo-button--text" onclick="change_option(1)">
										<div class="logo-button-caption">
											1.Text Only
										</div>
									</div>
									<div class = "logo-button logo-button--layout" onclick="change_option(2)">
										<div class="logo-button-caption">
											2.Base Logo to Pick
										</div>
									</div>
									<div class = "logo-button logo-button--background" onclick="change_option(3)">
										<div class="logo-button-caption">
											3.Upload your own Logo
										</div>
									</div>
									<div class = "logo-button logo-button--logo" onclick="change_option(4)">
										<div class="logo-button-caption">
											4.Upload your complete design
										</div>
									</div>
								</div>
							</div>
							<div class="container" style="background-color:#efefef;">
								<div id = "other-logo-body" class="logo-body">
									<div class="logo-low" style="padding-bottom: 10px;margin-bottom:10px;border-bottom:2px solid;">
										<button class="primary-button" onclick = "export_img()">export</button>
										<button class="primary-button" style="float: right;" onclick = "show_landing()">Back</button>
									</div>
									<div class="logo-row logo-textfamily-div">
										<div class="logo-column smaill-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Field Name</label>
														<select class="logo-select logo-select--textfamily" onchange="select_text(this.value)">
															<option value="family-text">Family Name</option>
															<option value="house-text">Spirit or House</option>
															<option value="highlight-text1">Highlight Text1</option>
															<option value="highlight-text2">Highlight Text2</option>
															<option value="highlight-text3">Highlight Text3</option>
															<option value="city-text">City Text</option>
															<option value="date-text">Date Text</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-fontfamily-div">
										<div class="logo-column smaill-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Font Type</label>
														<select class="logo-select logo-select--fontfamily" onchange="change_fontfamily(this.value)">
															<option value="Arial Bold">Arial Bold</option>
															<option value="Brush Script">Brush Script</option>
															<option value="Carnevalee">Carnevalee</option>
															<option value="Annabelle">Annabelle</option>
															<option value="RioGrande">Rio Grande</option>
															<option value="Saddlebag">Saddlebag</option>
															<option value="TexasTango">Texas Tango</option>
															<option value="Old English">Old English</option>
															<option value="Stencil" selected>Stencil</option>
															<option value="Hobo">Hobo</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-text-div">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label text-label" style="padding-top: 5px;">Space to enter text</label>
														<input type="text" class="logo-form-control logo-text" data-test-text="" value = "LOPEZ'S DISTELLERY" onkeyup="change_text(this.value)">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-select-div" style="display: none;">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Logo Image</label>
														<select class="logo-select logo-select--logo" onchange="change_logo(this.value)">
															<option value="Logo1.png">Logo 1</option>
															<option value="Logo2.png">Logo 2</option>
															<option value="Logo3.png">Logo 3</option>
															<option value="Logo4.png">Logo 4</option>
															<option value="Logo5.png">Logo 5</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-fontsize-div">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Font Size</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-tool--minus maker--minus"></button>
														</div>
														<input type="text" pattern="[0-9]" class="logo-form-control logo-text-size" data-test-text="" value = "30" onkeyup="change_fontsize(this.value)">
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-tool--plus maker--plus"></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-custom-div" style="display: none;">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<input id = "custom-file" type="file" style="display:none;">
														<label class="logo-label">Choose File</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-custom-logo maker--plus"></button>
														</div>
														<button class="primary-button remove-button" onclick="remove_logo()">Remove</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-scale-div" style="display: none;">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Scale</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-scale--minus maker--minus"></button>
														</div>
														<input type="text" pattern="[0-9]" class="logo-form-control logo-text-scale" data-test-text="" value = "1" onkeyup="change_scale(this.value)">
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-scale--plus maker--plus"></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-size-div">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Width</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-width--minus maker--minus"></button>
														</div>
														<input type="text" pattern="[0-9]" class="logo-form-control logo-text-width" data-test-text="" value = "290" onkeyup="change_width(this.value)">
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-width--plus maker--plus"></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row logo-size-div">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column">
													<div class="input-group">
														<label class="logo-label">Height</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-height--minus maker--minus"></button>
														</div>
														<input type="text" pattern="[0-9]" class="logo-form-control logo-text-height" data-test-text="" value = "140" onkeyup="change_height(this.value)">
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-height--plus maker--plus"></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="logo-row">
										<div class="logo-column small-12">
											<div class="logo-row">
												<div class="logo-column col-md-6">
													<div class="input-group">
														<label class="logo-label">X Position</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-xpos--minus maker--minus"></button>
														</div>
														<input type="text" pattern="[0-9]" class="logo-form-control logo-text-xpos" data-test-text="" value = "55" onkeyup="change_xpos(this.value)">
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-xpos--plus maker--plus"></button>
														</div>
													</div>
												</div>
												<div class="logo-column col-md-6">
													<div class="input-group">
														<label class="logo-label">Y Position</label>
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-ypos--minus maker--minus"></button>
														</div>
														<input type="text" pattern="[0-9]" class="logo-form-control logo-text-ypos" data-test-text="" value = "140" onkeyup="change_ypos(this.value)">
														<div class="input-group-button">
															<button class="maker-tool maker-tool--box maker-ypos--plus maker--plus"></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container" style="margin-top:40px;">
					<h6 style="font-weight: bold;">Welcome to Personalized Oak Barrels by All2impress.</h6>
					<p>Please select from the above 4 personalization options.</p>
					<p>Select every field you want to customize for content, font type, size and location. You can use the chart below as an inspiration, but you can also write your own ideas.</p>
					<p>Please note that price varies according to the barrel capacity and personalization option selected.</p>
					<p>Once your design is final, please press the export button and e-mail us your design to oakbarrel@all2impress.com. We will contact you to complete your order.</p>
					<p>In case of any question, please do not hesitate to contact us at support@all2impress.com</p>
					<p>Thank you very much for the opportunity to support you with your branding, printing and/or promotional needs!</p>
					<p>Sincerely.</p>
					<p>All2impress, LLC</p>
				</div>
				<div class="container" style="margin:20px 0px;">
					<img height="450" src="<?php echo get_template_directory_uri();?>/images/logo/description.png"/>
				</div>
			</main><!-- #main -->
			<main id="landing_main" class="site-main <?php echo esc_attr($layout_class); ?>" style = "max-width: 100%;flex:100%;">
				<div class="landing-header">
					<div>
						<img style="width: 200px;" src = "<?php echo get_template_directory_uri();?>/images/logo/landing1.png"/>
					</div>
					<div class="landing-headertext-div">
						<h1 class="stencil-font landing-header-h1">PERSONALIZED OAK BARRELS</h1>
						<h2 class="text-center stencil-font landing-header-h2">BY ALL2IMPRESS</h2>
					</div>
				</div>
				<div class="gift-div">
					<h2>
						The Perfect Gift! Personalized Oak Aging Barrels for the liquor or wine connoisseur!
					</h2>
				</div>
				<div class="row landing-content-div">
					<div class="col-md-8">
						<div class="content-text">
							<p>Our barrels are more than just a unique centerpiece on your bar!  Our oak barrels age spirits to peak flavor, just like the full-size oak barrels found in professional distilleries. Smaller barrels sizes accelerate the aging process, allowing you to enjoy your perfectly aged spirits in as little as 2 weeks!</p>
							<p>Perfect for aging Wine*, Beer*, Tequila, Brandy, Whiskey, Bourbon, Rum, Cognac or any spirit that benefits from aging.</p>
							<p>Barrels come with its own stand, bung and wooden spigot, which makes for convenient serving and filling.</p>
							<p>*Wine and Beer aging may require an airlock/bung combination.</p>
							<p style="display: inline-block;float: left;padding-right: 10px;">Product Description:</p>
							<p>Handcrafted American White Oak Wood Barrel, Medium Charred interior and Black Steel Hoops<br />Available in 2 Sizes : 2 Ltrs or 5 Ltrs capacity</p>
							<p>Personalization Method: Laser Engraved</p>
							<p>4 alternative options for personalization, all including multiple fields like Family Name, Spirit or House, Highlights, City, State and Date</p>
						</div>
						<div class="row">
							<div class="col-md-3">
								<p class="barrel-title">
									1. Text Only
								</p>
								<img src="<?php echo get_template_directory_uri();?>/images/logo/barrel1.png" alt="">
								<p class="capacity-title">
									2 Ltrs: $65.00<br />
									5 Ltrs: $90.00<br />
								</p>
							</div>
							<div class="col-md-3">
								<p class="barrel-title">
									2. Pick from 4 base Logos
								</p>
								<img src="<?php echo get_template_directory_uri();?>/images/logo/barrel2.png" alt="">
								<p class="capacity-title">
									2 Ltrs: $75.00<br />
									5 Ltrs: $9100.00<br />
								</p>
							</div>
							<div class="col-md-3">
								<p class="barrel-title">
									3. Update your own logo
								</p>
								<img src="<?php echo get_template_directory_uri();?>/images/logo/barrel3.png" alt="">
								<p class="capacity-title">
									2 Ltrs: $85.00<br />
									5 Ltrs: $110.00<br />
								</p>
							</div>
							<div class="col-md-3">
								<p class="barrel-title">
									4. Upload your own design
								</p>
								<img src="<?php echo get_template_directory_uri();?>/images/logo/barrel4.png" alt="">
								<p class="capacity-title">
									2 Ltrs: $99.00<br />
									5 Ltrs: $125.00<br />
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<img src="<?php echo get_template_directory_uri();?>/images/logo/barrel_default.png" alt="">
						<p class="barrel-title barrel-button" style="cursor:pointer;display:inline-block;padding:10px 20px;margin-top:30px;" onclick = "hide_landing()">
							Click here to personalize
						</p>
					</div>
				</div>
			</main>
			<?php 
				if($layout_class !== 'full-width'){
					get_sidebar();
				} 
			?>
		</div><!-- #primary -->
	</div>
</div>
<script>
	var click = false; // flag to indicate when shape has been clicked
	var clickX, clickY; // stores cursor location upon first click
	var moveX = 0,
		moveY = 0; // keeps track of overall transformation
	var lastMoveX = 0,
		lastMoveY = 0; // stores previous transformation (move)
	var element;

	jQuery(document).ready(function(){
		jQuery(".maker-custom-logo").click(function(){
			jQuery("#custom-file").click();
		});
		jQuery(".logo-button").click(function(){
			jQuery(".logo-button").removeClass("logo-button--active");
			jQuery(this).addClass("logo-button--active");
		});
		jQuery(".maker-height--minus").click(function(){
			jQuery(".logo-text-height").val((jQuery(".logo-text-height").val()-1));
			change_height((jQuery(".logo-text-height").val()-1));
		});
		jQuery(".maker-height--plus").click(function(){
			jQuery(".logo-text-height").val((parseInt(jQuery(".logo-text-height").val())+1));
			change_height((parseInt(jQuery(".logo-text-height").val())+1));
		});
		jQuery(".maker-width--minus").click(function(){
			jQuery(".logo-text-width").val((jQuery(".logo-text-width").val()-1));
			change_width((jQuery(".logo-text-width").val()-1));
		});
		jQuery(".maker-width--plus").click(function(){
			jQuery(".logo-text-width").val((parseInt(jQuery(".logo-text-width").val())+1));
			change_width((parseInt(jQuery(".logo-text-width").val())+1));
		});
		jQuery(".maker-tool--minus").click(function(){
			jQuery(".logo-text-size").val((jQuery(".logo-text-size").val()-1));
			change_fontsize((jQuery(".logo-text-size").val()-1));
		});
		jQuery(".maker-tool--plus").click(function(){
			jQuery(".logo-text-size").val((parseInt(jQuery(".logo-text-size").val())+1));
			change_fontsize((parseInt(jQuery(".logo-text-size").val())+1));
		});
		jQuery(".maker-xpos--minus").click(function(){
			jQuery(".logo-text-xpos").val((jQuery(".logo-text-xpos").val()-1));
			change_xpos((jQuery(".logo-text-xpos").val()-1));
		});
		jQuery(".maker-xpos--plus").click(function(){
			jQuery(".logo-text-xpos").val((parseInt(jQuery(".logo-text-xpos").val())+1));
			change_xpos((parseInt(jQuery(".logo-text-xpos").val())+1));
		});
		jQuery(".maker-ypos--minus").click(function(){
			jQuery(".logo-text-ypos").val((jQuery(".logo-text-ypos").val()-1));
			change_ypos((jQuery(".logo-text-ypos").val()-1));
		});
		jQuery(".maker-ypos--plus").click(function(){
			jQuery(".logo-text-ypos").val((parseInt(jQuery(".logo-text-ypos").val())+1));
			change_ypos((parseInt(jQuery(".logo-text-ypos").val())+1));
		});
		jQuery(".maker-scale--minus").click(function(){
			jQuery(".logo-text-scale").val((jQuery(".logo-text-scale").val()-1));
			change_scale((jQuery(".logo-text-scale").val()-1));
		});
		jQuery(".maker-scale--plus").click(function(){
			jQuery(".logo-text-scale").val((parseInt(jQuery(".logo-text-scale").val())+1));
			change_scale((parseInt(jQuery(".logo-text-scale").val())+1));
		});
		jQuery("#custom-file").change(function(){
			readURL(this);
		});
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				document.getElementById("logo-image").setAttribute("xlink:href", e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function mouseDown(evt) {
		evt.preventDefault(); // Needed for Firefox to allow dragging correctly
		click = true;
		clickX = evt.clientX;
		clickY = evt.clientY;
		element = evt.target;
		refresh_color();
		refresh_pos(evt.target.id);
		jQuery(".logo-size-div").hide();
		if (evt.target.id == "curve" || evt.target.id == "family-text" || evt.target.id == "family-textpath"){
			jQuery(".logo-size-div").show();
			element = document.getElementById("family-textpath");
			jQuery('.logo-select--textfamily').val("family-textpath");
			element.setAttribute("fill", "#3660a8");
			jQuery('.logo-select--textfamily').val("family-text");
		}else{
			element.setAttribute("fill", "#3660a8");
			jQuery('.logo-select--textfamily').val(evt.target.id);
		}
		refresh_panel(evt.target.id);
	}

	function refresh_panel(value){
		jQuery(".logo-fontfamily-div").hide();
		jQuery(".logo-text-div").hide();
		jQuery(".logo-select-div").hide();
		jQuery(".logo-fontsize-div").hide();
		jQuery(".logo-custom-div").hide();
		jQuery(".logo-scale-div").hide();
		jQuery(".logo-size-div").hide();
		if (value == "curve" || value == "family-text" || value == "family-textpath"){
			jQuery(".logo-fontfamily-div").show();
			jQuery(".logo-text-div").show();
			jQuery(".logo-fontsize-div").show();
			jQuery(".logo-size-div").show();
		}else if (value == "house-text" || value == "highlight-text1" || value == "highlight-text2" || value == "highlight-text3" || value == "city-text" || value == "date-text"){
			jQuery(".logo-fontfamily-div").show();
			jQuery(".logo-text-div").show();
			jQuery(".logo-fontsize-div").show();
		}else if (value == "logo-options"){
			jQuery(".logo-select-div").show();
			jQuery(".logo-scale-div").show();
		}else if (value == "custom-logo"){
			jQuery(".logo-custom-div").show();
			jQuery(".logo-scale-div").show();
		}
	}

	function refresh_color(){
		var temp_element = document.getElementsByClassName("svg-class");
		for (var i=0;i<temp_element.length;i++){
			temp_element[i].setAttribute("fill", "black");
		}
	}

	function move(evt) {
		evt.preventDefault();
		if (click) {
			moveX = lastMoveX + (evt.clientX - clickX);
			moveY = lastMoveY + (evt.clientY - clickY);
			evt.target.setAttribute("transform", "translate(" + moveX + "," + moveY + ")");
		}
	}

	function endMove(evt) {
		click = false;
		lastMoveX = moveX;
		lastMoveY = moveY;
		// element = evt.target;
		// if (evt.target.id == "curve"){
		// 	element = document.getElementById("family-textpath");
		// 	element.setAttribute("fill", "black");
		// }else{
		// 	element.setAttribute("fill", "black");
		// }
	}

	function refresh_pos(value){
		if (value == "curve" || value == "family-text" || value == "family-textpath"){
			var temp_pos = document.getElementById("curve").getAttribute("d");
			var temp_pos_x = temp_pos.split(' ')[1].split(',')[0];
			var temp_pos_y = temp_pos.split(' ')[1].split(',')[1];
			jQuery(".logo-text-xpos").val(temp_pos_x);
			jQuery(".logo-text-ypos").val(temp_pos_y);
		}else if (value == "logo-options" || value == "custom-logo"){
			jQuery(".logo-text-xpos").val(document.getElementById("logo-image").getAttribute("x"));
			jQuery(".logo-text-ypos").val(document.getElementById("logo-image").getAttribute("y"));
		}else{
			jQuery(".logo-text-xpos").val(element.getAttribute("x"));
			jQuery(".logo-text-ypos").val(element.getAttribute("y"));
		}
	}

	function select_text(value){
		refresh_color();
		element = document.getElementById(value);
		jQuery(".logo-select-div").hide();
		jQuery(".logo-fontsize-div").show();
		jQuery(".logo-text-div").show();
		jQuery(".logo-fontfamily-div").show();
		jQuery(".logo-size-div").hide();
		jQuery(".logo-scale-div").hide();
		jQuery(".logo-custom-div").hide();
		refresh_pos(value);
		if (value == "family-text"){
			element = document.getElementById("family-textpath");
			element.setAttribute("fill", "#3660a8");
			jQuery(".logo-size-div").show();
		}else if (value == "logo-options"){
			element = document.getElementById("logo-image");
			jQuery(".logo-fontsize-div").hide();
			jQuery(".logo-select-div").show();
			jQuery(".logo-text-div").hide();
			jQuery(".logo-fontfamily-div").hide();
			jQuery(".logo-scale-div").show();
		}else if (value == "custom-logo"){
			element = document.getElementById("logo-image");
			jQuery(".logo-fontsize-div").hide();
			jQuery(".logo-text-div").hide();
			jQuery(".logo-fontfamily-div").hide();
			jQuery(".logo-scale-div").show();
			jQuery(".logo-custom-div").show();
		}else{
			element.setAttribute("fill", "#3660a8");
		}
		// if (value == "highlight-text1"){
		// 	jQuery(".text-label").html("Space to enter text");
		// }else{
		// 	jQuery(".text-label").html("Text");
		// }
	}

	function change_text(value){
		element.textContent = value;
		element.setAttributeNS("http://www.w3.org/XML/1998/namespace", "xml:space", "preserve");
	}

	function change_fontsize(value){
		element.style.fontSize = value+"px";
	}

	function change_fontfamily(value){
		element.style.fontFamily = value;
	}

	function change_height(value){
		document.getElementById("curve").setAttribute("d", "M "+(jQuery(".logo-text-xpos").val())+","+jQuery(".logo-text-ypos").val()+" A"+(300-jQuery(".logo-text-height").val())+","+(300-jQuery(".logo-text-height").val())+" 0,0,1 "+(parseInt(jQuery(".logo-text-width").val())+parseInt(jQuery(".logo-text-xpos").val()))+","+jQuery(".logo-text-ypos").val());
	}

	function change_width(value){
		document.getElementById("curve").setAttribute("d", "M "+(jQuery(".logo-text-xpos").val())+","+jQuery(".logo-text-ypos").val()+" A"+(300-jQuery(".logo-text-height").val())+","+(300-jQuery(".logo-text-height").val())+" 0,0,1 "+(parseInt(jQuery(".logo-text-width").val())+parseInt(jQuery(".logo-text-xpos").val()))+","+jQuery(".logo-text-ypos").val());
	}

	function change_xpos(value){
		if (jQuery(".logo-select--textfamily").val() == "family-text"){
			document.getElementById("curve").setAttribute("d", "M "+(jQuery(".logo-text-xpos").val())+","+jQuery(".logo-text-ypos").val()+" A"+(300-jQuery(".logo-text-height").val())+","+(300-jQuery(".logo-text-height").val())+" 0,0,1 "+(parseInt(jQuery(".logo-text-width").val())+parseInt(jQuery(".logo-text-xpos").val()))+","+jQuery(".logo-text-ypos").val());
		}else if (jQuery(".logo-select--textfamily").val() == "logo-options"){
			element = document.getElementById("logo-image");
			element.setAttribute("x", value);
		}else{
			element.setAttribute("fill", "#3660a8");
			element.setAttribute("x", value);
		}
	}

	function change_ypos(value){
		if (jQuery(".logo-select--textfamily").val() == "family-text"){
			document.getElementById("curve").setAttribute("d", "M "+(jQuery(".logo-text-xpos").val())+","+jQuery(".logo-text-ypos").val()+" A"+(300-jQuery(".logo-text-height").val())+","+(300-jQuery(".logo-text-height").val())+" 0,0,1 "+(parseInt(jQuery(".logo-text-width").val())+parseInt(jQuery(".logo-text-xpos").val()))+","+jQuery(".logo-text-ypos").val());
		}else if (jQuery(".logo-select--textfamily").val() == "logo-options"){
			element = document.getElementById("logo-image");
			element.setAttribute("y", value);
		}else{
			element.setAttribute("fill", "#3660a8");
			element.setAttribute("y", value);
		}
	}

	function convertDataURL(url, callback) {
		var xhr = new XMLHttpRequest();
		xhr.onload = function() {
			var reader = new FileReader();
			reader.onloadend = function() {
				callback(reader.result);
			}
			reader.readAsDataURL(xhr.response);
		};
		xhr.open('GET', url);
		xhr.responseType = 'blob';
		xhr.send();
	}

	function change_logo(value){
		convertDataURL("<?php echo get_template_directory_uri();?>/images/logo/"+value, function(dataUrl) {
			document.getElementById("logo-image").setAttribute("xlink:href", dataUrl);
		})
		//document.getElementById("logo-image").setAttribute("xlink:href", "<?php echo get_template_directory_uri();?>/images/"+value);
	}

	function change_scale(value){
		document.getElementById("logo-image").style.transform = "scale("+value+")";
	}

	function remove_logo(){
		document.getElementById("logo-image").setAttribute("xlink:href", "1");
	}

	function change_option(val){
		jQuery("#highlight-text1").hide();
		jQuery("#highlight-text2").hide();
		jQuery("#highlight-text3").hide();
		jQuery('.logo-textfamily-div').show();
		jQuery("#logo-image").show();
		jQuery("#date-text").show();
		jQuery("#city-text").show();
		jQuery("#house-text").show();
		jQuery("#family-text").show();
		jQuery('.logo-custom-div').hide();
		jQuery('.logo-select-div').hide();
		//jQuery(".text-label").html("Text");
		//element = document.getElementById("family-text");
		switch(val){
			case 1:
				jQuery("#logo-image").hide();
				jQuery("#highlight-text1").show();
				jQuery("#highlight-text2").show();
				jQuery("#highlight-text3").show();
				jQuery(".logo-scale-div").hide();
				jQuery(".logo-size-div").show();
				jQuery(".logo-fontsize-div").show();
				jQuery(".logo-fontfamily-div").show();
				jQuery(".logo-text-div").show();
				jQuery('.logo-select--textfamily').find('option').remove().end()
					.append('<option value="family-text">Family Name</option>')
					.append('<option value="house-text">Spirit or House</option>')
					.append('<option value="highlight-text1">Highlight Text1</option>')
					.append('<option value="highlight-text2">Highlight Text2</option>')
					.append('<option value="highlight-text3">Highlight Text3</option>')
					.append('<option value="city-text">City Text</option>')
					.append('<option value="date-text">Date Text</option>')
					.val('family-text');
				break;
			case 2:
				jQuery("#highlight-text1").show();
				jQuery("#highlight-text2").show();
				jQuery("#highlight-text3").hide();
				jQuery(".logo-scale-div").hide();
				jQuery(".logo-size-div").show();
				jQuery(".logo-fontsize-div").show();
				jQuery(".logo-fontfamily-div").show();
				jQuery(".logo-text-div").show();
				change_logo("Logo1.png");
				jQuery('.logo-select--textfamily').find('option').remove().end()
					.append('<option value="family-text">Family Name</option>')
					.append('<option value="house-text">Spirit or House</option>')
					.append('<option value="logo-options">Logo Options</option>')
					.append('<option value="highlight-text1">Highlight Text1</option>')
					.append('<option value="highlight-text2">Highlight Text2</option>')
					.append('<option value="city-text">City Text</option>')
					.append('<option value="date-text">Date Text</option>')
					.val('family-text');
				break;
			case 3:
				document.getElementById("logo-image").setAttribute("xlink:href", "1");
				jQuery("#highlight-text1").show();
				jQuery("#highlight-text2").show();
				jQuery("#highlight-text3").hide();
				jQuery(".logo-scale-div").hide();
				jQuery(".logo-size-div").show();
				jQuery(".logo-fontsize-div").show();
				jQuery(".logo-fontfamily-div").show();
				jQuery(".logo-text-div").show();
				jQuery('.logo-select--textfamily').find('option').remove().end()
					.append('<option value="family-text">Family Name</option>')
					.append('<option value="house-text">Spirit or House</option>')
					.append('<option value="custom-logo">Custom Logo</option>')
					.append('<option value="highlight-text1">Highlight Text1</option>')
					.append('<option value="highlight-text2">Highlight Text2</option>')
					.append('<option value="city-text">City Text</option>')
					.append('<option value="date-text">Date Text</option>')
					.val('family-text');
				break;
			case 4:
				change_logo("Logo1.png");
				jQuery('.logo-textfamily-div').hide();
				jQuery("#date-text").hide();
				jQuery("#city-text").hide();
				jQuery("#house-text").hide();
				jQuery("#family-text").hide();
				jQuery(".logo-fontsize-div").hide();
				jQuery(".logo-text-div").hide();
				jQuery(".logo-fontfamily-div").hide();
				jQuery(".logo-size-div").hide();
				jQuery(".logo-scale-div").show();
				jQuery(".logo-custom-div").show();
				jQuery(".logo-select--textfamily").val("custom-logo");
				element = document.getElementById("logo-image");
				break;
		}
	}

	function base64ToBlob(base64, mime) 
	{
		mime = mime || '';
		var sliceSize = 1024;
		var byteChars = window.atob(base64);
		var byteArrays = [];

		for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
			var slice = byteChars.slice(offset, offset + sliceSize);

			var byteNumbers = new Array(slice.length);
			for (var i = 0; i < slice.length; i++) {
				byteNumbers[i] = slice.charCodeAt(i);
			}

			var byteArray = new Uint8Array(byteNumbers);

			byteArrays.push(byteArray);
		}

		return new Blob(byteArrays, {type: mime});
	}

	function export_img(){
		window.scrollTo(0,0);
		refresh_color();
		document.getElementById("circle").style.display = "none";
		jQuery("defs").hide();
		jQuery("#spigot").hide();
		var destination = document.getElementById('logo_div');
		html2canvas(destination).then(function(canvas) {
			var data = canvas.toDataURL('image/png');
			// var base64ImageContent = data.replace(/^data:image\/(png|jpg);base64,/, "");
			// var blob = base64ToBlob(base64ImageContent, 'image/png');   
			// var form_data = new FormData();
    		// form_data.append("data", blob);
			// jQuery.ajax({
			// 	url: "<?php echo get_template_directory_uri();?>/save_logo.php",
			// 	cache: false,
			// 	contentType: false,
			// 	processData: false,
			// 	data: form_data,                         
			// 	type: 'POST',
			// 	success: function(result){
			// 		jQuery("defs").show();
			// 		alert("Successfully Saved."+result);
			// 		window.open("<?php echo get_template_directory_uri();?>/"+result);
			// 	}
			// });
			jQuery("defs").show();
			jQuery("#spigot").show();
			document.getElementById("circle").style.display = "block";
			jQuery.post("<?php echo get_template_directory_uri();?>/save_logo.php", {data: data}, function(result){
				alert("Successfully Saved.");
				jQuery("#main").append("<a id = 'download-image' href = '<?php echo get_template_directory_uri();?>/"+result+"' download style = 'display:none;'>123123123</a>");
				jQuery(document).ready(function () {
					jQuery('#download-image')[0].click();  //$('#about').get(0).click();
				});
				window.open("<?php echo get_template_directory_uri();?>/"+result);
			});
		});
	}

	function hide_landing(){
		window.scrollTo(0,0);
		jQuery(document).ready(function(){
			jQuery("#landing_main").fadeOut("slow");
			jQuery("#main").fadeIn("slow");
		});
	}

	function show_landing(){
		window.scrollTo(0,0);
		jQuery(document).ready(function(){
			jQuery("#main").fadeOut("slow");
			jQuery("#landing_main").fadeIn("slow");
		});
	}
</script>
<?php
get_footer();
