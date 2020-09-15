import pymysql
import sys
import os
import datetime
from datetime import datetime
conn = pymysql.connect(
    user="FamilySafe",
    password="root",
    host="localhost",
    database="baselogin")
now = datetime.now()
horaActual=now.hour
diaActual=now.weekday()
cur = conn.cursor()
g=[]
os.system('sudo iptables -P INPUT ACCEPT')
os.system('sudo iptables -P FORWARD ACCEPT')
os.system('sudo iptables -P OUTPUT ACCEPT')
os.system('sudo iptables -t nat -F')
os.system('sudo iptables -F')
os.system('sudo iptables -X')
os.system('sudo iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE')
cur.execute("SELECT id FROM grupos")
for [id] in cur.fetchall():
	g.append(id)
cur.execute("SELECT MAC, id_grupo FROM dispositivos ")
for MAC, id_grupo in cur:
	os.system('sudo iptables -t mangle -I PREROUTING -m mac --mac-source '+MAC+ ' -j MARK --set-mark '+str(id_grupo))
cur.execute('SELECT id_grupo FROM wifi WHERE hora='+str(horaActual)+' AND dia='+str(diaActual))
for [id_grupo] in cur.fetchall():
	os.system('iptables -t nat -I PREROUTING -m mark --mark '+str(id_grupo)+' -p udp --dport 53 -j DNAT --to-destination=208.67.222.222')
	g.remove(id_grupo)
for i in g:
	os.system('sudo iptables -I FORWARD 1 -i wlan0 -o eth0 -m mark --mark '+str(i)+' -j DROP')
conn.close()
