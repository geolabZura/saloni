#!/bin/bash
BLACK='\033[0:30m'
RED='\033[0;31m'
Green='\033[0;32m'
BROWN='\033[0;33m'
BLUE='\033[0;34m'
PURPLE='\033[0;35m'
CYAN='\033[0;36m'
LIGHT_GREY='\033[0;37m'
DARK_GREY='\033[1;30m'
LIGHT_RED='\033[1;31m'
LIGHT_GREEN='\033[1;32m'
YELLOW='\033[1;33m'
LIGHT_BLUE='\033[1;34m'
LIGHT_PURPLE='\033[1;35m'
LIGHT_CYAN='\033[1;36m'
WHITE='\033[1;37m'
NC='\033[0m'

main(){
printf "
    ******LAMP INSTALLATION ASSISTENT******

Installation Of Lamp, Composer And Laravel: 

    ${BROWN}LAMP AND LARAVEL INSTALATTION
        ${YELLOW}--install ${NC}      ${YELLOW}--lamp${NC}         ${RED}###install only lamp!
                        ${YELLOW}--lamp_laravel${NC} ${RED}###install lamp and laravel!
                        ${YELLOW}--laravel${NC}      ${RED}###install only laravel!

    ${BROWN}JS INSTALATTION             
        ${YELLOW}--install ${NC}      ${YELLOW}--node_npm${NC}     ${RED}###install nodejs and npm!
                        ${YELLOW}--js${NC}           ${RED}###install nodejs, npm, react, and angular!

    ${BROWN}LARAVEL PROJECT INSTALL
        ${YELLOW}--install ${NC}      ${YELLOW}--laravel_host${NC} ${RED}###install laravel project(also make virtual host):

    ${BROWN}LAMP ASSISTENT HELPER:
        ${YELLOW}exit${NC}                           ${RED}###exit from lamp installator
        ${YELLOW}clear${NC}                          ${RED}###clear lamp assistent working space(like terminal clear)
        ${YELLOW}doc${NC}                            ${RED}###get lamp assistent documentation
    \n
"
}
lampLaravelInstallation(){
    #only lamp installer
    lampInstallation

    sudo chown -R $USER /home/sasuke/.composer/
    sudo chown -R $USER /var/www/
    composer global require "laravel/installer"
    export PATH="~/.composer/vendor/bin:$PATH" 
    printf "${RED}Laravel Installed Successfully!${CYAN} \n"
}
lampInstallation(){
    sudo apt-get update -y && sudo apt-get upgrade -y
    printf "${RED}System Updated And Upgraded Successfully!${CYAN} \n"

    sudo apt-get install curl
    sudo apt-get install zip unzip
    
    sudo apt-get install apache2 apache2-doc apache2-utils libexpat1 ssl-cert -y
    sudo systemctl restart apache2
    printf "${RED}Apache Installed Successfully!${CYAN} \n"

    sudo apt-get -y install apache2 php7.0 libapache2-mod-php7.0 php7.0-mcrypt php7.0-curl php7.0-mysql php7.0-gd php7.0-cli php7.0-dev mysql-client
    sudo systemctl restart apache2
    sudo chown $USER /var/www/html/
    sudo echo "<?php phpinfo(); ?>" > /var/www/html/index.php
    xdg-open "http://localhost/index.php"
    printf "${RED}Php 7 Installed Successfully!${CYAN} \n"

    sudo apt-get install mysql-server mysql-client -y
    printf "${RED}Mysql Installed Successfully!${CYAN} \n"

    sudo apt-get install phpmyadmin php-mbstring php-gettext
    sudo phpenmod mcrypt
    sudo phpenmod mbstring
    sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf
    sudo a2enconf phpmyadmin 
    sudo systemctl restart apache2
    printf "${RED}phpmyadmin Installed Successfully!${CYAN} \n"

    curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
    printf "${RED}Composer Installed Successfully!${CYAN} \n"
}
laravelInstallation(){
    sudo apt-get install curl
    curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
    printf "${RED}Composer Installed Successfully!${CYAN} \n" 

    sudo chown -R $USER /home/sasuke/.composer/
    sudo chown -R $USER /var/www/
    composer global require "laravel/installer"
    export PATH="~/.composer/vendor/bin:$PATH" 
    printf "${RED}Laravel Installed Successfully!${CYAN} \n"
}
laraveProjectVirtualHostConfiguration(){
    cd /var/www/
    export PATH="~/.composer/vendor/bin:$PATH"
    file="/var/www/$1.dev"
    fileName=$1;
    hostName=".dev"
    conf=".conf"

    if [ -e "$file" ]
    then 
        if [ -e "/etc/apache2/sites-available/$1.dev.conf" ]
        then
            printf "   ${RED}Current $1.dev Site Was Configed And You Can Use It!${CYAN} \n"
            addNewDataBaseByProject
            
            xdg-open "http://$1.dev"
        else
            #host maker function
            laravelProjectHost $1 $hostName
            addNewDataBaseByProject
            xdg-open "http://$1.dev"
        fi
    else
        laravel new $1".dev"
        #host maker function
        laravelProjectHost $1 $hostName
        addNewDataBaseByProject
        xdg-open "http://$1.dev"
    fi    
}
laravelProjectHost(){
    sudo chown -R $USER /var/www/
    sudo chmod 777 /var/www/$1".dev"/artisan 

    sudo chgrp -R www-data /var/www/$1".dev"/storage
    sudo chgrp -R www-data /var/www/$1".dev"/bootstrap/cache
    sudo chmod -R 777 /var/www/$1".dev"/storage
    # sudo chmod -R ug+rwx /var/www/$1".dev"/storage
    # sudo chmod -R ug+rwx /var/www/$1".dev"/bootstrap/cache
    sudo chmod -R 775 /var/www/$1".dev"/storage
    sudo chmod -R 775 /var/www/$1".dev"/bootstrap/cache

    sudo touch /etc/apache2/sites-available/$1$hostName$conf
    sudo chmod 777 /etc/apache2/sites-available/$1$hostName$conf
    sudo echo "
        <VirtualHost *:80>
            ServerAdmin admin@$fileName.com
            ServerName $1.dev
            ServerAlias www.$1.dev
            DocumentRoot /var/www/$1.dev/public
            <Directory /var/www/$1.dev/public/>
                Options FollowSymLinks
                AllowOverride All
                Order allow,deny
                allow from all
            </Directory>
            ErrorLog ${APACHE_LOG_DIR}/error.log
            CustomLog ${APACHE_LOG_DIR}/access.log combined
        </VirtualHost>" > /etc/apache2/sites-available/$1$hostName$conf

    sudo chmod 777 /etc/hosts
    echo 127.0.0.1 $1$hostName >> /etc/hosts
    sudo a2ensite $1$hostName".conf"
    sudo service apache2 restart
    printf "   ${RED}Current $1.dev Site Is Configed And You Can Use It!${CYAN} \n"
    # xdg-open "http://$1.dev"
}
addNewDataBaseByProject() {
    printf "   ${RED}Do You Wanna Create Database For This Project? (y/n)${CYAN}:"
    read answerForDBMake
    while true
    do
        if [ "$answerForDBMake" == "y" ]; then

            printf "   ${RED}Enter MYSQL root password:${CYAN} "
            read -s mysqlRootPassword
            while ! mysql -uroot -p$mysqlRootPassword  -e ";" ; do
                printf "   ${RED}Can't connect, please retry:${CYAN} "
                read -s mysqlRootPassword
                if [ "$mysqlRootPassword" == "exit" ]; then
                    printf "   ${RED}Exit From Mysql Connection! This Mean That Database For This Project Haven't Created!${CYAN} \n"
                    break
                fi
            done
            
            Result=`mysql -uroot -p${mysqlRootPassword} --skip-column-names -e "show databases like '${fileName}_base'"`
            if [ "$Result" != "${fileName}_base" ]; then
                mysql -uroot -p${mysqlRootPassword} -e "CREATE DATABASE IF NOT EXISTS ${fileName}_base; "
                printf "\n${RED}The Database '${fileName}_base' Created  Successfully! ${CYAN} \n"
                break
            else
                printf "\n${RED}Table ${fileName}${hostName}_base Existed! ...${CYAN} \n"
                break
            fi
            
        elif [ "$answerForDBMake" == "n" ]; then
            printf "\n${RED}Table Willn't Be Created By Your Choise! ...${CYAN}\n"
            break
        else
            printf "   ${RED}Do You Wanna Create Database For This Project? (y/n)${CYAN}:"
            read answerForDBMake
        fi
    done
}
nodejsAndNpm(){
    sudo apt-get install curl
    v=8
    curl -sL https://deb.nodesource.com/setup_$v.x | sudo -E bash -
    sudo apt-get install -y nodejs
    printf "${RED}NodeJs And Npm Installed Successfully!\n node version:"
    node -v
    printf " npm version:"
    npm -v
    printf "${CYAN}"
}
installAllJs(){
    nodejsAndNpm
    sudo npm install -g @angular/cli
    sudo npm install -g create-react-app
}


main

while true
do
    printf "${CYAN}YOU: "
    read answer

    case ${answer[@]} in 
        "--install --lamp") lampInstallation ;;
        "--install --lamp_laravel")  lampLaravelInstallation ;;
        "--install --laravel") laravelInstallation ;;
        "--install --laravel_host")
            while true
                do
                    printf "   ${LIGHT_RED}Please Enter Your Project Name:${NC}" 
                    read project_name
                    if [ -z "$project_name" ]
                    then
                        continue
                    elif [ "$project_name" == "*" ]
                    then
                        printf "   ${RED}exit laravel project installation.${NC}"
                        break
                    else
                        laraveProjectVirtualHostConfiguration $project_name
                        break
                    fi
                done
        ;;
        "--install --node_npm") nodejsAndNpm ;;
        "--install --js") installAllJs ;;
        "clear") clear ;;
        "doc") main ;;
        "exit") printf "${YELLOW}Exit From Lamp Assistent, Good Buy! \n\n" 
            exit ;;
        *)  printf "${RED}This Lamp Assistent Order Do Not Exist! \n" 
    esac
done
