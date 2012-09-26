<h1>Tag Albums</h1>
<?php echo $this->Html->link('Add Tag', array('controller' => 'tags', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        
       <?php foreach ($tags as $tag): ?>
    <tr>
        <td><?php echo $tag['Tag']['id']; ?></td>
        <td><?php echo $tag['Tag']['name']; ?></td> 
        
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $tag['Tag']['id'])); ?>
        </td>
    </tr>
    
    <?php endforeach; ?>
    <?php unset($tag); ?>
</table>
