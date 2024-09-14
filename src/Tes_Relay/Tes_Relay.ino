void setup() {
  pinMode(D5, OUTPUT);
}

void loop() {
  digitalWrite(D5, HIGH);
  delay(3000);
  digitalWrite(D5, LOW);
  delay(3000);
}
