include .env
export
run:
	php -S ${APP_IP} -t public/

