# The Hamilton Kerr Institute Winsor and Newton Archive

This repository contains a Laravel 5.6 port of the Winsor and Newton Archive. The original site was written in an old
PHP version and was reported as XSS compromised. This port of the code has transferred the original look of the website 
into a more modern version with SOLR as a search index rather than a MySQL full text search. 

To install basic code base:

    git clone https://github.com/FitzwilliamMuseum/winsorAndNewtonArchive
    composer install
    
To install solr 7.4:

