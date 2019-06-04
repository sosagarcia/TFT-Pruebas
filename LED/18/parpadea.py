#!usr/bin/env/ python
# parpadea.py
# Importamos la libreria y le cambiamos el nombre a GPIO
import RPi.GPIO as GPIO

# Necesario para los delays
import time

# Establecemos el sistema de numeracion que queramos,
# en este caso el sistema BCM
GPIO.setmode(GPIO.BCM)

# Configuramos el pin GPIO 4 como una salida
GPIO.setup(18, GPIO.OUT)

# Encendemos y apagamos el led 5 veces
tiempo = 0.01
for i in range(0, 100):

    GPIO.output(18, GPIO.HIGH)
    time.sleep(tiempo)
    GPIO.output(18, GPIO.LOW)
    time.sleep(tiempo)

# Y liberamos los GPIO

GPIO.cleanup()
# archivo-salida.py
f = open('holamundo1.txt', 'w')
f.write('hola mundo1')
f.close()
