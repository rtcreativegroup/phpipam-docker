FROM tutum/apache-php:latest

RUN DEBIAN_FRONTEND=noninteractive apt-get -y install curl php5-gmp php5-ldap

RUN curl -L "http://downloads.sourceforge.net/project/phpipam/phpipam-1.0.tar?r=http%3A%2F%2Fsourceforge.net%2Fprojects%2Fphpipam%2Ffiles%2F%3Fsource%3Dnavbar&ts=1403886975&use_mirror=softlayer-dal" > /tmp/phpipam.tar
RUN rm -fr /app && tar -xvf /tmp/phpipam.tar && mv /tmp/phpipam /app

EXPOSE 80
CMD ["/run.sh"]
