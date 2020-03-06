<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing | MG Hoodies</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>MG Hoodies</h1>
        <h2>Details Listing</h2>

        <table class="tbl">
            <thead>
                <th>Code</th>
                <th>Surname</th>
                <th>Firstname</th>
                <th>Size</th>
                <th>Text</th>
                <th>Paid</th>
                <th>Approved</th>
                <th>Edit</th>
            </thead>
            <tbody>
                <tr>
                    <td>SMIT999</td>
                    <td>Smith</td>
                    <td>Johan</td>
                    <td>XL</td>
                    <td>@Smithy</td>
                    <td>false</td>
                    <td>false</td>
                    <td><a href="edit.php?code=SMIT999">Edit</a></td>
                </tr>
                <tr>
                    <td>SING001</td>
                    <td>Singh</td>
                    <td>Janny</td>
                    <td>S</td>
                    <td>Mastro</td>
                    <td>true</td>
                    <td>false</td>
                    <td><a href="edit.php?code=SING001">Edit</a></td>
                </tr> 
            </tbody>
        </table>
    </div>
</body>
</html>