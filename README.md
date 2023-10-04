# Simple-remote-online-radio
A simple php page to play online radio through speakers when a get call is made to an Apache server in the Raspberry Pi.

FOR PERSONAL BACKUP PURPOSES ONLY - THE CODE HAS NOT SECURITY WHATSOEVER (IN CASE YOU WANT TO USE IT)

## Background information on my setup:

1) Rapsberry Pi is connected to speakers. I use it to play selected online radios and wanted to do it without an SSH connection.
2) The Raspberry Pi has an Apache webserver up, with several PHP files representing different actions (turn on, turn off radios)
    (EXAMPLES OF THE PHP FILES INCLUDED IN THE REPOSITORY)
3) A ESP32 microcontroller is always on elsewhere at my apartment. I intended it to continuosly monitor IR remotes and perform certain tasks.
4) The sketch loaded to the ESP performs an action (GET call to the Raspberry Pi's IP address) when a trigger is received (i.e. a certain IR code is received by the IR sensor)
    (RELEVANT PARTS OF THE ESP32/ARDUINO CODE INCLUDED IN THE REPOSITORY)

## Additional packages needed and notes

- PHP is needed. php5-cli appears to work in a new install from scratch and libapache2-mod-php7.4 or similar is also needed to execute the php files from browser.
- Had to add shebangs to php files. Not sure how it worked before
- Faced privileges issues. The user www-data had to be given privileges to run the scripts. Check if adding www-data to sudo and audio is necessary.
