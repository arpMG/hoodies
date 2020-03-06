<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New | MG Hoodies</title>

    <link rel="stylesheet" href="style.css">

    <?php 

    

    ?>
</head>
<body>
    <div class="container">
        <h1>MG Hoodies</h1>
        <h2>New Student Order</h2>
        <form action="">
            <div class="row">
                <label for="code">Student Code</label>
                <input name="icoded" type="text" placeholder "XXXX999" minlength="7" maxlength="7" required>
            </div>
            <div class="row">
                <label for="surname">Surname</label>
                <input name="surname" type="text" value="" required>
            </div>                
            <div class="row">
                <label for="firstname">First name</label>
                <input name="firstname" type="text" value="" required>
            </div>  
            <div class="row">
                <label for="size">Size</label>
                <input name="size" type="text" value="" required>
                <!-- Should be a selection list -->
            </div>  
            <div class="row">
                <label for="text">Text</label>
                <input name="text" type="text" value="" required>
            </div>  
            
            <div class="row">
                <button class="block" name="submit" type="submit">Submit Details</button>
            </div>
        </form>

    </div>
</body>
</html>