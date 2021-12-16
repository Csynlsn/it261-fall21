<?php
//if we have more than 0 errors a message will display. 
//if end user didn't fill out the fields, a message will display array_push($errors, 'message')
// can not echo an array - for each loop

if(count($errors) > 0 ) :?>
<div class="error">
<?php foreach($errors as $error):?>
<p><?php echo $error; ?>
<?php endforeach; ?>
</div>
<?php endif; ?>