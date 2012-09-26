<h1>Blog artists</h1>
<?php echo $this->Html->link('Add Artist', array('controller' => 'artists', 'action' => 'add')); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>username</th>
        <th>Description</th>
        <th>webnsite</th>
        <th>email</th>
        <th>metadata</th>
        <th>metadescription</th>
        
    </tr>
    
    <?php foreach ($artists as $artist): ?>
    <tr>
        <td><?php echo $artist['Artist']['id']; ?></td>
        <td><?php echo $artist['Artist']['name']; ?></td>
        <td><?php echo $artist['Artist']['username']; ?></td>
        <td><?php echo $artist['Artist']['description']; ?></td>
        <td><?php echo $artist['Artist']['website']; ?></td>
        <td><?php echo $artist['Artist']['email']; ?></td>
        <td><?php echo $artist['Artist']['metadata']; ?></td>
        
        <?php endforeach; ?>
    <?php unset($artist); ?>
    </table>
