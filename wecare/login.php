<?php
	include "connect.php";
	if (isset($_REQUEST['save']))
	{
		$email1  = $_REQUEST['email'];
		$pass1 = $_REQUEST['password'];
		
		$sql   = "SELECT * FROM admin WHERE a_email='".$email1."' and a_pass='".$pass1."'"; 
		$res   = mysqli_query($conn,$sql); 
		if (mysqli_num_rows($res) == 1) {
		  $row = mysqli_fetch_array($res, MYSQLI_BOTH);
		  $_SESSION['id']        = $row['a_id'];
		  $_SESSION['firstname'] = $row['a_name'];
		?>
		  <script type="text/javascript">window.location.href="Adminhome.php"</script>
		<?php } else { ?>
			<br><br><br>
		<div class="about-3">
        <div style="color:white;background-color:red;font-size:18px;text-align:center;padding:15px;">Email Id and Password Invalid... Try again...!!!</div>
        <script type="text/javascript">
                setTimeout(function () {            
               window.location.href='Login.php'; // the redirect goes here
            },2000);    
        </script>   
		</div>
		<?php }
	}
?>						    	<form method="POST">
			                   
						    	  	<div>
						    		    <input placeholder="Email" name="email" type="text">
						    		</div>
						    		<div>
						    			<input placeholder="Password" name="password" type="password" value="">
						    		</div>
						    		<div>
						    			<div></div>
						    			<div>
						    				<input type="submit" value="Login" name="save">
						    			</div>
						    		</div><br>
						    		<div>
						    			<div></div>
						    			
						    		</div>
						    
						      	</form>
						      	<hr/>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
			<!-- </div> -->
			
		</div>
	</div>