#!/bin/sh -e

if [ "$(id -u)" != "0" ]; then
   echo "This script must be run as root." 1>&2
   exit 1
fi

sudo apt-get update

echo "Installing dependencies..."

apt-get install macchanger
apt-get install hostapd
apt-get install dnsmasq
apt-get install apache2
apt-get install php5


echo "Skipping NodeJS for now Egiş"

echo "Configuring components..."
cp -f hostapd.conf /etc/hostapd/
cp -f dnsmasq.conf /etc/
cp -Rf html /var/www/
chown -R www-data:www-data /var/www/html
chown root:www-data /var/www/html/.htaccess
cp -f rc.local /etc/
cp -f override.conf /etc/apache2/conf-available/
cd /etc/apache2/conf-enabled
ln -s ../conf-available/override.conf override.conf
cd /etc/apache2/mods-enabled
ln -s ../mods-available/rewrite.load rewrite.load

echo "Rogue captive portal installed. Reboot to execute."
exit 0
