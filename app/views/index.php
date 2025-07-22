<h2 class="mb-4">Student List</h2>
<a href="index.php?page=create" class="btn btn-primary mb-3">+ Add Student</a>
    
<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th class="text-center">N<sup>o</sup></th>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Telephone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            
            foreach($students as $s){
                $id=$s['id'];
                $name=$s['name'];
                $gender=$s['gender'];
                $tel=$s['tel'];
                
                echo <<<HTML
                     <tr>
                        <td>$no</td>
                        <td>USER - $id</td>
                        <td>$name</td>
                        <td>$gender</td>
                        <td>$tel</td>
                        <td>
                            <a href="index.php?page=edit&id={$id}" class="btn btn-sm btn-warning">Edit</a>
                            <a 
                              href="index.php?page=destroy&id={$id}" 
                              class="btn btn-sm btn-danger"
                              onclick="return confirm('Are you sure u want to delete?🌚')"
                            >
                             Delete
                            </a>
                        </td>
                    </tr>
                HTML;

                $no++;
            }
        ?>

    </tbody>
</table>