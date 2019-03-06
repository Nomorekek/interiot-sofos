FROM opendaylight/odl

COPY client.py /home/
COPY entrypoint.py /tmp/

EXPOSE 8181 8080 6633

CMD python /tmp/entrypoint.py && /bin/bash
