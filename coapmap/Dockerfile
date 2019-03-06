FROM ubuntu


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim bmon tcpdump python-pip && pip install CoAPthon

COPY client.py /home/
COPY entrypoint.py /tmp/
COPY server.py /home/

CMD python /tmp/entrypoint.py && /bin/bash
