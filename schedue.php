<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Schedue</li>
		</ol>
	</div><!--/.row-->
	<div id="toolbar" class="btn-group" style="margin-top: 20px">
		<a href="index.php?page_layout=add_schedue" class="btn btn-success">
			<i class="glyphicon glyphicon-plus"></i> Add Schedue
		</a>
	</div>

	<?php if (isset($_POST['class_id'])) {
		$class_id = $_POST['class_id'];
	} else {
		$class_id = 0;
	} ?>

	<div class="row">
		<div class="col-lg-12 mt-10" style="margin: 25px 0">
			<div class="timetable-img text-center">
				<img src="img/content/timetable.png" alt="">
			</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr class="bg-light-gray">
							<th class="text-uppercase text-center">Time
							</th>
							<th class="text-uppercase text-center">Monday</th>
							<th class="text-uppercase text-center">Tuesday</th>
							<th class="text-uppercase text-center">Wednesday</th>
							<th class="text-uppercase text-center">Thursday</th>
							<th class="text-uppercase text-center">Friday</th>
							<th class="text-uppercase text-center">Saturday</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-middle">08:00-10:00</td>

							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=2 AND kip=1 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=2 AND kip=1 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
		                                    		INNER JOIN teacher
		                                    		ON schedue.teacher_id = teacher.teacher_id
		                                           	WHERE day=3 AND kip=1 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=3 AND kip=1 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
		                                    		INNER JOIN teacher
		                                    		ON schedue.teacher_id = teacher.teacher_id
		                                           	WHERE day=4 AND kip=1 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=4 AND kip=1 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
		                                    		INNER JOIN teacher
		                                    		ON schedue.teacher_id = teacher.teacher_id
		                                           	WHERE day=5 AND kip=1 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=5 AND kip=1 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
		                                    		INNER JOIN teacher
		                                    		ON schedue.teacher_id = teacher.teacher_id
		                                           	WHERE day=6 AND kip=1 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=6 AND kip=1 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=7 AND kip=1 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=7 AND kip=1 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>

						</tr>

						<tr>
							<td class="align-middle">10:00-12:00</td>

							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=2 AND kip=2 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=2 AND kip=2 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=3 AND kip=2 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=3 AND kip=2 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=4 AND kip=2 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=4 AND kip=2 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=5 AND kip=2 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=2 AND kip=2 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=6 AND kip=2 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=6 AND kip=2 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=7 AND kip=2 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=7 AND kip=2 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>
						</tr>

						<tr>
							<td class="align-middle">12:00-14:00</td>

							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=2 AND kip=3 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=2 AND kip=3 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=3 AND kip=3 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=3 AND kip=3 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=4 AND kip=3 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=4 AND kip=3 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=5 AND kip=3 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=5 AND kip=3 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=6 AND kip=3 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=6 AND kip=3 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=7 AND kip=3 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=7 AND kip=3 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>
						</tr>

						<tr>
							<td class="align-middle">14:00-16:00</td>

							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=2 AND kip=4 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=2 AND kip=4 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=3 AND kip=4 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=3 AND kip=4 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=4 AND kip=4 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=4 AND kip=4 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=5 AND kip=4 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=5 AND kip=4 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=6 AND kip=4 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=6 AND kip=4 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=7 AND kip=4 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=7 AND kip=4 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>
						</tr>

						<tr>
							<td class="align-middle">16:00-18:00</td>

							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=2 AND kip=5 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=2 AND kip=5 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=3 AND kip=5 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=3 AND kip=5 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=4 AND kip=5 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=4 AND kip=5 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=5 AND kip=5 AND schedue.class_id=$class_id";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=5 AND kip=5 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=6 AND kip=5 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=6 AND kip=5 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>


							<td>
								<?php
								$sql = "SELECT * FROM schedue
                                    		INNER JOIN teacher
                                    		ON schedue.teacher_id = teacher.teacher_id
                                           	WHERE day=7 AND kip=5 AND schedue.class_id=$class_id";

								$query = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_array($query)) {
								?>
									<span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo $row["teacher_name"]; ?></span>
									<div class="text-right"><a onclick="return conf();" href="del_schedue.php?id=<?php echo $row["id"]; ?>"><i class="glyphicon glyphicon-remove"></i></a></div>
									<?php
									$sql = "SELECT * FROM schedue
                                    		INNER JOIN subject
                                    		ON schedue.subject_id = subject.subject_id
                                           	WHERE day=7 AND kip=5 AND schedue.class_id=$class_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
										<div class="font-size13 text-light-blue"><?php echo $row["subject_name"]; ?></div>
									<?php } ?>

								<?php } ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div><!--/.row-->

	<form role="form" method="post" class="form-inline">
		<div class="form-group">
			<select name="class_id" class="form-control">
				<?php
				$sql = "SELECT * FROM class
		                                                    ORDER BY class_id ASC";
				$query = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($query)) {
				?>
					<option value=<?php echo $row["class_id"]; ?>><?php echo $row["class_name"]; ?></option>
				<?php
				}
				?>
			</select>
		</div>
		<button name="sbm" type="submit" class="btn btn-success">Search Schedue</button>
</div>
</form>
</div> <!--/.main-->