<h1>Add Artist</h1>
<?php
echo $this->Form->create('Artist');
echo $this->Form->input('name');
echo $this->Form->input('username');
echo $this->Form->input('description');
echo $this->Form->input('website');
echo $this->Form->input('email');
echo $this->Form->input('metadata');
echo $this->Form->input('metadescription');
echo $this->Form->input('isfeatured');

echo $this->Form->end('Save Post');
?>
