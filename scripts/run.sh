#!/usr/bin/env bash

docker run -d --name php-fun -p 80:80 -v `pwd`/www:/var/www php-fun
