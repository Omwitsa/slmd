<?php include '../services/database_connection.php'; 
    $count = 0; 

    $query = "SELECT * FROM `personal_data`;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

?>

<div class="container-fluid">
<div class="row">
    <div class="main-header">
        <h4>Personal Data</h4>
    </div>
</div>

    <!-- 2-1 block start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-1"><a  href="/slmd/pages?page=personal-data-new" class="btn btn-primary waves-effect waves-light">New</a></div>
                </div>
                </div>

                <div class="card-block">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>S/No.</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>Group</th>
                                <th>Natinality</th>
                                <th>YOB</th>
                                <th>IdNo.</th>
                                <th>Bank</th>
                                <th>Role</th>
                                <th>Contact</th>
                                <th>MpesaNo.</th>
                                <th>Business Type</th>
                                <th>KRA Pin</th>
                                <th>Mpesa Transaction</th>
                                <th>Vulnerable</th>
                                <th>Disabled</th>
                                <th>Owner</th>
                                <th>Monthly Income</th>
                                <th>No. Of Employees</th>
                                <th>No. Of Outlets</th>
                                <th>Business Registered</th>
                                <th>Date Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($result as $row){ 
                                ++$count;
                                $id = $row["Id"];
                                $edit_page = "/slmd/pages?id=$id&page=personal-data-edit";
                                $delete_page = "/slmd/services/function.php?id=$id&action=personal-data-delete";
                                ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $row["No"] ?></td>
                                    <td><?php echo $row["Name"] ?></td>
                                    <td><?php echo $row["Sex"] ?></td>
                                    <td><?php echo $row["GroupName"] ?></td>
                                    <td><?php echo $row["Natinality"] ?></td>
                                    <td><?php echo $row["YOB"] ?></td>
                                    <td><?php echo $row["IdNo"] ?></td>
                                    <td><?php echo $row["HostingGroupBank"] ?></td>
                                    <td><?php echo $row["OfficialRole"] ?></td>
                                    <td><?php echo $row["Contact"] ?></td>
                                    <td><?php echo $row["MpesaNo"] ?></td>
                                    <td><?php echo $row["BusinessType"] ?></td>
                                    <td><?php echo $row["HasKRAPin"] ?></td>
                                    <td><?php echo $row["CanDoMpesaTransaction"] ?></td>
                                    <td><?php echo $row["Vulnerable"] ?></td>
                                    <td><?php echo $row["HasDisability"] ?></td>
                                    <td><?php echo $row["Owner"] ?></td>
                                    <td><?php echo $row["AverageMonthlyIncome"] ?></td>
                                    <td><?php echo $row["NoOfEmployees"] ?></td>
                                    <td><?php echo $row["NoOfOutlets"] ?></td>
                                    <td><?php echo $row["BusinessRegistered"] ?></td>
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