# 從mysql建置鏡像檔
FROM mysql:8.0

# 複製mysql預設腳本
COPY MySQL/mysql-init.sql /docker-entrypoint-initdb.d/mysql-init.sql

# 複製自定義配置文件
COPY MySQL/my.cnf /etc/mysql/conf.d/my.cnf

# 設定  alias
RUN echo "alias ll='ls -al'" >> /root/.bashrc
