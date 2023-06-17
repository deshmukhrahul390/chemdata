<?php
include('header/header.php');
// include('functions.php');
include('config.php');


date_default_timezone_set("Asia/Calcutta");
$today=date('Y-m-d');


// function getusernamebyvchid($con,$vchid)
// {
//     $selectquery = "SELECT * FROM `vouchersdtls` where `vouchersid`='$vchid' AND `DRCRtype`='DR'";
//     //  echo $selectquery;
//    $result = mysqli_query($con, $selectquery);
//    $row = mysqli_fetch_assoc($result);
//    $legerid=$row['ledgerid'];

//    echo getPartyNameByLegerid($con,$legerid);
// }



// function getPartyNameByLegerid($con,$legerid)
// {
//     $selectquery = "SELECT * FROM `ledgermaster` where `ledgerid`='$legerid'";
//     //   echo $selectquery;
//    $result = mysqli_query($con, $selectquery);
//    $row = mysqli_fetch_assoc($result);
//    $ledgername=$row['ledgername'];
//    return $ledgername;
// }
?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                    
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Users</h5>
                          <h2 class="mb-3 font-18">
                          <?php
                            $usersql="SELECT * FROM `userlogin`";
                            // echo mysqli_num_rows(mysqli_query($con,$usersql));
                            ?>
                          </h2>
                         </div>
                      </div>
                   
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                       
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Running Orders</h5>
                          <h2 class="mb-3 font-18">
                          <?php
                            $usersql="SELECT * FROM `partydata`";
                            // echo mysqli_num_rows(mysqli_query($con,$usersql));
                            ?>
                          </h2>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                         <img src="assets/img/banner/1.png" alt="">
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Ongoing Orders</h5>
                          <h2 class="mb-3 font-18">
                            
                          <?php
                            $usersql="SELECT * FROM `challanrecord` WHERE `date`='$today'";
                            // echo mysqli_num_rows(mysqli_query($con,$usersql));
                            ?>
                          </h2>
                          
                         </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Completed Orders</h5>
                          <h2 class="mb-3 font-18">
                          
                          <?php
                            $usersql="SELECT * FROM `challanrecord`";
                            // echo mysqli_num_rows(mysqli_query($con,$usersql));
                            ?>

                          </h2>
                         </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        



<hr>

          
      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
        <thead>
          <tr>

            <th>#</th>
            <th>Item code</th>
            <th>Category</th>
            <th>BO/IH</th>
            <th>Basic Material</th>
            <th>Drg.No</th>
            <th>Length</th>
            <th>Dia</th>
            <th>Gross Wt.</th>
            <th>Net Wt.</th>
            <th>Child Code</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>

        <tr>
          <td>1</td>
          <td>SS31600</td>
          <td>Category name</td>
          <td>Bo</td>
          <td>Chemicals</td>
          <td>0099</td>
          <td>2.1mm</td>
          <td>4.1</td>
          <td>1.2gm</td>
          <td>0.9gm</td>
          <td>EN24-7.5</td>
          <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
              <button class="btn btn-danger">X</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>SS3160</td>
          <td>Category name</td>
          <td>IH</td>
          <td>MECH</td>
          <td>0099</td>
          <td>2.1mm</td>
          <td>4.1</td>
          <td>1.2gm</td>
          <td>0.9gm</td>
          <td>EN24-7.5</td>
          <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
              <button class="btn btn-danger">X</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>SS31670</td>
          <td>Category name</td>
          <td>Bo</td>
          <td>Chemicals</td>
          <td>0099</td>
          <td>2.1mm</td>
          <td>4.1</td>
          <td>1.2gm</td>
          <td>0.9gm</td>
          <td>EN24-7.5</td>
          <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
              <button class="btn btn-danger">X</button>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>SS31600</td>
          <td>Category name</td>
          <td>IH</td>
          <td>MECH</td>
          <td>0099</td>
          <td>2.1mm</td>
          <td>4.1</td>
          <td>1.2gm</td>
          <td>0.9gm</td>
          <td>EN24-7.5</td>
          <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
              <button class="btn btn-danger">X</button>
          </td>
        </tr>
        
        </tbody>
      </table>
          
                  </div>
                </div>
              </div>
            </div> 
          </div> 
        </section>


        <?php
 include('footers/footer.php');
?>
<script>

  $('#txtdate').change(function() {
    var date = $(this).val();

    getdataforrecipt(date);

    // console.log(date, 'change')
});


function getdataforrecipt(reciptdate)
{

}
  </script>