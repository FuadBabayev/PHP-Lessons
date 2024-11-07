<?php include 'header.php';

$request_menu = $db->prepare("SELECT * FROM Menu");
$request_menu->execute();
$count = 0;
?>


<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menu List<small>
            <?php
                if (isset($_SESSION['menuDeleted'])) {
                  if ($_SESSION['menuDeleted'] == 'ok') { ?>
                    <span
                      style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                      Succesfully Deleted!</span>
                  <?php } elseif ($_SESSION['menuDeleted'] == 'no') { ?>
                    <span
                      style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                      Something went wrong!</span>
                  <?php }
                  unset($_SESSION['menuDeleted']);
                }
                ?>
            </small></h2>
            <a href="menu-add.php" style="margin-left: 300px;" ><button class="btn btn-success">+ Add Menu</button></a>
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
                  <th style="width: 5%;">№</th>
                  <th>Menu Name</th>
                  <th>Domain</th>
                  <th>Line</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <?php
              while ($read_menu = $request_menu->fetch(PDO::FETCH_ASSOC)) { $count++ ?>
                <tr>
                  <td><?php echo $count ?></td>
                  <td><?php echo $read_menu['name'] ?></td>
                  <td><?php echo $read_menu['detail'] ?></td>
                  <td><?php echo $read_menu['line'] ?></td>
                  <td>
                    <?php
                    if ($read_menu['status'] == '1') { ?>
                      <button class="btn btn-success btn-xs">Active</button>
                      <?php
                    } else { ?>
                      <button class="btn btn-danger btn-xs">Passive</button>
                      <?php
                    }
                    ?>
                  </td>
                  <td style="width: 10%"><a href="menu-update.php?menu_id=<?php echo $read_menu['id'] ?>"><button
                        class="btn btn-primary btn-xs" style="padding: 5px 15px;">Update</button></a>
                    <a href="../connection/netting.php?delete_menu=<?php echo $read_menu['id'] ?>"><button
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