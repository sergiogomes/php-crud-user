<?php
include_once 'includes/header.inc.php';

include_once 'includes/menu.inc.php';
?>

<!--List users-->
<div class="row container">
    <p>&nbsp;</p>
    <h5 class="light">Users</h5>
    <hr>
    <table class="striped">
        <thead>
            <tr>
                <th class="indigo-text">Name</th>
                <th class="indigo-text">Email</th>
                <th class="indigo-text">Phone Number</th>
                <th class="indigo-text center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php include_once 'data-base/read.php';?>
        </tbody>
    </table>
</div>

<?php include_once 'includes/footer.inc.php'; ?>
