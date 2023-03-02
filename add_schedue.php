<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới schedue "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $teacher_id = $_POST["teacher_id"];
    $subject_id = $_POST["subject_id"];
    $class_id = $_POST["class_id"];
    $day = $_POST["day"];
    $kip = $_POST["kip"];

    // SQL
    $sql = "INSERT INTO schedue(teacher_id,class_id,subject_id,day,kip) 
    values('$teacher_id','$class_id','$subject_id','$day','$kip')";

    $result = mysqli_query($conn, $sql);

    if($result){
        // di chuyen ve man schedue
        header("location: index.php?page_layout=schedue");
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Schedue</a></li>
				<li class="active">Add Schedue</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Schedue</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php echo $checkError; ?>

                                <form role="form" method="post">                   
                                <div class="form-group">
                                    <label>Teacher</label>
                                    <select name="teacher_id" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM teacher
                                                    ORDER BY teacher_id ASC";
                                            $query = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <option value=<?php echo $row["teacher_id"];?>><?php echo $row["teacher_name"];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name Subject</label>
                                    <select name="subject_id" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM subject
                                                    ORDER BY subject_id ASC";
                                            $query = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <option value=<?php echo $row["subject_id"];?>><?php echo $row["subject_name"];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name Class</label>
                                    <select name="class_id" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM class
                                                    ORDER BY class_id ASC";
                                            $query = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <option value=<?php echo $row["class_id"];?>><?php echo $row["class_name"];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Day</label>
                                    <select name="day" class="form-control">
                                        <option value=2>Monday </option>
                                        <option value=3>Tuesday </option>
                                        <option value=4>Wednesday </option>
                                        <option value=5>Thursday </option>
                                        <option value=6>Friday </option>
                                        <option value=7>Saturday </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kip</label>
                                    <select name="kip" class="form-control">
                                        <option value=1>08:00-10:00</option>
                                        <option value=2>10:00-12:00</option>
                                        <option value=3>12:00-14:00</option>
                                        <option value=4>14:00-16:00</option>
                                        <option value=5>16:00-18:00</option>
                                    </select>
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Add Schedue</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
