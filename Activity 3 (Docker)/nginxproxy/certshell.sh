#! /bin/bash

#sleep 1000000
#mkdir -p /var/log/nginx/ && touch /var/log/nginx/error.log && touch /var/log/nginx/access.log

# Generate Certificate
curl -d '{ "request": {"CN": "localhost","hosts":["localhost"],"key": { "algo": "rsa","size": 2048 }, "names": [{"C":"US","ST":"NEW YORK", "L":"ROCHESTER","O":"localhost"}]}}' http://cfsslcert:8888/api/v1/cfssl/newcert > cert.json

# Create Private Key
echo -e "$(cat cert.json | /usr/bin/python2.7 -m json.tool | grep -m 1 private_key | cut -f4 -d '"')" > armcert.key
#echo -e "$(cat cert.json | python -m json.tool | grep -m 1 private_key | cut -f4 -d '"')" > armcert.key


# Create Certificate
echo -e "$(cat cert.json | /usr/bin/python2.7 -m json.tool | grep -m 1 certificate | cut -f4 -d '"')" > armcert.cer
#echo -e "$(cat cert.json | python -m json.tool | grep -m 1 certificate | cut -f4 -d '"')" > armcert.cer

mkdir -p /etc/nginx/certs

mv /armcert.key /etc/nginx/certs/armcert.key

mv /armcert.cer /etc/nginx/certs/armcert.cer

#service apache2 start
#apache2 -DFOREGROUND
#exec apache2 -d FOREGROUND
#/usr/sbin/apache2ctl -D FOREGROUND
nginx -g "daemon off;"