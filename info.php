<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="styles.css">
     <!----  box icon link--><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    <!--------------------Jquery Cdn--------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--------------------Jquery Cdn--------->
    
    <!-----------------------Bootstrap CDN fo jquery,popper and js--------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-----------------------Bootstrap CDN fo jquery,popper and js--------------->
    
    <!------------------LIght BOx for Gallery-------------->
    <link rel="stylesheet" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
    <!------------------LIght BOx for Gallery-------------->
    
    <!-- -----------------------Flickity For Slider----- -->
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <script src="https://npmcdn.com/flickity@1.2/dist/flickity.pkgd.min.js"></script>
    
    <!-------------------------Flickity For Slider------->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: skyblue;
    }
    
    .container {
        max-width: 100%;
        margin: 30px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    #reviews-container {
        margin-top:50px;
        border-color: black;
        border-style: solid;
        background-color:white;
        padding-left: 20px;

    }
    
    .review {
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
    }
    
    .review p {
        margin: 0;
    }
    
    form {
        margin-top: 20px;
        padding-left: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    .button{
       display: flex;
       margin-top: auto;
       margin-bottom: auto;
    }
    .buttonn{
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 20px;
    }
    #form{
        border-color: black;
        border-style: solid;

    }
    .containerr{
        /* text-align: center; */
        margin-left: auto;
         margin-right: auto;
        /* align-items: center;
        justify-content: center;  */


    }
    /* ul{
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        align-items: center;
        justify-content: center;
    } */
    
</style>
    

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar bg-info">
        <div class="containerr">

            <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse text-capitalize" id="responsive">


                    <!-------------Left nav-------------->
                    <ul class="navbar-nav ">
                    <li class="nav-item active"><a href="#reservation" class="nav-link">Reservation</a>

                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>

                            <div class="dropdown-menu border-0">
                                <a href="#menu "class="dropdown-item">menu: Veg</a>
                                <a href="#menu "class="dropdown-item">menu: Non-veg</a>
                                <a href="#menu "class="dropdown-item">menu: Drinks</a>


                            </div>
                        
                        


                    
                    <!--------------------Right Nav-->

                    <!-- <ul class="navbar-nav ml-auto"> -->
                    <li class="nav-item active"><a href="#cart" class="nav-link " >Add to cart</a>

                            <li class="nav-item active"><a href="#review" class="nav-link">Reviews</a>
                                <li class="nav-item active"><a href="#contact" class="nav-link " >Contact</a>


                    </ul>




                </div>


        </div>



    </nav>
    <!-- <script>document.addEventListener('DOMContentLoaded', fetchReviews);

        function fetchReviews() {
            const reviewsContainer = document.getElementById('reviews-container');
            // Fetch reviews from the server (you'll need to implement this endpoint)
            fetch('/api/reviews')
                .then(response => response.json())
                .then(reviews => {
                    reviewsContainer.innerHTML = '';
                    reviews.forEach(review => {
                        const reviewElement = document.createElement('div');
                        reviewElement.className = 'review';
                        reviewElement.innerHTML = `<p><strong>${review.namess}</strong> - Rating: ${review.rating}</p>
                                                   <p>${review.comments}</p>`;
                        reviewsContainer.appendChild(reviewElement);
                    });
                })
                .catch(error => console.error('Error fetching reviews:', error));
        }
        
        function submitReview() {
            const name = document.getElementById('namess').value;
            const rating = document.getElementById('rating').value;
            const comment = document.getElementById('comments').value;
        
            // Validate the input (add more validation if needed)
        
            const reviewData = { namess, rating, comments };
        
            // Send the review to the server (you'll need to implement this endpoint)
            fetch('/api/reviews', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(reviewData),
            })
            .then(response => response.json())
            .then(() => {
                // Clear the form and fetch updated reviews
                document.getElementById('namess').value = '';
                document.getElementById('rating').value = '';
                document.getElementById('comments').value = '';
                fetchReviews();
            })
            .catch(error => console.error('Error submitting review:', error));
        }
        </script> -->
    
     <!----------------------Online Reservation------------->
