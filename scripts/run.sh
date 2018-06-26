#!/usr/bin/env bash

docker run -p 80:80 -v `pwd`/www:/var/www php-fun
