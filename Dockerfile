# Use a base image with PHP-CLI for the built-in web server
FROM php:8.2-cli

# Copy application code
COPY src/ /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose port 8000
EXPOSE 8000

# Start PHP's built-in web server
CMD ["php", "-S", "0.0.0.0:8000", "index.php"]
