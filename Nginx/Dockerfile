# 從 Nginx 建置鏡像檔
FROM nginx:latest

# 複製設定檔
COPY Nginx/nginx.conf /etc/nginx/nginx.conf

# 安裝 vim
RUN apt update
RUN apt-get install vim -y

# 設定  alias
RUN echo "alias ll='ls -al'" >> /root/.bashrc
