<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CheckOut Page</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <form action="paymentcheck.php" method="post">
        <div class="mainscreen">
            <div class="card">
                <div class="leftside">
                    <img src="logo.jpeg" class="product" alt="Shoes"/>
                </div>
                <div class="rightside">
                    <h1>CheckOut</h1>
                    <h2>Payment Information</h2>
                    <p>Cardholder Name</p>
                    <input type="text" class="inputbox" name="name" required />
                    <p>Card Number</p>
                    <input type="number" class="inputbox" name="card_number"  min="0" id="card_number" required />
                    <p>Email</p>
                    <input type="email" class="inputbox" name="email" required />
                    <p>Card Type</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                        <option value="">--Select a Card Type--</option>
                        <option value="Visa">Visa</option>
                        <option value="RuPay">RuPay</option>
                        <option value="MasterCard">MasterCard</option>
                    </select>
                    <div class="expcvv">
                        <p class="expcvv_text">Expiry</p>
                        <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
                        <p class="expcvv_text2">CVV</p>
                        <input type="password" class="inputbox" name="cvv" id="cvv" required />
                    </div>
                    <p></p>
                    <button type="submit" id="checkout-btn" name="submit" class="button">CheckOut</button>
                    <a href="shoping.php" class="backBtn" style="text-align:center;margin-left:200px">Go Back to Shop</a>
                </div>
            </div>
        </div>
    </form>

    <!-- <script>
      // Get the button and loader elements
const checkoutBtn = document.getElementById('checkout-btn');
const loader = document.createElement('div');
loader.classList.add('loader');

// Add the loader element to the button
checkoutBtn.appendChild(loader);

// Handle the button click event
checkoutBtn.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the form from submitting
  
  // Show the loader and disable the button
  loader.style.display = 'inline-block';
  checkoutBtn.disabled = true;
  
  // Wait for 4 seconds
  setTimeout(function() {
    // Hide the loader and show the success message
    loader.style.display = 'none';
    checkoutBtn.innerHTML = 'Success';
    
    // Wait for 3 seconds
    setTimeout(function() {
      // Reset the button to its original state
      checkoutBtn.innerHTML = 'CheckOut';
      checkoutBtn.disabled = false;
    }, 2000);
  }, 2000);
});
// header("location: shoping.php");

    </script> -->
      
</body>
</html>
