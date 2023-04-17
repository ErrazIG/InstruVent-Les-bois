            <!-- Menu  -->
    <nav class="navbar navbar-expand-lg nav-zindex" style="width: 100%;position: fixed; background: var(--brown-background);">
        <div class="container-fluid">
          <a class="navbar-brand text-white btn-home" href="#"><img src="" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon-menu"></span>
          </button>
          <div class="collapse navbar-collapse menu" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mt-2" id="link" href="?p=Accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-2" id="link" href="?p=Propos">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-2" id="link" href="?p=Instruments">Instruments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-2" id="link" href="?p=Contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link" href="#">
                  <!-- Button Admin trigger login modal -->
                  <button type="button" class="btn btn-warning btn-admin" data-bs-toggle="modal" data-bs-target=".exampleModal">Admin</button></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade exampleModal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>