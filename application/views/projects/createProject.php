<?php
	

		$attribute=array('id'=>'signupForm','class'=>'form-vertical','role'=>'form'); 

		$inputUserName=array(
		'name'=>'Projectname',
		'class'=>'form-control',
		'placeholder'=>'Enter Name Of Project',
		); 

		$inputLastName=array(
		'name'=>'Projectbody',
		'class'=>'form-control',
		'placeholder'=>'Project Description',
		);

		/*$inputPassword=array(
		'name'=>'cPassword',
		'class'=>'form-control',
		'placeholder'=>'Confirm your Password',
		);

		$inputFirstName=array(
		'name'=>'firstname',
		'class'=>'form-control',
		'placeholder'=>'Firstname',
		);
		
		$inputLastName=array(
		'name'=>'lastname',
		'class'=>'form-control',
		'placeholder'=>'Lastname',
		);

		$inputEmail=array(
		'name'=>'email',
		'class'=>'form-control',
		'placeholder'=>'Email Address',
		);*/		

		?>	<h2>Create Project</h2>
		<?php
			
				// if($this->session->flashdata('errors'))
				// {
				// echo $this->session->flashdata('errors');
				// }
				echo form_open('projects/createProject',$attribute);	?>

				<div class="form-group">

				<?php
				echo form_input($inputUserName); ?>
				</div>


				<div class="form-group">

				<?php
				echo form_textarea($inputLastName); ?>
				</div>

				<!-- <div class="form-group">

				<?php
				echo form_input($inputFirstName); ?>
				</div>

				<div class="form-group">

				<?php
				echo form_input($inputEmail); ?>
				</div>
				
				<div class="form-group">
				<?php 
				echo form_password($inputUserPassword);
				?>
				</div>

				<div class="form-group">
				<?php 
				echo form_password($inputPassword);
				?>
				</div> -->

				<div class="form-group">
				<?php 
				$inputSubmit=array(
				'name'=>'submit',
				'class'=>'btn btn-primary',
				'value'=>'save',
				);
				echo form_submit($inputSubmit);
				?>
				</div>
				<?php echo form_close(); 
	?>