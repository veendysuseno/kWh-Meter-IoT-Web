#define buzzer D6

void buzz(int jumlah, int Delay) {
  for (int i = 0; i < jumlah; i++) {
    digitalWrite(buzzer, HIGH);
    delay(Delay);
    digitalWrite(buzzer, LOW);
    delay(Delay);
  }
}

void setup() {
  pinMode(buzzer, OUTPUT);
  buzz(10, 500);
}

void loop() {

}
