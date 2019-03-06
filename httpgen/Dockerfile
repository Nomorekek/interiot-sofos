FROM ubuntu


RUN apt-get update && apt-get install -y net-tools iputils-ping python vim bmon tcpdump python-requests

COPY client.py /home/
COPY entrypoint.py /tmp/
COPY 24infeqijewq.json /home/
COPY 3bcbdea4140b.json /home/
COPY 4440ccf54a87.json /home/
COPY c1j914391ur9.json /home/
COPY kr8i1cdl485j.json /home/

CMD python /tmp/entrypoint.py && /bin/bash
