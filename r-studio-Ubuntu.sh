	

    #!/bin/bash
    #This script will install the most recent version of R
    #located at http://cran.us.r-project.org/
    #this script must be run as root


    echo "deb http://cran.cnr.Berkeley.edu/bin/linux/ubuntu $(grep CODENAME /etc/lsb-release | cut -d "=" -f2)/" | sudo tee -a /etc/apt/sources.list
     
    apt-get update
     
    apt-get install r-base
     
    #end



