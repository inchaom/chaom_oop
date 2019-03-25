
<?php 
    echo 'update page';

    $row = array();
        //foreach( $data['employee_update'] as $rows)
        foreach($data['employee_update'] as $rows){
            $row = $rows;
           
        
    }

?>
    
<div class="container">
    <form action="index.php?action=edit_get_form_data" method="POST">
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $rows['firstname'];?>">
    </div>

    <div class="form-group">
        <input type="text" name="age" class="form-control" placeholder="age" value="<?php echo $rows['age'];?>">
    </div>

    <div class="form-group">
        <input type="number" name="salary" class="form-control" value="<?php echo $rows['salary'];?>">
    </div>


    <div class="form-group">
        <input type="buttom" name="btn btn-success" >
    </div>
    
   
    </form>



</div>
