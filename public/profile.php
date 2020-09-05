<?php require_once 'include/header.php'; ?>

<div class="bg-info h-100">
    <div class="row h-100">
        <div class="col-3 bg-secondary text-white">
            <div class="d-flex align-items-center flex-column">
                <img class="img-fluid rounded-circle my-3" src="img/ashik.PNG" alt="Ashik">
                <form action="" method="post">
                    <div class="input-group ml-2">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success" id="inputGroupFileAddon01">
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex flex-column m-2 mt-4 align-items-center">
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left"><i class="fas fa-signature mr-2"></i> Update Name</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left"><i class="fas fa-user mr-2"></i> Update About</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left"><i class="fas fa-phone mr-2"></i> Update Phone no</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left"><i class="fab fa-facebook mr-2"></i> Update Facebook link</button>
                <button class="btn btn-dark w-100 ml-2 mb-2 text-left"><i class="fab fa-twitter mr-2"></i> Update Twitter link</button>
            </div>
        </div>
        <div class="col bg-light">
            <div class="card h-75 mt-5 mr-4 shadow">
                <div class="card-body lead">
                    <b>Name: </b><span id="name">Ashik</span>
                    <hr>
                    <b>About: </b><span id="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos, nemo voluptatem accusamus cumque facere veritatis eius harum quo officia esse consequuntur fugiat quod exercitationem et dolores numquam, porro consectetur!
                    </span>
                    <hr>
                    <b>Phone no: </b><span id="phone">01712332r443</span> <br>
                    <b>Email: </b><span id="email">ashik@gmail.com</span>
                    <hr>
                    <a href="#" id="fb-link"><i class="fab fa-facebook text-primary"></i> Facebook</a> <br>
                    <a href="#" id="twitter-link"><i class="fab fa-twitter text-primary"></i> twitter</a>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
        <textarea name="" class="form-control" id="text-area" rows="4"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php require_once 'include/footer.php'; ?>