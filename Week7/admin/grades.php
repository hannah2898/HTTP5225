<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-5 mt-4 mb-4">Add Grade</h1>
                </div>
            </div>
            <?php include ('../reusables/nav.php');?>
        
            <div class="container">
            <div class="row">
<form action="includes/addGrades.php" method="POST">
<div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name= "fname" aria-describedby="First Name">
    
</div>
<div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname"aria-describedby="Last Name">
</div>
<div class="mb-3">
    <label for="marks" class="form-label">Marks</label>
    <input type="number" class="form-control" id="marks" name= "marks" aria-describedby="Enter Marks">
    
</div>
<div class="mb-3">
    <label for="imageURL" class="form-label">Image URL</label>
    <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
</div>
<button type="submit" class="btn btn-primary" name="grades">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>