# send-sms-with-gammu-php-mysql
Send single or multiple (a lots characters) sms (SMS 1 for 2 and SMS 2 for 2).

# Setting modem
1. See modem supports gammu on https://wammu.eu/phones/ . for check your version gammu, you can using terminal or CMD using: gammu version
2. Download gammu on https://wammu.eu/download/gammu (if version gammu not support your modem you can search version gammu on last version)
3. extract / install file source gammu (ex: C:/gammu)
4. Search files gammurc and smsdrc , copy to folder c:/gammu/bin
5. Check your port modem on Windows Device Manager
6.  Edit file gammurc 
     [gammu]
    device = com4:
    connection = at19200

   note: device = com4, ex port modem
7. Open CMD or terminal, go to directori /gammu/bin/
8. run gammu --identify
9. try send sms with command: gammu --sendsms text 0899xxxxx and Enter

# Integration Gammu with Database Mysql
1. Edit file smsdrc on folder C:/gammu/bin
 [gammu]
# port modem
port = com4:
# connection type
connection = at19200
[smsd]
service = mysql
logfile = gammulog
debuglevel = 0
phoneid = modem1
commtimeout = 30
sendtimeout = 600
send = yes
receive = yes
checksecurity = 0
#PIN = 1234
# -----------------------------
# config connection to MySQL
# -----------------------------
pc = localhost
user = root
password =
database = gammu

2. Search file mysql.sql from source gammu you downloaded
3. Import file sql gammu, to your database mysql
4. Restart Service gammu
5. Finish, you can testing send sms with php with my script (Tested and success with Codeigniter Mysql)

# If Error
1. Version gammu not support with your device
2. Wrong gammu setting (port, connection type, config connect database )