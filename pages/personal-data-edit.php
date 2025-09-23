<?php include '../services/database_connection.php'; 
    $groupQuery = "SELECT * FROM `group` WHERE Status = 1;";
    $groupStatement = $connect->prepare($groupQuery);
    $groupStatement->execute();
    $groupResult = $groupStatement->fetchAll();

    $businessTypeQuery = "SELECT * FROM `business_type` WHERE Status = 1;";
    $businessTypeStatement = $connect->prepare($businessTypeQuery);
    $businessTypeStatement->execute();
    $businessTypeResult = $businessTypeStatement->fetchAll();

    $countryQuery = "SELECT * FROM `country` WHERE Status = 1;";
    $countryStatement = $connect->prepare($countryQuery);
    $countryStatement->execute();
    $countryResult = $countryStatement->fetchAll();

    $bankQuery = "SELECT * FROM `bank` WHERE Status = 1;";
    $bankStatement = $connect->prepare($bankQuery);
    $bankStatement->execute();
    $bankResult = $bankStatement->fetchAll();

    $roleQuery = "SELECT * FROM `official_role` WHERE Status = 1;";
    $roleStatement = $connect->prepare($roleQuery);
    $roleStatement->execute();
    $roleResult = $roleStatement->fetchAll();

    $locationQuery = "SELECT * FROM `group_location` WHERE Status = 1;";
    $locationStatement = $connect->prepare($locationQuery);
    $locationStatement->execute();
    $locationResult = $locationStatement->fetchAll();

    $clusterQuery = "SELECT * FROM `cluster` WHERE Status = 1;";
    $clusterStatement = $connect->prepare($clusterQuery);
    $clusterStatement->execute();
    $clusterResult = $clusterStatement->fetchAll();

    $query = "SELECT * FROM `personal_data` WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row){
        $No = $row["No"];
        $Name = $row["Name"];
        $Sex = $row["Sex"];
        $GroupName = $row["GroupName"];
        $location = $row["Location"];
        $cluster = $row["Cluster"];
        $Vulnerable = $row["Vulnerable"];
        $Natinality = $row["Natinality"];
        $YOB = $row["YOB"];
        $HasDisability = $row["HasDisability"];
        $IdNo = $row["IdNo"];
        $HostingGroupBank = $row["HostingGroupBank"];
        $OfficialRole = $row["OfficialRole"];
        $HasKRAPin = $row["HasKRAPin"];
        $Status = $row["Status"];
        $Contact = $row["Contact"];
        $MpesaNo = $row["MpesaNo"];
        $NameOnSimCard = $row["NameOnSimCard"];
        $CanDoMpesaTransaction = $row["CanDoMpesaTransaction"];
        $BusinessType = $row["BusinessType"];
        $HostIdNo = $row["HostIdNo"];
        $IdExpiryDate = $row["IdExpiryDate"];
        $Owner = $row["Owner"];
        $AverageMonthlyIncome = $row["AverageMonthlyIncome"];
        $NoOfEmployees = $row["NoOfEmployees"];
        $NoOfOutlets = $row["NoOfOutlets"];
        $BusinessRegistered = $row["BusinessRegistered"];
        $notes = $row["Notes"];
    }

?>

