# The Hamilton Kerr Institute Winsor and Newton Archive

This repository contains a Laravel 5.6 port of the Winsor and Newton Archive for the . 
The original site was written in an old PHP version and was reported as XSS compromised. This port of the code has 
transferred the original look of the website into a more modern version with SOLR as a search index rather than a MySQL 
full text search. No cosmetic changes have been made and it remains non-mobile friendly at the moment.
 
** It is not intended that this is developed further in this format ** 

This assumes that you will be installing onto an Ubuntu VM with LTS (16.04 or 18.04)

To install basic code base:

    cd /var/www/
    git clone https://github.com/FitzwilliamMuseum/winsorAndNewtonArchive
    composer install
    
The vhosts config file will then need editing:

    sudo nano /etc/apache2/sites-available/{hostName}

Enter the following for http:

    <VirtualHost *:80>
        DocumentRoot "/var/www/winsorAndNewtonArchive/public"
        ServerName {domain name}
        <Directory "/var/www/winsorAndNewtonArchive/public">
                AllowOverride All
                Options +FollowSymLinks +Indexes
                Order allow,deny
                Allow from all
        </Directory>
    </VirtualHost>
    
Restart apache2:

    sudo service apache2 restart
    
    
## Search index installation

The original system used a search form that pulled data from a MySQL instance. This has now been bypassed and uses Solr 
7.4 for the search index and the Solarium PHP library. To install this you will need to pull code from another repository 
as detailed below. Once installed you should be ready to go.
    
To install solr 7.4 you need Java 8 on your system. 
    
    java -version

Check the output comes back with

    java version "1.8.0_144"

Now:

    cd /opt
    wget http://www-eu.apache.org/dist/lucene/solr/7.4.0/solr-7.4.0.tgz
    tar xzf solr-7.4.0.tgz solr-7.4.0/bin/install_solr_service.sh --strip-components=2
    sudo bash ./install_solr_service.sh solr-7.4.0.tgz
    
Change to sudo user:
    
    sudo su - 
    
From here on assume you will be as sudo to solr user:
 
    sudo su - solr -c "/opt/solr/bin/solr create -c winsor -n data_driven_schema_configs"
    sudo su - solr -c "/opt/solr/bin/solr create -c winsorSearches -n data_driven_schema_configs"

Now set up your config for these cores.

    git clone https://github.com/FitzwilliamMuseum/winsorAndNewtonArchiveSolr
    mv winsorAndNewtonArchiveSolr/winsor/conf winsor/
    mv winsorAndNewtonArchiveSolr/winsorSearches/conf winsorSearches/
    mv winsorAndNewtonArchiveSolr/rawdata /home/data
    rm -r winsorAndNewtonArchiveSolr/
    
Restart solr

    service solr restart
    
To check if solr is running

    service solr status
    
Now import the data to system from the csv files associated.

    /opt/solr/bin/post -c winsor /home/data/data_7.csv
    /opt/solrbin/post -c winsorSearches /home/data/searches.csv
    
To stop and start solr

    service solr stop|start
    
## License
  
This code is licensed under GPL3
 
## Authors

The current code was rewritten for a Laravel port by Daniel Pett and builds on work by previous Fitzwilliam staff.


    