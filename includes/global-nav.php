<div class="menu">
    <img src="imgs/logo.svg" alt="Gerogian Records logo">
    <div class="burger" id="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav>
      <ul id="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="details.php">Details</a></li>
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="support.php">Support</a></li>
            <li><a href="about-us.php">About Us</a></li>
        </ul>
    </nav>
</div>
<script>
  const burger = document.getElementById('burger');
    const navMenu = document.getElementById('nav-menu');

    burger.addEventListener('click', () => {
    navMenu.classList.toggle('show');
    burger.classList.toggle('open');
    });
</script>
