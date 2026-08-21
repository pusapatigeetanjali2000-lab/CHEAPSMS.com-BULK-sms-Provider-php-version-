<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$userId = $_SESSION['user_id'];
$conn = getDBConnection();

// Get user details
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

// Get demo account details
$stmt = $conn->prepare("SELECT * FROM demo_accounts WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$demoAccount = $stmt->get_result()->fetch_assoc();

if (!$demoAccount) {
    // Create demo account if not exists
    $demoUsername = 'demo_' . $userId . '_' . time();
    $demoPassword = bin2hex(random_bytes(8));
    $demoApiKey = bin2hex(random_bytes(16));
    $expiresAt = date('Y-m-d H:i:s', strtotime('+' . DEMO_ACCOUNT_EXPIRY_DAYS . ' days'));
    
    $stmt = $conn->prepare("INSERT INTO demo_accounts (user_id, demo_username, demo_password, demo_api_key, expires_at) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $userId, $demoUsername, $demoPassword, $demoApiKey, $expiresAt);
    $stmt->execute();
    
    // Fetch again
    $stmt = $conn->prepare("SELECT * FROM demo_accounts WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $demoAccount = $stmt->get_result()->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Demo Account</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .welcome-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .welcome-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }
        
        .welcome-header h1 {
            color: #333;
            font-size: 28px;
        }
        
        .logout-btn {
            padding: 10px 20px;
            background: #ef4444;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }
        
        .logout-btn:hover {
            background: #dc2626;
        }
        
        .demo-credentials {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 12px;
            margin: 20px 0;
        }
        
        .credential-row {
            display: flex;
            margin: 15px 0;
            padding: 10px;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            align-items: center;
            gap: 15px;
        }
        
        .credential-label {
            font-weight: 600;
            min-width: 120px;
        }
        
        .credential-value {
            font-family: monospace;
            font-size: 16px;
            background: rgba(0,0,0,0.3);
            padding: 5px 10px;
            border-radius: 5px;
        }
        
        .copy-btn {
            padding: 5px 15px;
            background: rgba(255,255,255,0.2);
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .copy-btn:hover {
            background: rgba(255,255,255,0.3);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .stat-value {
            font-size: 32px;
            font-weight: bold;
            color: #667eea;
            margin: 10px 0;
        }
        
        .service-list {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
        }
        
        .service-tag {
            display: inline-block;
            padding: 8px 16px;
            background: #f3f4f6;
            border-radius: 20px;
            margin: 5px;
            font-size: 14px;
        }
        
        .expiry-warning {
            background: #fef3c7;
            color: #92400e;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .welcome-header {
                flex-direction: column;
                gap: 15px;
            }
            .credential-row {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="welcome-card">
            <div class="welcome-header">
                <h1>Welcome, <?php echo htmlspecialchars($user['full_name']); ?>! 🎉</h1>
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
            <p>Your demo account has been successfully activated. Use the credentials below to access our platform.</p>
            
            <div class="demo-credentials">
                <h3>🔐 Demo Account Credentials</h3>
                <div class="credential-row">
                    <span class="credential-label">Username:</span>
                    <span class="credential-value" id="demoUsername"><?php echo htmlspecialchars($demoAccount['demo_username']); ?></span>
                    <button class="copy-btn" onclick="copyToClipboard('demoUsername')">Copy</button>
                </div>
                <div class="credential-row">
                    <span class="credential-label">Password:</span>
                    <span class="credential-value" id="demoPassword"><?php echo htmlspecialchars($demoAccount['demo_password']); ?></span>
                    <button class="copy-btn" onclick="copyToClipboard('demoPassword')">Copy</button>
                </div>
                <div class="credential-row">
                    <span class="credential-label">API Key:</span>
                    <span class="credential-value" id="demoApiKey"><?php echo htmlspecialchars($demoAccount['demo_api_key']); ?></span>
                    <button class="copy-btn" onclick="copyToClipboard('demoApiKey')">Copy</button>
                </div>
            </div>
            
            <?php
            $expiryDate = new DateTime($demoAccount['expires_at']);
            $now = new DateTime();
            $daysLeft = $now->diff($expiryDate)->days;
            if ($daysLeft <= 7):
            ?>
            <div class="expiry-warning">
                ⚠️ Your demo account will expire in <?php echo $daysLeft; ?> days. Contact us to upgrade to a full plan!
            </div>
            <?php endif; ?>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div>💰</div>
                <div class="stat-value">$<?php echo $user['amount_paid']; ?></div>
                <div>Amount Paid</div>
            </div>
            <div class="stat-card">
                <div>📅</div>
                <div class="stat-value"><?php echo date('d M Y', strtotime($user['created_at'])); ?></div>
                <div>Registration Date</div>
            </div>
            <div class="stat-card">
                <div>⏰</div>
                <div class="stat-value"><?php echo $daysLeft; ?> days</div>
                <div>Demo Remaining</div>
            </div>
        </div>
        
        <div class="service-list">
            <h3>📋 Your Selected Services</h3>
            <div style="margin-top: 20px;">
                <strong>Primary Service:</strong>
                <span class="service-tag"><?php echo htmlspecialchars($user['primary_service']); ?></span>
            </div>
            <div style="margin-top: 15px;">
                <strong>Also Interested In:</strong>
                <?php
                $services = explode(',', $user['interested_services']);
                foreach ($services as $service):
                    if (trim($service)):
                ?>
                <span class="service-tag"><?php echo htmlspecialchars(trim($service)); ?></span>
                <?php 
                    endif;
                endforeach;
                ?>
            </div>
            <div style="margin-top: 15px;">
                <strong>Volume Estimate:</strong>
                <span class="service-tag"><?php echo htmlspecialchars($user['volume_estimate']); ?></span>
            </div>
            <div style="margin-top: 15px;">
                <strong>Route:</strong>
                <?php echo htmlspecialchars($user['sending_country']); ?> → <?php echo htmlspecialchars($user['receiving_country']); ?>
            </div>
        </div>
        
        <div class="service-list" style="margin-top: 20px;">
            <h3>🚀 Quick Actions</h3>
            <div style="display: flex; gap: 15px; margin-top: 20px; flex-wrap: wrap;">
                <a href="#" class="logout-btn" style="background: #10b981; text-decoration: none;">Access Demo Platform</a>
                <a href="#" class="logout-btn" style="background: #3b82f6; text-decoration: none;">View Documentation</a>
                <a href="#" class="logout-btn" style="background: #f59e0b; text-decoration: none;">Contact Support</a>
            </div>
        </div>
    </div>
    
    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;
            
            navigator.clipboard.writeText(text).then(function() {
                const btn = event.target;
                const originalText = btn.textContent;
                btn.textContent = 'Copied!';
                setTimeout(() => {
                    btn.textContent = originalText;
                }, 2000);
            });
        }
    </script>
</body>
</html>