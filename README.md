<<<<<<< HEAD
# propertyfinder-laravel
Laravel SDK for PropertyFinder Enterprise API with automatic token management and support for multiple companies.
=======
# PropertyFinder API Laravel Package

A Laravel-friendly PHP package for interacting with the **PropertyFinder Enterprise API**, including token management, listings, users, profiles, leads, and more.

Built for multi-company support with **automated token caching**, clean endpoint classes, and Laravel integration.

## 📦 Features

- 🔐 Automatic token management (caches token per company)
- 🧱 Clean class-based structure (Auth, Listings, Users, etc.)
- 📍 Supports all major endpoints: listings, leads, users, webhooks, verifications
- ⚙️ Laravel cache + config support
- 🚀 Simple to install and use

## 🛠 Installation

1. Add the repository to your Laravel project:

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/yourusername/propertyfinder-api"
  }
],
"require": {
  "propertyfinder/api": "dev-main"
}
```

2. Run:
```bash
composer update
```

## 🔐 Token Management

Use the `TokenManager` to get a valid token (auto-refreshes every 30 minutes):

```php
use PropertyFinderApi\TokenManager;

$token = TokenManager::getToken($company->id, $company->api_key, $company->api_secret);
```

## 🚀 Usage Example

```php
use PropertyFinderApi\Listings;
use PropertyFinderApi\TokenManager;

$token = TokenManager::getToken($company->id, $company->api_key, $company->api_secret);

$listings = new Listings($token);

$response = $listings->createListing([...]);
```

## 📁 Class Map

| Feature      | Class                  | Example Method                |
|--------------|------------------------|-------------------------------|
| Auth         | `Auth`                 | `issueToken()`                |
| Token Mgmt   | `TokenManager`         | `getToken()`                  |
| Http Client  | `HttpClient`           | `get()`, `post()`             |

## 📄 License

MIT — free for commercial or personal use
>>>>>>> 02ab88313e5ab225caee359f7ab565ba62b670c8
