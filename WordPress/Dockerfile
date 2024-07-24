# 從mysql建置鏡像檔
FROM wordpress

# 設定  alias
RUN echo "alias ll='ls -al'" >> /root/.bashrc

# 複製設定檔
COPY WordPress/wp-config.php /var/www/html/

# 安裝 vim
RUN apt update
RUN apt-get install vim -y

# 安裝 ping
RUN apt-get install iputils-ping -y

# 安裝 telnet
RUN apt-get install telnet -y
