FROM ubuntu


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim bmon tcpdump apache2 php7.0 libapache2-mod-php7.0 php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip

COPY client.py /home/
COPY entrypoint.py /tmp/
COPY httpiot.php /var/www/html/

CMD python /tmp/entrypoint.py && /bin/bash
