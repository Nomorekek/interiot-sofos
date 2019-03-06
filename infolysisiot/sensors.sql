create database sensors;

use sensors;

create table temp(id int unsigned auto_increment primary key, nodeid int unsigned, timeandstamp timestamp, svalue float);

create table light(id int unsigned auto_increment primary key, nodeid int unsigned, timeandstamp timestamp, svalue int unsigned);

create table nodes(id int unsigned auto_increment primary key, nodename varchar(255), alive int unsigned);

create table sensors(id int unsigned auto_increment primary key, nodeid int unsigned, sensortype varchar(255), sensorstate varchar(255), alarmthreshold float, senserate int unsigned);

create table settings(it int unsigned auto_increment primary key, nodeid int unsigned, alarmmode varchar(255));

create table alarms(id int unsigned auto_increment primary key, nodeid varchar(255), timeandstamp timestamp, sensortype varchar(255), svalue varchar(255));


create table instances (id int unsigned auto_increment primary key, instancename varchar(255), instancestate varchar(255));
insert into instances values (null, "opendaylight", "on");
insert into instances values (null, "httpmap", "off");
insert into instances values (null, "coapmap", "off");
insert into instances values (null, "mqttmap", "off");
insert into instances values (null, "httpgen", "off");
insert into instances values (null, "coapgen", "off");
insert into instances values (null, "mqttgen", "off");
insert into instances values (null,'alarmfire','off');
insert into instances values (null,'alarmstorm','off');
insert into instances values (null,'alarmexplosion','off');
insert into instances values (null,'statusdata','ok');
insert into instances values (null,'statushttpmap','ok');
insert into instances values (null,'statusmqttmap','ok');
insert into instances values (null,'statuscoapmap','ok');
insert into instances values (null,'statuslink','ok');

insert into instances values (null, "4440ccf54a87", "on");
insert into instances values (null, "3bcbdea4140b", "on");
insert into instances values (null, "c1j914391ur9", "on");
insert into instances values (null, "kr8i1cdl485j", "on");
insert into instances values (null, "24infeqijewq", "on");
insert into instances values (null, "496159d8b5c5", "on");
insert into instances values (null, "23f3f2294b55", "on");
insert into instances values (null, "fj491i3mcejq", "on");
insert into instances values (null, "94j21k3mfaha", "on");
insert into instances values (null, "blrpto6201jf", "on");
insert into instances values (null, "106da925abbb", "on");
insert into instances values (null, "5da616613f20", "on");
insert into instances values (null, "vmgj4839iqj9", "on");
insert into instances values (null, "aqe0riv8rujw", "on");
insert into instances values (null, "qxjgv314h134", "on");




create table mydata(id int unsigned auto_increment primary key, hostname varchar(255), data varchar(255));


create table systemstatus (id int unsigned auto_increment primary key, mykey varchar(255), myvalue varchar(255));

insert into systemstatus values (null,"generators","0");
insert into systemstatus values (null,"mappers","0");
insert into systemstatus values (null,"ofrules","0");


