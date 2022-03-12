<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
<?php  
    $username="root";  
    $password="";  
    $hostname = "localhost";  
    //connection string with database  
    $dbhandle = mysqli_connect($hostname, $username, $password)  
    or die("Unable to connect to MySQL");  
    echo "";  
    // connect with database  
    $selected = mysqli_select_db($dbhandle, "rcoimpex")  
    or die("Could not select database");  
    //query fire  
    $result = mysqli_query($dbhandle,"select * from users;");  

    $json_response = array();  
    // fetch data in array format  
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
     
        echo "
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>
            </tr>
        ";
    }  
 
    mysqli_free_result($result);
?>
    </tbody>
    </table>
</body>
</html>