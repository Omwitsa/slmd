<?php include '../services/database_connection.php'; 
    $count = 0; 

    $query = "SELECT * FROM cluster;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

?>

<div class="container-fluid">
<div class="row">
    <div class="main-header">
        <h4>Clusters</h4>
    </div>
</div>

    <!-- 2-1 block start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-1"><a  href="/slmd/pages?page=cluster-new" class="btn btn-primary waves-effect waves-light">New</a></div>
                </div>
                </div>

                <div class="card-block">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($result as $row){ 
                                ++$count;
                                $id = $row["Id"];
                                $edit_page = "/slmd/pages?id=$id&page=cluster-edit";
                                $delete_page = "/slmd/services/function.php?id=$id&action=cluster-delete";
                                ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $row["Name"] ?></td>
                                    <td><?php echo $row["Status"] ?></td>
                                    <td><?php echo $row["DateCreated"] ?></td>
                                    <td><a  href="<?php echo $edit_page ?>" class="btn btn-mini btn-warning waves-effect waves-light">Edit</a> |
                                        <?php echo "<a class='btn btn-mini btn-danger waves-effect waves-light' onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='".$delete_page."'>Delete</a>";  ?>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                
            </div>
        </div>
    </div>
<!-- 2-1 block end -->
</div>
