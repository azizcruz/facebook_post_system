<?php
include_once("conn.php");

$q = "SELECT * FROM post ORDER BY xpost_id DESC";
$stmt = $conn->prepare($q);
$stmt->execute();
$rows = $stmt->fetchAll();

foreach($rows as $row) {

?>

   
   <div id="post-card" class="card-panel post">
    <h3 id="poster"><?php echo $row["xpost_uname"] ?></h3>
    <p id="post-text" class="flow-text"><?php echo $row["xpost_text"] ?></p>
    <div class="card-action">
        <span id="post-time"><small><i class="material-icons left">query_builder</i></small><?php echo $row["xpost_date"] ?></span>
        <span><i class="material-icons icon right">delete</i></span>
        <span><i class="material-icons icon right">edit</i></span>
        <div class="clearfix"></div>
    </div> <!-- /.card-action -->
</div> <!-- /#post-card -->


<?php
}
?>