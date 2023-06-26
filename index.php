<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV Generator</title>
	<!-- CSS LINKS BEGIN --> 
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/all.min.css">
	<!-- CSS LINKS END -->
</head>

<body>  
		<!-- DISPLAY SECTION BEGIN -->
		<section class="multiform_section"> 
				<div class="card">
					<form id="msform" action="resume.php" method="POST"  enctype="multipart/form-data" >
						<div class="main_container">
							<div class="stripe_container"> 
								<div class="stripe_itegration_head">
									<h2><span>Resume</span> Builder</h2>
									<img src="images/integration_setting_icon.svg" alt="Setting icon">
								</div>
								<div class="stripe_row">  
									<div class="colst-lg-8 colst-md-8 colst-sm-12">
										<div class="tab">
											<div class="form-card">
												<div class="row my-3">
													<div class="step"> 
														<small>STEP 1/4</small>
														<h2>About you</h2> 
														<p>Tell Your Story Craft an Engaging About you</p>
													</div> 
													<div class="form-field-main-box">  
														<div class="form-field-box"> 
														<div class="form-field"> 
															<div class="text_box"> 
																<label for="firstname"> First name</label>
																<input  id="firstname" name="firstname" placeholder="Please Enter Your  First name "  required>
															</div>
															
															<div class="text_box"> 
																<label for="lastname">Last name</label>
																<input id="lastname" name="lastname"   placeholder="Please Enter Your  Last name" required>
															</div>
															<div class="text_box"> 
																<label for="occupation">Occupation</label>
																<input id="occupation" name="occupation" placeholder="Please enter your occupation.."  required>
															</div>
														</div>
														</div>
														<div class="form-field-box"> 
														<div class="form-field"> 
															
															<div class="text_box"> 
																<label for="secret_key">About you</label>
																<textarea placeholder="Please write about yourself " name="about" required></textarea>
															</div>
															<div class="text_box"> 
																<label for="profile">Profile</label>
																<input type="file" name="profile" id="profile" required>
															</div>
														</div>
														</div>
													</div>
												</div>
											</div>
											 </div>
										<div class="tab">
											<div class="form-card">
												<div class="row">
													
													<div class="step"> 
														<small>Step 2 / 4</small>
														<h2>Contact info</h2> 
														<p>Highlight Your Contact Information</p>
													</div> 
													<div class="form-field-main-box full_field_box"> 
														
													<div class="form-field-box"> 
														<div class="form-field"> 
															<div class="text_box"> 
																<label for="phone">Phone</label>
																<input  type="tel" id="phone" name="phone" placeholder="Please Enter your Phone number " required>
															</div>
															
															<div class="text_box"> 
																<label for="email">Email</label>
																<input type="email" id="email" name="email" placeholder="Please Enter your  Email"  required>
															</div>
															<div class="text_box"> 
																<label for="address">Address</label>
																<input type="text" id="Address" name="Address"  placeholder="Please Enter your Address"  required>
															</div> 
														</div>
														</div>  
													</div>
												</div>
											</div>
											  </div>
										<div class="tab">
											<div class="form-card">
												
												<div class="row my-3">
													<div class="step"> 
														<small>STEP 3/4</small>
														<h2>Education</h2> 
														<p>Share Your Academic Journey</p>
													</div> 
													<div class="form-field-main-box full_field_box"> 
														
														<div class="form-field-box"> 
															<div class="form-field"> 
																<div class="text_box"> 
																	<label>University</label>
																	<div class="date--input">
																	<input  type="text" placeholder="Please Enter your University name " name="uniName"  required>
																	<input type="date" required name="uniDate">
																</div>
																</div>
																
																<div class="text_box"> 
																	<label>College</label>
																	<div class="date--input">
																	<input  placeholder="Please Enter your College name" name="collegeName"  required>
																	<input type="date" required name="collegeDate">
																	</div>
																</div>
																<div class="text_box"> 
																	<label>School</label>
																	<div class="date--input">
																	<input placeholder="Please Enter your School name" name="schoolName"  required>
																	<input type="date" required name="schoolDate">
																	</div>
																</div> 
															</div>
															</div>  
														</div>
											</div>
											</div>
											  </div>
										<div class="tab">
											<div class="form-card">
												<div class="row">
													<div class="step"> <small>Step 4 / 4</small>
														<h2>Skills & Expertise</h2>
														<p>Unleash Your Abilities Showcase Your Skills</p>
													</div>  
														<div class="skill_main_container">
															<h5>At least add your 4 Skills</h5>
														<div id="input-container"> 
															<input type="text" placeholder="Enter your skill" name="skills[]" required />
														</div>
														<button type="button" onclick="addSkills()">Add More Skills</button>
														</div>
													<div class="qualities_container">
															<h5>At least add your 4 Qualities</h5>
													<div id="input-container-qualities"> 
														<input type="text" placeholder="Enter your Qualities" name="qualities[]" required />
													</div>
													<button type="button" onclick="addQualities()">Add More Qualities</button>
													</div>
												</div>
											</div>
											<!-- <input type="button" name="previous" class="previous action-button-previous" value="Prevoius" />
											<input type="submit" name="Save Setting"  value="Generate resume" />  -->
										 </div> 
									</div> 
		<button type="button" class="theme-btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
		<button type="button"   class="theme-btn-two" id="nextBtn" onclick="nextPrev(1)">Next</button>
		 
						</form> 
					</div> 
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		</section>
		<!-- DISPLAY SECTION END -->
		
		
		
	<!-- SCRIPTS BEGIN -->
	<script src="js/script.js"></script>  
	<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("msform").submit();
	document.getElementById("nextBtn").setAttribute("name", "submit");
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}</script>
	<script> 

		function addSkills() {
    var container = document.getElementById("input-container");
    var input = document.createElement("input");
    input.type = "text";
    input.name = "skills[]";
	input.setAttribute('required', '');
	input.setAttribute('placeholder', 'Enter your skills');
    container.appendChild(input);
  } 		
  
 
  function addQualities() {
    var container = document.getElementById("input-container-qualities");
    var input = document.createElement("input");
    input.type = "text";
    input.name = "qualities[]"; 
	input.setAttribute('placeholder', 'Enter your Qualities');
    container.appendChild(input);
  }
	</script>
	<!-- SCRIPTS END -->
</body>

</html>