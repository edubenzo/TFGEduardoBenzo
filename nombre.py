import os
import sys
TEXTO="ssid="+sys.argv[1]+"\n"
linea = open("/etc/hostapd/hostapd.conf", "r").readlines()[2]
fin = open("/etc/hostapd/hostapd.conf")
fout = open("b.txt", "wt")
for line in fin:
       fout.write( line.replace(linea, TEXTO) )
fin.close()
fout.close()
os.system("sudo rm /etc/hostapd/hostapd.conf")
os.system("sudo mv b.txt /etc/hostapd/hostapd.conf")
