
# 🚀 WP PromptBridge AI  
*A secure, customizable WordPress plugin that lets users build their own branded AI assistants using OpenAI, OpenRouter, Hugging Face, and more — with full API key protection.*

---

## 🧩 Overview  
**WP PromptBridge AI** allows WordPress site owners to integrate powerful AI chat features directly into their website, using their own API keys from multiple providers — all while keeping those keys secure via backend routing. You can fully brand the assistant, customize its prompt, and style it to fit your site's theme.

Perfect for support bots, creative writing tools, content generation, or general-purpose AI assistants — built your way.

---

## ✨ Features

- 🔐 **Secure Backend Integration** – API keys are never exposed to the frontend  
- 🔑 **Supports Multiple AI Providers** – OpenAI, OpenRouter, Hugging Face, and more  
- 💬 **Shortcode-Based Chat UI** – Easily embed with `[ai_plugin_chat]`  
- 🎨 **Fully Customizable & Theme-Friendly** – Style it to match your site  
- 🧠 **Supports Top AI Models** – GPT-4, Claude, Mistral, and others  
- 🔓 **Open-Source & Developer-Friendly** – Fork it, tweak it, make it yours  
- 🔧 **Lightweight & Easy to Deploy** – No bloated scripts or frameworks  

---

## 🔧 Installation & Setup

1. **Upload the plugin** to your `/wp-content/plugins/` directory  
2. **Activate** it via `WordPress Admin > Plugins > Installed Plugins`  
3. Navigate to `Settings > PromptBridge AI`  
4. Select your provider (OpenAI, OpenRouter, etc.)  
5. Paste your API key  
6. Use the shortcode `[ai_plugin_chat]` in any post, page, or template

```php
<?php echo do_shortcode('[ai_plugin_chat]'); ?>
````

---

## 🔒 API Key Security

All API requests are securely routed through WordPress backend functions to prevent exposing sensitive API keys on the frontend.

---

## 🤖 Supported Models

| Provider     | Supported Models                        |
| ------------ | --------------------------------------- |
| OpenAI       | `gpt-3.5-turbo`, `gpt-4`                |
| OpenRouter   | `mistral`, `claude`, `gemini`, and more |
| Hugging Face | `gpt2`, `bloom`, etc.                   |

---

## 📦 Example Use

```php
echo do_shortcode('[ai_plugin_chat]');
```

---

## 💻 Developer Notes

* Built for extendability
* Easy to add custom providers
* Fully customizable styles and behavior
* Contributions are welcome!

---

## 📄 License

MIT License.
Free to use, modify, and distribute.
*This project is not affiliated with OpenAI, OpenRouter, or Hugging Face.*

---


## 🙌 Credits

Created by [Kenneth Joshua Reaño](https://github.com/gioshwua).  
Inspired by the flexibility of open AI and WordPress integration.<br><br><br><br><br><br>



<div align="center">

🌐 🌐 🌐 🌐 🌐 🌐 🌐 🌐 🌐 🌐  
💻 **Developers Welcome!** 💻  
🌐 🌐 🌐 🌐 🌐 🌐 🌐 🌐 🌐 🌐  

</div>
<br>


## 🤝 Contributing


Thank you for considering contributing to **WP PromptBridge AI**! Here's how you can help:

---

## 📋 How to Contribute

### 1. **Fork the Repository**

Click the **Fork** button at the top of this repo to create your own copy.

### 2. **Clone the Forked Repo**

```bash
git clone https://github.com/your-username/wp-promptbridge-ai.git
cd wp-promptbridge-ai
```

### 3. **Create a Feature Branch**

```bash
git checkout -b feature/your-feature-name
```

### 4. **Make Your Changes**

* Follow WordPress plugin development standards.
* Keep your code clean and well-documented.
* Never expose API keys or sensitive data on the frontend.

### 5. **Test Your Code**

Make sure your feature or fix works on:

* Latest WordPress version
* Default themes (e.g., Twenty Twenty-Four)
* With common plugins enabled/disabled

### 6. **Commit and Push**

```bash
git add .
git commit -m "Add: [short description of your change]"
git push origin feature/your-feature-name
```

### 7. **Open a Pull Request**

Go to your fork on GitHub and submit a pull request to the `main` branch. Include:

* A clear title and description
* Summary of changes
* Screenshots or test steps if applicable

---

## ✅ Contribution Guidelines

* Keep pull requests focused and minimal
* Follow PHP and JS best practices
* Add inline comments for complex logic
* Be respectful and constructive

---

## 🧪 Local Development Setup

1. Copy the plugin folder to `/wp-content/plugins/`
2. Activate it via the WordPress dashboard
3. Go to `Settings > PromptBridge AI` to configure
4. Use `[ai_plugin_chat]` anywhere on your site

---

## 🙋 Need Help?

Open an [issue](https://github.com/yourgithub/wp-promptbridge-ai/issues) or start a discussion if you:

* Have questions
* Want to suggest new features
* Need help contributing

---

## 📜 License

By contributing, you agree that your contributions will be licensed under the MIT License.

---
