<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resume</title>
	<!-- CSS LINKS BEGIN --> 
	<link rel="stylesheet" href="css/custom.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<!-- CSS LINKS END -->
</head>

<body>  
<!-- RESUME SECTION BEGIN --> 
<?php  
 $db = new mysqli('localhost','root','','resumebuilder');
 
 if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
} 



 if (isset($_POST["firstname"])) {  
        $name = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $title = $_POST['occupation'];
        $about = $_POST['about']; 
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['Address'];
        $uniName = $_POST['uniName'];
        $uniDate = $_POST['uniDate'];
        $collegeName = $_POST['collegeName'];
        $collegeDate = $_POST['collegeDate'];
        $schoolName = $_POST['schoolName'];
        $schoolDate = $_POST['schoolDate'];
        $profile_name = $_FILES['profile']['name'];
        $profile_temp = $_FILES['profile']['tmp_name']; 
            move_uploaded_file($profile_temp, 'uploaded-file/'.$profile_name);
            // header('location: form.php'); 
$query =   $db->query  ('INSERT INTO biodata(FirstName,LastName,Occupation,about,Phone,Email,Address,UniName,CollegeName,SchoolName,UniDate,CollegeDate,SchoolDate,profile_name) VALUES ("'.$name.'","'.$lname.'","'.$title.'","'.$about.'","'.$phone.'","'.$email.'","'.$address.'","'.$uniName.'","'.$collegeName.'","'.$schoolName.'","'.$uniDate.'","'.$collegeDate.'","'.$schoolDate.'","'.$profile_name.'")');
  
       
?>
  
<section class="resume">
<div class="container">
  <input type="button" id="generate_pdf" value="Generate PDF"> 
  <div class="row g-0 form">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card_sidebar">
            <div class="profile_image">
                <img  src="./uploaded-file/<?php echo $profile_name; ?>"  alt="Profile images">
            </div>
            <div class="details_seprator"> 
            <div class="detail_head_bar">
                <h2>Contact</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-phone"></i> Phone :  <a href="javascript:void(0);"><?php echo $phone ?></a></li>
                <li><i class="fa-solid fa-envelope"></i> Email : <a href="javascript:void(0);"><?php echo $email ?></a></li>
                <li><i class="fa-solid fa-location-dot"></i> Address : <a href="javascript:void(0);"><?php echo $address ?></a></li>
            </ul>
            </div>
            <div class="details_seprator"> 
            <div class="detail_head_bar">
                <h2>Education</h2>
            </div>
            <ul> 
                <li> <strong>University </strong><b> <?php echo $uniDate ?></b><?php echo $uniName ?></li>
                <li> <strong>Intermediate</strong>  <b> <?php echo $collegeDate ?></b><?php echo $collegeName ?></li>
                <li> <strong>Matriculation</strong> <b><?php echo $schoolDate ?></b><?php echo $schoolName ?></li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="profile_bio">
        <h1><?php echo $name.' '.$lname?></h1>
        <h4><?php echo $title ?></h4> 
        
        <div class="details_seprator"> 
            <div class="detail_head_bar_light">
                <h2>Profile</h2>
            </div>
          <p>   <?php echo $about ?>  </p>
        </div>
        <div class="details_seprator"> 
            <div class="detail_head_bar_light">
                <h2>Skills</h2>
            </div>
            <div class="skill_container"> 
                            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $values = $_POST["skills"];

                // Loop through the values
                foreach ($values as $value) {
                    echo "<span class='skill'> " . $value . "</span>"; 
                }
                }  
                ?> 
            </div>
        </div>
        <div class="details_seprator"> 
            <div class="detail_head_bar_light">
                <h2>Qualities</h2>
            </div> 
            <ul class="qualities-list"> 
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $quality = $_POST["qualities"]; 
                // Loop through the values
                foreach ($quality as $qualities) {
                    echo "<li> " . $qualities . "</li>"; 
                }
                } 
                ?> 
            </ul>
        </div>
    </div> 
</div>
  </div>
  <a class='theme-btn dark' href='index.php'>Back to form</a>
</div>
</section>  
<?php  }
else{
    echo "<div class='error_resume'><h2 class='add_data'>Please fill your bio data in the Form</h2>"."<a class='theme-btn dark' href='index.php'>Back to form</a></div>";
}   ?>
<!-- RESUME SECTION END -->

<script src="js/script.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  
<script>
$(document).ready(function () {  
    var form = $('.form'),  
    cache_width = form.width(),  
    a4 = [595.28, 841.89]; // for a4 size paper width and height  

    $('#generate_pdf').on('click', function () {  
        $(this).hide();
        $('body').scrollTop(0);  
        generatePDF();  
    });  
    
    function generatePDF() {  
        getCanvas().then(function (canvas) {  
            var img = canvas.toDataURL("image/png"),  
             doc = new jsPDF({  
                 unit: 'px',  
                 format: 'a4'  
             });  
            doc.addImage(img, 'JPEG', 20, 20);  
            doc.save('resume');  
            form.width(cache_width);  
        });  
    }  
      
    function getCanvas() {  
        form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
        return html2canvas(form, {  
            imageTimeout: 2000,  
            removeContainer: true  
        });  
    }
});
</script>
</body>
</html>