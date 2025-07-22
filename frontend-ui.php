<?php

add_shortcode('ai_plugin_chat', 'ai_plugin_render_chat');
function ai_plugin_render_chat() {
    ob_start(); ?>
    <div class="ai-chat-box">
        <textarea id="ai-chat-input" placeholder="Ask me anything..."></textarea>
        <button id="ai-chat-send">Send</button>
        <div id="ai-chat-response"></div>
    </div>
    <?php return ob_get_clean();
}

add_action('wp_ajax_nopriv_ai_chat_send', 'handle_ai_chat_request');
add_action('wp_ajax_ai_chat_send', 'handle_ai_chat_request');

function handle_ai_chat_request() {
    check_ajax_referer('ai_chat_nonce', 'nonce');

    $prompt = sanitize_text_field($_POST['prompt']);
    $api_key = get_option('ai_chat_api_key');
    $provider = get_option('ai_chat_provider');

    if (!$api_key || !$prompt) {
        wp_send_json_error(['message' => 'API key or prompt missing.']);
    }

    $reply = '';

    if ($provider === 'openai') {
        $response = wp_remote_post('https://api.openai.com/v1/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
                'Content-Type'  => 'application/json',
            ],
            'body' => json_encode([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'max_tokens' => 150
            ])
        ]);
        $body = json_decode(wp_remote_retrieve_body($response), true);
        $reply = $body['choices'][0]['text'] ?? 'No response.';

    } elseif ($provider === 'huggingface') {
        $response = wp_remote_post('https://api-inference.huggingface.co/models/gpt2', [
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
                'Content-Type'  => 'application/json',
            ],
            'body' => json_encode(['inputs' => $prompt])
        ]);
        $body = json_decode(wp_remote_retrieve_body($response), true);
        $reply = $body[0]['generated_text'] ?? 'No response.';

    } elseif ($provider === 'openrouter') {
        $response = wp_remote_post('https://openrouter.ai/api/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
                'Content-Type'  => 'application/json',
                'HTTP-Referer'  => home_url(), // Required by OpenRouter
            ],
            'body' => json_encode([
                'model' => 'mistralai/mistral-7b-instruct', // You can change this
                'messages' => [
                    ['role' => 'user', 'content' => $prompt]
                ],
                'max_tokens' => 200
            ])
        ]);
        $body = json_decode(wp_remote_retrieve_body($response), true);
        $reply = $body['choices'][0]['message']['content'] ?? 'No response.';
    } else {
        $reply = 'Invalid provider selected.';
    }

    wp_send_json_success(['reply' => trim($reply)]);
}
