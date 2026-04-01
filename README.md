# translations
Translations for Meowblox's website.

## Current Default
The website default locale is English (`en`).

## Add A New Language
1. Create a new folder under `lang/`, for example `lang/es/`.
2. Copy `lang/en/messages.php` to `lang/es/messages.php`.
3. Translate values only, keep array keys the same.
4. Set locale in the app environment when ready:
	- `APP_LOCALE=es`
	- `APP_FALLBACK_LOCALE=en`

The `messages.php` file is organized by page and section to make future locale updates easier.