#!/bin/bash
#this will create the necessary directories for the speedtest script.
mkdir ./Documents/Speedscript
#go to directory
cd ./Documents/Speedscript
#fill tester file
echo "#!/bin/bash

# first we get the file and pip it to //speedtest.txt
#need to figure out dynamic path to file.  Will set in installer
wget -O /dev/null http://speedtest.wdc01.softlayer.com/downloads/test10.zip 2>  ./Documents/Speedscript/speedtest.txt
#pipe last line(the one we want) to Speedsheet.txt (probably a better way to do this)
tail -2 ./Documents/Speedscript/speedtest.txt >> ./Documents/Speedscript/speedsheet.txt 
#this is it really, need to work on a good way to display this.  Maybe  QT?" >> tester.sh




