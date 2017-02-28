#!/bin/bash

echo "===Starting arkupdater.sh==="

sudo -u pi sshpass -p "dickbutt" ssh -tt ark:dickbutt@73.181.247.193 << ENDHERE
cd /home/ark/epicsrvrmgr/ark
./stopUpdateStart.sh

echo "===Exiting arkupdater.sh==="
exit
ENDHERE
