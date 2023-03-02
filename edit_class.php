<?php
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

// Chức năng cập nhật mới class : UPDATE

$class_id = $_GET["class_id"];

$checkError = '';

if(isset($_POST["sbm"])){

	    // Basic
	    $class_name = $_POST["class_name"];
	    $teacher_id = $_POST["teacher_id"];

        // SQL
        $sql = "UPDATE class SET 
        class_name='$class_name',
        teacher_id='$teacher_id'
        WHERE class_id = $class_id";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: index.php?page_layout=class");
        }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage class</a></li>
				<li class="active">Edit class</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit class</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php 
                            		$sql = "SELECT * FROM class WHERE class_id='$class_id'";
                            		$query = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_array($query)){	
                            	 ?>
                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="class_name" required class="form-control" placeholder="" value="<?php echo $row['class_name'] ?>">
                                </div>
                                <div class="form-group">
                                   <select name="teacher_id" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM teacher
                                                    ORDER BY teacher_id ASC";
                                            $query = mysqli_query($conn, $sql);
                                            while($row1 = mysqli_fetch_array($query)){
                                        ?>
                                            <option <?php if($row1['teacher_id'] == $row['teacher_id']){echo "selected";} ?> value=<?php echo $row1["teacher_id"];?>><?php echo $row1["teacher_name"];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
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
