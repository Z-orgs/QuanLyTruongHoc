<?php
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

// Chức năng cập nhật mới thành viên : UPDATE

$user_id = $_GET["user_id"];

$checkError = '';

if(isset($_POST["sbm"])){

    // Basic
    $user_full = $_POST["user_full"];
    $user_mail = $_POST["user_mail"];
    $user_pass = $_POST["user_pass"];
    $user_re_pass = $_POST["user_re_pass"];

    if ($user_pass != $user_re_pass) {
    	$checkError = '<div class="alert alert-danger">The entered password does not match !</div>';
    }else{
    	 $user_level = $_POST["user_level"];

	    // SQL
	    $sql = "UPDATE user 
	    SET 
	    user_full='$user_full',
	    user_mail='$user_mail',
	    user_pass='$user_pass',
	    user_level='$user_level'
	    WHERE user_id = $user_id";

		$result = mysqli_query($conn, $sql);

	    if($result){
	    	header("location: index.php?page_layout=user");
	    }else{
	    	$checkError = '<div class="alert alert-danger">Email already exists !</div>';
	    }
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage member</a></li>
				<li class="active">Edit member</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit member</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php echo $checkError; ?>
                            	<?php 
                            		$sql = "SELECT * FROM user WHERE user_id='$user_id'";
                            		$query = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_array($query)){	
                            	 ?>
                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="user_full" required class="form-control" placeholder="" value="<?php echo $row['user_full'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="user_mail" required type="text" class="form-control" value="<?php echo $row['user_mail'] ?>">
                                </div>                       
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="user_pass" required type="password"  class="form-control" value="<?php echo $row['user_pass'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Enter the password</label>
                                    <input name="user_re_pass" required type="password"  class="form-control" value="<?php echo $row['user_pass'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Permission</label>
                                    <select name="user_level" class="form-control">
                                        <option <?php if($row['user_level']==1){echo "selected";} ?> value=1>Admin</option>
                                        <option <?php if($row['user_level']==2){echo "selected";} ?> value=2>Member</option>
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
