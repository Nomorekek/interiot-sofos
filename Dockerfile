FROM linode/lamp


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim unzip php5-mysql python-mysqldb tcpdump bmon python-crypto iptables

COPY infolysisiot /var/www/example.com/public_html/infolysisiot
COPY client.py /home/
COPY entrypoint.py /tmp/
COPY masterserver.py /home/
COPY mappersstatus.py /home/
COPY datastatus.py /home/
COPY droplink.py /home/
COPY restorelink.py /home/
COPY linkstatus.py /home/
COPY viber-adapter.py /home/

EXPOSE 80

CMD python /tmp/entrypoint.py && /bin/bash
