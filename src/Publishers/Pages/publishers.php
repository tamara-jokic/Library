<?php

$items = publishers()->all();
?>

            <table class="table table-striped table-hover table-bordered table-sm">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                
                    
                    
                    <th class="text-center">Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($items as $item) { ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->name; ?></td>
                        <td><?php echo $item->location; ?></td>
                                               

                        <td class="text-center">
                        <a href="Publishers/Pages/publishers-edit.php?item=<?php echo $item->id ?>" class="text-info mr-2">Edit</a>
                            <a href="Publishers/Pages/publishers-delete.php?item=<?php echo $item->id ?>" class="text-danger mr-2">Delete</a>
                        </td>
                           
                    </tr>
                <?php }?>
                </tbody>
            </table>
        
