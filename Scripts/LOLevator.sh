#!/bin/bash
     
    process=`pidof LolClient.exe`
     
    if [ -z $process ]; then
            echo No League of Legends instance detected.  Has your game started loading yet?
     
    else
            taskset -p 1 $process
    fi
     
    # Done!


