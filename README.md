PropertyFinder API Laravel Package
A Laravel-friendly PHP package for interacting with the PropertyFinder Enterprise API, featuring token management, listings, users, profiles, leads, and more.

Built to support multiple companies with automated token caching, clean endpoint classes, and seamless Laravel integration.

📦 Features
🔐 Automatic token management with per-company token caching

🧱 Clean, class-based structure (Auth, Listings, Users, etc.)

📍 Full support for major endpoints: listings, leads, users, webhooks, verifications

⚙️ Integrates with Laravel cache and config

🚀 Easy installation and usage

🛠 Installation
Add the package repository to your Laravel project's composer.json:

json
Copy
Edit
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/trghauri/propertyfinder-api"
  }
],
"require": {
  "propertyfinder/api": "dev-main"
}
Run the composer update command:

bash
Copy
Edit
composer update
🔐 Token Management
Retrieve a valid token using the TokenManager. Tokens are automatically refreshed every 30 minutes:

php
Copy
Edit
use PropertyFinderApi\TokenManager;

$token = TokenManager::getToken($company->id, $company->api_key, $company->api_secret);
🚀 Usage Example
php
Copy
Edit
use PropertyFinderApi\Listings;
use PropertyFinderApi\TokenManager;

$token = TokenManager::getToken($company->id, $company->api_key, $company->api_secret);

$listings = new Listings($token);

$response = $listings->createListing([...]);
📁 Class Map
Feature	Class	Example Method
Auth	Auth	issueToken()
Token Mgmt	TokenManager	getToken()
HTTP Client	HttpClient	get(), post()

📄 License
MIT — free for commercial or personal use