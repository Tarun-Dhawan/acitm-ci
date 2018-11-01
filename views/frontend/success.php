<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.png">
        <title>ACIT - Computer Institute</title>   
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/bootstrap.min.css">
        
         
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>  
                <div class="col-md-6 text-center DivIdToPrint">
                  <?php echo "<h3 style='color:green;'>Your payment is ". $status .".</h3>"; ?>
                  <h4>You can print this reciept for further refference</h4>            
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                          <td colspan="2" style="">
                              <p style="margin-left: 100px;">ISO 9001:2015 Certified Organization Institute</p>
                              <h3 style="margin-left: 40px;">Adheesh Computer Institute of Technology</h3>
                              <h5 style="margin-left: 60px;">Regd. By Govt. of UP, Indian Govt, and DOEACC SOCIETY and HRD</h5>
                          </td>
                      </tr>
                      <tr>
                        <th>Name</th>
                        <td><?= $name ?></td>
                      </tr>
                      <tr>
                        <th>Course</th>
                        <td><?= $productinfo ?></td>
                      </tr>
                      <tr>
                        <th>Branch</th>
                        <td><?= $branch ?></td>
                      </tr>
                      <tr>
                        <th>Amount</th>
                        <td><?= $amount ?></td>
                      </tr>

                      <tr>
                        <th>Transaction Id</th>
                        <td><?= $txnid ?></td>
                      </tr>
                      <tr>
                        <th>Payment Status</th>
                        <td>Success</td>
                      </tr>
                    </tbody>
                  </table>
                  <input type='button' id='btn' value='Print' onclick='printDiv();'>
                  </div>
                <div class="col-md-3"></div>
            </div>
        </div>    
    </body>
    <script type="text/javascript">
    function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
</script>
</html>  
