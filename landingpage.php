<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kian's Friendly Shop</title>

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="style.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <!-- Header section with navigation menu -->
    <header>
        <a href="page.html" class="logo-link">
            <img src="logo.png" alt="logo" class="logo-pic">
            <div class="logo">Kian's Friendly Shop</div>
        </a>
        <input type="checkbox" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="landingpage.php" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About Us</a>
            <a href="#contact" class="nav-link">Contact</a>
            <a href="#cart" class="nav-link">Cart</a>
            <a href="Login.php" id="signOutButton" class="nav-link"><i class ="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>

    <div class="carousel">
        <div class="carousel-slide" id="slide1"></div>
        <div class="carousel-slide" id="slide2"></div>
        <div class="carousel-slide" id="slide3"></div>
        <div class="carousel-slide" id="slide4"></div>
        <a href="product.html" class="start-order-button">Start Order</a>
    </div>

    <!-- Products section with categories -->
    <section id="products">
        <div class="product-categories">
            <h2>Product Categories</h2>
            <div class="category-wrapper">
                <div class="category-buttons">
                    <!-- Button to view all items -->
                    <button onclick="showAllItems()" class="view-all-btn">View All Items</button>

                    <button onclick="filterProducts('Paper Products')">
                        <i class="fa-solid fa-copy"></i> Papers
                    </button>

                    <button onclick="filterProducts('Pens and Writing Instruments')">
                        <i class="fa-solid fa-pen"></i> Pens
                    </button>

                    <button onclick="filterProducts('Notebooks and Writing Pads')">
                        <i class="fa-solid fa-book"></i> Notebooks
                    </button>

                    <button onclick="filterProducts('Art Materials')">
                        <i class="fa-solid fa-palette"></i> Art Materials
                    </button>

                    <button onclick="filterProducts('Customize')">
                        <i class="fa-solid fa-mug-hot"></i> Customize
                    </button>

                    <button onclick="filterProducts('Other Items')">
                        <i class="fa-solid fa-ellipsis"></i> Other Items
                    </button>
                </div>

                <div class="category-list">
                <!-- Pens and Writing Instruments -->
                <div class="category-item" data-category="Pens and Writing Instruments">
                    <div class="product-image">
                        <img src="Items/DongABallpen.jpg" alt="Dong A ballpen">
                    </div>
                    <h3>Dong A Ballpen</h3>
                    <b class="price">₱ 300.00</b>
                    <p>/ box</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
               
                <div class="category-item" data-category="Pens and Writing Instruments">
                    <div class="product-image">
                        <img src="Items/FlexStickBallpen.jpg" alt="Flex stick ballpen">
                    </div>
                    <h3>Flex Stick Ballpen</h3>
                    <b class="price">₱ 78.00</b>
                    <p>/ dozen</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Pens and Writing Instruments">
                    <div class="product-image">
                        <img src="Items/MongolPencil.jpg" alt="Mongol pencil">
                    </div>
                    <h3>Mongol Pencil</h3>
                    <b class="price">₱ 130.00</b>
                    <p>/ dozen</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Pens and Writing Instruments">
                    <div class="product-image">
                        <img src="Items/PandaBallpen.jpg" alt="Panda ballpen">
                    </div>
                    <h3>Panda Ballpen</h3>
                    <b class="price">₱ 162.00</b>
                    <p>/ box</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Pens and Writing Instruments">
                    <div class="product-image">
                        <img src="Items/PilotPentelPen.jpg" alt="Pilot pentel pen">
                    </div>
                    <h3>Pilot Pentel Pen</h3>
                    <b class="price">₱ 105.00</b>
                    <p>/ 3pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <!-- Paper Products -->
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/Copy&LaserBondPaper.jpg" alt="Copy&laser bond paper">
                    </div>
                    <h3>Copy & Laser Bond Paper</h3>
                    <b class="price">₱ 230.00</b>
                    <p>/ ream</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/CopyOneBandPaper.jpg" alt="Copy one bond paper">
                    </div>
                    <h3>Copy One Bond Paper</h3>
                    <b class="price">₱ 230.00</b>
                    <p>/ ream</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/HardCopyBondPaper.jpg" alt="HardCopy bond paper">
                    </div>
                    <h3>Hard Copy Bond Paper</h3>
                    <b class="price">₱ 240.00</b>
                    <p>/ ream - short</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/OsloPaper.jpg" alt="Oslo paper">
                    </div>
                    <h3>Oslo Paper</h3>
                    <b class="price">₱ 270.00</b>
                    <p>/ ream</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/CrepePaper.jpg" alt="Crepe paper">
                    </div>
                    <h3>Crepe Paper</h3>
                    <b class="price">₱ 80.00</b>
                    <p>/ 10pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/IndexCard1_4.jpg" alt="Index cards">
                    </div>
                    <h3>Index Cards</h3>
                    <b class="price">₱ 45.00</b>
                    <p>/ pack</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/ManilaPaper.jpg" alt="Manila paper">
                    </div>
                    <h3>Manila Paper</h3>
                    <b class="price">₱ 48.00</b>
                    <p>/ dozen</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Paper Products">
                    <div class="product-image">
                        <img src="Items/YellowPad.jpg" alt="Yellow pad paper">
                    </div>
                    <h3>Yellow Pad Paper</h3>
                    <b class="price">₱ 80.00</b>
                    <p>/ pad</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <!-- Notebooks and Writing Pads -->
                
                <div class="category-item" data-category="Notebooks and Writing Pads">
                    <div class="product-image">
                        <img src="Items/ColumnarNotebook.jpg" alt="Columnar notebook">
                    </div>
                    <h3>Columnar Notebook</h3>
                    <b class="price">₱ 50.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Notebooks and Writing Pads">
                    <div class="product-image">
                        <img src="Items/FillerNotebookFocus.jpg" alt="Filler notebook">
                    </div>
                    <h3>Focus Filler Notebook</h3>
                    <b class="price">₱ 100.00</b>
                    <p>/ 10pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
               
                <div class="category-item" data-category="Notebooks and Writing Pads">
                    <div class="product-image">
                        <img src="Items/Notebook.jpg" alt="Notebook">
                    </div>
                    <h3>Spring Leaf Notebook</h3>
                    <b class="price">₱ 390.00</b>
                    <p>/ 10pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Notebooks and Writing Pads">
                    <div class="product-image">
                        <img src="Items/LessonPlanStandard.jpg" alt="Standard lesson plan">
                    </div>
                    <h3>Standard Lesson Plan</h3>
                    <b class="price">₱ 45.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Notebooks and Writing Pads">
                    <div class="product-image">
                        <img src="Items/LessonPlanVictory.jpg" alt="Victory lesson plan">
                    </div>
                    <h3>Victory Lesson Plan Book</h3>
                    <b class="price">₱ 45.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Other Items -->
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/CitizenCalculator.jpg" alt="Citizen calculator">
                    </div>
                    <h3>Citizen Calculator</h3>
                    <b class="price">₱ 200.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/DexinCalculator.jpg" alt="Dexin calculator">
                    </div>
                    <h3>Dexin calculator</h3>
                    <b class="price">₱ 200.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/KaerdaCalculator.jpg" alt="Kaerda calculator">
                    </div>
                    <h3>Kaerda Calculator</h3>
                    <b class="price">₱ 200.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/KKCalculator.jpg" alt="Kaerda calculator">
                    </div>
                    <h3>KK-402 Calculator</h3>
                    <b class="price">₱ 180.00</b>
                    <p>/ 3pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/ClearFolder.jpg" alt="Clear folder">
                    </div>
                    <h3>Clear Folder</h3>
                    <b class="price">₱ 180.00</b>
                    <p>/ dozen -  short</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/ExpandableFolder.jpg" alt="Expandable folder">
                    </div>
                    <h3>Expandable Folder</h3>
                    <b class="price">₱ 216.00</b>
                    <p>/ dozen</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/FileFolder.jpg" alt="File folder">
                    </div>
                    <h3>File Folder</h3>
                    <b class="price">₱ 600.00</b>
                    <p>/ 100pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/SlidingFolder.jpg" alt="Sliding folder">
                    </div>
                    <h3>Morocco Folder</h3>
                    <b class="price">₱ 108.00</b>
                    <p>/ dozen - short</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/PlasticEnvelope.jpg" alt="Plastic envelope">
                    </div>
                    <h3>Plastic Envelope</h3>
                    <b class="price">₱ 250.00</b>
                    <p>/ 25pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/BrownEnvelope.jpg" alt="Brown envelope">
                    </div>
                    <h3>Brown Envelope</h3>
                    <b class="price">₱ 36.00</b>
                    <p>/ dozen</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/CertificateHolder.jpg" alt="Certificate holder">
                    </div>
                    <h3>Certificate Holder</h3>
                    <b class="price">₱ 156.00</b>
                    <p>/ 6pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/Scissor.jpg" alt="Scissors">
                    </div>
                    <h3>Scissor</h3>
                    <b class="price">₱ 14.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <div class="category-item" data-category="Other Items">
                    <div class="product-image">
                        <img src="Items/Efan.jpg" alt="Efan">
                    </div>
                    <h3>Portable Electric Fan</h3>
                    <b class="price">₱ 99.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <!-- Art Materials -->
                <div class="category-item" data-category="Art Materials">
                    <div class="product-image">
                        <img src="Items/AcrylicPaint.jpg" alt="Acrylic paint">
                    </div>
                    <h3>Poster Paint</h3>
                    <b class="price">₱ 30.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                
                <div class="category-item" data-category="Art Materials">
                    <div class="product-image">
                        <img src="Items/Highlighters.jpg" alt="Highlighters">
                    </div>
                    <h3>Highlighters</h3>
                    <b class="price">₱ 138.00</b>
                    <p>/ 6pcs</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Art Materials">
                    <div class="product-image">
                        <img src="Items/OilPastels.jpg" alt="Oil pastels">
                    </div>
                    <h3>Oil Pastels</h3>
                    <b class="price">₱ 55.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Art Materials">
                    <div class="product-image">
                        <img src="Items/PaintTube.jpg" alt="Paint tube">
                    </div>
                    <h3>Paint Acrylic</h3>
                    <b class="price">₱ 39.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Art Materials">
                    <div class="product-image">
                        <img src="Items/WaterColor.jpg" alt="Watercolor">
                    </div>
                    <h3>Focus Watercolor</h3>
                    <b class="price">₱ 45.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>

                <!-- Other Items -->
                <div class="category-item" data-category="Customize">
                    <div class="product-image">
                        <img src="Items/CustomizeMug.jpg" alt="Customize mug">
                    </div>
                    <h3>Magic mug</h3>
                    <b class="price">₱ 135.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="category-item" data-category="Customize">
                    <div class="product-image">
                        <img src="Items/MugB&W.jpg" alt="Mug B&W">
                    </div>
                    <h3>Mug Black & White</h3>
                    <b class="price">₱ 95.00</b>
                    <p>/ pc</p>
                    <div class="button-container">
                        <button class="order-btn">Order Now</button>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Custom Modal -->
    <div id="customModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add to Cart</h2>
            <p id="modalMessage"></p>
            <input type="number" id="modalQuantityInput" value="1" min="1">
            <button id="modalAddToCartBtn">Add to Cart</button>
        </div>
    </div>

    <!-- Notification Box -->
    <div id="notificationBox"></div>    

    <!-- Cart section -->
    <section id="cart">
        <div class="cart-content">
            <h2>Your Cart</h2>
            <div class="cart-summary">
                <h3>Cart Summary</h3>
                <div class="cart-details">
                    <p>Total Items: <span id="totalItems">0</span></p>
                    <p>Total Price: <span id="totalPrice">₱ 0.00</span></p>
                </div>
            </div>
            <div id="cartItems"></div>

            <button id="checkoutButton" disabled>Checkout Selected Items</button>
        </div>
    </section>

    <!-- About Us section -->
    <section id="about">
        <div class="about-content">
            <h2>About Us</h2>
            <p><br><br>Welcome to Kian's Friendly Shop, your one-stop destination for all your school supply needs!
                    Founded with a mission to make school shopping a hassle-free and enjoyable experience,
                    Kian's Friendly Shop offeres a wide range of high-quality, affordable products to help students and educator alike. 
                    <br><br>
                     Kian's Friendly Shop was established by Lanie Perez, an enthusiastic entrepreneur with a passion 
                    for education and a keen eye for quality. Understanding the importance of reliable school supplies in a student's 
                    academic academic journey, the owner set out to create a store where everyone can find everything they need for a 
                    successful school year.
                </p>
                <br><br>
                <h3>"Kian's Friendly Shop, Your one call away friend"</h3>
        </div> 
    </section>

    <!-- Contact section -->
    <section id="contact">
        <div class="contact-content">
            <h2>Contact Us</h2>
        </div>
        
        <div class="contact-icons">
                <p><br><br><i class="fa-solid fa-phone"></i>                                                            0932-227-7845</p>
                <p><i class="fa-brands fa-viber"></i>                                                           0932-227-7845</p>
                <p><i class="fa-brands fa-facebook"></i>                                                            Kian Friendly Shop</p>
                <p><i class="fa-brands fa-facebook-messenger"></i>                                                          Kian Friendly Shop</p>
                <p><i class="fa-solid fa-location-dot"></i>                                                         Door 14 CNJ Pavilion Km. 39 Pulong Buhangin, Santa Maria, Bulacan</p>
            </div>
    </section>

    <!-- Footer section -->
    <footer>
        <div class="footer-container">
            <div class="stay-connected">
                <p>Stay Connected:</p>
                <div class="social-media-icons">
                    <a href="https://www.facebook.com/profile.php?id=100091635424718" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.facebook.com/messages/t/110438055346263" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Kian's Friendly Shop. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Link your JavaScript file -->
    <script src="script.js"></script>
    <script src="addtocart.js"></script>

    <!-- Include Font Awesome script -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>