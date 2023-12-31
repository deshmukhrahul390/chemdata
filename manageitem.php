<?php
include('header/header.php');


$query1 = "SELECT * FROM gradediameteruniquecode";
$result1 = mysqli_query($con, $query1);
$uniquecode='<option value="">--- Select Code ---</option>';
while ($row1 = mysqli_fetch_assoc($result1)) {
    $uniquecode.='<option value="' . $row1['grade'] . '">' .$row1['uniquecode']." / ".getgradenamebyID($con,$row1['grade']).'-'.$row1['diameter']. '</option>';
}


?>


<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <!-- add content here -->

      <h3>Item Master</h3>
      <div class="row justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Create New Item</button>
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
          </tr>
        </thead>
        <tbody>
<?php

$selectmenulist="SELECT * FROM `chem_mechmaster`";

$res=mysqli_query($con,$selectmenulist);

if(mysqli_num_rows($res)>0)
{
  $num=1;
		while($row=mysqli_fetch_array($res))
    {?>
        <tr>
          <!-- <td><?php //echo $num; ?></td>
          
          <td><?php //echo $row['Name']; ?></td>
          <td><?php //echo $row['Type']; ?></td>
          <td>
            <button class="btn btn-warning" onclick="getdata(<?php echo $row['ChemMechId']; ?>)"><i data-feather="edit"></i></button>
            &nbsp<button class="mt-1 btn btn-danger" onclick="deletedata(<?php echo $row['ChemMechId']; ?>)">X</button></td> -->
        </tr>
    <?php 
    $num++;
  }
}else{
  echo "<tr>
        <td colspan='3' align='center'>No Component Found</td>
  </tr>";
}



?>

        
        </tbody>
      </table>
    </div>
  </section>

  <!-- model started -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="">
                  <label for="">Item Code</label>
                  <input type="text" class="form-control" id="txtitemcode">
                  <label for="">Disc</label>
                  <textarea name="" id="txtitemdisc" cols="30" rows="10" class="form-control"></textarea>
                  <label for="">Item Category</label>
                  <input type="text" class="form-control" id="itemcategory">
                  <label for="">Select BO/IH</label>
                  <select name="" id="compotype" class="form-control">
                  <option value="0">BO</option>
                  <option value="1">IH</option>
                 </select>
                  <label for="">Basic Material</label>
                  <input type="text" class="form-control" id="itemBM">

                  <label for="">Drg.No</label>
                  <input type="text" class="form-control" id="itemdrg">
                  <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                        <label for="">Length</label>
                  <input type="text" class="form-control" id="itemlength">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="">Dia</label>
                  <input type="text" class="form-control" id="itemdia">
                        </div>
                    </div>
                 
                 

                  <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                            <label for="">Gross Wt</label>
                            <input type="text" class="form-control" placeholder="Diameter" id="txtdia">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="">Net Wt</label>
                            <input type="text" class="form-control" placeholder="Unique Code" id="txtcode">
                        </div>
                    </div>

                  <label for="">Child Code</label>
                 <select name="" id="compotype" class="form-control">
                 <?php echo $uniquecode;  ?>
                 </select>
                 <small>UniqueNo / Grade - Diameter</small>
                </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" onclick="savecate()">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
  <!-- model ends -->

  <!-- -----------------------------------------------------------------------------------------------------df -->
  <!-- Menu update code here -->
   <!-- model started -->
   <div class="modal fade" id="updatemenumodel" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Category </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="">
                <label for="">Component Name</label>
                  <input type="text" class="form-control" id="upcomponame">
                  <label for="">Component Type</label>
                 <select name="" id="upcompotype" class="form-control">
                  <option value="chem">Chemical</option>
                  <option value="mech">Mechanical</option>
                 </select>
                </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" onclick="updatecate()">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
  <!-- model ends -->

  <!-- -----------------------------------------------------------------------------------------------------df -->
  




  <?php
  include('footers/footer.php');
  ?>

  <script type="text/javascript">
    $(document).ready(function() {
      // alert('hii');
    });

    function savecate() {

      var componame = $('#componame').val();
      var compotype = $('#compotype').val();
     
      $.ajax({
        url: "component_backend.php",
        type: "POST",
        data: {
          componame: componame,
          compotype: compotype,
         
        },
        success: function(data) {
          console.log(data);
          $('#basicModal').modal('hide');
         location.reload();
        //  $('#tblcontent').html(data);
       },
     }
     );
    }





    function getdata(updateid) {

      $.post("component_backend.php", {
        updateid: updateid
      }, function(data, status) {
        // alert("Successfully");
        var component = JSON.parse(data);
        //   $('#up_categoryname').val(user.name);
           
           
        $('#hidden_id').val(component.ChemMechId);
        $('#upcomponame').val(component.Name);
        $('#upcompotype').val(component.Type);
       

      });
      $('#updatemenumodel').modal('show');


    }




    function updatecate() {
      var hidden_id = $('#hidden_id').val();
      var upcomponame = $('#upcomponame').val();
      var upcompotype = $('#upcompotype').val();
     

     $.ajax({
        url: "component_backend.php",
        type: "POST",
        data: {
          hidden_id: hidden_id,
          upcomponame: upcomponame,
          upcompotype: upcompotype,
        },
        success: function(data) {
          console.log(data);
          // $('#basicModal').modal('hide');
          location.reload();
          // $('#tblcontent').html(data);
        },
      });
    }


    function deletedata(deleteid)
    {
        // alert(id); 
        
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this Component!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {

      $.ajax({
                    url: "component_backend.php",
                    type: "POST",
                    data: {deleteid:deleteid},
                    success:function(data) {
                      swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                      });
                        location.reload(true);
                       //alert("sucess");
                //   readrecord();
                    },
                });


    } else {

    }
  });

    }
  </script>