
<div class="well col-md-12 well-sm">
<form class="form-horizontal" action="" method="POST">
    <fieldset>

        <!-- Form Name -->
        <legend class="text-center">Edit Employee</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fistname">First name</label>  
            <div class="col-md-4">
                <input id="fistname" name="firstname" autofocus="" placeholder="first name" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lastname">Last name</label>  
            <div class="col-md-4">
                <input id="lastname" name="lastname" placeholder="last name" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Position</label>  
            <div class="col-md-4">
                <input id="title" name="title" placeholder="position" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="age">Age</label>  
            <div class="col-md-4">
                <input id="age" name="age" placeholder="age" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="yearofservice">Experience</label>  
            <div class="col-md-4">
                <input id="yearofservice" name="yearofservice" placeholder="experience" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-4 control-label" for="salary">Salary</label>  
            <div class="col-md-4">
                <input id="salary" name="salary" placeholder="salary" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="perks">Perks</label>  
            <div class="col-md-4">
                <input id="perks" name="perks" placeholder="perks" value="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-4">
                <input id="email" name="email" placeholder="example@example.com" value="" class="form-control input-md" required="" type="email">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="departmentid">Department ID</label>  
            <div class="col-md-4">
                <input id="departmentid" name="departmentid" placeholder="Department ID" value="" class="form-control input-md" type="text">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btn_submit"></label>
            <div class="col-md-8">
                <button id="btn_submit"  class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="index.php?action=view">Cancel</a>
            </div>
        </div>

    </fieldset>
</form>
</div>