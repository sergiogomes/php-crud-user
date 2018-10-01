<?php session_start();

include_once 'includes/header.inc.php';

include_once 'includes/menu.inc.php';
?>

<!--Register form-->
<div class="row container">
    <p>&nbsp;</p>
    <h5 class="light">User Edition</h5>
    <hr>
</div>

<?php
include_once 'data-base/connection.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link->query("SELECT * FROM TB_USERS WHERE ID = '$id'");

while($registers = $querySelect->fetch_assoc()):
    $name  = $registers['Name'];
    $email = $registers['Email'];
    $phone = $registers['Phone'];

endwhile;

?>

<!--Register form-->
<div class="row container">
    <p>&nbsp;</p>
    <form action="data-base/update.php" method="POST" class="col s12">
        <fieldset class="register-form-grouper">
            <legend><img src="assets/images/user.png" alt="[user-img]"></legend>
            <h5 class="light center">Update</h5>

            <!--Name-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="Name" id="Name" value="<?php echo $name ?>" maxlength="40" required autofocus>
                <label for="Name">User Name</label>
            </div>

            <!--Email-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" id="Email" value="<?php echo $email ?>" maxlength="50" required>
                <label for="Email">User Email</label>
            </div>

            <!--Phone-->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="Phone" id="Phone" value="<?php echo $phone ?>" maxlength="14" required>
                <label for="Phone">User Phone Number</label>
            </div>

            <!--Buttons-->
            <div class="input-field col s12">
                <input type="submit" value="Save" class="btn teal darken-3">
                <a href="users.php" class="btn deep-orange">Cancel</a>
            </div>

        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>
