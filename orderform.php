<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="orderform.css">
<body>
    <!-- Logo section -->
    <header class="header">
        <div class="logo-container">
            <a href="#" class="logo-link">
                <img src="logo.png" alt="logo" class="logo-pic">
                <div class="logo">Kian's Friendly Shop</div>
            </a>
        </div>
    </header>

    <div class="container">
        <h2>Order Details</h2>
        <div class="product-details">
            <img id="product-image" src="" alt="Product Image">
            <div class="product-info">
                <h3 id="product-name"></h3>
                <b id="product-price"></b><br>
                <p id="product-description"></p>
            </div>
        </div>
        <form class="order-form">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" required>
    
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
    
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
    
            <div class="total-price-container">
                <p>Total Price:</p>
                <p id="total-price">₱ 0.00</p>
            </div>
    
            <p class="payment-note">Payment Method: Cash on Delivery (COD) only</p>
            <button type="submit">Place Order</button>
            <a href="landingpage.php" class="go-back-link">&larr; Go Back to Home</a>
        </form>

        <!-- Receipt Container (Initially hidden) -->
        <div id="receipt" class="receipt">
            <div class="receipt-content">

            <div class="title-container">
                <img src="logo.png" alt="logo" class="title-pic">
                <div class="title-logo">Kian's Friendly Shop</div>
            </div>
       
                <h2>Order Receipt</h2>
                <P>Thank you for ordering!</p>
                <div class="receipt-details">
                    <p><strong>Product:</strong> <span id="receipt-product-name"></span></p>
                    <p><strong>Description:</strong> <span id="receipt-product-description"></span></p>
                    <p><strong>Name:</strong> <span id="receipt-name"></span></p>
                    <p><strong>Email:</strong> <span id="receipt-email"></span></p>
                    <p><strong>Phone Number:</strong> <span id="receipt-phone"></span></p>
                    <p><strong>Address:</strong> <span id="receipt-address"></span></p>
                    <p><strong>Payment Method:</strong> Cash on Delivery (COD) only</p>
                    <p><strong>Quantity:</strong> <span id="receipt-quantity"></span></p>
                    <p><strong>Price:</strong> <span id="receipt-product-price"></span></p>
                    <p class="tPrice">Total Price:<strong></strong> <span id="receipt-total-price"></span></p>
                </div>
                <p class="order-success">Your order has been placed successfully!</p>
                <a href="landingpage.php" class="go-back-link">&larr; Go Back to Home</a>
            </div>
        </div>

    </div>

    <!-- Link your JavaScript file -->
    <script src="jsOrderForm.js"></script>
</body>
</html>