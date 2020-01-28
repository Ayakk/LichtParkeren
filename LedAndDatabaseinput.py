#Import aantal libary's
from time import sleep
import RPi.GPIO as GPIO
import datetime as datetime
import mysql.connector
'Connectie met de MySQL database'
connection = mysql.connector.connect(host='192.168.50.5',
                                         database='lichtparkeren',
                                         user='root',
                                         password='') 

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

sleeptime = 15
'First Parking Spot'
button1 = 7     #4 
Gled1 = 8       #14
Rled1 = 10      #15
'Second Parking Spot'
button2 = 12    #18
Gled2 = 11      #17
Rled2 = 13      #27
'Third Parking Spot'
button3 = 16
Gled3 = 18
Rled3 = 15
'Fourth Parking Spot'
Gled4 = 24
Rled4 = 23
ldr = 21
laser = 26

def data(status,place):
    'Past aan of plek bezet is of vrij is.'
    if connection.is_connected():
        db_Info = connection.get_server_info()
        print("Connected to MySQL Server version ", db_Info)
        cursor = connection.cursor()
        cursor.execute("select database();")
        record = cursor.fetchone()
        print("You're connected to database: ", record)
        query = """ UPDATE parking_data
                SET status = %s
                WHERE position = %s """
        payload = (status,place)
        cursor.execute(query, payload)
        connection.commit()
        print('status naar: ',status,'op plaats: ',place)
    return
    


def lightswitch(channel):
    'De functie voor de werking van de lichtsensor'
    if GPIO.input(channel):
        GPIO.output(Gled4, False )
        GPIO.output(Rled4, True)
        data(0,'B01')
    else:
        GPIO.output(Gled4, True)
        GPIO.output(Rled4, False)
        data(1,'B01')
    return


    
    
'Setup plek 1'
GPIO.setup(Gled1, GPIO.OUT)
GPIO.setup(Rled1, GPIO.OUT)
GPIO.setup(button1, GPIO.IN, pull_up_down=GPIO.PUD_UP)
'Setup plek 2'
GPIO.setup(Gled2, GPIO.OUT)
GPIO.setup(Rled2, GPIO.OUT)
GPIO.setup(button2, GPIO.IN, pull_up_down=GPIO.PUD_UP)
'Setup plek 3'
GPIO.setup(Gled3, GPIO.OUT)
GPIO.setup(Rled3, GPIO.OUT)
GPIO.setup(button3, GPIO.IN, pull_up_down=GPIO.PUD_UP)
'Setup plek 4 '
GPIO.setup(Gled4, GPIO.OUT)
GPIO.setup(Rled4, GPIO.OUT)
GPIO.setup(ldr, GPIO.IN)
GPIO.add_event_detect(ldr, GPIO.RISING, callback=lightswitch, bouncetime=200)



try:
    while True:
        'Parkingspot 1'
        if GPIO.input(button1)==True:
            GPIO.output(Gled1,True)
            GPIO.output(Rled1,False)
            data(1,'A01')
           
        else:
            GPIO.output(Gled1, False)
            GPIO.output(Rled1, True)
            data(0,'A01')
            
        
        'Parkingspot 2'
        if GPIO.input(button2):
            GPIO.output(Gled2, True)
            GPIO.output(Rled2, False)
            data(1,'A02')
        else:
            GPIO.output(Gled2, False)
            GPIO.output(Rled2, True)
            data(0,'A02')
        sleep(0.5)
        'Parkingspot 3'
        if GPIO.input(button3):
            GPIO.output(Gled3, True)
            GPIO.output(Rled3, False)
            data(1,'A03')
        else:
            GPIO.output(Gled3, False)
            GPIO.output(Rled3, True)
            data(0,'A03')
        sleep(0.5)
        'Parkingspot 4'
        lightswitch(ldr)
        
        
except KeyboardInterrupt:
    pass

finally:
    GPIO.output(Gled1, False)
    GPIO.output(Gled2, False)
    GPIO.output(Gled3, False)
    GPIO.cleanup()
