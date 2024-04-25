<!DOCTYPE html>
<html lang ="en">

<head>
    <title>Search</title>

</head>

<body>
 <h1> Employee Search</h1>

 <?php 
 $employee_array= array(
    "John Doe",
    "Jane Smith",
    "Mike Johnson",
    "Sarah Williams",
    "Chris Brown",
    "Emily Davis",
 );

if (isset($_POST['search_name'])){
    $search_name=$_POST['search_name'];

    $found=in_array($search_name, $employee_array);

    if ($found) {
        echo "<p>$search_name exists in the employee list.</p>";
    } else {
        echo "<p>$search_name does not exist in the employee list.</p>";
    }
 }
 ?>

<form method="post">
        <label for="search_name">Enter name to search:</label>
        <input type="text" id="search_name" name="search_name">
        <button type="submit">Search</button>
    </form>

</body>
</html>