<?php
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

// Chức năng cập nhật mới teacher : UPDATE

$teacher_id = $_GET["teacher_id"];

$checkError = '';

if(isset($_POST["sbm"])){

    // Basic
    $teacher_name = $_POST["teacher_name"];
    $teacher_phone = $_POST["teacher_phone"];
    $teacher_email = $_POST["teacher_email"];
    $teacher_address = $_POST["teacher_address"];
    $teacher_class = $_POST["teacher_class"];
    $teacher_birth_day = $_POST["teacher_birth_day"];

        // SQL
        $sql = "UPDATE teacher 
        SET 
        teacher_name='$teacher_name',
        teacher_email='$teacher_email',
        teacher_phone='$teacher_phone',
        teacher_address='$teacher_address',
        teacher_class='$teacher_class',
        teacher_birth_day='$teacher_birth_day'
        WHERE teacher_id = $teacher_id";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: index.php?page_layout=teacher");
        }else{
            $checkError = '<div class="alert alert-danger">Phone already exists !</div>';
        }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage Teacher</a></li>
				<li class="active">Edit Teacher</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Teacher</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php echo $checkError; ?>
                            	<?php 
                            		$sql = "SELECT * FROM teacher WHERE teacher_id='$teacher_id'";
                            		$query = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_array($query)){	
                            	 ?>
                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="teacher_name" required class="form-control" placeholder="" value="<?php echo $row['teacher_name'] ?>">
                                </div>
                                <div class="form-group">
                                	<label>Email</label>
									<input class="form-control" placeholder="" name="teacher_email" type="email" required="" value="<?php echo $row['teacher_email'] ?>">
								</div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="teacher_phone" required type="text" class="form-control" value="<?php echo $row['teacher_phone'] ?>">
                                </div>                       
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="teacher_address" required type="text"  class="form-control" value="<?php echo $row['teacher_address'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Class Manager</label>
                                    <select name="teacher_class" class="form-control">
                                        <option <?php if($row['teacher_class']=="6A"){echo "selected";} ?> value=6A>6A</option>
                                        <option <?php if($row['teacher_class']=="6B"){echo "selected";} ?> value=6B>6B</option>
                                        <option <?php if($row['teacher_class']=="7A"){echo "selected";} ?> value=7A>7A</option>
                                        <option <?php if($row['teacher_class']=="7B"){echo "selected";} ?> value=7B>7B</option>
                                        <option <?php if($row['teacher_class']=="8A"){echo "selected";} ?> value=8A>8A</option>
                                        <option <?php if($row['teacher_class']=="8B"){echo "selected";} ?> value=8B>8B</option>
                                        <option <?php if($row['teacher_class']=="9A"){echo "selected";} ?> value=9A>9A</option>
                                        <option <?php if($row['teacher_class']=="9B"){echo "selected";} ?> value=9B>9B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Birth day</label>
                                    <input name="teacher_birth_day" required type="date"  class="form-control" value="<?php echo $row['teacher_birth_day'] ?>">
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
