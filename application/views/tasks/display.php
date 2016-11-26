<h1>Task Display View</h1>
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
        Task Name
      </th>
      <th>
        Task Description
      </th>
      <th>
        Date
      </th>
    </tr>
  </thead>
  <tbody>
      <tr>
          <td>
              <div class="task-name">
                  <?php  echo $task->task_name; ?>
              </div>
              <div class="task-action">        
                <a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id; ?>">Edit</a>
                <a href="<?php echo base_url();?>tasks/delete/<?php echo $task->id; ?>">Delete</a>
              </div>
          </td>
      
          <td><?php   echo $task->task_body; ?></td>
          <td><?php   echo $task->date_created; ?></td>
      </tr>
  </tbody>
</table>
