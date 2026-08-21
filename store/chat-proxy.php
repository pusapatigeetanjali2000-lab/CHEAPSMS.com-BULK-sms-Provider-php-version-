<?php
/**
 * chat-proxy.php
 * Sits between your website's chat widget and your Make.com webhook.
 * Keeps the webhook URL hidden from visitors and avoids browser CORS issues.
 */

header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Read the incoming JSON from the widget
$input = json_decode(file_get_contents('php://input'), true);
$userMessage = trim($input['message'] ?? '');
$sessionId   = trim($input['session_id'] ?? uniqid('sess_', true));

if ($userMessage === '') {
    http_response_code(400);
    echo json_encode(['error' => 'No message provided']);
    exit;
}

// ---- Your Make.com webhook URL (kept server-side, never exposed to visitors) ----
$webhookUrl = 'https://hook.eu1.make.com/lzf3o6levw72wmkpy81zp5tk2y4b2x1w';

// Build payload to send to Make
$payload = json_encode([
    'message'    => $userMessage,
    'session_id' => $sessionId,
    'source'     => 'cheapsms_website',
    'timestamp'  => date('c'),
]);

// Send request to Make.com webhook
$ch = curl_init($webhookUrl);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 20, // Make scenarios can take a few seconds
]);

$response  = curl_exec($ch);
$httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError) {
    http_response_code(502);
    echo json_encode(['error' => 'Could not reach chatbot service', 'detail' => $curlError]);
    exit;
}

if ($httpCode !== 200) {
    http_response_code(502);
    echo json_encode(['error' => 'Chatbot service error', 'status' => $httpCode, 'raw' => $response]);
    exit;
}

// Try to decode Make's response as JSON (expects { "reply": "..." })
$decoded = json_decode($response, true);
$reply = $decoded['reply'] ?? $response; // fall back to raw text if Make sends plain text

echo json_encode([
    'reply'      => $reply,
    'session_id' => $sessionId,
]);
