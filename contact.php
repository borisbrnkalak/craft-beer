<?php

/*echo "<pre>";
print_r(Beer::getAll($db));
$bla = Beer::getByID($db,1);
print_r($bla);
echo "</pre>";

if(!is_null($bla)){

  echo "id: ".$bla->getId()."<br>";
  echo "title: ".$bla->getTitle()."<br>";
  echo "description: ".$bla->getDescription()."<br>";
}*/

// Beer::insert($db,new Beer(null,'Ahoj',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis quo repellat minima, quasi fugit dicta ad, soluta aliquid laborum ipsum culpa! Nobis suscipit rerum facilis repellat ea saepe quibusdam."));
// Beer::insert($db,new Beer(null,'Cau',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis quo repellat minima, quasi fugit dicta ad, soluta aliquid laborum ipsum culpa! Nobis suscipit rerum facilis repellat ea saepe quibusdam."));
// Beer::insert($db,new Beer(null,'Id prec',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis quo repellat minima, quasi fugit dicta ad, soluta aliquid laborum ipsum culpa! Nobis suscipit rerum facilis repellat ea saepe quibusdam."));
// Beer::insert($db,new Beer(null,'Cus bus',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis quo repellat minima, quasi fugit dicta ad, soluta aliquid laborum ipsum culpa! Nobis suscipit rerum facilis repellat ea saepe quibusdam."));

// Beer::update($db,"UPDATE `beers` SET `title`='Ahoj' WHERE id = 1");
// Beer::update($db,"UPDATE `beers` SET `title`='Ahoj' WHERE id = 1");

// Beer::delete($db,3);
//print_r(Beer::getAll($db));
// Beer::delete($db,4);
// Beer::delete($db,5);
// Beer::delete($db,6);
include_once "./inc/header.php";
include_once "./inc/menu-white.php";




//Contact::update($db, new Contact(14, "maros@gmail.com", 'adroadro', "Správa"));

?>
<div id="parallax" class="paralax" style="background-image: url('img/hero_inner_blog.jpg')">
  <?php
  include_once "./inc/menu-transparent.php";
  ?>

  <div class="paralax container">
    <div class="paralax-text">
      <p>Who are we</p>
      <h1 style="
              font-family: 'Roboto Condensed';
              font-weight: 800;
              font-size: 3.1em;
            ">
        GET IN TOUCH<br />
        WITH US
      </h1>
      <span>Brewing is our life, beer is our water so don’t waste time
        drinking<br />
        all kind of other things which won’t make your life better.
      </span>
    </div>
  </div>
</div>


<div class="white">
  <div class="containerr">
    <div class="formular-wrapper reveal">
      <div class="formular-text">
        <h1>Get in touch</h1>
        <p>
          Leverage agile frameworks to provide a robust synopsis for high
          level overviews. Iterative approaches to corporate strategy foster
          collaborative thinking to further the overall value proposition
          organically.
        </p>
      </div>
      <div class="formular-element">
        <form action="services/contact-data.php" method="POST" class="formular">
          <div class="inputs">
            <input type="email" name="email" placeholder="YOUR EMAIL" required />
            <input type="text" name="name" placeholder="YOUR NAME" required />
          </div>

          <textarea name="message" rows="10" placeholder="MESSAGE" required></textarea>

          <button type="submit" name="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="parallax-no3" style="background-image: url('img/hero_footer_beer_01.jpg')">
  <div class="containerr">
    <div class="footer">
      <div class="about-us">
        <h3>ABOUT US</h3>
        <span>Best craft beer.</span>
        <p>
          Brewing is our life, beer is our<br />
          water so don’t waste time<br />
          drinking other things.
        </p>
      </div>

      <div class="contact">
        <div class="logo">
          <img src="img/logo-footer-white.png" alt="LOGO" />
        </div>
        <p>
          +348 97 555 2360<br />
          craft-beer@bold-themes.com<br />
          7 York St, Melbourne, Australia
        </p>
      </div>

      <div class="links">
        <a href="#">HOME</a>
        <a href="#">ABOUT US</a>
        <a href="#">SERVICES</a>
        <a href="#">BLOG</a>
        <a href="#">SHOP</a>
        <a href="#">CONTACT</a>
      </div>
    </div>

    <div class="last-words">
      <p>Copyright by <a href="#">Bold Themes</a>. All rights reserved.</p>
    </div>
  </div>
</div>

<?php
include_once "./inc/footer.php";
?>