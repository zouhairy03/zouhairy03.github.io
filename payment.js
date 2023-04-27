// function updateTable() {
//     // Get the values from the form
//     const shippingFee = parseFloat(document.getElementById('shipping-fee-input').value);
//     const discount = parseFloat(document.getElementById('discount-input').value);
//     const priceTotal = parseFloat(document.getElementById('price-total-input').value);
  
//     // Calculate the new values
//     const total = priceTotal + shippingFee - discount;
  
//     // Update the table with the new values
//     document.getElementById('shipping-fee').textContent = `$${shippingFee.toFixed(2)}`;
//     document.getElementById('discount').textContent = `-$${discount.toFixed(2)}`;
//     document.getElementById('price-total').textContent = `$${priceTotal.toFixed(2)}`;
//     document.getElementById('total').textContent = `$${total.toFixed(2)}`;
//   }
  
//   // Call the function when the form is submitted
//   document.querySelector('.form').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent the form from submitting
//     updateTable(); // Update the table
//   });
//   const shippingFeeInput = document.getElementById("shipping-fee-input");
//   const discountInput = document.getElementById("discount-input");
//   const priceTotalInput = document.getElementById("price-total-input");
//   const totalElement = document.getElementById("total");
  
//   function calculateTotal() {
//     const shippingFee = parseFloat(shippingFeeInput.value);
//     const discount = parseFloat(discountInput.value);
//     const priceTotal = parseFloat(priceTotalInput.value);
//     const total = shippingFee + priceTotal - discount/100 * priceTotal;
//     totalElement.textContent = "$" + total.toFixed(2);
//   }
  
//   shippingFeeInput.addEventListener("input", calculateTotal);
//   discountInput.addEventListener("input", calculateTotal);
//   priceTotalInput.addEventListener("input", calculateTotal);
  
//   calculateTotal(); // Initial calculation on page load
  
  