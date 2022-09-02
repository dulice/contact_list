<?php require_once "core/functions.php"; ?>
<?php require_once "template/header.php"; ?>
<?php require_once "template/navbar.php"; ?>

<?php
if(isset($_GET['submitBtn'])) {
    searchContact($_GET['search']);
}
?>

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
        <?php
            if(count(searchContact($_GET['search'])) == 0) {
                echo alert('No contact found', 'warning');
            }
        ?>
        <?php foreach(searchContact($_GET['search']) as $c) { 
            require "contact_cart.php";
        } ?>
    </tbody>
</table>

<?php require_once "template/footer.php" ?>           

