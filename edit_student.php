<?php
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

// Chức năng cập nhật mới student : UPDATE

$student_id = $_GET["student_id"];

$checkError = '';

if(isset($_POST["sbm"])){

    // Basic
    $student_name = $_POST["student_name"];
    $student_phone = $_POST["student_phone"];
    $student_address = $_POST["student_address"];
    $class_id = $_POST["class_id"];
    $student_birth_day = $_POST["student_birth_day"];

        // SQL
        $sql = "UPDATE student 
        SET 
        student_name='$student_name',
        student_phone='$student_phone',
        student_address='$student_address',
        class_id='$class_id',
        student_birth_day='$student_birth_day'
        WHERE student_id = $student_id";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: index.php?page_layout=student");
        }else{
            $checkError = '<div class="alert alert-danger">Phone already exists !</div>';
        }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage student</a></li>
				<li class="active">Edit student</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit student</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php echo $checkError; ?>
                            	<?php 
                            		$sql = "SELECT * FROM student WHERE student_id='$student_id'";
                            		$query = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_array($query)){	
                            	 ?>
                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="student_name" required class="form-control" placeholder="" value="<?php echo $row['student_name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="student_phone" required type="text" class="form-control" value="<?php echo $row['student_phone'] ?>">
                                </div>                       
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="student_address" required type="text"  class="form-control" value="<?php echo $row['student_address'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="class_id" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM class
                                                    ORDER BY class_id ASC";
                                            $query = mysqli_query($conn, $sql);
                                            while($row1 = mysqli_fetch_array($query)){
                                        ?>
                                            <option <?php if($row1['class_id'] == $row['class_id']){echo "selected";} ?> value=<?php echo $row1["class_id"];?>><?php echo $row1["class_name"];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Birth day</label>
                                    <input name="student_birth_day" required type="date"  class="form-control" value="<?php echo $row['student_birth_day'] ?>">
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Update</button>
                                <button type="reset" class="btn btn-default">Refresh</button>

                                 <?php
                                    }
                                ?>

                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
