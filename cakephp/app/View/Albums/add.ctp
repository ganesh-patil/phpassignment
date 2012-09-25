
<html>
<head>
<!--
<script src="javascripts/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
   jQuery(function(){
    jQuery("#name").validate({
     expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
     message: "<Should be a text>"
    });
   });
</script>

-->

</head>
<body>



<h1>Add Post</h1>
<?php
echo $this->Form->create('Album');
echo $this->Form->input('name');
echo $this->Form->input('description');
echo $this->Form->input('price');
echo $this->Form->input('releasedate');
echo $this->Form->input('bitrate');
echo $this->Form->input('metadata');
echo $this->Form->input('metadescription');
echo $this->Form->input('isfeatured');
//echo $this->Form->input('artist_id');
//echo $this->Form->input('tag_id');

//echo $this->Form->checkbox('Artist', array('value' => 'Y','hiddenField' => 'N',));

echo " Artist:<br/>";
foreach ($artists as $artist)
        {
          //echo $artist['Artist']['name'];
          echo '<input type="checkbox" name="'.$artist['Artist']['name'].'" value="'.$artist['Artist']['id'].'">'.$artist['Artist']['name'].'<br>';
          echo "<br/>";
        } 
        
echo "Tags:<br/>";
foreach ($tags as $tag)
        {
          //echo $artist['Artist']['name'];
          echo '<input type="checkbox" name="'.$tag['Tag']['name'].'" value="'.$tag['Tag']['id'].'">'.$tag['Tag']['name'].'<br>';
          echo "<br/>";
        }   

echo $this->Form->end('Save Album');

?>
</body>
</html>
