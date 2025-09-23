<?php
  include 'database_connection.php';
  require_once 'utils.php';
  $action = $_POST['btn_action'];
  if(!$action){
    $action = $_GET['action'];
  }
  

  if($action === "add_personal_data"){
    $Name  = $_POST['Name'] ;
    $Address  = $_POST['Address'];
    $City  = $_POST['City'];
    $State  = $_POST['State'];
    $ZipCode  = $_POST['ZipCode'];
    $HomePhone  = $_POST['HomePhone'];
    $WorkPhone  = $_POST['WorkPhone'];
    $DOB  = $_POST['DOB'] ? $_POST['DOB'] : date("Y-m-d");
    $MaritalStatus  = $_POST['MaritalStatus'];
    $Employer  = $_POST['Employer'];
    $Occupation  = $_POST['Occupation'];
    $ReferredBy  = $_POST['ReferredBy'];
    $EmerContactName  = $_POST['EmerContactName'];
    $EmerRelationShip  = $_POST['EmerRelationShip'];
    $EmerPhone  = $_POST['EmerPhone'];
    $EmerEmail  = $_POST['EmerEmail'];

    $query = "INSERT INTO personal_info(Name, Address, City, State, ZipCode, HomePhone, WorkPhone, DOB, MaritalStatus, Employer, Occupation, ReferredBy, EmerContactName, EmerRelationShip, EmerPhone, EmerEmail) 
    VALUES ('$Name', '$Address', '$City ', '$State', '$ZipCode', '$HomePhone', '$WorkPhone', '$DOB', '$MaritalStatus', '$Employer', '$Occupation', '$ReferredBy', '$EmerContactName', '$EmerRelationShip', '$EmerPhone', '$EmerEmail');";

    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=slmd-list");
  }

  if($action === "business-type-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM business_type WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Business type already exist";
        alert_redirect($message, "/slmd/pages?page=business-type-new");
    } else {
        $query = "INSERT INTO business_type(Name, Notes, DateCreated) VALUES ('$Name','$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=business-type-list");
    }
  }

  if($action === "business-type-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM business_type WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Business type already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=business-type-edit");
    } else {
        $query = "UPDATE business_type SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=business-type-list");
    }
  }

  if($action === "business-type-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM business_type WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=business-type-list");
  }

  if($action === "bank-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM bank WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Bank already exist";
        alert_redirect($message, "/slmd/pages?page=bank-new");
    } else {
        $query = "INSERT INTO bank(Name, Notes, DateCreated) VALUES ('$Name','$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=bank-list");
    }
  }

  if($action === "bank-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM bank WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Bank already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=bank-edit");
    } else {
        $query = "UPDATE bank SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=bank-list");
    }
  }

  if($action === "bank-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM bank WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=bank-list");
  }

  if($action === "official-role-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM official_role WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Role already exist";
        alert_redirect($message, "/slmd/pages?page=official-role-new");
    } else {
        $query = "INSERT INTO official_role(Name, Notes, DateCreated) VALUES ('$Name','$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=official-role-list");
    }
  }

  if($action === "official-role-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM official_role WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Role already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=official-role-edit");
    } else {
        $query = "UPDATE official_role SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=official-role-list");
    }
  }

  if($action === "official-role-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM official_role WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=official-role-list");
  }

  if($action === "country-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM country WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Country already exist";
        alert_redirect($message, "/slmd/pages?page=country-new");
    } else {
        $query = "INSERT INTO country(Name, Notes, DateCreated) VALUES ('$Name','$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=country-list");
    }
  }

  if($action === "country-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM country WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Country already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=country-edit");
    } else {
        $query = "UPDATE country SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=country-list");
    }
  }

  if($action === "country-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM country WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=country-list");
  }

  if($action === "cluster-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM cluster WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Cluster already exist";
        alert_redirect($message, "/slmd/pages?page=cluster-new");
    } else {
        $query = "INSERT INTO cluster(Name, Notes, DateCreated) VALUES ('$Name','$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=cluster-list");
    }
  }

  if($action === "cluster-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM cluster WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Cluster already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=cluster-edit");
    } else {
        $query = "UPDATE cluster SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=cluster-list");
    }
  }

  if($action === "cluster-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM cluster WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=cluster-list");
  }

  if($action === "group-location-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM group_location WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Lacation already exist";
        alert_redirect($message, "/slmd/pages?page=group-location-new");
    } else {
        $query = "INSERT INTO group_location(Name, Notes, DateCreated) VALUES ('$Name','$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=group-location-list");
    }
  }

  if($action === "group-location-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM group_location WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Location already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=group-location-edit");
    } else {
        $query = "UPDATE group_location SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=group-location-list");
    }
  }

  if($action === "group-location-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM group_location WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=group-location-list");
  }

  if($action === "group-new"){
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $query = "SELECT * FROM `group` WHERE Name = '$Name';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Group already exist";
        alert_redirect($message, "/slmd/pages?page=group-new");
    } else {
        $query = "INSERT INTO `group` (Name, Notes, DateCreated) VALUES ('$Name', '$Notes', now());";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=group-list");
    }
  }

  if($action === "group-edit"){
    $id  = $_POST['id'];
    $Name  = $_POST['Name'];
    $Notes  = $_POST['Notes'];
    $Status  = $_POST['Status'] === 'on' ? 1 : 0;

    $query = "SELECT * FROM `group` WHERE Name = '$Name' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, Group already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=group-edit");
    } else {
        $query = "UPDATE `group` SET Name = '$Name', Status = $Status, DateCreated = now(), Notes = '$Notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=group-list");
    }
  }

  if($action === "group-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM `group` WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=group-list");
  }

  if($action === "personal-data-new"){
    $No = $_POST["No"];
    $Name = $_POST["Name"];
    $Sex = $_POST["Sex"];
    $GroupName = $_POST["Group"];
    $Location  = $_POST['Location'];
    $Cluster  = $_POST['Cluster'];
    $Natinality = $_POST["Natinality"];
    $YOB = $_POST["YOB"];
    $IdNo = $_POST["IdNo"];
    $HostingGroupBank = $_POST["HostingGroupBank"];
    $OfficialRole = $_POST["OfficialRole"];
    $Contact = $_POST["Contact"];
    $MpesaNo = $_POST["MpesaNo"];
    $NameOnSimCard = $_POST["NameOnSimCard"];
    $BusinessType = $_POST["BusinessType"];
    $HostIdNo = $_POST["HostIdNo"];
    $IdExpiryDate = $_POST["IdExpiryDate"] ? $_POST["IdExpiryDate"] : date("Y-m-d H:i:s");
    $AverageMonthlyIncome = $_POST["AverageMonthlyIncome"];
    $NoOfEmployees = $_POST["NoOfEmployees"] ? $_POST["NoOfEmployees"] : 0;
    $NoOfOutlets = $_POST["NoOfOutlets"] ? $_POST["NoOfOutlets"] : 0;
    $notes = $_POST["Notes"];
    $BusinessRegistered = $_POST["BusinessRegistered"] === 'on' ? 1 : 0;
    $Owner = $_POST["Owner"] === 'on' ? 1 : 0;
    $CanDoMpesaTransaction = $_POST["CanDoMpesaTransaction"] === 'on' ? 1 : 0;
    $HasDisability = $_POST["HasDisability"] === 'on' ? 1 : 0;
    $Vulnerable = $_POST["Vulnerable"] === 'on' ? 1 : 0;
    $HasKRAPin = $_POST["HasKRAPin"] === 'on' ? 1 : 0;

    $query = "SELECT * FROM `personal_data` WHERE No = '$No';";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, S/NO already exist";
        alert_redirect($message, "/slmd/pages?page=personal-data-new");
    } else {
        $query = "INSERT INTO `personal_data` (No, Name, Sex, GroupName, Location, Cluster, Natinality, YOB, IdNo, HostingGroupBank, OfficialRole, 
        Contact, MpesaNo, NameOnSimCard, BusinessType, HostIdNo, IdExpiryDate, AverageMonthlyIncome, NoOfEmployees, NoOfOutlets, 
        Notes, BusinessRegistered, Owner, CanDoMpesaTransaction, HasDisability, Vulnerable, HasKRAPin, DateCreated) 
        VALUES ('$No','$Name','$Sex','$GroupName', '$Location', '$Cluster', '$Natinality','$YOB','$IdNo','$HostingGroupBank', '$OfficialRole',
        '$Contact','$MpesaNo','$NameOnSimCard','$BusinessType', '$HostIdNo','$IdExpiryDate','$AverageMonthlyIncome','$NoOfEmployees', '$NoOfOutlets', 
        '$notes', $BusinessRegistered, $Owner, $CanDoMpesaTransaction, $HasDisability, $Vulnerable, $HasKRAPin,  now());";
       
       $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=personal-data-list");
    }
  }

  if($action === "personal-data-edit"){
    $id  = $_POST['id'];
    $No = $_POST["No"];
    $Name = $_POST["Name"];
    $Sex = $_POST["Sex"];
    $GroupName = $_POST["Group"];
    $Location  = $_POST['Location'];
    $Cluster  = $_POST['Cluster'];
    $Natinality = $_POST["Natinality"];
    $YOB = $_POST["YOB"];
    $IdNo = $_POST["IdNo"];
    $HostingGroupBank = $_POST["HostingGroupBank"];
    $OfficialRole = $_POST["OfficialRole"];
    $Contact = $_POST["Contact"];
    $MpesaNo = $_POST["MpesaNo"];
    $NameOnSimCard = $_POST["NameOnSimCard"];
    $BusinessType = $_POST["BusinessType"];
    $HostIdNo = $_POST["HostIdNo"];
    $IdExpiryDate = $_POST["IdExpiryDate"] ? $_POST["IdExpiryDate"] : date("Y-m-d H:i:s");
    $AverageMonthlyIncome = $_POST["AverageMonthlyIncome"];
    $NoOfEmployees = $_POST["NoOfEmployees"] ? $_POST["NoOfEmployees"] : 0;
    $NoOfOutlets = $_POST["NoOfOutlets"] ? $_POST["NoOfOutlets"] : 0;
    $notes = $_POST["Notes"];
    $BusinessRegistered = $_POST["BusinessRegistered"] === 'on' ? 1 : 0;
    $Owner = $_POST["Owner"] === 'on' ? 1 : 0;
    $CanDoMpesaTransaction = $_POST["CanDoMpesaTransaction"] === 'on' ? 1 : 0;
    $HasDisability = $_POST["HasDisability"] === 'on' ? 1 : 0;
    $Vulnerable = $_POST["Vulnerable"] === 'on' ? 1 : 0;
    $HasKRAPin = $_POST["HasKRAPin"] === 'on' ? 1 : 0;
    $Status = $_POST["Status"] === 'on' ? 1 : 0;

    $query = "SELECT * FROM `personal_data` WHERE No = '$No' AND Id != $id;";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    if ($result) {
        $message = "Sorry, S/NO already exist";
        alert_redirect($message, "/slmd/pages?id=$id&page=personal-data-edit");
    } else {
        $query = "UPDATE `personal_data` SET No = '$No', Name = '$Name', Sex = '$Sex', GroupName = '$GroupName', Location = '$Location', Cluster = '$Cluster', Natinality = '$Natinality', 
        YOB = '$YOB', IdNo = '$IdNo', HostingGroupBank = '$HostingGroupBank', OfficialRole = '$OfficialRole', Contact = '$Contact', MpesaNo = '$MpesaNo', NameOnSimCard = '$NameOnSimCard', 
        BusinessType = '$BusinessType', HostIdNo = '$HostIdNo', IdExpiryDate = '$IdExpiryDate', AverageMonthlyIncome = '$AverageMonthlyIncome', NoOfEmployees = '$NoOfEmployees', 
        NoOfOutlets = '$NoOfOutlets', BusinessRegistered = $BusinessRegistered, Owner = $Owner, CanDoMpesaTransaction = $CanDoMpesaTransaction, HasDisability = $HasDisability, 
        Vulnerable = $Vulnerable, HasKRAPin = $HasKRAPin, Status = $Status, DateCreated = now(), Notes = '$notes' WHERE Id = $id;";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: /slmd/pages?page=personal-data-list");
    }
  }

  if($action === "personal-data-delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM `personal_data` WHERE Id = $id;";
    $statement = $connect->prepare($query);
    $statement->execute();

    header("location: /slmd/pages?page=personal-data-list");
  }
?>