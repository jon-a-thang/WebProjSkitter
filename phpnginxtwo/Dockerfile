FROM webdevops/php-nginx
COPY htmlfiles/ /usr/share/nginx/html/
ENV WEB_DOCUMENT_ROOT /usr/share/nginx/html

#RUN rm -v /etc/nginx/nginx.conf
#COPY conffiles/ /etc/nginx/
#COPY nginx.conf /etc/nginx/nginx.conf
#COPY certshell.sh /opt/
#RUN docker-php-ext-install mysqli
#RUN apk add python
#RUN apt-get update && apt-get -y install python2.7
#RUN chmod 755 /opt/certshell.sh

#EXPOSE 80
#ENV WEB_DOCUMENT_ROOT /usr/share/nginx/html
#ENTRYPOINT [ "/opt/certshell.sh" ]
#CMD ["apache2-foreground"]
#CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]