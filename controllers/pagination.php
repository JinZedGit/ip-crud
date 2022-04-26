<div class="container">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <!--<li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>-->
      <?php 
        for($page = 1; $page <= $number_of_pages; $page ++){
            echo "<li class=\"page-item\"><a class=\"page-link\" href=\"index.php?page=".$page."\">".$page."</a></li>";
        }
      ?>
      <!--<li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>-->
    </ul>
  </nav>
</div>