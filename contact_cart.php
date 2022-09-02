<tr>
    <td class="text-nowrap">
        <img src="<?php echo $c['photo']; ?>" alt="" class="rounded-circle me-1 contact-image">
        <span><?php echo $c['first_name'] . " " . $c['last_name']; ?></span>
    </td>
    <td class="text-nowrap"><?php echo $c['email'] ?></td>
    <td class="text-nowrap"><?php echo $c['phone_number'] ?></td>
    <td class="text-nowrap"><?php echo $c['company'] . " - " . $c['job_title']; ?></td>
    <td class="text-nowrap"><?php echo $c['note'] ?></td>
    <td class='text-nowrap'>
        <a class='btn btn-sm btn-outline-warning me-1 text-decoration-none' href="tel:<?php echo $c['phone_number'] ?>"> 
            <i class="feather-phone"></i>
        </a>
        <a class='btn btn-sm btn-outline-primary me-1 text-decoration-none' href="contact_update.php?id=<?php echo $c['id'] ?>"> 
            <i class="feather-edit"></i>
        </a>
        <a onclick="return confirm('Are you sure, you want to delete it?')" class='btn btn-sm btn-outline-danger text-decoration-none' href="contact_delete.php?id=<?php echo $c['id'] ?>">
            <i class="feather-trash"></i>
        </a>
    </td>
</tr>