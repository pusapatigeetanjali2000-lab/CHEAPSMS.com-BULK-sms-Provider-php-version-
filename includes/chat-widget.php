<?php
/**
 * includes/chat-widget.php
 * Floating AI Sales Chatbot — matches the Twilio-red / Tailwind theme
 * used across cheapsms.com. Include this once, right before </body>.
 * Requires Tailwind CDN + Font Awesome to already be loaded on the page.
 */
?>
<style>
  #csms-chat-window { display: none; }
  #csms-chat-window.csms-open { display: flex; }
  #csms-chat-bubble { animation: csms-pulse 2.5s infinite; }
  @keyframes csms-pulse {
    0%   { box-shadow: 0 0 0 0 rgba(242, 47, 70, 0.45); }
    70%  { box-shadow: 0 0 0 12px rgba(242, 47, 70, 0); }
    100% { box-shadow: 0 0 0 0 rgba(242, 47, 70, 0); }
  }
  #csms-chat-body::-webkit-scrollbar { width: 6px; }
  #csms-chat-body::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 4px; }
  .csms-typing-dot {
    width: 6px; height: 6px; border-radius: 50%; background: #9ca3af;
    display: inline-block; margin: 0 1px; animation: csms-bounce 1.2s infinite;
  }
  .csms-typing-dot:nth-child(2) { animation-delay: 0.15s; }
  .csms-typing-dot:nth-child(3) { animation-delay: 0.3s; }
  @keyframes csms-bounce { 0%, 60%, 100% { transform: translateY(0); } 30% { transform: translateY(-4px); } }
</style>

<!-- Floating bubble -->
<button id="csms-chat-bubble"
        class="fixed bottom-6 right-6 z-50 w-16 h-16 rounded-full bg-twilio-red text-white
               shadow-xl flex items-center justify-center text-2xl hover-bg-twilio-dark
               transition-colors duration-200"
        aria-label="Chat with our Sales Assistant">
  <i class="fas fa-comment-dots"></i>
</button>

<!-- Chat window -->
<div id="csms-chat-window"
     class="fixed bottom-24 right-6 z-50 w-[360px] max-w-[90vw] h-[500px] max-h-[75vh]
            bg-white rounded-2xl shadow-2xl border border-gray-100 flex-col overflow-hidden font-sans">

  <!-- Header -->
  <div class="bg-twilio-red text-white px-5 py-4 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center">
        <i class="fas fa-briefcase"></i>
      </div>
      <div>
        <p class="font-bold leading-tight">Sales Assistant</p>
        <p class="text-xs text-white/80 leading-tight">Typically replies in seconds</p>
      </div>
    </div>
    <button id="csms-chat-close" class="text-white/90 hover:text-white text-lg" aria-label="Close chat">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <!-- Messages -->
  <div id="csms-chat-body" class="flex-1 overflow-y-auto px-4 py-4 space-y-3 bg-gray-50 flex flex-col">
    <div class="csms-msg-bot max-w-[85%] bg-white border border-gray-100 shadow-sm rounded-2xl rounded-tl-sm px-4 py-2.5 text-sm text-gray-800">
      Hi 👋 I'm the CheapSMS Sales Assistant. Ask me about pricing, AI agents, or getting a demo!
    </div>
  </div>

  <!-- Typing indicator -->
  <div id="csms-typing" class="px-4 pb-1 hidden">
    <span class="csms-typing-dot"></span><span class="csms-typing-dot"></span><span class="csms-typing-dot"></span>
  </div>

  <!-- Input -->
  <div class="border-t border-gray-100 p-3 flex items-center gap-2 bg-white">
    <input id="csms-chat-input" type="text" placeholder="Type your message..."
           class="flex-1 border border-gray-200 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-twilio-red" />
    <button id="csms-chat-send"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-twilio-red text-white hover-bg-twilio-dark transition-colors">
      <i class="fas fa-paper-plane text-sm"></i>
    </button>
  </div>
</div>

<script>
(function () {
  const PROXY_URL = "/chat-proxy"; // no .php — this site's .htaccess strips extensions

  const bubble  = document.getElementById('csms-chat-bubble');
  const win     = document.getElementById('csms-chat-window');
  const closeBt = document.getElementById('csms-chat-close');
  const body    = document.getElementById('csms-chat-body');
  const input   = document.getElementById('csms-chat-input');
  const sendBt  = document.getElementById('csms-chat-send');
  const typing  = document.getElementById('csms-typing');

  let sessionId = sessionStorage.getItem('csms_session_id');
  if (!sessionId) {
    sessionId = 'sess_' + Math.random().toString(36).slice(2) + Date.now();
    sessionStorage.setItem('csms_session_id', sessionId);
  }

  bubble.addEventListener('click', () => {
    win.classList.toggle('csms-open');
    if (win.classList.contains('csms-open')) input.focus();
  });
  closeBt.addEventListener('click', () => win.classList.remove('csms-open'));

  function addMessage(text, sender) {
    const wrap = document.createElement('div');
    if (sender === 'user') {
      wrap.className = 'max-w-[85%] self-end bg-twilio-red text-white rounded-2xl rounded-tr-sm px-4 py-2.5 text-sm shadow-sm';
    } else {
      wrap.className = 'max-w-[85%] self-start bg-white border border-gray-100 shadow-sm rounded-2xl rounded-tl-sm px-4 py-2.5 text-sm text-gray-800';
    }
    wrap.textContent = text;
    body.appendChild(wrap);
    body.scrollTop = body.scrollHeight;
  }

  async function sendMessage() {
    const text = input.value.trim();
    if (!text) return;
    addMessage(text, 'user');
    input.value = '';
    typing.classList.remove('hidden');
    body.scrollTop = body.scrollHeight;

    try {
      const res = await fetch(PROXY_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: text, session_id: sessionId })
      });
      const data = await res.json();
      typing.classList.add('hidden');

      if (data.error) {
        addMessage("Sorry, something went wrong. Please try again shortly.", 'bot');
      } else {
        addMessage(data.reply, 'bot');
      }
    } catch (err) {
      typing.classList.add('hidden');
      addMessage("Network error — please try again.", 'bot');
    }
  }

  sendBt.addEventListener('click', sendMessage);
  input.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); });
})();
</script>