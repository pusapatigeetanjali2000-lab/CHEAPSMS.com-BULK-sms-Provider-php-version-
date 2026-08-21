<?php
session_start();
// Database connection
$conn = new mysqli("localhost", "u257304074_bulkai", "SMSai@1234", "u257304074_bulkai");

$message = "";
$show_form = false;
$token = "";

if (isset($_GET['token'])) {
    $token = $conn->real_escape_string($_GET['token']);
    
    // Check if token is valid and not expired
    $result = $conn->query("SELECT * FROM users WHERE reset_token='$token' AND token_expiry > NOW()");
    
    if ($result->num_rows > 0) {
        $show_form = true;
    } else {
        $message = "Invalid or expired reset link. Please request a new one.";
    }
}

// Handle the Password Update
if (isset($_POST['update_password_submit'])) {
    $token = $conn->real_escape_string($_POST['token']);
    $new_pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($new_pass !== $confirm_pass) {
        $message = "Passwords do not match!";
        $show_form = true;
    } else {
        $hashed_pass = password_hash($new_pass, PASSWORD_BCRYPT);
        $conn->query("UPDATE users SET password='$hashed_pass', reset_token=NULL, token_expiry=NULL WHERE reset_token='$token'");
        $message = "Password updated successfully! Redirecting to login...";
        $show_form = false;
        header("refresh:3;url=login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | BULKSMS.ai</title>
    <meta name="robots" content="noindex,nofollow">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #020617; color: #f8fafc; overflow: hidden; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .text-gradient { background: linear-gradient(to right, #8b5cf6, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .input-field { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); transition: all 0.3s; }
        .input-field:focus { border-color: #06b6d4; background: rgba(255, 255, 255, 0.07); outline: none; }
        .accent-gradient { background: linear-gradient(135deg, #8b5cf6 0%, #06b6d4 100%); }
        
        /* Background decorative elements */
        .blob { position: absolute; width: 500px; height: 500px; background: rgba(99, 102, 241, 0.1); filter: blur(100px); border-radius: 50%; z-index: -1; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="blob" style="top: -100px; right: -100px;"></div>
    <div class="blob" style="bottom: -100px; left: -100px; background: rgba(6, 182, 212, 0.1);"></div>

    <div class="max-w-md w-full glass p-8 md:p-12 rounded-[2.5rem] shadow-2xl border border-white/10">
        <div class="mb-8 text-center">
            <a href="index.html" class="text-xl font-bold mb-2 block">BULK<span class="text-cyan-400">SMS.ai</span></a>
            <h3 class="text-2xl font-black text-white">Reset Neural Key</h3>
            <p class="text-xs text-gray-500 uppercase tracking-widest mt-1">Secure your access to the grid</p>
        </div>

        <?php if ($message): ?>
            <div class="mb-6 p-4 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-cyan-400 text-xs font-bold text-center">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <?php if ($show_form): ?>
            <form method="POST" class="space-y-6">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                
                <div class="space-y-1">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-500 ml-1">New Password</label>
                    <input type="password" name="password" required 
                           class="w-full p-4 rounded-2xl input-field text-sm text-white" 
                           placeholder="••••••••">
                </div>

                <div class="space-y-1">
                    <label class="text-[10px] font-bold uppercase tracking-widest text-gray-500 ml-1">Confirm New Password</label>
                    <input type="password" name="confirm_password" required 
                           class="w-full p-4 rounded-2xl input-field text-sm text-white" 
                           placeholder="••••••••">
                </div>

                <button type="submit" name="update_password_submit" 
                        class="w-full py-4 rounded-2xl accent-gradient font-black uppercase tracking-widest text-xs shadow-lg shadow-indigo-500/20 hover:scale-[1.02] active:scale-95 transition-all mt-4">
                    Update Password
                </button>
            </form>
        <?php endif; ?>

        <div class="mt-8 text-center">
            <a href="login.php" class="text-[10px] text-gray-500 uppercase tracking-widest hover:text-white transition">Back to Login Portal</a>
        </div>
    </div>

</body>
</html>