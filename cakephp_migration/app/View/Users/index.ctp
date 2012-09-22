<h1>  Migration User </h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'users', 'action' => 'add')); ?>
<?php echo $this->Html->link('logout',array('controller' => 'users','action' => 'logout'));  ?>
 <table> 

   <tr>
       <th>id</th>
       <th>username</th>
       <th>profile</th>
       <th>role_id </th>
   </tr>
   
   <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['Profile']['profilename']; ?></td>
        <!-- <td><?php echo $user['Roles_user'][0]['id']; ?></td> -->
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>  
     
</table>  




