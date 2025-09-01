FROM acspri/limesurvey:latest

# Install PHP Intl if needed
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl && \
    rm -rf /var/lib/apt/lists/*

# Ensure directories exist
RUN mkdir -p /var/www/html/application/config \
    /var/www/html/upload \
    /var/www/html/tmp

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/tmp /var/www/html/upload /var/www/html/application/config