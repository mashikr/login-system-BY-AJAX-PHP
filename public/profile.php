<?php require_once 'include/header.php'; ?>
<?php 
if (!isset($_SESSION['user_id'])){
    header('Location: index.php');
} 
if ($db && $_SESSION['user_id']) {
    $sql = "SELECT * FROM `users` WHERE `id` = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $_SESSION['user_id'], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['upload'])) {
  $image_name = $_FILES['image']['name'];
  $image = $_FILES['image']['tmp_name'];
  $old_img = $_POST['old_img'];

  if (move_uploaded_file($image, "img/$image_name")) {
    $sql = "UPDATE `users` SET`image`='" . $image_name . "' WHERE `id` = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $_SESSION['user_id'], PDO::PARAM_INT);
    if ($stmt->execute()) {
       unlink("img/$old_img");
    } else {
        echo '<script>alert("something went wrong!")</script>';
    }
    header('Location: profile.php');
  }

}
?>
<div class="bg-info h-100">
    <div class="row h-100">
        <div class="col-3 bg-secondary text-white">
            <div class="d-flex align-items-center flex-column">
                <img class="img-fluid rounded-circle my-3" src="img/<?php echo $user['image'] ? $user['image'] : 'user.png'; ?>" alt="<?php echo $user['name']; ?>">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group ml-2">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" name="upload" value="Upload" class="btn btn-success" id="inputGroupFileAddon01">
                        </div>
                    </div>
                    <input type="hidden" name="old_img" value="<?php echo $user['image']; ?>">
                </form>
            </div>
            <div class="d-flex flex-column m-2 mt-4 align-items-center">
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left" id="update-name"><i class="fas fa-signature mr-2"></i> Update Name</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left" id="update-about"><i class="fas fa-user mr-2"></i> Update About</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left" id="update-phone"><i class="fas fa-phone mr-2"></i> Update Phone no</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left" id="update-fb"><i class="fab fa-facebook mr-2"></i> Update FB link</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left" id="update-twitter"><i class="fab fa-twitter mr-2"></i> Update Twit link</button>
            </div>
        </div>
        <div class="col bg-light">
            <div class="card h-75 mt-5 mr-4 shadow">
                <div class="card-body lead">
                    <b>Name: </b><span id="name"><?php echo $user['name']; ?></span>
                    <hr>
                    <b>About: </b><span id="about"><?php echo $user['about']; ?></span>
                    <hr>
                    <b>Phone no: </b><span id="phone"><?php echo $user['phone']; ?></span>
                    <br>
                    <b>Email: </b><span id="email"><?php echo $user['email']; ?></span>
                    <hr>
                    
                    <p><a href="<?php  echo $user['facebook'];  ?>" target="_blank" id="fb-link"><i class="fab fa-facebook text-primary"></i> Facebook</a></p>
                    <a href="<?php echo $user['twitter']; ?>" target="_blank" id="twitter-link"><i class="fab fa-twitter text-primary"></i> twitter</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="input-modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input class="form-control" id="modal-input" type="text">
        <span class="text-danger" id="error-msg"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="input-btn">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="textModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="input-modal-title">Update about</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea name="" class="form-control" id="text-area" rows="5"></textarea>
        <span class="text-danger" id="error-msg-text"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="text-btn">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php require_once 'include/footer.php'; ?>