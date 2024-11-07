<?php include 'header.php';

$request_users = $db->prepare("SELECT * FROM User");
$request_users->execute();
$count = 0;
?>


<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Users List<small>
                <?php
                if (isset($_SESSION['isDeleted'])) {
                  if ($_SESSION['isDeleted'] == 'ok') { ?>
                    <span
                      style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                      Succesfully Deleted!</span>
                  <?php } elseif ($_SESSION['isDeleted'] == 'no') { ?>
                    <span
                      style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                      Something went wrong!</span>
                  <?php }
                  unset($_SESSION['isDeleted']);
                }
                ?>
              </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a></li>
                  <li><a href="#">Settings 2</a></li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th style="width: 5%;" >№</th>
                  <th>Time</th>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <?php
              while ($read_users = $request_users->fetch(PDO::FETCH_ASSOC)) { $count++ ?>
                <tr>
                  <td><?php echo $count ?></td>
                  <td><?php echo $read_users['time'] ?></td>
                  <td><?php echo $read_users['fullname'] ?></td>
                  <td><?php echo $read_users['email'] ?></td>
                  <td><?php echo $read_users['gsm'] ?></td>
                  <td style="width: 10%"><a href="user-update.php?id=<?php echo $read_users['id'] ?>"><button
                        class="btn btn-primary btn-xs" style="padding: 5px 15px;">Update</button></a>
                    <a href="../connection/netting.php?delete_user=<?php echo $read_users['id'] ?>"><button
                        class="btn btn-danger btn-xs" style="padding: 5px 15px;">Delete</button></a>
                  </td>
                </tr>
              <?php }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>