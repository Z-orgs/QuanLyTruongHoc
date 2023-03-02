<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới class "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $class_name = $_POST["class_name"];
    $teacher_id = $_POST["teacher_id"];

    // SQL
    $sql = "INSERT INTO class(class_name ,teacher_id) 
    values('$class_name','$teacher_id')";

    $result = mysqli_query($conn, $sql);

    if($result){
        // di chuyen ve man class
        header("location: index.php?page_layout=class");
    }else{
        // hien thi loi email da ton tai
        $checkError = '<div class="alert alert-danger">Add Class Error !</div>';
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage class</a></li>
				<li class="active">Add class</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add class</h1>
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
                                    <input name="class_name" required class="form-control" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Teacher Manager</label>
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
                               
                                <button name="sbm" type="submit" class="btn btn-success">Add class</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
