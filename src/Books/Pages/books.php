<?php

$items = books()->all();
?>

            <table class="table table-striped table-hover table-bordered table-sm">
                <thead>
                <tr>
                    <th>Bookcode</th>
                    <th>Title</th>
                    <th>Edition</th>
                    <th>Date of issuing</th>
                    <th>Availability</th>
                    
                    <th class="text-center">Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($items as $item) {  ?>
                    <tr>
                        <td><?php echo $item->book_code; ?></td>
                        <td><?php echo $item->title; ?></td>
                        <td><?php echo $item->edition; ?></td>
                        <td><?php echo $item->date_of_issuing; ?></td>
                        <td><?php echo $item->availability; ?></td>
                        <td class="text-center">
                        <a href="Books/Pages/books-edit.php?item=<?php echo $item->book_code ?>" class="text-info mr-2">Edit</a>
                            <a href="Books/Pages/books-delete.php?item=<?php echo $item->book_code ?>" class="text-danger mr-2">Delete</a>
                        </td>
                           
                    </tr>
                <?php }?>
                </tbody>
            </table>
        
