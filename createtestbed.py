import os
import time
import string

#INFOLYSIS IOT MANAGER



print ("\nCreate INFOLYSIS IOT MANAGEAR")
os.system("docker run --cap-add=NET_ADMIN -itd --name infolysisiot -p 8060:80 -p 3306:3306 -p 33333:33333/udp infolysisiot")
os.system("ovs-docker add-port ovs-br2 eth1 infolysisiot --ipaddress=174.20.1.66/24")
helper = os.popen("ovs-vsctl --data=bare --no-heading --columns=name find interface external_ids:container_id=\"infolysisiot\" external_ids:container_iface=\"eth1\"").read()
helper2 = os.popen("ovs-ofctl dump-ports-desc ovs-br2 | grep "+helper).read()
helper3 = helper2.split("(")
print ("OVS port: "+helper3[0]+"\n")

os.system("nohup python /home/infolysis/interiot/infolysis-interiot-agent.py "+helper3[0]+" &")

print ("\n\n\nINFOLYSIS-IOT MANAGEMENT GUI: http://46.105.147.5:8060/infolysisiot/\n\n\n")
