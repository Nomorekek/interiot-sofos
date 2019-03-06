FROM ubuntu


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim bmon tcpdump python-pip && pip install CoAPthon

COPY client.py /home/
COPY entrypoint.py /tmp/
COPY 496159d8b5c5.json /home/
COPY 23f3f2294b55.json /home/
COPY fj491i3mcejq.json /home/
COPY 94j21k3mfaha.json /home/
COPY blrpto6201jf.json /home/

CMD python /tmp/entrypoint.py && /bin/bash
