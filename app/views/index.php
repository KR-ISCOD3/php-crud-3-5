<h2 class="mb-4">Student List</h2>
<a href="index.php?page=create" class="btn btn-primary mb-3">+ Add Student</a>
    
<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Telephone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($students as $s){
                $id=$s['id'];
                $name=$s['name'];
                $gender=$s['gender'];
                $tel=$s['tel'];
                echo <<<HTML
                     <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$gender</td>
                        <td>$tel</td>
                        <td>
                            <a href="index.php?page=edit&id={$id}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                HTML;
            }
        ?>

    </tbody>
</table>