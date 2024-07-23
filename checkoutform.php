<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link rel="stylesheet" href="formcheckout.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo-container">
            <a href="#" class="logo-link">
                <img src="logo.png" alt="logo" class="logo-pic">
                <div class="logo">Kian's Friendly Shop</div>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <h2>Checkout Items</h2>

        <div id="orderItems" class="order-items">
            <!-- This section will be populated dynamically using JavaScript -->
        </div>

        <form class="checkout-form">
            <h3>Delivery Details</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <div class="total-price-container">
                <p id="total-price">Total Price: ₱ 0.00</p>
            </div>

            <p class="payment-note">Payment Method: Cash on Delivery (COD) only</p>

            <button type="submit">Checkout</button>
            <a href="landingpage.php" class="go-back-link">&larr; Go Back to Home</a>
        </form>

        <!-- Receipt Container (Initially hidden) -->
        <div id="receipt" class="receipt">
            <div class="receipt-content">
    
        <div class="title-container">
                <img src="logo.png" alt="logo" class="title-pic">
                <div class="title-logo">Kian's Friendly Shop</div>
        </div>

                <h2>Checkout Receipt</h2>
                <div class="receipt-details">
                    <p><strong>Name:</strong> <span id="receiptName"></span></p>
                    <p><strong>Email:</strong> <span id="receiptEmail"></span></p>
                    <p><strong>Phone Number:</strong> <span id="receiptPhone"></span></p>
                    <p><strong>Address:</strong> <span id="receiptAddress"></span></p>
                    <p><strong>Payment Method:</strong><p> Cash on Delivery (COD) only</p><br>
                    <div id="receiptItems"></div>
                    <p><strong>Total Price:</strong> <span id="receiptTotalPrice"></span></p>
                </div>
                <p class="order-success">Your checkout has been placed successfully!</p>
                <a href="landingpage.php" class="go-back-link">&larr; Go Back to Home</a>
            </div>
        </div>

    <!-- JavaScript -->
    <script src="jsCheckoutForm.js"></script>
</body>
</html>