<h2 class="mt-5 text-center">About this catrer</h2>
     <p class="">Caters prides itself on not only delivering the most delectable cuisine but also offering an exceptionally supportive staff. Our team, available 24/7, goes beyond 
        culinary excellence, ensuring every event is a seamless experience. From menu customization to attentive service, Caters creates unforgettable moments with a perfect blend of flavor and hospitality.At Caters, we believe in providing more than just exquisite dishes; our highly supportive staff is dedicated to making your event truly special. With 24/7 assistance, our team ensures every detail is attended to, from menu planning to on-site coordination. Experience unparalleled culinary delights and impeccable service for unforgettable occasions.
    </p>




    

     <section id="reservation" class="Reserv padding" style="background-color:#F0F0F0">
        

                            
        <div class="container">
            

            <div class="row">

                <div class="col-6 ">
                    <div class="reserve-title text-center">
                        <h3 class="my-4">Make Online Reservation</h3>
                        <p>Enter Details:-</p>
            

                    </div>

                


                <div class="col-sm-6 col-xs-12 mx-auto text-center ">
                    <div class="reserv-form">

                        <form onsubmit="return order()">
                            <div class="box"><i class='bx bx-user'></i> <input type="text" name="Full name" id="full name" class="form-control mb-4 form-control-lg " placeholder="Full name" required></div>
                            <div class="box"><i class='bx bx-phone' ></i><input type="number" name="Full name" id="full name" class="form-control mb-4 form-control-lg " placeholder="Phone number" required></div>
                            <div class="box"><i class='bx bx-envelope'></i><input type="email" name="Full name" id="full name" class="form-control mb-4 form-control-lg  " placeholder="E-mail address" required></div>
                            
                           
                
                            <div class="box"><i class='bx bxs-group'></i><select name="select" id="select-option" class="custom-select custom-select-lg mb-4 " required>
                            <option value="1">100-200 Persons</option>
                            <option value="2">200-500 Persons</option>
                            <option value="3">500-1000 Persons</option>
                            <option value="3">Large number</option>

                        </select></div>


                        <div class="box"><i class='bx bxs-checkbox-minus' ></i><input type="date" name="date" id="date" class="form-control form-control-lg mb-4 " placeholder="Date of event" required></div>
                        <div class="box"><i class='bx bx-time' ></i><input type="time" name="date" id="date" class="form-control form-control-lg mb-4 " placeholder="Time" required></div>
                        <div class="box"><i class='bx bx-current-location' ></i><input type="text" name="date" id="date" class="form-control form-control-lg mb-4 " placeholder="Your Address" required></div>

                        
                        <button  type="submit"  class="btn btn-outline-warning btn-lg mx-auto d-block" >RESERVE</button>


                    </form>



                    </div>


                </div></div>
                <div class="gallery padding col-6" id="gallery">

                    <div class="container" id="gallery">

                        <div class="row mb-4 ">
                            <div class="col-12 gallery-top">
                                <div class="gallery-title text-center">
                                    <h3>Our Gallery</h3>
                                    <p>Here are some memories that we have organized till now.. </p>

                                </div>

                            </div>

                            <div class=" col-lg-4 col-md-4 col-sm-4 ">
                                <img src="food2.jpg" alt="" class="img-fluid mb-2">
                                <img src="food1.jpg" alt="" class="img-fluid mb-2">
                              <img src="food3.jpg" alt="" class="img-fluid mb-2" >

                               


                            </div>
                            <div class=" col-lg-4 col-md-4 col-sm-4 ">
                                <img src="food3.jpg" alt="" class="img-fluid mb-2">
                                 <img src="food2.jpg" alt="" class="img-fluid mb-2">
                                  <img src="food1.jpg" alt="" class="img-fluid mb-2" >

                                
 

                             </div>
                             <div class=" col-lg-4 col-md-4 col-sm-4 ">
                                <img src="food2.jpg" alt="" class="img-fluid mb-2">
                                 <img src="food1.jpg" alt="" class="img-fluid mb-2">
                                  <img src="food3.jpg" alt="" class="img-fluid mb-2" >

                                
 

                             </div>
                            
                            </div>

            




                        </div>

                    </div>

                   </div>
            
    </section>


                        <!-- menu -->
                        <div class="container bg-dark text-warning" id="menu">
                            <div class="row">
                                <div class="col-12 text-center padding">
                                    <h4 class="text-center text-warning bg-dark font-weight-bold ">Our Menu</h4>
                                </div>
                            </div>
                        
                
                        <div class="container">
                        <div id="acordin">
                
                            <div class="row">
                                    <div class="col-12 text-center menu-link">
                                        <!-- <button id="veg" onclick="veg()">hiiiii</button> -->
                                        <span class="text-warning ">Click here-></span>  
                                            <a href="#menucarousel" data-slide-to="0"  class="btn btn-lg bg-success" id="main">Veg</a>
                                            <a href="#menucarousel" data-slide-to="1"  class="btn btn-lg bg-danger">Non-Veg</a>
                                            <a href="#menucarousel" data-slide-to="2"  class="btn btn-lg bg-info">Drinks</a>
                                            <!-- <a href="#collapse4" data-toggle="collapse" class="btn btn-lg">Drinks</a> -->
                        
                                        </div>
                            </div>
                            <div id="menucarousel" class="carousel slide col-lg-7 col-sm-12  mx-auto " data-ride="carousel" >
                                <!-- <div class="row">
                                    <div class="col-8 text-center mx-auto"> -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active text-center">
                                            <!-- <div class="carousely" >
                                                    <div class="carousel-cellx"> -->
                                                        <!-- <div class="container"> -->
                                                            <!-- <div class="row"> -->
                                                                <!-- <div class="col-12 mt-4"  > -->
                                                                    <p  class="lead text-white " >Veg</p>
                                                                    <ol class="ml-5"><li> Spring Rolls - $6.99</li> 
                                                                        <li>Caprese Salad - $8.99</li>
                                                                        <li>Mushroom Risotto - $14.99 </li>
                                                                        <li>Vegetable Stir-Fry - $12.99    </li>                                                    
                                                                        <li>Margherita Pizza - $11.99 </li>
                                                                        <li>Veggie Burger - $10.99 </li>
                                                                        <li>Pasta Primavera - $13.99 </li>
                                                                        <li>Paneer Tikka - $15.99</li>
                                                                        <li>Vegetable Biryani - $14.99</li>
                                                                        <li>Hummus and Pita - $7.99</li>
                                                                        <li>Quinoa and Roasted Vegetable Salad - $11.99</li>
                                                                        <li>Vegetable Pad Thai - $12.99</li>
                                                                        <li>Eggplant Parmesan - $13.99</li>
                                                                        <li>Garden Vegetable Soup - $5.99</li></ol>
                                                                        
                
                                                                </div>
                
                                                           
                                                    <!-- <div class="carousel-cellx">
                                                            <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-12 mt-4" > -->
                                                                            <div class="carousel-item text-center">
                
                                                                            <p class="lead text-white ">Non-veg</p><ol class="ml-5">
                                                                                <li>Chicken Caesar Salad - $10.99</li>
                                                                                <li>Beef and Broccoli Stir-Fry - $14.99</li>
                                                                                <li>Shrimp Scampi - $16.99</li>
                                                                                <li>Steak Fajitas - $18.99</li>
                                                                                <li>Grilled Salmon - $15.99</li>
                                                                                <li>Spaghetti Carbonara with Bacon - $13.99</li>
                                                                                <li>Butter Chicken - $16.99</li>
                                                                                <li>Lamb Kebabs - $17.99</li>
                                                                                <li>Seafood Paella - $19.99</li>
                                                                                <li>Bacon-Wrapped Scallops - $12.99</li>
                                                                                <li>Pork Tenderloin - $14.99</li>
                                                                                <li>Lobster Bisque - $9.99</li>
                                                                                <li>Crab Cakes - $14.99</li>
                                                                                <li>Beef Stroganoff - $15.99</li>
                                                                            </ol>
                                                                            
                                                                                
                                                                        </div>
                                                                    
                                                    <!-- <div class="carousel-cellx">
                                                            <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-12 mt-4"> -->
                                                                             <div class="carousel-item text-center">
                                                                                <p class="lead text-white">Drinks</p>
                                                                                <ol class="ml-5" id="drink-list">
                                                                                    <!-- Display a limited number of items initially -->
                                                                                    <li>Caprese Salad - $8.99</li>
                                                                                    <li>Mushroom Risotto - $14.99</li>
                                                                                    <li>Chicken Caesar Salad - $10.99</li>
                                                                                        <li>Beef and Broccoli Stir-Fry - $14.99</li>
                                                                                        <li>Shrimp Scampi - $16.99</li>
                                                                                        <li>Margherita Pizza - $11.99</li>
                                                                                        <li>Veggie Burger - $10.99</li>
                                                                                        <li>Pasta Primavera - $13.99</li>
                                                                                        <li>Paneer Tikka - $15.99</li>
                                                                                    <!-- Add more items here as needed -->
                                                                                </ol>
                                                                            
                                                                                <button id="view-more-btn" class="btn btn-primary" onclick="viewMore()">View More</button>
                                                                            </div>
                                                                            
                                                                            <script>
                                                                                // JavaScript function to handle "View More" button
                                                                                function viewMore() {
                                                                                    const drinkList = document.getElementById('drink-list');
                                                                            
                                                                                    // Add more items to the list
                                                                                    drinkList.innerHTML += `
                                                                                        <li>Vegetable Stir-Fry - $12.99</li>
                                                                                        <li>Vegetable Biryani - $14.99</li>
                                                                                                                            <li>Hummus and Pita - $7.99</li>
                                                                                                                            <li>Quinoa and Roasted Vegetable Salad - $11.99</li>
                                                                                                                            <li>Vegetable Pad Thai - $12.99</li>
                                                                                                                            <li>Eggplant Parmesan - $13.99</li>
                                                                                                                           
                                                                                        
                                                                                        <!-- Add more items as needed -->
                                                                                    `;
                                                                            
                                                                                    // Hide the "View More" button if all items are displayed
                                                                                    const viewMoreBtn = document.getElementById('view-more-btn');
                                                                                    viewMoreBtn.style.display = 'none';
                                                                                }
                                                                            </script> 
                
                                                            <!-- <button class="flickity-prev-next-button previous m-5" type="button" aria-label="previous"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path></svg></button> -->
                                                            <a class="carousel-control-prev" href="#menucarousel" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#menucarousel" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                
                                                    </div>
                        </div>
                        </div>
                            </div>
                            </div>
                            <!-- cart -->
