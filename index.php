<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Spice Scape restaurant</title>
    <link rel="shortcut icon" href="restaurant/img/logo.png" sizes="16x16" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="restaurant/style.css">
  </head>
  <body>
    <?php include 'partials/_nav.php';?>
  
    <section>
        <div class="block">
            <div style="background-image: url(restaurant/img/topbg.jpg);" class="fixed-bg"></div>
             <div class="restaurant-searching text-center">
                <div class="restaurant-searching-inner">
                     <h2 itemprop="headline">Delicious Cuisine, Memorable Experience !</h2> 
                   
                 </div>    <!--Fun Facts -->
            </div> 
            <img class="bottom-clouds-mockup" src="restaurant/img/clouds.png" alt="clouds.png" itemprop="image">
        </div><!-- Restaurant Searching -->
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <span>Restaurant: Savory, inviting, unforgettable.</span>
                                <h2 itemprop="headline">Quick picks for you</h2>
                                <p itemprop="description">Discover our handpicked favorites! Browse through a delightful
                                    selection of our chef-recommended dishes, ready to satisfy your cravings in no time.
                                    From mouthwatering appetizers to delectable desserts, these quick picks ensure a
                                    delightful dining experience with every bite</p>
                            </div><br><br><br>
                            <div class="row remove-ext5">
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                        <div class="popular-dish-thumb">
                                            <a href="food-detail.html" title="" itemprop="url"><img
                                                    src="restaurant/img/pop2.jpg" alt="popular-dish-img1.jpg"
                                                    itemprop="image"></a>
                                        </div>
                                        <div class="popular-dish-info">
                                            <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">
                                                    Chowmin manchurian</a>
                                            </h4>
                                            <p itemprop="description">Exquisite fusion: Chow Mein meets Manchurian, a taste sensation!</p><br>
                                            <span class="price">₹100.00</span>
                                            <div class="rate">
                                            <span class="post-rate" ><i ></i><img src="restaurant/img/rating.png" alt="rating" class="rating"> 4.0</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="popular-dish-box wow fadeIn" data-wow-delay="0.4s">
                                        <div class="popular-dish-thumb">
                                            <a href="food-detail.html" title="" itemprop="url"><img
                                                    src="restaurant/img/pop1.jpg" alt="popular-dish-img2.jpg"
                                                    itemprop="image"></a>
                                        </div>
                                        <div class="popular-dish-info">
                                            <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">
                                                Hyderabadi Dum Biryani</a>
                                            </h4>
                                            <p itemprop="description">Indulge in the irresistible flavors of Hyderabadi Dum Biryani!</p>
                                            <span class="price my-0">₹150.00</span>
                                            <div class="rate">
                                            <span class="post-rate" ><i ></i><img src="restaurant/img/rating.png" alt="rating" class="rating"> 4.5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                        <div class="popular-dish-thumb">
                                            <a href="food-detail.html" title="" itemprop="url"><img
                                                    src="restaurant/img/pop3.jpg" alt="popular-dish-img3.jpg"
                                                    itemprop="image"></a>

                                        </div>
                                        <div class="popular-dish-info">
                                            <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">
                                                    Egg Chichen Roll</a></h4>
                                            <p itemprop="description">Savory Egg Chicken Roll: Delectable fusion of flavors, a lip-smacking delight!</p><br>
                                            <span class="price ">₹100.00</span>
                                            <div class="rate">
                                            <span class="post-rate" ><i ></i><img src="restaurant/img/rating.png" alt="rating" class="rating"> 4.2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="footer">

        <div class="container">
            <div class="row-flex">
                <div class="flex-column-form">
                    <h3>
                        Have any feedback or query ?
                    </h3>
                    <form class="media-centered">
                        <div class="form-group">
                            <p>
                                Please leave your number we will call asap.
                            </p>
                            <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp"
                                placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputphoneNumber1"
                                placeholder="Enter your phone number">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="opening-time">
                    <h3>
                        Opening times
                    </h3>
                    <p>
                        <span>Tuesday—Friday : 08:00 — 22:00</span>
                        <span>Saturday-Sunday: 11:00 — 23:00 </span>
                        <span>Monday : 09:00 — 20:00</span>
                    </p>
                </div>
                <div class="contact-adress" id="Contact">
                    <h3>
                        Contact
                    </h3>
                    <p>
                        <span>+91 9631729937 | +91 8987709910 </span>
                        <span>11 vidhanpark,sector-1</span>
                        <span>Durgapur,West Bengal 713206</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="bottom-bar dark-bg text-center">
            <p itemprop="description"><a target="_blank" href="#"></a>Copyright | All rights
                reserved <br>©spice scape</p>

        </div>
    </div>

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>