@echo off
echo Starting Nginx...
start F:/weixin/server/nginx-1.9.6/nginx.exe
echo Nginx Finished...
echo Start PHP...
start F:/weixin/server/php/php-cgi.exe /-b 127.0.0.1:9000 -c php.ini
echo PHP Finished...
