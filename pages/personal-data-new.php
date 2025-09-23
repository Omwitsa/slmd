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
                        <div class="col-md-4"><input type="text" class="form-control" name="No" id="No" placeholder="S/NO" Required></div>

                        <div class="col-md-2"><label for="Name" class="form-control-label">Name <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="Name" id="Name" placeholder="Name" Required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Sex" class="form-control-label">Sex <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Sex" id="Sex" Required>
                                <option></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="Group" class="form-control-label">Group <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Group" id="Group" Required>
                                <option></option>
                                <?php 
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
                                <option></option>
                                <?php 
                                    foreach($clusterResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="col-md-2"><label for="Location" class="form-control-label">Location <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="Location" id="Location" Required>
                                <option></option>
                                <?php 
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
                                <option></option>
                                <?php 
                                    foreach($countryResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="YOB" class="form-control-label">Year of Birth <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="YOB" id="YOB" placeholder="YYYY" Required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="HostingGroupBank" class="form-control-label"> Group Bank <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="HostingGroupBank" id="HostingGroupBank" Required>
                                <option></option>
                                <?php 
                                    foreach($bankResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="IdNo" class="form-control-label">ID Number <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="IdNo" id="IdNo" placeholder="ID Number" Required></div>
                    </div>

                     <div class="form-group row">
                        <div class="col-md-2"><label for="OfficialRole" class="form-control-label"> Role <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="OfficialRole" id="OfficialRole" Required>
                                <option></option>
                                <?php 
                                    foreach($roleResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-2"><label for="BusinessType" class="form-control-label"> Business Type <span class="required">*</span> </label></div>
                        <div class="col-md-4">
                            <select class="form-control" name="BusinessType" id="BusinessType" Required>
                                <option></option>
                                <?php 
                                    foreach($businessTypeResult as $row){
                                        echo '<option>' . $row["Name"] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Contact" class="form-control-label">Contact </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="Contact" id="Contact" placeholder="Contact"></div>

                        <div class="col-md-2"><label for="MpesaNo" class="form-control-label">Mpesa No. </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="MpesaNo" id="MpesaNo" placeholder="Mpesa No."></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="NameOnSimCard" class="form-control-label">Sim Card Name</label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="NameOnSimCard" id="NameOnSimCard" placeholder="Sim Card Name"></div>

                        <div class="col-md-2"><label for="HostIdNo" class="form-control-label">Host Id No. </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="HostIdNo" id="HostIdNo" placeholder="Host Id No."></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="IdExpiryDate" class="form-control-label">Id Expiry Date</label></div>
                        <div class="col-md-4"><input type="date" class="form-control" name="IdExpiryDate" id="IdExpiryDate"></div>

                        <div class="col-md-2"><label for="AverageMonthlyIncome" class="form-control-label">Average Monthly Income</label></div>
                        <div class="col-md-4"><input type="number" class="form-control" name="AverageMonthlyIncome" id="AverageMonthlyIncome"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="NoOfEmployees" class="form-control-label">No. Of Employees</label></div>
                        <div class="col-md-4"><input type="number" class="form-control" name="NoOfEmployees" id="NoOfEmployees"></div>

                        <div class="col-md-2"><label for="NoOfOutlets" class="form-control-label">No. Of Outlets</label></div>
                        <div class="col-md-4"><input type="number" class="form-control" name="NoOfOutlets" id="NoOfOutlets"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Notes" class="form-control-label">Notes</label></div>
                        <div class="col-md-4"><textarea class="form-control" name="Notes" id="Notes" placeholder="Notes" rows="4"></textarea></div>
                    </div>

                    <div class="form-check">
                        <label for="Vulnerable" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="Vulnerable" id="Vulnerable">
                            Vulnerable
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="HasDisability" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="HasDisability" id="HasDisability">
                            Has Disability
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="HasKRAPin" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="HasKRAPin" id="HasKRAPin">
                            Has KRA Pin
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="CanDoMpesaTransaction" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="CanDoMpesaTransaction" id="CanDoMpesaTransaction">
                            Can Do Mpesa Transactions
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="Owner" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="Owner" id="Owner">
                            Owner
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="BusinessRegistered" class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="BusinessRegistered" id="BusinessRegistered">
                            Business is registered
                        </label>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="btn_action" id="btn_action" value="personal-data-new">
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