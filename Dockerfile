FROM ubuntu:latest

# Install dependencies
RUN apt update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    php-gd \
    php-xml \
    php-mbstring \
    php-curl \
    php-zip \
    php-bcmath \
    php-imagick \
    php-redis \
    php-xdebug \
    curl \
    git \
    vim \
    nano \
    wget \
    unzip \
    && apt clean;

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install nodejs
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - && apt install -y nodejs

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable apache modules
RUN a2enmod rewrite headers ssl proxy proxy_http

# Set working directory
WORKDIR /var/www/html

COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start apache
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]