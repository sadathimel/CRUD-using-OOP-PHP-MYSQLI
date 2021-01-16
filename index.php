<?php
    include 'inc/header.php';
    include 'config.php';
    include 'Database.php';
?>

<?php
    $db     = new Database();
    $query  = "SELECT * FROM tbl_user";
    $read   = $db->select($query);
?>

<table class="tblone">
    <tr>
        <th width="30%">Name</th>
        <th width="30%">Email</th>
        <th width="20%">Skill</th>
        <th width="20%">Action</th>
    </tr>

    <?php if ($read) { ?>
            <?php while ($row = $read->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['skill']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    </tr>
        <?php } ?>
    <?php }else { ?>
        <p>Data is not available !!</p>
        <?php } ?>
</table>
    <a href="Create.php">Create</a>






























<?php include 'inc/footer.php'; ?>