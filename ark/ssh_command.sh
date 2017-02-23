#!/bin/bash

sshpass -p "dickbutt" ssh -tt ark:dickbutt@73.181.247.193 << ENDHERE
cd /home/ark/epicsrvrmgr/ark
./stopUpdateStart.sh
ENDHERE
