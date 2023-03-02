<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới student "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $student_name = $_POST["student_name"];
    $student_phone = $_POST["student_phone"];
    $student_address = $_POST["student_address"];
    $class_id = $_POST["class_id"];
    $student_birth_day = $_POST["student_birth_day"];

    // SQL
    $sql = "INSERT INTO student(student_name ,student_phone,student_address,class_id,student_birth_day) 
    values('$student_name','$student_phone','$student_address','$class_id','$student_birth_day')";

    $result = mysqli_query($conn, $sql);

    if($result){
        // di chuyen ve man student
        header("location: index.php?page_layout=student");
    }else{
        // hien thi loi email da ton tai
        $checkError = '<div class="alert alert-danger">Email | Phone | Code already exists !</div>';
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage student</a></li>
				<li class="active">Add student</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add student</h1>
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
                                    <label>Name</label>
                                    <input name="student_name" required class="form-control" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="student_phone" required type="number" class="form-control" required="">
                                </div>                       
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="student_address" required type="text"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
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
                                    <label>Birth day</label>
                                    <input name="student_birth_day" required type="date"  class="form-control">
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Add Student</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
