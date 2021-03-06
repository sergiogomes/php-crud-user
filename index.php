<?php session_start();

include_once 'includes/header.inc.php';

include_once 'includes/menu.inc.php';
?>

<!--Register form-->
<div class="row container">
    <p>&nbsp;</p>
    <form action="data-base/create.php" method="POST" class="col s12">
        <fieldset class="register-form-grouper">
            <legend><img src="assets/images/user.png" alt="[user-img]"></legend>
            <h5 class="light center">User Register</h5>

            <?php
            if(isset($_SESSION['msg'])):
                echo $_SESSION['msg'];
                session_unset();
            endif;
            ?>

            <!--Name-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="Name" id="Name" maxlength="40" required autofocus>
                <label for="Name">User Name</label>
            </div>

            <!--Email-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" id="Email" maxlength="50" required>
                <label for="Email">User Email</label>
            </div>

            <!--Phone-->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="Phone" id="Phone" maxlength="14" required>
                <label for="Phone">User Phone Number</label>
            </div>

            <!--Buttons-->
            <div class="input-field col s12">
                <input type="submit" value="Save" class="btn teal darken-3">
                <input type="reset" value="Reset" class="btn deep-orange">
            </div>

        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>
