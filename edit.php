<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | MG Hoodies</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>MG Hoodies</h1>
        <h2>Edit Student Order</h2>
        <form action="">
            <div class="row">
                <label for="code">Student Code</label>
                <input name="icoded" type="text" readonly value="">
            </div>
            <div class="row">
                <label for="surname">Surname</label>
                <input name="surname" type="text" value="">
            </div>                
            <div class="row">
                <label for="firstname">First name</label>
                <input name="firstname" type="text" value="">
            </div>  
            <div class="row">
                <label for="size">Size</label>
                <input name="size" type="text" value="">
                <!-- Should be a selection list -->
            </div>  
            <div class="row">
                <label for="text">Text</label>
                <input name="text" type="text" value="">
            </div>  
            <div class="row">
                <label for="paid">Paid</label>
                <input id="paid" name="paid" type="checkbox" <?php if(true){echo 'checked';} ?> >
            </div>  
            <div class="row">
                <label for="approved">Approved</label>
                <input id="approved" name="approved" type="checkbox" ?>
            </div>
            <div class="row">
                <button class="block" name="submit" type="submit">Submit Details</button>
            </div>
        </form>

    </div>
</body>
</html>