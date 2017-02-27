#!/bin/bash

echo "===Starting ssh_command.sh==="

echo "tobyMAC123" | sudo -S -u pi nohup /var/www/PersonalWebsite_Astral/ark/arkupdater.sh &
disown

echo "Server should be up up within 1 minute"
echo "Please wait at least 5 minutes before trying again"

echo "===Exiting ssh_command.sh==="

