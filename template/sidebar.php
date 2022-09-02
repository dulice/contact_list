<?php
function active($current_page) {
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if($current_page == $url) {
        echo 'active';
    }
}
?> 
<div class="my-3 d-none d-md-block">
    <a href="index.php" class="text-decoration-none">
        <i class="feather-user h5 ms-3 text-primary"></i>
        <span class="h5">Contact List</span>
    </a>
</div>
<div class="d-none d-md-block side-menu">
    <ul class="list-group">
        <li class="list-group-item ">
            <a href="contact_create.php">
                <button class="btn btn-primary">
                    <i class="feather-plus me-1"></i>
                    <span class="">Create Contact</span>
                </button>
            </a>
        </li>                      
        <li class="list-group-item <?php active('index.php'); ?>">
            <a class="nav-link" href="<?php echo url()?>index.php">
                <i class="feather-user me-1"></i>
                <span class="">Contact</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"><?php echo countContact(); ?></small>
            </a>
        </li>
        <li class="list-group-item <?php active('frequently_contact.php'); ?>">
            <a class="nav-link" href="">
                <i class="feather-clock me-1"></i>
                <span class="">Frequently Contact</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-user-check me-1"></i>
                <span class="">Merge & Fix</span>
                <small class="badge badge-primary badge-pill bg-primary float-end">3</small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-tag me-1"></i>
                <span class="">Labels</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-refresh-ccw me-1"></i>
                <span class="">ICE</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-plus me-1"></i>
                <span class="">Add Label</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-upload me-1"></i>
                <span class="">Import</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-download me-1"></i>
                <span class="">Export</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-printer me-1"></i>
                <span class="">Print</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-download me-1"></i>
                <span class="">Other Contacts</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
        <li class="list-group-item">
            <a class="nav-link" href="">
                <i class="feather-trash me-1"></i>
                <span class="">Trash</span>
                <small class="badge badge-primary badge-pill bg-primary float-end"></small>
            </a>
        </li>
    </ul>
</div>