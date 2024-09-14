#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x3F, 20, 4); //jika gagal ganti alamat jadi 0x27

void setup() {
  lcd.begin();
}

void loop(){
  lcd.setCursor(0,0);
  lcd.print("TEST LCD i2C");
  lcd.setCursor(0,1);
  lcd.print("KelasRobot.com");
  lcd.setCursor(0,2);
  lcd.print("Belajar Robot Itu");
  lcd.setCursor(0,3);
  lcd.print("Mudah & Menyenangkan");
}
