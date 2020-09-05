<?php
    include "header.php"
?>

<body>
    <div class="col-md-6 m-auto">
        <form>
        
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName">
            
            </div>
            <div class="form-group">
                <label for="exampleInputAge">Age</label>
                <input type="text" class="form-control" id="exampleInputAge">
            </div>
            <div class="form-group">
                <label for="exampleInputDepartment">Department</label>
                <input type="text" class="form-control" id="exampleInputDepartment">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="employee.php">
            <button type="button" class="btn btn-danger">Back</button>
            </a>

            </form>


    </div>
</body>