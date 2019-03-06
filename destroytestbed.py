import os
import time

#INFOLYSIS IOT MANAGER

os.system("docker stop infolysisiot")
os.system("ovs-docker del-port ovs-br2 eth1 infolysisiot")
os.system("docker rm infolysisiot")

#OPENDAYLIGHT

os.system("docker stop opendaylight")
os.system("docker rm opendaylight")

#HTTP MAP

os.system("docker stop httpmap")
os.system("ovs-docker del-port ovs-br2 eth1 httpmap")
os.system("docker rm httpmap")

#COAP MAP

os.system("docker stop coapmap")
os.system("ovs-docker del-port ovs-br2 eth1 coapmap")
os.system("docker rm coapmap")

#MQTT MAP

os.system("docker stop mqttmap")
os.system("ovs-docker del-port ovs-br2 eth1 mqttmap")
os.system("docker rm mqttmap")

#HTTP GENERATOR1

os.system("docker stop httpgen1")
os.system("ovs-docker del-port ovs-br2 eth1 httpgen1")
os.system("docker rm httpgen1")

#HTTP GENERATOR2

os.system("docker stop httpgen2")
os.system("ovs-docker del-port ovs-br2 eth1 httpgen2")
os.system("docker rm httpgen2")

#HTTP GENERATOR3

os.system("docker stop httpgen3")
os.system("ovs-docker del-port ovs-br2 eth1 httpgen3")
os.system("docker rm httpgen3")
#HTTP GENERATOR4

os.system("docker stop httpgen4")
os.system("ovs-docker del-port ovs-br2 eth1 httpgen4")
os.system("docker rm httpgen4")

#HTTP GENERATOR5

os.system("docker stop httpgen5")
os.system("ovs-docker del-port ovs-br2 eth1 httpgen5")
os.system("docker rm httpgen5")






#COAP GENERATOR1

os.system("docker stop coapgen1")
os.system("ovs-docker del-port ovs-br2 eth1 coapgen1")
os.system("docker rm coapgen1")

#COAP GENERATOR2

os.system("docker stop coapgen2")
os.system("ovs-docker del-port ovs-br2 eth1 coapgen2")
os.system("docker rm coapgen2")

#COAP GENERATOR3

os.system("docker stop coapgen3")
os.system("ovs-docker del-port ovs-br2 eth1 coapgen3")
os.system("docker rm coapgen3")

#COAP GENERATOR4

os.system("docker stop coapgen4")
os.system("ovs-docker del-port ovs-br2 eth1 coapgen4")
os.system("docker rm coapgen4")

#COAP GENERATOR5

os.system("docker stop coapgen5")
os.system("ovs-docker del-port ovs-br2 eth1 coapgen5")
os.system("docker rm coapgen5")



#MQTT GENERATOR1

os.system("docker stop mqttgen1")
os.system("ovs-docker del-port ovs-br2 eth1 mqttgen1")
os.system("docker rm mqttgen1")

#MQTT GENERATOR2

os.system("docker stop mqttgen2")
os.system("ovs-docker del-port ovs-br2 eth1 mqttgen2")
os.system("docker rm mqttgen2")

#MQTT GENERATOR3

os.system("docker stop mqttgen3")
os.system("ovs-docker del-port ovs-br2 eth1 mqttgen3")
os.system("docker rm mqttgen3")

#MQTT GENERATOR4

os.system("docker stop mqttgen4")
os.system("ovs-docker del-port ovs-br2 eth1 mqttgen4")
os.system("docker rm mqttgen4")

#MQTT GENERATOR5

os.system("docker stop mqttgen5")
os.system("ovs-docker del-port ovs-br2 eth1 mqttgen5")
os.system("docker rm mqttgen5")



print("Testbed is destroyed successfully.")
os.system("ovs-ofctl --strict del-flows ovs-br2 priority=66,dl_type=0x0800,nw_proto=6,tp_dst=80")
os.system("ovs-ofctl --strict del-flows ovs-br2 priority=66,dl_type=0x0800,nw_proto=6,tp_src=80,nw_src=174.20.1.100")
os.system("ovs-ofctl --strict del-flows ovs-br2 priority=66,dl_type=0x0800,nw_proto=17,tp_dst=5683")
os.system("ovs-ofctl --strict del-flows ovs-br2 priority=66,dl_type=0x0800,nw_proto=17,tp_src=5683,nw_src=174.20.1.110")
os.system("ovs-ofctl --strict del-flows ovs-br2 priority=66,dl_type=0x0800,nw_proto=6,tp_dst=1885")
os.system("ovs-ofctl --strict del-flows ovs-br2 priority=66,dl_type=0x0800,nw_proto=6,tp_src=1885,nw_src=174.20.1.120")
os.system("ovs-vsctl del-controller ovs-br2")


os.system("killall -9 python")




