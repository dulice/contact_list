<?php require_once "core/functions.php"; ?>
<?php require_once "template/header.php"; ?>
<?php require_once "template/navbar.php"; ?>

<table class="table table-hover">
    <thead class="text-secondary">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Job Title & Company</th>
            <th>Label</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        <h6 class="text-secondary">Contact: <?php echo countContact(); ?></h6>
        <?php foreach(showContact() as $c) { 
            require "contact_cart.php";
        } ?>
    </tbody>
</table>

<?php require_once "template/footer.php" ?>           