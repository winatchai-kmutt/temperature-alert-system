#include <ESP8266WiFi.h>
#include "DHT.h"
DHT dht;

const char* ssid     = "glp705_mi6_2.4g";
const char* password = "green906";
const char* host = "192.168.31.207";

void setup()
{
    Serial.begin(9600);
    Serial.println("DHT11 Output!");
    dht.setup(2);

    Serial.println();
    Serial.println();
    Serial.print("Connecting to ");
    Serial.println(ssid);

    WiFi.begin(ssid, password);

    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
    }

    Serial.println("");
    Serial.println("WiFi connected");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
}



void loop()
{
  
  float temperature = dht.getTemperature();
  float humidity = dht.getHumidity();  
  if(isnan(temperature) || isnan(humidity)){
    Serial.println("Failed to read DHT11");
  }else{
    Serial.print("Humidity: ");
    Serial.print(humidity);
    Serial.print(" %\t");
    Serial.print("Temperature: ");
    Serial.print(temperature);
    Serial.println(" *C");
    delay(3000);
  }
   
    Serial.print("connecting to ");
    Serial.println(host);

    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
        Serial.println("connection failed");
        return;
    }
 client.print(String("GET http://localhost/linenotify/insertT&HFromModule.php?") + 
                          ("&temperature=") + temperature +
                          ("&humidity=") + humidity +
                          " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" +
                 "Connection: close\r\n\r\n");
    unsigned long timeout = millis();
    while (client.available() == 0) {
        if (millis() - timeout > 1000) {
            Serial.println(">>> Client Timeout !");
            client.stop();
            return;
        }
    }

    while(client.available()) {
        String line = client.readStringUntil('\r');
        Serial.print(line);
        
    }
    Serial.println();
    Serial.println("closing connection");
}
