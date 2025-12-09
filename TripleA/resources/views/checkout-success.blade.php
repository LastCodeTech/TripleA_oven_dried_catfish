<!-- resources/views/checkout-success.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful! 🎉</title>
    <style>
        body { font-family: Arial; text-align: center; margin: 100px auto; max-width: 500px; }
        .success-box { background: #d4edda; border: 2px solid #4CAF50; padding: 40px; border-radius: 15px; }
        .icon { font-size: 60px; }
        .order-details {background: white;padding: 20px; margin: 20px 0; border-radius: 10px; text-align: left; }
        .btn { display: inline-block; background: #4CAF50; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="success-box">
        <div class="icon">✅</div>
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase! We've received your payment.</p>
        
        @if(session('order'))
            <div class="order-details">
                <h3>Order Details:</h3>
                <p><strong>Order Number:</strong> {{ session('order')->order_number }}</p>
                <p><strong>Amount Paid:</strong> ₦{{ number_format(session('order')->amount, 2) }}</p>
                <p><strong>Status:</strong> <span style="color: green;">{{ session('order')->status }}</span></p>
                <p><strong>Payment Reference:</strong> {{ session('order')->payment_reference }}</p>
                <p><strong>Date:</strong> {{ session('order')->paid_at->format('F j, Y, g:i a') }}</p>
            </div>
        @endif
        
        <a href="/checkout" class="btn">Buy Something Else</a>
        <a href="/" class="btn" style="background: #007bff;">Go Home</a>
    </div>
</body>
</html>