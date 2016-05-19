# -*- coding: utf-8 -*-

import os
for line in os.popen("lastb -n 10 | awk -F ' ' '/ssh/{print $3}'").readlines():
	if line not in os.popen("iptables -L -n -v | awk -F ' ' '/DROP/{print $8}'").read():
		print line
		print 'iptables -I INPUT -s %s -j DROP'%line.strip('\n')
		os.system('iptables -I INPUT -s %s -j DROP'%line.strip('\n'))

