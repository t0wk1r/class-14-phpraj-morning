<?php

$fields = [
    ["type"=>"text","name"=>"uname","placeholder"=>"Type your name"],
    ["type"=>"password","name"=>"pass","placeholder"=>"Type your password"],
    ["type"=>"email","name"=>"email","placeholder"=>"Type your email"],
    ["type"=>"date","name"=>"dob","placeholder"=>"Type your email"],
]

?>




<form action="?" method="post">
    <?php
    foreach($fields as $field){
    ?>
    
    <input type="<?php echo $field["type"];?>" name="uname" placeholder="<?php echo $field["placeholder"];?>"><br>

   <?php  } ?>

    
</form>