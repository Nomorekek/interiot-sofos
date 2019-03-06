FROM ubuntu


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim bmon tcpdump python3-pip && pip3 install hbmqtt

COPY client.py /home/
COPY entrypoint.py /tmp/
COPY server.yaml /tmp/
COPY server.py /home/
COPY default_client.yaml /home/

CMD python /tmp/entrypoint.py && /bin/bash
