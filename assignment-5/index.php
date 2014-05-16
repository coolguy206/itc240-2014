<?php 

include('password.php');

?>
<!doctype html>
<html>
<head>
<title>Assignment 5</title>
<style>
label, input {
	display: block;
}
</style>
</head>

<body>


<?php  

$total = '';
$item = '';
$location =  '';
$date = '';
$id = '';

$update = 'select * from recipe where id = ?';
if (isset($_REQUEST['update'])) {
$search = $mysql->prepare($update);
$search->bind_param("i", $_REQUEST['update']);
$search->execute();
$output = $search->get_result();
$values = $output->fetch_array();
$total = $values["total_cost"];
$item = $values["item"];
$location = $values["location"];
$date = $values["date"];
$id = $values["id"];

}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$form_total = $_REQUEST['total_cost'];
$form_item = $_REQUEST['item'];
$form_location = $_REQUEST['location'];
$form_date = $_REQUEST['date'];
$form_id = $_REQUEST['update_id'];

if($form_id){
$query = 'update recipe set total_cost = ?, item = ?, location = ?, date = ? where id = ?';
$update = $mysql->prepare($query);
$update->bind_param("dsssi", $form_total, $form_item, $form_location, $form_date, $form_id);
$update->execute();

} else {
$query = 'INSERT into recipe (total_cost, item, location, date) values (?,?,?,?);';
$insert = $mysql->prepare($query);
$insert->bind_param("dsss", $_REQUEST['total_cost'], $_REQUEST['item'], $_REQUEST['location'], $_REQUEST['date']);
$insert->execute();
}

}

$select = 'select * from recipe where month(date) = 5 order by date desc;';
$preparing = $mysql->prepare($select);
$preparing->execute();
$results = $preparing->get_result();

?>


<form action="index.php" method="post">
<label>Item</label>
<input name="item" value="<?= $item; ?>">
<label>Cost</label>
<input name="total_cost" value="<?= $total; ?>">
<label>Location</label>
<input name="location" value="<?= $location; ?>">
<label>Date</label>
<b>Please enter your date in this syntax yyyy-mm-dd for example 2014-05-16</b>
<input name="date" value="<?= $date; ?>">
<input type="submit">
<input type="hidden" value="<?= $id; ?>" name="update_id">
</form>

<?php foreach ($results as $result) { ?>
<p>
<h3><?= $result["item"]; ?></h3>
<ul>
<li>Cost: <b><?= $result["total_cost"]; ?></b></li>
<li>location: <b><?= $result["location"]; ?></b></li>
<li>date: <b><?= $result["date"]; ?></b></li>
<a href="?update=<?= $result["id"]; ?>">Edit</a>
</ul>
</p>
<?php } ?>


</body>
</html>