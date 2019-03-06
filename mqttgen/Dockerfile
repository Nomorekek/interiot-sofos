FROM ubuntu


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim bmon tcpdump python3-pip && pip3 install hbmqtt

COPY client.py /home/
COPY entrypoint.py /tmp/
COPY 106da925abbb.json /home/
COPY 5da616613f20.json /home/
COPY vmgj4839iqj9.json /home/
COPY aqe0riv8rujw.json /home/
COPY qxjgv314h134.json /home/


CMD python /tmp/entrypoint.py && /bin/bash
