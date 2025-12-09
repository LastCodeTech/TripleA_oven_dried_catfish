<!DOCTYPE html>
<html>
<head>
    <title>Payment Failed 😢</title>
    <style>
        body { font-family: Arial; text-align: center; margin: 100px auto; max-width: 500px; }
        .failed-box { background: #f8d7da; border: 2px solid #dc3545; padding: 40px; border-radius: 15px; }
        .icon { font-size: 60px; }
        .btn { display: inline-block; background: #dc3545; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin: 10px; }
    </style>
</head>
<body>
    <div class="failed-box">
        <div class="icon">❌</div>
        <h1>Payment Failed</h1>
        
        @if(session('error'))
            <p><strong>Reason:</strong> {{ session('error') }}</p>
        @else
            <p>Something went wrong with your payment. Don't worry, you haven't been charged.</p>
        @endif
        
        <div style="margin-top: 30px;">
            <a href="/checkout" class="btn">Try Again</a>
            <a href="/" class="btn" style="background: #6c757d;">Go Home</a>
        </div>
        
        <p style="margin-top: 30px; font-size: 14px; color: #666;">
            Need help? Contact support at: support@simpleshop.com
        </p>
    </div>
</body>
</html>