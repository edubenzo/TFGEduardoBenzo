#! /usr/bin/env python
import os
import sys
TEXTO="wpa_passphrase="+sys.argv[1]+"\n"
linea = open("/etc/hostapd/hostapd.conf", "r").readlines()[9]
fin = open("/etc/hostapd/hostapd.conf")
fout = open("/home/pi/b.txt", "wt")
for line in fin:
       fout.write( line.replace(linea, TEXTO) )
fin.close()
fout.close()
os.system("rm /etc/hostapd/hostapd.conf")
os.system("mv /home/pi/b.txt /etc/hostapd/hostapd.conf")
os.system("chmod 777 /etc/hostapd/hostapd.conf") 
