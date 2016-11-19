<h2>Create Task</h2>
<?php $attributes=$arrayName = array('id' =>'create_form' ,'class'=>'horizontal' );
      echo validation_errors("<p class='bg-danger'>");
      if($this->session->flashdata('errors')):
        echo $this->session->flashdata('errors');
      endif;
      echo form_open('tasks/create', $attributes); ?>

<div class="form-group">
  <?php echo form_label('Task Name'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'task_name',
      'placeholder'=>'Enter Task Name'
    );
  ?>
  <?php echo form_input($data); ?>
</div>
<div class="form-group">
  <?php echo form_label('Task Description'); ?>
  <?php
    $data = array(
      'class'=>'form-control',
      'name'=>'task_body',
      'placeholder'=>'Enter Task Description'
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
