<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Faculty View Profile.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #1dcfd8;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #c0962b;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #1dcfd8;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #c785c7;
}

.activity.green h4 {
    color: #969346;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}


.review-container {
      max-width: 1170px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .review {
      margin-bottom: 15px;
    }

    .username {
      font-weight: bold;
    }

    .review-text {
      margin-top: 5px;
    }

    h4 {
      font-weight: bold;
    }
    .center {
        text-align: center;
      }
    
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="row">
<div class="profile-nav col-md-3">
<div class="panel">
<div class="user-heading round">
<a href="#">
<img src="facultylogo.jpg" alt>
</a>
<h1><?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?></h1>
<p><?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?></p>
</div>
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
<li><a href="#"> <i class="fa fa-edit"></i> </a></li> 
</ul>
</div>
</div>
<!-- <div class="profile-info col-md-9">
<div class="panel">
<form>
<textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
</form>
<footer class="panel-footer">
<button class="btn btn-warning pull-right">Post</button>
<ul class="nav nav-pills">
<li>
<a href="#"><i class="fa fa-map-marker"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-camera"></i></a>
</li>
<li>
<a href="#"><i class=" fa fa-film"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-microphone"></i></a>
</li>
</ul>
</footer>
</div> -->
<div class="panel">
<div class="bio-graph-heading">
Faculty Profile
</div>
<div class="panel-body bio-graph-info">
    <h1>Personal Details</h1>
    <div class="row">
        <div class="bio-row">
            <p><span>Name </span>: <?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Username </span>: <?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Email </span>: <?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?></p>
        </div>
        
        <div class="bio-row">
            <p><span>Major </span>: <?php echo isset($_GET['major']) ? $_GET['major'] : ''; ?></p>
        </div> 
        <div class="bio-row">
            <p><span>Area of interest </span>: <?php echo isset($_GET['areaofinterest']) ? $_GET['areaofinterest'] : ''; ?></p>
        </div>
        <div class="bio-row">
            <p><span>Projects </span>: <?php echo isset($_GET['projects']) ? $_GET['projects'] : ''; ?></p>
        </div>
        
    </div>
</div>
</div>
<div class="col-md-6">
<div class="panel">
<div class="panel-body">
<div class="bio-chart">
<div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
</div>
<div class="bio-desk">
<h4 class="green">Work Experience</h4>
<p> <?php echo isset($_GET['workexperience']) ? $_GET['workexperience'] : ''; ?></p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel">
<div class="panel-body">
<div class="bio-chart">
<div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
</div>
<div class="bio-desk">
<h4 class="purple">Research Experience</h4>
<p><?php echo isset($_GET['researchexperience']) ? $_GET['researchexperience'] : ''; ?></p>
<!-- <p>Wireless Sensor Networks(WSN)</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="review-container">
    <h4>Reviews</h4>
    <?php
    // Establish connection to the database
    $host = "dheepthi.mysql.database.azure.com";
    $username = "cse20217root";
    $password = "Dheepthi@123";
    $database = "signup";

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch reviews from the database
    $sql = "SELECT name, feedback FROM reviews";
    $result = $conn->query($sql);

    // Generate HTML for each review
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="review">';
            echo '<span class="name"><strong>' . $row["name"] . ':</strong></span>';
            echo '<p class="review-text">' . $row["feedback"] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No reviews found.</p>';
    }

    // Close the database connection
    $conn->close();
    ?>
</div>
  <div class="center">
    <a href="table-03/viewfac.php">
        <button style="background-color: #0F6B9C; color: white; width: 150px; height: 50px;">
          Back
        </button>
      </a>    <!-- <a href="search.html"><button>Search</button></a> -->
  </div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>

