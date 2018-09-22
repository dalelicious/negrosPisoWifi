<?php
 $ROOT = "../";
 include $ROOT."include/_header.php";
 ?>
 <section class="heading-title">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h1>Blog</h1>
             </div>
         </div>
    </div>
</section>

    <section>
      <div class="container-fluid">


          <div class="row product-grid">

            <div class="col-md-8 blog-detail">
                <img src="<?=$ROOT;?>media/1.jpg">
                <h1>This is the title </h1>
                <h6> this is the date </h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>


            <div class="col-md-4 archive-list">
              <h2>Archives</h2>
              <table class="table">
                <tr>
                  <td><a href="">this is a titme (date here)</a>
                  </td>
                </tr>
                  <tr>
                    <td><a href="">this is a titme (date here)</a>
                    </td>
                  </tr>
                </table>
            </div>



          </div>
      </div>
    </section>

<?php include $ROOT."include/_footer.php";?>
