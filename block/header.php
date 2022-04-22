<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Maestro</span>
      </a>

      <ul class="nav nav-pills">
        
         <li class="nav-item">
           
         <?php 
          if($_COOKIE['user'] == 'Да'):
          ?>

         <a href="/auth.php" class="nav-link active" aria-current="page">Cabinet</a>

         <?php else: ?>

          <a href="/auth.php" class="nav-link active" aria-current="page">Home</a>
          
          <?php endif; ?>
        

        </li>
        
       
        <li class="nav-item"><a href="#" class="nav-link">Delivery</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Basket</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="/about.php" class="nav-link">Feedback</a></li>
      </ul>
      
</header>