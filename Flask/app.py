from flask import Flask, request
import serial

app = Flask(__name__)

try:
    ser = serial.Serial('COM5', 9600)
except serial.SerialException as e:
    print(f"Error opening serial port: {e}")
    ser = None

@app.route('/START_SERVO', methods=['POST'])
def start_servo():
    if ser is None:
        return {"status": "error", "message": "Serial port not available"}, 500

    try:
        ser.write(b'START_SERVO\n')
        return {"status": "success", "message": "Servo started"}, 200
    except Exception as e:
        return {"status": "error", "message": str(e)}, 500

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
