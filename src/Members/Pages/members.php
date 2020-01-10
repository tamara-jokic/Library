<?php

$items = members()->all();
?>

            <table class="table table-striped table-hover table-bordered table-sm">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>JMBG</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>E-mail</th>
                    
                    <th class="text-center">Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($items as $item) { ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->jmbg; ?></td>
                        <td><?php echo $item->first_name; ?></td>
                        <td><?php echo $item->last_name; ?></td>
                        <td><?php echo $item->mobile; ?></td>
                        <td><?php echo $item->email; ?></td>

                        <td class="text-center">
                        <a href="Members/Pages/members-edit.php?item=<?php echo $item->id ?>" class="text-info mr-2">Edit</a>
                            <a href="Members/Pages/members-delete.php?item=<?php echo $item->id ?>" class="text-danger mr-2">Delete</a>
                        </td>
                           
                    </tr>
                <?php }?>
                </tbody>
            </table>
        