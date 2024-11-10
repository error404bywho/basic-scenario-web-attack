# Sử dụng Ubuntu 22.04 làm base image
FROM ubuntu:16.04

# Cập nhật các gói và cài đặt Apache và PHP
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php && \
    apt-get clean

# Sao chép mã nguồn PHP vào thư mục web của Apache
COPY . /var/www/html/

# Thiết lập quyền sở hữu và phân quyền cho thư mục web
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Mở cổng 80 cho HTTP
EXPOSE 80

