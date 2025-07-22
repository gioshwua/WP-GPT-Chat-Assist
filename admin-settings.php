<?php

// Create settings menu
add_action('admin_menu', 'ai_chat_create_settings_menu');
function ai_chat_create_settings_menu() {
    add_options_page('AI Chat Settings', 'AI Chat', 'manage_options', 'ai-chat-settings', 'ai_chat_settings_page');
}

// Register settings
add_action('admin_init', 'ai_chat_register_settings');
function ai_chat_register_settings() {
    register_setting('ai_chat_settings_group', 'ai_chat_provider');
    register_setting('ai_chat_settings_group', 'ai_chat_api_key');
}

function ai_chat_settings_page() {
    ?>
    <div class="wrap">
        <h1>AI Chat Plugin Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('ai_chat_settings_group'); ?>
            <?php do_settings_sections('ai_chat_settings_group'); ?>

            <table class="form-table">
                <tr>
                    <th scope="row">AI Provider</th>
                    <td>
                        <select name="ai_chat_provider">
                            <option value="openai" <?php selected(get_option('ai_chat_provider'), 'openai'); ?>>OpenAI</option>
                            <option value="huggingface" <?php selected(get_option('ai_chat_provider'), 'huggingface'); ?>>HuggingFace</option>
                            <option value="openrouter" <?php selected(get_option('ai_chat_provider'), 'openrouter'); ?>>OpenRouter</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">API Key</th>
                    <td><input type="text" name="ai_chat_api_key" value="<?php echo esc_attr(get_option('ai_chat_api_key')); ?>" size="50" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}