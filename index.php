<?php
$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$table = '';

foreach ($people as $person)
{
    $first = $person['first_name'];
    $last = $person['last_name'];
    $message = "{$first} {$last} {$person['email']}";

    $row = "<tr>
            <td>{$first}</td>
            <td>{$last}</td>
            <td><button type=\"button\" onclick=\"alert('{$message}')\">Select</button></td>
        </tr>";
    
    $table .= $row;
}

?>

<!doctype html>
<head>
    <title>eBASE Developer Application Test - Alex Metcalfe</title>
</head>
<html>
<body>
    <table>
        <col width="120">
        <col width="120">
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
        </tr>
        <?php echo $table; ?>
    </table>
</body>
</html>