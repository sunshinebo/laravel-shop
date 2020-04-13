##集成 Bootstrap
composer require laravel/ui:"^1.0" --dev
##引入 Bootstrap
php artisan ui vue

##运行 Laravel Mix
yarn config set registry https://registry.npm.taobao.org
##Yarn 安装依赖
SASS_BINARY_SITE=http://npm.taobao.org/mirrors/node-sass yarn --no-bin-links
##请确保命令一直运行 
npm run watch-poll 

##用户认证脚手架（生成代码）
php artisan ui:auth

rm -f app/Http/Controllers/HomeController.php resources/views/home.blade.php
##由于我们删除了 /home 这个路由，修改
app/Http/Controllers/Auth/LoginController.php、 app/Http/Controllers/Auth/RegisterController.php、 app/Http/Controllers/Auth/VerificationController.php 和 app/Http/Controllers/Auth/ResetPasswordController.php，将 $redirectTo 的值从 /home 改成 /。

修改 app/Http/Middleware/RedirectIfAuthenticated.php，将 redirect('/home') 修改为 redirect('/')。

## 中文语言包
composer require overtrue/laravel-lang

##优化交互
yarn add sweetalert

#安装 laravel-admin 扩展包
composer require encore/laravel-admin "1.7.7"

php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"

php artisan admin:install

##富文本编辑框组件
composer require jxlwqq/quill

php artisan vendor:publish --tag=laravel-admin-quill

##软链接
php artisan storage:link
