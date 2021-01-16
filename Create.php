<?php
include 'inc/header.php';
include 'config.php';
include 'Database.php';
?>

<?php
$db     = new Database();
if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($_POST['name']);
    $email = mysqli_real_escape_string($_POST['email']);
    $skill = mysqli_real_escape_string($_POST['skill']);

    if ($name == "" || $email == "" || $skill == "") {
        $error = "Field must not be Empty !!";
    }
}
?>

<form action="Create.php" method="post">
    <table class="tblone">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Please enter name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" placeholder="Please enter email"></td>
        </tr>
        <tr>
            <td>Skill</td>
            <td><input type="text" name="skill" placeholder="Please enter skill"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Submit">
                <input type="reset"  value="Cancel">
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Go Back</a>































<?php include 'inc/footer.php'; ?>