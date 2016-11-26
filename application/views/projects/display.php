<div class="col-xs-9">
    <p class="bg-success"><?php
  if($this->session->flashdata('mark_done')):
    echo $this->session->flashdata('mark_done');
  endif;
?>
</p>
<p class="bg-danger"><?php
  if($this->session->flashdata('mark_undone')):
    echo $this->session->flashdata('mark_undone');
  endif;
?>
</p>
<h1>Project name: <?php echo $project_data->project_name; ?></h1>
<p>Date Created: <?php echo $project_data->date_created; ?></p>
<h3>Description</h3>
<p><?php echo $project_data->project_body; ?></p>

<h3>Active Tasks</h3>
<ul>
<?php if($not_completed_tasks): 
    foreach($not_completed_tasks as $task): ?>
    <li>
    <a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
<?php        echo $task->task_name;?>
    </a>
    </li>
<?php
    endforeach;
       else: ?>
    <p>You have no active tasks</p>       
<?php  endif;?>
</ul>
<h3>Completed Tasks</h3>
<ul>
<?php if($completed_tasks): 
    foreach($completed_tasks as $task): ?>
    <li>
    <a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
<?php        echo $task->task_name;?>
    </a>
    </li>
<?php
    endforeach;
       else: ?>
    <p>You have no tasks pending</p>       
<?php  endif;?>
</ul>
</div>
<div class="col-xs-3 pull-right">
<ul class="list-group">
  <h3>Project Actions</h3>

  <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>">Delete Project</a></li>
</ul>
</div>
