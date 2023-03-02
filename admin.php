<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}
// Sử dụng để khi nào cần gọi tới trang nào thì import vào
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Manager</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script src="js/lumino.glyphs.js"></script>
	<style type="text/css">
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		  margin: 0;
		}

		/* Firefox */
		input[type=number] {
		  -moz-appearance: textfield;
		}
		table {
		    counter-reset: tableCount;     
		}
		.counterCell:before {              
		    content: counter(tableCount); 
		    counter-increment: tableCount; 
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>VIN</span> SCHOOL</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use>
							</svg> Admin Manager</a>
				
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<?php 
		$directoryURI = $_SERVER['REQUEST_URI'];
		$path = parse_url($directoryURI, PHP_URL_PATH);
		$components = explode('/', $path);
		$first_part = $components[1];
	?>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>Trang chủ</a></li>

			<li><a href="index.php?page_layout=class"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>Class</a></li>

			<li><a href="index.php?page_layout=student"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"/></svg>Student</a></li>

			<li><a href="index.php?page_layout=semester"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Semester</a></li>


			<li><a href="index.php?page_layout=subject"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Subject</a></li>

			<li><a href="index.php?page_layout=point"><svg class="glyph stroked star">
				<use xlink:href="#stroked-star"/></svg>Point</a></li>

			<li><a href="index.php?page_layout=teacher"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>Teacher</a></li>

			<li><a href="index.php?page_layout=schedue"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Schedue</a></li>

			<li><a href="index.php?page_layout=user"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg>Admin</a></li>
			<hr>
			<li><a href="logout.php">
				<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Logout</a></li>
		</ul>

	</div>
	<!--/.sidebar-->

	<?php

	// Master Page
	if (isset($_GET["page_layout"])) {
		switch ($_GET["page_layout"]) {

			case "teacher": include_once("teacher.php");
			break;
			case "add_teacher": include_once("add_teacher.php");
			break;
			case "edit_teacher": include_once("edit_teacher.php");
			break;

			case "subject": include_once("subject.php");
			break;
			case "add_subject": include_once("add_subject.php");
			break;

			case "class": include_once("class.php");
			break;
			case "add_class": include_once("add_class.php");
			break;
			case "edit_class": include_once("edit_class.php");
			break;

			case "semester": include_once("semester.php");
			break;
			case "add_semester": include_once("add_semester.php");
			break;

			case "point": include_once("point.php");
				break;
			case "add_point": include_once("add_point.php");
				break;
			case "edit_point": include_once("edit_point.php");
				break;

			case "user": include_once("user.php");
			break;
			case "add-user": include_once("add_user.php");
			break;
			case "edit-user": include_once("edit_user.php");
			break;

			case "student": include_once("student.php");
			break;
			case "add-student": include_once("add_student.php");
			break;
			case "edit-student": include_once("edit_student.php");
			break;

			case "schedue": include_once("schedue.php");
			break;
			case "add_schedue": include_once("add_schedue.php");
			break;

			case "category": include_once("category.php");
			break;
			case "add-category": include_once("add_category.php");
			break;
			case "edit-category": include_once("edit_category.php");
			break;

			case "comment": include_once("comment.php");
			break;
			
		}

	} else {
		include_once("dashboard.php");
	}

	?>
	<script>
	  function conf(){
	    return confirm("Are you sure delete?");
	  }
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap-table.js"></script>
</body>

</html>