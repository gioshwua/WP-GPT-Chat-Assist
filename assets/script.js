jQuery(document).ready(function($) {
    $('#ai-chat-send').on('click', function() {
        const prompt = $('#ai-chat-input').val();
        $('#ai-chat-response').html('<em>Loading...</em>');

        $.post(aiChatData.ajax_url, {
            action: 'ai_chat_send',
            prompt: prompt,
            nonce: aiChatData.nonce
        }, function(response) {
            if (response.success) {
                $('#ai-chat-response').html('<strong>Response:</strong><br>' + response.data.reply);
            } else {
                $('#ai-chat-response').html('<span style="color:red;">Error: ' + response.data.message + '</span>');
            }
        });
    });
});