# WP-GPT-Chat-Assist 🚀  
A lightweight, secure, and customizable WordPress plugin that brings AI chat capabilities (via OpenAI, OpenRouter, Hugging Face, etc.) directly into your site — without exposing API keys.

> 🔓 **Open-source & developer-friendly. Fork it, improve it, make it yours.**

---

## ✨ Features
- 🔐 Secure backend integration (no exposed keys)
- 💬 Shortcode-powered AI chat interface: `[ai_plugin_chat]`
- ⚙️ Supports OpenAI, Hugging Face, and OpenRouter
- 🧠 Uses powerful models like GPT-4, Claude, Mistral, and more
- 🎨 Easy to style and extend for custom themes

---

## 🔧 Setup
1. Upload the plugin to `/wp-content/plugins/`
2. Activate it via **Plugins > Installed Plugins**
3. Go to **Settings > AI Chat**
4. Select your provider and paste your API key
5. Use the shortcode `[ai_plugin_chat]` in any page or post

---

## 🔒 API Key Security
All API calls are routed through the WordPress backend to ensure your keys stay hidden from the frontend.

---

## 🚀 Supported Models
- OpenAI: `gpt-3.5-turbo`, `gpt-4`
- OpenRouter: `mistral`, `claude`, `gemini`, and more
- Hugging Face: `gpt2`, `bloom`, etc.

---

## 📦 Example Use
```php
echo do_shortcode('[ai_plugin_chat]');
