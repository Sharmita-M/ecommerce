<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Razorpay Test Pay Button</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-header bg-primary text-white text-center rounded-top-4">
            <h4 class="mb-0">💳 Razorpay Test Payment</h4>
          </div>
          
          <div class="card-body p-4">
            
    
            <div class="mb-3">
              <label for="amountInr" class="form-label fw-semibold">Amount (INR)</label>
              <input id="amountInr" type="number" min="1" value="<?php echo isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : ''; ?>" disabled class="form-control form-control-lg">
            </div>

            <!-- Pay button -->
            <div class="d-grid">
              <button id="payBtn" class="btn btn-primary btn-lg">
                Pay with Razorpay
              </button>
            </div>
         <div class="card-footer text-center small text-muted">
            <a href="checkout.php">return to checkout</a>
          </div>

          </div>
          <div class="card-footer text-center small text-muted">
            🔒 Your payment is secure
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


  <!-- Razorpay Checkout script -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    document.getElementById('payBtn').addEventListener('click', function () {
      // amount in paisa (₹1 = 100 paisa)
      const inr = parseInt(document.getElementById('amountInr').value || '0', 10);
      const amountPaisa = Math.max(1, inr) * 100;

  const options = {
        key: "rzp_test_RHkV1el3P3LVmQ",            // ✅ Test Key ID (OK on frontend)
        amount: amountPaisa,                       // amount in paisa
        currency: "INR",
        name: "Techzex Software Pvt. Ltd.",
        description: "Test Transaction",
        image: "https://cdn.razorpay.com/logos/9Q8tZyKfVbzu6v_small.png", // optional
        // Normally you should create an order on your server and pass the 'order_id' here:
        // order_id: "order_XXXXXXXXXXXXXX",
        prefill: {                                 // optional
          name: "John Doe",
          email: "john.doe@example.com",
          contact: "9999999999"
        },
        notes: { purpose: "Test payment" },        // optional
        theme: { color: "#3399cc" },               // optional
        handler: function (response) {
          // This runs on successful payment
          // response.razorpay_payment_id
          // response.razorpay_order_id (if supplied)
          // response.razorpay_signature (if supplied)
          //alert("Payment successful!\nPayment ID: " + response.razorpay_payment_id);
          window.location.href = 'sucess.php?payment_id=' + response.razorpay_payment_id;
          // ⚠ IMPORTANT: For real usage, POST these values to your server and
          // verify the signature using your Key Secret on the backend.
        },
 modal: {
          ondismiss: function () {
            console.log("Checkout form closed");
          }
        }
      };

      const rzp = new Razorpay(options);
      rzp.open();
    });
  </script>

</body>
</html>












<!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_RHkV1el3P3LVmQ", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. 
    "currency": "INR",
    "name": "Acme Corp", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_9A33XWu170gUtm", // This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "ecommerce", //your customer's name
        "email": "shreya@gmail.com",
        "contact": "1234567890" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script> -->