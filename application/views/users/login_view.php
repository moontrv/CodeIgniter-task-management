<?php if($this->session->userdata('logged_in')): ?>
<h2>Logout</h2>
<p><?php   echo form_open('users/logout');
        if($this->session->userdata('username')):
          echo "You are logged in as ".$this->session->userdata('username'); ?></p>
<?php   endif;
        $data = array(
          'class'=>'btn btn-primary',
          'name'=>'submit',
          'value'=>'Logout'
        );
        echo form_submit($data);
        echo form_close();
      else:
?>
<h1>Login form</h2>
<?php $attributes=$arrayName = array('id' =>'login_form' ,'class'=>'horizontal' ); ?>

<?php if($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>

<?php echo form_open('users/login', $attributes); ?>
<div class="form-group">
  <?php echo form_label('Username'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'username',
      'placeholder'=>'Enter Username'
    );
  ?>
  <?php echo form_input($data); ?>
</div>

<div class="form-group">
  <?php echo form_label('Password'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'password',
      'placeholder'=>'Enter Password'
    );
  ?>
  <?php echo form_password($data); ?>
</div>

<div class="form-group">
  <?php echo form_label('Confirm Password'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'confirm_password',
      'placeholder'=>'Confirm Password'
    );
  ?>
  <?php echo form_password($data); ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class'=>'btn btn-primary',
      'name'=>'submit',
      'value'=>'Login'
    );
  ?>
  <?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>

<?php endif; ?>
