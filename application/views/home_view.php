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
<?php else: echo "<h1>Projects</h1>";?>
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

<table class="table table-bordered">
  <thead>
    <tr>
      <th>
        Project Name
      </th>
      <th>
        Project Description
      </th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($projects)): ?>
    <?php foreach($projects as $project): ?>
          <tr>
    <td><?php   echo $project->project_name; ?></td>
    <td><?php   echo $project->project_body; ?></td>
    <td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id;?>">View Project</a></td>
          </tr>
    <?php endforeach; ?>
  <?php endif; ?>
  </tbody>
</table>


<?php if(isset($tasks)): ?>
<h1>Tasks</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>
        Task Name
      </th>
      <th>
        Task Description
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tasks as $task): ?>
          <tr>
    <td><?php   echo $task->task_name; ?></td>
    <td><?php   echo $task->task_body; ?></td>
    <td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id;?>">View Task</a></td>
          </tr>
    <?php endforeach; ?>
  <?php endif; ?>
  </tbody>
</table>