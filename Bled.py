#button+led
from time import sleep
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

sleeptime = 0.1
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
#ldr = LightSensor(21)
Gled4 = 24
Rled4 = 23
ldr = 21
laser = 26


def lightswitch(channel):
 #   if ldr == True:
    if GPIO.input(channel):
        GPIO.output(Gled4, False )
        GPIO.output(Rled4, True)
    else:
        GPIO.output(Gled4, True)
        GPIO.output(Rled4, False)
    return
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

#def ldrInput(ldr):
#    count = 0
#   
#    GPIO.setup(ldr, GPIO.OUT)
#    GPIO.output(ldr, GPIO.LOW)
#    sleep(0.1)
#    
#    GPIO.setup(ldr, GPIO.IN)
#    while (GPIO.input(ldr)== GPIO.LOW):
#        count += True
 #        if count>=3000:
 #            GPIO.output(Rled4,True)
 #        else:
 #        GPIO.output(Gled4,True)
#        
#    return count
        


try:
    while True:
        GPIO.output(Gled1,GPIO.input(button1))
        GPIO.output(Rled1,not GPIO.input(button1))
        sleep(0.1)
    
        GPIO.output(Gled2,GPIO.input(button2))
        GPIO.output(Rled2,not GPIO.input(button2))
        sleep(0.1)
        
        GPIO.output(Gled3,GPIO.input(button3))
        GPIO.output(Rled3,not GPIO.input(button3))
        sleep(0.1)
        
        lightswitch(ldr)
#        print(ldrInput(ldr))
except KeyboardInterrupt:
    pass

finally:
    GPIO.output(Gled1, False)
    GPIO.output(Gled2, False)
    GPIO.output(Gled3, False)
    GPIO.cleanup()