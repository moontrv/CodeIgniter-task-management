<h1>Task for: <?php echo $project_name; ?></h1>
<?php echo $task->task_name; ?>

<p class="bg-success"><?php
  if($this->session->flashdata('login_success')):
    echo $this->session->flashdata('login_success');
  endif;
?>
</p>
<p class="bg-success"><?php
  if($this->session->flashdata('no_access')):
    echo $this->session->flashdata('no_access');
  endif;
?>
</p>
<p class="bg-success"><?php
  if($this->session->flashdata('user_registered')):
    echo $this->session->flashdata('user_registered');
  endif;
?>
</p>
<p class="bg-danger"><?php
  if($this->session->flashdata('login_failed')):
    echo $this->session->flashdata('login_failed');
  endif;
?>
</p>
<?php if(isset($projects)): ?>
<h1><?php echo $this->session->userdata('username')."'s project(s)"; ?></h1>
<?php else: ;//echo "<h1>Projects</h1>";?>
<?php endif; ?>

<p class="bg-success">
<?php
  if($this->session->flashdata('project_created')):
    echo $this->session->flashdata('project_created');
  endif;
  if($this->session->flashdata('project_updated')):
    echo $this->session->flashdata('project_updated');
  endif;
  if($this->session->flashdata('project_deleted')):
    echo $this->session->flashdata('project_deleted');
  endif;
?>
</p>

<div class="col-xs-9">
    <h1><?php  echo $task->task_name; ?></h1>
    <p>Project Name: <?php  echo $project_name; ?></p>
    <p>Created: <?php echo $task->date_created ?></p>
    <p>Due on: <?php echo $task->due_date ?></p>
    <h4>Description</h4>
    <p class="task-description"><?php echo $task->task_body; ?></p>
</div>
<div class="col-xs-3 pull-right">
<ul class="list-group">
  <h3>Task Actions</h3>

  <li class="list-group-item"><a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id; ?>">Edit</a></li>
  <li class="list-group-item"><a href="<?php echo base_url();?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a></li>
  <li class="list-group-item"><a href="<?php echo base_url();?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Completed</a></li>
  <li class="list-group-item"><a href="<?php echo base_url();?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark Incompleted</a></li>
</ul>
</div>