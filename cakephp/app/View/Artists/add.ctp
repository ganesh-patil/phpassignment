<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(function(){
            jQuery("#name").validate({
                expression: "if (isNaN(VAL) && VAL) return true; else return false;",
                message: "null name"
            });

});
</script>
<h1>Add Artist</h1>
<?php
echo $this->Form->create('Artist');
echo $this->Form->input('name',array('id' => 'name'));
echo $this->Form->input('username');
echo $this->Form->input('description');
echo $this->Form->input('website');
echo $this->Form->input('email');
echo $this->Form->input('metadata');
echo $this->Form->input('metadescription');
echo $this->Form->input('isfeatured');

echo $this->Form->end('Save Post');
?>
