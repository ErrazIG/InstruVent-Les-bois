
  <nav class="navbar">
    <a href="?" id="link" style="text-decoration: none;"><h1 class="title-navbar">ADMIN</h1></a>
    <div class="nav-container">
      <a href="?" id="link">Accueil</a>
      <a href="?p=Update" id="link">Update</a>
      <a href="?p=Create" id="link">Create</a>
      <a href="?disconnect"><button type="button" class="btn btn-warning btn-admin" data-bs-toggle="modal" data-bs-target=".exampleModal">Se déconnecter</button></a>
    </div>
  </nav>
  <button class="navbar-burger burger-button" onclick="toggleMenu()"></button>
  <nav class="menu">
      <a href="?" style="animation-delay: 0.2s">Accueil</a>
      <a href="?p=Update" style="animation-delay: 0.2s">Update</a>
      <a href="?p=Create" style="animation-delay: 0.3s">Create</a>
      <a href="?disconnect" style="animation-delay: 0.4s"><button type="button" class="btn btn-warning btn-admin" data-bs-toggle="modal" data-bs-target=".exampleModal">Se déconnecter</button></a>
  </nav>
  <script>
    const toggleMenu = () => {
    document.body.classList.toggle("open");
  };
  </script>
