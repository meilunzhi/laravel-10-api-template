## About Laravel10-Api-Template

### 实现功能

* 解决跨域问题
* 统一Response响应处理
* Api-Resource资源返回
* 使用Enum枚举
* jwt-auth用户认证与无感知自动刷新
* jwt-auth多角色认证不串号
* 单一设备登陆

### 环境

* PHP >= 8.1
* Laravel10

### 安装

1. git clone https://github.com/meilunzhi/laravel-10-api-template
2. composer install
3. cp .env.example .env（如需开启单一设备登录登录，设置 SINGLE_DEVICE_LOGIN=true）
4. php artisan key:generate
5. php artisan jwt:secret
6. php artisan migrate
7. php artisan db:seed


