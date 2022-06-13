<?php 
$title = 'Home';
include 'templates/header.php';

include 'view.php';

$date = new DateTime();
$date->setTimeZone(new DateTimeZone('Asia/Jakarta'));

$acts = $row;

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <form action="insert.php" method="post">
                       <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="What should be done today?" name="act" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                <input type="hidden" name="zaman" value="<?= $date->format('d-m-y h:i:s'); ?>">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
    <div class="card-body card-sm table-responsive">
            <table class="table table-striped table-hover table-resp" style="max-width:100%">
              <tbody>
                <?php 
                $i = 0;
                if (!empty($acts)) {
                foreach($acts as $act) :
                $i++?>
                  <tr>
                    <th scope="row"><p><?= $i ?></p></th>
                    <td><p><?= $act[1]; ?></p></td>
                    <td><p><?= $act[2]; ?></p></td>
                    <td>
                        <a href="delete.php?id=<?= $act[0]?>" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger">Delete</a>
                    </td>
                  </tr>
                <?php
                endforeach;
              }else{
                    echo "<h4>You do not have any activity</h4>";
                }
                ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>




<?php 
include 'templates/footer.php';
?>



