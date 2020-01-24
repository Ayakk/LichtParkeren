#button+led
from time import sleep
import RPi.GPIO as GPIO
import datetime as datetime
import mysql.connector

 

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

sleeptime = 15
#First Parking Spot
button1 = 7     #4 
Gled1 = 8       #14
Rled1 = 10      #15
#Second Parking Spot
button2 = 12    #18
Gled2 = 11      #17
Rled2 = 13      #27
#Third Parking Spot
button3 = 16
Gled3 = 18
Rled3 = 15
#Fourth Parking Spot
Gled4 = 24
Rled4 = 23
ldr = 21
laser = 26


def lightswitch(channel):
    'De functie voor de werking van de lichtsensor'
    if GPIO.input(channel):
        GPIO.output(Gled4, False )
        GPIO.output(Rled4, True)
    else:
        GPIO.output(Gled4, True)
        GPIO.output(Rled4, False)
    return


'Raspberry pi sensor input voor de database'
db = mysql.connector.connect(host='192.168.50.5',    # your host, usually localhost
user="root",         # your username
passwd="",  # your password
db="lichtparkeren")        # name of the data base

cur=db.cursor()
    
    
    
    
#1
GPIO.setup(Gled1, GPIO.OUT)
GPIO.setup(Rled1, GPIO.OUT)
GPIO.setup(button1, GPIO.IN, pull_up_down=GPIO.PUD_UP)
#2
GPIO.setup(Gled2, GPIO.OUT)
GPIO.setup(Rled2, GPIO.OUT)
GPIO.setup(button2, GPIO.IN, pull_up_down=GPIO.PUD_UP)
#3
GPIO.setup(Gled3, GPIO.OUT)
GPIO.setup(Rled3, GPIO.OUT)
GPIO.setup(button3, GPIO.IN, pull_up_down=GPIO.PUD_UP)
#4
GPIO.setup(Gled4, GPIO.OUT)
GPIO.setup(Rled4, GPIO.OUT)
#laser
GPIO.setup(laser, GPIO.OUT)
GPIO.output(laser, GPIO.HIGH)
#sensor
GPIO.setup(ldr, GPIO.IN)
GPIO.add_event_detect(ldr, GPIO.RISING, callback=lightswitch, bouncetime=200)


GPIO.output(Rled1,False)
spot1= GPIO.input(button1)
spot2= GPIO.input(button2)
spot3= GPIO.input(button3)
#spot4= GPIO.input(button4) 


try:
    while True:
        if GPIO.input(button1)==True:
            GPIO.output(Gled1,True)
            GPIO.output(Rled1,False)
            sql = 'UPDATE parking_data SET status= 0 WHERE position="A01"'
            cur.execute(sql)
            print('True')
        else:
            GPIO.output(Gled1, False)
            GPIO.output(Rled1, True)
            sql1 = 'UPDATE parking_data SET status=0 WHERE position="A01"'
            cur.execute(sql1)
            
            print('False')
        

        if GPIO.input(button2):
            GPIO.output(Gled2, True)
            GPIO.output(Rled2, False)
        else:
            GPIO.output(Gled2, False)
            GPIO.output(Rled2, True)
        
        sleep(0.5)
        
        if GPIO.input(button3):
            GPIO.output(Gled3, True)
            GPIO.output(Rled3, False)
        else:
            GPIO.output(Gled3, False)
            GPIO.output(Rled3, True)
       
        sleep(0.5)
        
        lightswitch(ldr)
        
        
except KeyboardInterrupt:
    pass

finally:
    GPIO.output(Gled1, False)
    GPIO.output(Gled2, False)
    GPIO.output(Gled3, False)
    GPIO.cleanup()