#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
const char* ssid = "KelasRobot.com";
const char* password = "k3l4sr0b0t";
String url = "http://192.168.0.102/kwhmeter/api/create.php";

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  Serial.print("Connecting to WiFi");
  while (WiFi.status() != WL_CONNECTED) {
    delay(500); Serial.print(".");
  }
  Serial.print("OK! IP=");
  Serial.println(WiFi.localIP());

  HTTPClient http;
  
  http.begin(url);
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");
  String httpRequestData = "nilai1=120&nilai2=340";
  int httpResponseCode = http.POST(httpRequestData);

  if (httpResponseCode > 0) {
    Serial.print("HTTP ");
    Serial.println(httpResponseCode);
    String payload = http.getString();
    Serial.println();
    Serial.println(payload);
  }
  else {
    Serial.print("Error code: ");
    Serial.println(httpResponseCode);
    Serial.println(":-(");
  }
}

void loop() {}
