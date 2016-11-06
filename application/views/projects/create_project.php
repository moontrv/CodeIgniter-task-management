<h2>Create Project</h2>
<?php $attributes=$arrayName = array('id' =>'create_form' ,'class'=>'horizontal' );
      echo validation_errors("<p class='bg-danger'>");
      if($this->session->flashdata('errors')):
        echo $this->session->flashdata('errors');
      endif;
      echo form_open('projects/create', $attributes); ?>

<div class="form-group">
  <?php echo form_label('Project Name'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'project_name',
      'placeholder'=>'Enter Project Name'
    );
  ?>
  <?php echo form_input($data); ?>
</div>
<div class="form-group">
  <?php echo form_label('Project Description'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'project_body',
      'placeholder'=>'Enter Project Description'
    );
  ?>
  <?php echo form_textarea($data); ?>
</div>
<div class="form-group">
  <?php
    $data = array(
      'class'=>'btn btn-primary',
      'name'=>'submit',
      'value'=>'Create'
    );
  ?>
  <?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>