<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Personal Data</h4>
        </div>
    </div>

    <!-- 2-1 block start -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-block">
                <form action="/slmd/services/function.php" method="POST">
                    <div class="form-group row">
                        <div class="col-md-2"><label for="No" class="form-control-label">S/No <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="No" id="No" value="<?php echo $No ?>" placeholder="S/NO" Required></div>

                        <div class="col-md-2"><label for="Name" class="form-control-label">Name <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="Name" id="Name" value="<?php echo $Name ?>" placeholder="Name" Required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Sex" class="form-control-label">Sex <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Sex" id="Sex" Required>
                                <?php echo '<option>'.$Sex.'</option>'; ?>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="Group" class="form-control-label">Group <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Group" id="Group" Required>
                                <?php 
                                    echo '<option>'.$GroupName.'</option>';
                                    foreach($groupResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Cluster" class="form-control-label">Cluster <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Cluster" id="Cluster" Required>
                                <?php 
                                    echo '<option>'.$cluster.'</option>';
                                    foreach($clusterResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="col-md-2"><label for="Location" class="form-control-label">Location <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Location" id="Location" Required>
                                <?php 
                                    echo '<option>'.$location.'</option>';
                                    foreach($locationResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Natinality" class="form-control-label">Natinality <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Natinality" id="Natinality" Required>
                                <?php 
                                    echo '<option>'.$Natinality.'</option>';
                                    foreach($countryResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="YOB" class="form-control-label">Year of Birth <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="YOB" id="YOB" value="<?php echo $YOB ?>" placeholder="YYYY" Required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="HostingGroupBank" class="form-control-label"> Group Bank <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="HostingGroupBank" id="HostingGroupBank" Required>
                                <?php 
                                    echo '<option>'.$HostingGroupBank.'</option>';
                                    foreach($bankResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="IdNo" class="form-control-label">ID Number <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="IdNo" id="IdNo" value="<?php echo $IdNo ?>" placeholder="ID Number" Required></div>
                    </div>

                     <div class="form-group row">
                        <div class="col-md-2"><label for="OfficialRole" class="form-control-label"> Role <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="OfficialRole" id="OfficialRole" Required>
                                <?php 
                                    echo '<option>'.$OfficialRole.'</option>';
                                    foreach($roleResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="BusinessType" class="form-control-label"> Business Type <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="BusinessType" id="BusinessType" Required>
                                <?php 
                                    echo '<option>'.$BusinessType.'</option>';
                                    foreach($businessTypeResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Contact" class="form-control-label">Contact </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="Contact" id="Contact" value="<?php echo $Contact ?>" placeholder="Contact"></div>

                        <div class="col-md-2"><label for="MpesaNo" class="form-control-label">Mpesa No. </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="MpesaNo" id="MpesaNo" value="<?php echo $MpesaNo ?>" placeholder="Mpesa No."></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="NameOnSimCard" class="form-control-label">Sim Card Name</label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="NameOnSimCard" id="NameOnSimCard" value="<?php echo $NameOnSimCard ?>" placeholder="Sim Card Name"></div>

                        <div class="col-md-2"><label for="HostIdNo" class="form-control-label">Host Id No. </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="HostIdNo" id="HostIdNo" value="<?php echo $HostIdNo ?>" placeholder="Host Id No."></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="IdExpiryDate" class="form-control-label">Id Expiry Date</label></div>
                        <div class="col-md-4"><input type="date" class="form-control" name="IdExpiryDate" id="IdExpiryDate" value="<?php echo $IdExpiryDate ?>"></div>

                        <div class="col-md-2"><label for="AverageMonthlyIncome" class="form-control-label">Average Monthly Income</label></div>
                        <div class="col-md-4"><input type="number" class="form-control" name="AverageMonthlyIncome" id="AverageMonthlyIncome" value="<?php echo $AverageMonthlyIncome ?>"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="NoOfEmployees" class="form-control-label">No. Of Employees</label></div>
                        <div class="col-md-4"><input type="number" class="form-control" name="NoOfEmployees" id="NoOfEmployees" value="<?php echo $NoOfEmployees ?>"></div>

                        <div class="col-md-2"><label for="NoOfOutlets" class="form-control-label">No. Of Outlets</label></div>
                        <div class="col-md-4"><input type="number" class="form-control" name="NoOfOutlets" id="NoOfOutlets" value="<?php echo $NoOfOutlets ?>"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Notes" class="form-control-label">Notes</label></div>
                        <div class="col-md-4"><textarea class="form-control" name="Notes" id="Notes" placeholder="Notes" rows="4"><?php echo $notes ?></textarea></div>
                    </div>

                    <div class="form-check">
                        <label for="Vulnerable" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="Vulnerable" id="Vulnerable" <?php if ($Vulnerable == 1) echo 'checked'; ?>>
                            Vulnerable
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="HasDisability" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="HasDisability" id="HasDisability" <?php if ($HasDisability == 1) echo 'checked'; ?>>
                            Has Disability
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="HasKRAPin" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="HasKRAPin" id="HasKRAPin" <?php if ($HasKRAPin == 1) echo 'checked'; ?>>
                            Has KRA Pin
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="CanDoMpesaTransaction" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="CanDoMpesaTransaction" id="CanDoMpesaTransaction" <?php if ($CanDoMpesaTransaction == 1) echo 'checked'; ?>>
                            Can Do Mpesa Transactions
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="Owner" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="Owner" id="Owner" <?php if ($Owner == 1) echo 'checked'; ?>>
                            Owner
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="BusinessRegistered" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="BusinessRegistered" id="BusinessRegistered" <?php if ($BusinessRegistered == 1) echo 'checked'; ?>>
                            Business is registered
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="Status" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="Status" id="Status" <?php if ($Status == 1) echo 'checked'; ?>>
                            Active
                        </label>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
                            <input type="hidden" class="form-control" name="btn_action" id="btn_action" value="personal-data-edit">
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                        <div class="col-md-1">
                            <a href="/slmd/pages?page=personal-data-list" class="btn btn-secondary waves-effect waves-light">Back</a> 
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 2-1 block end -->
</div>