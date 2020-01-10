<?php

$items = authors()->all();
?>

            <table class="table table-striped table-hover table-bordered table-sm">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                  
                    
                    <th class="text-center">Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($items as $item) { ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->first_name; ?></td>
                        <td><?php echo $item->last_name; ?></td>
                        
                        <td class="text-center">
                        <a href="Authors/Pages/authors-edit.php?item=<?php echo $item->id ?>" class="text-info mr-2">Edit</a>
                            <a href="Authors/Pages/authors-delete.php?item=<?php echo $item->id ?>" class="text-danger mr-2">Delete</a>
                        </td>
                           
                    </tr>
                <?php }?>
                </tbody>
            </table>
        