<!-- cart -->
                         <div style="background-color:#F0F0F0">
                            <h4 class="text-center text-success font-weight-bold" id="cart">Order Now</h1>
                                <p class="text-center text-danger font-weight-bold">Add on some more food items in our your list now...</p>
                            <div class="menu" >
                                <div class="menu-section col-10 col-lg-4 col-sm-8 col-md-7 mx-auto">
                                    <h2>Veg</h2>
                                    <div class="menu-item">
                                        <h2>Spring Rolls</h2>
                                        <p>Price: $6.99</p>
                                        <div class="add-to-cart" data-name="Spring Rolls" data-price="6.99">
                                            <button class="minus">-</button>
                                            <span class="quantity">0</span>
                                            <button class="plus">+</button>
                                            <button class="add-to-cart-button">Add to Cart</button>
                                        </div>
                                    </div>
                        
                                    <div class="menu-item">
                                        <h2>Caprese Salad</h2>
                                        <p>Price: $8.99</p>
                                        <div class="add-to-cart" data-name="Caprese Salad" data-price="8.99">
                                            <button class="minus">-</button>
                                            <span class="quantity">0</span>
                                            <button class="plus">+</button>
                                            <button class="add-to-cart-button">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="menu-section col-10 col-lg-4 col-sm-8 col-md-7 mx-auto">
                                    <h2>Non-Veg</h2>
                                    <div class="menu-item">
                                        <h2>Chicken Alfredo</h2>
                                        <p>Price: $14.99</p>
                                        <div class="add-to-cart" data-name="Chicken Alfredo" data-price="14.99">
                                            <button class="minus">-</button>
                                            <span class="quantity">0</span>
                                            <button class="plus">+</button>
                                            <button class="add-to-cart-button">Add to Cart</button>
                                        </div>
                                    </div>
                        
                                    <div class="menu-item">
                                        <h2>Beef Burger</h2>
                                        <p>Price: $11.99</p>
                                        <div class="add-to-cart" data-name="Beef Burger" data-price="11.99">
                                            <button class="minus">-</button>
                                            <span class="quantity">0</span>
                                            <button class="plus">+</button>
                                            <button class="add-to-cart-button">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="menu-section col-10 col-lg-4 col-sm-8 col-md-7 mx-auto">
                                    <h2>Drinks</h2>
                                    <div class="menu-item">
                                        <h2>Cola</h2>
                                        <p>Price: $2.99</p>
                                        <div class="add-to-cart" data-name="Cola" data-price="2.99">
                                            <button class="minus">-</button>
                                            <span class="quantity">0</span>
                                            <button class="plus">+</button>
                                            <button class="add-to-cart-button">Add to Cart</button>
                                        </div>
                                    </div>
                        
                                    <div class="menu-item">
                                        <h2>Orange Juice</h2>
                                        <p>Price: $3.99</p>
                                        <div class="add-to-cart" data-name="Orange Juice" data-price="3.99">
                                            <button class="minus">-</button>
                                            <span class="quantity">0</span>
                                            <button class="plus">+</button>
                                            <button class="add-to-cart-button">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="cart-container">
                                <h2>Cart</h2>
                                <ul id="cart"></ul>
                                <p class="total">Total: $<span id="total">0</span></p>
                                <button class="buy-button" style="display: none">Buy</button>
                            </div>
                                                                            </div>
