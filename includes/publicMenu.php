
  <nav class="navbar">
    <h1 class="title-navbar">InstruVent Les Bois</h1>
    <div class="nav-container">
      <a href="?p=Accueil" id="link">Accueil</a>
      <a href="?p=Propos" id="link">À propos</a>
      <a href="?p=Instruments" id="link">Instruments</a>
      <a href="?p=Contact" id="link">Contact</a>
      <button type="button" class="btn btn-warning btn-admin" data-bs-toggle="modal" data-bs-target=".exampleModal">Admin</button>
    </div>
  </nav>
  <button class="navbar-burger burger-button" onclick="toggleMenu()"></button>
  <nav class="menu">
      <a href="?p=Accueil" style="animation-delay: 0.1s">Accueil</a>
      <a href="?p=Propos" style="animation-delay: 0.2s">À propos</a>
      <a href="?p=Instruments" style="animation-delay: 0.3s">Instruments</a>
      <a href="?p=Contact" style="animation-delay: 0.4s">Contact</a>
      <button type="button" class="btn btn-warning btn-admin" data-bs-toggle="modal" data-bs-target=".exampleModal">Admin</button>
  </nav>
  <script>
    const toggleMenu = () => {
    document.body.classList.toggle("open");
  };
  </script>


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