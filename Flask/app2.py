from flask import Flask
import serial
import psycopg2
import threading
import time
import config

app = Flask(__name__)

conn = psycopg2.connect(config.DATABASE_URI)
cursor = conn.cursor()

def read_serial_data():
    ser = serial.Serial(config.SERIAL_PORT, config.BAUD_RATE)
    while True:
        try:
            if ser.in_waiting > 0:
                speed_data = ser.readline().decode('utf-8').strip()
                
                if speed_data.isdigit():  # Pastikan data valid sebelum memasukkannya ke database
                    cursor.execute("INSERT INTO speed_data (id, speed) VALUES (1, %s)", (int(speed_data),))
                    conn.commit()
                    print(f"Speed data {speed_data} RPM saved to database.")
        except Exception as e:
            print(f"Error: {str(e)}")
        time.sleep(1)  # Delay untuk mengurangi penggunaan CPU

threading.Thread(target=read_serial_data, daemon=True).start()

@app.route('/status', methods=['GET'])
def status():
    return "Serial data is being read and stored in the database."

if __name__ == '__main__':
    app.run(debug=True)
