<style>
    nav ul li a:hover{
        background-color: gray;
        color: white !important;
        border-radius: 10px;
    }
    nav ul li .dropdown-item:hover{
        background-color: gray;
        color: white !important;
        border-radius: 10px;
    }
</style>

<nav class="navbar navbar-expand-lg bg-light p-2">
  <div class="container-fluid">
    <a class="navbar-brand" style="display: flex; " href="home">
    <img src="<?=ROOT?>/assets/Ƶetateam.png" class=" mx-auto" style="width:50px; " alt="">
       <div style="margin-left: 10px; font-weight:bold;";> ƵETA</div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">DASHBOARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users">USERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="classes">CLASSES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tests">TESTS</a>
        </li>
        <li class="nav-item dropdown" style="transition: 0.5s ease;" id="dropdown">
          <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USER
          </a>
          <ul class="dropdown-menu"  id="list">
            <li><a class="dropdown-item" href="profile">Profile</a></li>
            <li><a class="dropdown-item" href="home">Dashboard</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
    const drop= document.getElementById('dropdown');
    const list= document.getElementById('list');

    drop.addEventListener('click', ()=>{
        list.classList.toggle('active')
    })


   
</script>