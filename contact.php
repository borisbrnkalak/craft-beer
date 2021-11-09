<?php 


include_once "./db/Database.php";
include_once "./db/models/Beer.php";
include_once "./db/models/Contact.php";

$db = new Database();

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
include_once "./inc/menu.php";


if (isset($_GET['submit'])){
  $email = $_GET['email'];
  $name = $_GET['name'];
  $message = $_GET['message'];

  Contact::insert($db, new Contact(null, $email, $name, $message));
}

Contact::update($db, new Contact(8, "maros@gmail.com", 'adroadro', "Správa"));

?>
    <div
      id="parallax"
      class="paralax"
      style="background-image: url('img/hero_inner_blog.jpg')"
    >
      <header class="header">
        <div class="logo">
          <img src="img/logo-white.png" alt="LOGO" />
        </div>

        <div class="hamburger">
          <div class="line middle">
            <div class="line top"></div>
            <div class="line bottom"></div>
          </div>
        </div>

        <div class="links">
          <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a href="overview.php">OVERVIEW</a></li>
            <li><a href="our-team.php">OUR TEAM</a></li>
            <li><a href="testimonials.php">TESTIMONIALS</a></li>
            <li class="selected"><a href="#">CONTACT</a></li>
            <li><a href="product.php">PRODUCT</a></li>
          </ul>

          <ul class="social">
            <li>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-pinterest"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
        <div class="login transparent">
          <a class="login-btn" href="#">LOGIN</a>
        </div>
      </header>

      <div class="paralax container">
        <div class="paralax-text">
          <p>Who are we</p>
          <h1
            style="
              font-family: 'Roboto Condensed';
              font-weight: 800;
              font-size: 3.1em;
            "
          >
            GET IN TOUCH<br />
            WITH US
          </h1>
          <span
            >Brewing is our life, beer is our water so don’t waste time
            drinking<br />
            all kind of other things which won’t make your life better.
          </span>
        </div>
      </div>
    </div>


    <div class="white">
      <div class="containerr">
        <div class="formular-wrapper">
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
            <form action="#" method="GET" class="formular">
              <div class="inputs">
                <input
                  type="email"
                  name="email"
                  placeholder="YOUR EMAIL"
                  required
                />
                <input
                  type="text"
                  name="name"
                  placeholder="YOUR NAME"
                  required
                />
              </div>

              <textarea
                name="message"
                rows="10"
                placeholder="MESSAGE"
                required
              ></textarea>

              <button type="submit" name="submit">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div
      class="parallax-no3"
      style="background-image: url('img/hero_footer_beer_01.jpg')"
    >
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
