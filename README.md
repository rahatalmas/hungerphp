# hungerphp

RewriteEngine On
RewriteBase /hungerAppPhp/
RewriteRule ^index\\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /hungerAppPhp/index.php [L]