<?php include '../services/database_connection.php'; 
    $count = 0; 

    $participantsQuery = "SELECT * FROM `personal_data`";
    $participantsStatement = $connect->prepare($participantsQuery);
    $participantsStatement->execute();
    $participantsCount = $participantsStatement->rowCount();

    $clusterQuery = "SELECT * FROM `cluster`";
    $clusterStatement = $connect->prepare($clusterQuery);
    $clusterStatement->execute();
    $clustersCount = $clusterStatement->rowCount();

    $groupQuery = "SELECT * FROM `group`";
    $groupStatement = $connect->prepare($groupQuery);
    $groupStatement->execute();
    $groupsCount = $groupStatement->rowCount();

    $coursesCount = 7;

?>

<div class="container-fluid"><br>
   <div class="row drc_logo">
      <div class="col-md-2 col-sm-12">
         <img src="../assets/images/logo1.png">
      </div>
   </div>

   <div class="row about_drc">
      <div class="row">
         <div class="col-md-6 col-sm-12">
            <div class="row">
               <div class="main-header">
                  <h1>Danish Refugee Council SDACKED Program</h1>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12"><h5>Who is the Danish Refugee Council?</h5></div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <p>Founded in 1956, the Danish Refugee Council (DRC) is a leading international NGO and one of the few 
                  with specific expertise in forced displacement. Active in 40 countries, with 9,000 employees and
                  supported by 7,500 volunteers, DRC protects, advocates, and builds sustainable futures for refugees
                  and other displacement-affected people and communities. DRC works during displacement at all
                  stages: in the acute crisis, in displacement, when settling and integrating in a new place, or upon
                  return. DRC provides protection and life-saving humanitarian assistance, supporting displaced persons
                  in becoming self-reliant and included in hosting societies. DRC works with civil society and responsible
                  authorities to promote the protection of refugee rights and peaceful coexistence.
                  DRC has been operational in Kenya since 2005 and is one of the United Nations High Commissioner for
                  Refugees (UNHCR) largest implementing partners in refugee response. The organization is present in
                  Garissa (Dadaab & Garissa), Turkana (Kakuma, Kalobeyei & Lodwar), Lamu, Isiolo, Marsabit, Nairobi,
                  and Mandera counties.</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-12">
            <img id="img_sdacked" src="../assets/images/sdacked.jpg" alt="SDACKED">
         </div>
      </div>
   </div>
  
   <div class="row drc_programs">
      <div class="row">
         <div class="col-sm-12"><h1>Featured Programs</h1></div>
      </div>
      
      <div class="row">
         <div class="col-md-3 col-sm-12">
            <!-- <img src="../assets/images/product1.png" alt="Product"> -->
             <div class="card dashboard-product">
               <span>Project participants</span>
               <h2 class="dashboard-total-products"><?php echo $participantsCount ?></h2>
               <!-- <span class="label label-warning">Sales</span>Arriving Today -->
               <div class="side-box">
                  <i class="ti-signal text-warning-color"></i>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <!-- <img src="../assets/images/product2.png" alt="Product"> -->
            <div class="card dashboard-product">
               <span>No. of clusters</span>
               <h2 class="dashboard-total-products"><?php echo $clustersCount ?></h2>
               <!-- <span class="label label-primary">Views</span>View Today -->
               <div class="side-box ">
                  <i class="ti-gift text-primary-color"></i>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <!-- <img src="../assets/images/product3.png" alt="Product"> -->
            <div class="card dashboard-product">
               <span>No. of Groups</span>
               <h2 class="dashboard-total-products"><?php echo $groupsCount ?></h2>
               <!-- <span class="label label-success">Sales</span>Reviews -->
               <div class="side-box">
                  <i class="ti-direction-alt text-success-color"></i>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <!-- <img src="../assets/images/product3.png" alt="Product"> -->
            <div class="card dashboard-product">
               <span>No.of courses</span>
               <h2 class="dashboard-total-products"><?php echo $coursesCount ?></h2>
               <!-- <span class="label label-danger">Sales</span>Reviews -->
               <div class="side-box">
                  <i class="ti-rocket text-danger-color"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- <div class="row drc_contacts">
      <div class="col-md-6 col-sm-12">
         <div class="row">
            <div class="col-sm-12"><h1>Contact Us</h1></div>
         </div>
         
         <div class="row">
            <div class="col-sm-12">
               <p>Interested in working together? Fill out some info and we will be in touch shortly. We can’t wait to hear from you!</p>
            </div>
         </div>
      </div>

      <div class="col-md-6 col-sm-12">
         
      </div>
   </div> -->
</div>