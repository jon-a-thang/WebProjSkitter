FROM nginx:mainline
#RUN mkdir data && cd data && mkdir nginxcache
#COPY src/ /etc/nginx/
RUN rm -v /etc/nginx/nginx.conf
COPY src/ /etc/nginx/
EXPOSE 80
#CMD ["nginx", "-g", "daemon off;"]

COPY certshell.sh /opt/
#RUN apk add python
RUN apt-get update && apt-get -y install python2.7 && apt-get -y install curl
RUN chmod 755 /opt/certshell.sh

#ENV WEB_DOCUMENT_ROOT /usr/share/nginx/html
ENTRYPOINT [ "/opt/certshell.sh" ]
#CMD ["apache2-foreground"]
#CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]