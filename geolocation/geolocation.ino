#include <TinyGPS++.h>
#include <HardwareSerial.h>

TinyGPSPlus gps;
HardwareSerial SerialGPS(1);  // Use Serial1 for ESP32

void setup() {
  Serial.begin(115200);
  SerialGPS.begin(9600);  // Replace with your GPS module's baud rate
}

void loop() {
  while (SerialGPS.available()) {
    char c = SerialGPS.read();
    if (gps.encode(c)) {
      displayInfo();
    }
  }
}

void displayInfo() {
  if (gps.location.isValid()) {
    Serial.print(F("Location: "));
    Serial.print(F("Lat: "));
    Serial.print(gps.location.lat(), 6);
    Serial.print(F(", Lng: "));
    Serial.println(gps.location.lng(), 6);
  } else {
    Serial.println(F("INVALID"));
  }
}
