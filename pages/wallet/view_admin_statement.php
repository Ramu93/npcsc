<?php session_start();
  if($_SESSION['user_type'] != 'ADMIN'){
    echo '<script>history.go(-1);</script>';
    exit();
  }
  include '../header_nav.php';
  include '../sidebar.php';
  include '../../services/constants.php';
  include '../../services/common_methods.php';
  ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <br />
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Wallet Statement - Debit Transactions</h3>
        <!-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div> -->
      </div>
      <div class="card-body">
        <table id="wallet_statement_table" class="table">
          <thead>
            <tr>
              <th>S. No.</th>
              <th>Transaction ID</th>
              <th>Date Time</th>
              <th>Description</th>
              <th>Previous Balance</th>
              <!-- <th>Transaction Type</th> -->
              <th>Amount</th>
              <th>Balance</th>
              <th>Agent ID</th>
              <th>Agent Name</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = 'SELECT wt.transaction_id, wt.date_time, wt.description, wt.previous_balance, wt.transaction_type, wt.balance, wt.amount, u.user_id, u.name FROM '.TABLE_WALLET_TRANS.' wt, '.TABLE_WALLET.' w, '.TABLE_USERS.' u where wt.wallet_id=w.wallet_id AND w.user_id=u.user_id AND wt.transaction_type="'.TRANSACTION_DEBIT.'"  ORDER BY transaction_id DESC';
              $result = mysqli_query($dbc, $query);
              if(mysqli_num_rows($result) > 0){
                $rowCount = 0;
                while($row = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<td>".++$rowCount."</td>";
                  echo "<td>".$row['transaction_id']."</td>";
                  echo "<td>".$row['date_time']."</td>";
                  echo "<td>".$row['description']."</td>";
                  echo "<td>".$row['previous_balance']."</td>";
                  // echo "<td>".$row['transaction_type']."</td>";
                  echo "<td>".$row['amount']."</td>";
                  echo "<td>".$row['balance']."</td>";
                  echo "<td>".addUserIdPadding($row['user_id'])."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "</tr>";
                }
              }
              ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer">
        Footer
        </div> -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
  include '../footer_imports.php';
  ?>  
<script type="text/javascript">
  $('#wallet_statement_table').DataTable();
</script>
<?php 
  include '../footer.php';
  ?>