<!-- end of cart -->

<!-- reviews -->

<div class="container mt-0 p-0" id="review">
        <div id="reviews-container">
        <h1 class="text-center text-danger font-weight-bold" >Reviews</h1>

            <?php include 'fetch_reviews.php'; ?>
            </div>

        <!-- </div> -->
        <div id="form">
        <h2 class="text-center text-danger font-weight-bold">Submit Your Review</h2>
        <form action="submit_review.php" method="post" onsubmit="review()"  >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" min="1" max="5" name="rating" required>
            <label for="comment">Review:</label>
            <div class="button"><textarea id="comment" name="comment" required></textarea>
          <div class="buttonn"><button type="submit" >Submit Review</button></div></div>
        </form>
        </div>
        
    </div>

    <!-- end of review section -->

    <!-- contact -->
    <div class="col-sm-4 my-4 col-xs-12" id="contact">


                                            <div class="footer-contact  mt-5">

                                                    <p class="text-danger font-weight-bold"> 
                                                            Contact us</p>
                                                            <!-- <i class="fa-solid fa-envelope fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;" ></i> -->


                                                <p><i class="fas fa-map-marker"></i> 1234 Altschul, New York, NY 10027-0000</p>
                                                <p> <i class="fas fa-phone-volume"></i>   +1 987 654 3210</p>
                                                <p> <i class="fas fa-envelope"></i>  admin@domain.com</p>



                                            </div>

                                            </div>


                        
                            <script>
                                function order(){
                                    alert("Thank you!!. Your booking has been confirmed. We will notify you more info of payments and other things via email")}

                                    function review(){
                                    alert("Review submit successfully.Thanks!!")}
   


                                // JavaScript for adding items to the cart
                                const addButtons = document.querySelectorAll('.plus');
                                const minusButtons = document.querySelectorAll('.minus');
                                const quantityElements = document.querySelectorAll('.quantity');
                                const cartButtons = document.querySelectorAll('.add-to-cart-button');
                                const cart = document.getElementById('cart');
                                const total = document.getElementById('total');
                                const buyButton = document.querySelector('.buy-button');
                        
                                let cartItems = [];
                        
                                addButtons.forEach((button, index) => {
                                    button.addEventListener('click', () => {
                                        incrementQuantity(index);
                                    });
                                });
                        
                                minusButtons.forEach((button, index) => {
                                    button.addEventListener('click', () => {
                                        decrementQuantity(index);
                                    });
                                });
                        
                                cartButtons.forEach((button, index) => {
                                    button.addEventListener('click', () => {
                                        const name = button.parentElement.getAttribute('data-name');
                                        const price = parseFloat(button.parentElement.getAttribute('data-price'));
                                        const quantity = parseInt(quantityElements[index].textContent);
                        
                                        if (quantity > 0) {
                                            const existingItem = cartItems.find(item => item.name === name);
                        
                                            if (existingItem) {
                                                existingItem.quantity += quantity;
                                            } else {
                                                cartItems.push({ name, price, quantity });
                                            }
                        
                                            quantityElements[index].textContent = '0';
                                            updateCart();
                                        }
                                    });
                                });
                        
                                function incrementQuantity(index) {
                                    const quantity = parseInt(quantityElements[index].textContent);
                                    quantityElements[index].textContent = quantity + 1;
                                }
                        
                                function decrementQuantity(index) {
                                    const quantity = parseInt(quantityElements[index].textContent);
                                    if (quantity > 0) {
                                        quantityElements[index].textContent = quantity - 1;
                                    }
                                }
                        
                                function updateCart() {
                                    cart.innerHTML = '';
                                    let cartTotal = 0;
                        
                                    cartItems.forEach(item => {
                                        const listItem = document.createElement('li');
                                        listItem.textContent = `${item.name} - Quantity: ${item.quantity} - $${(item.price * item.quantity).toFixed(2)}`;
                                        cart.appendChild(listItem);
                                        cartTotal += item.price * item.quantity;
                                    });
                        
                                    total.textContent = cartTotal.toFixed(2);
                        
                                    if (cartItems.length > 0) {
                                        buyButton.style.display = 'block';
                                    } else {
                                        buyButton.style.display = 'none';
                                    }
                                    
                            buyButton.addEventListener('click', () => {
                                if (cartItems.length > 0) {
                                    // Simulate a purchase by showing an alert message
                                    const totalAmount = parseFloat(total.textContent);
                                    alert(`Total amount: $${totalAmount}\nThank you for your purchase!. We will communicate to you via your given contact details soon for more info`);
                                    
                                    // Reset the cart and hide the "Buy" button
                                    cartItems = [];
                                    updateCart();
                                }
                            });
                                }
                            </script>
                        
</body>
</html>

