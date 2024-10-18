import serial

# Ganti 'COM3' dengan port COM yang benar
ser = serial.Serial('COM3', 115200)  # 9600 adalah baud rate umum

while True:
    data = ser.readline().decode('utf-8').strip()
    speed = ser.readline().decode('utf-8').rstrip()
    if speed:
        print(f"Received: {speed}")
    else :
        print("data tidak terkirim")