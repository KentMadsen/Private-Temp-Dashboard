# dashboard

sudo certbot certonly --webroot -w /var/www/nginx-directory -d domain.tld --post-hook="service nginx reload" 
