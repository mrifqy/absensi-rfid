#include <ESP8266HTTPClient.h>
#include <ESP8266Wifi.h>
#include <SPI.h>
#include <MFRC522.h>

// Network SSID

const char* ssid = "POCO M4 Pro";
const char* password = "gataulupa";

// pengenal server = IP Address
const char* host = "192.168.187.239"; //isi ip address

#define led D3
#define button D4
#define buzzer D2  
#define sda D8
#define rst D0

MFRC522 mfrc522(sda,rst);
MFRC522::MIFARE_Key key;
// Init array that will store new NUID
byte nuidPICC[4];

HTTPClient http;
WiFiClient client;

void setup() {
  Serial.begin(9600);

  //setting koneksi wifi
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);

  //cek koneksi wifi
  while(WiFi.status() != WL_CONNECTED) 
  {
    delay(500);
    Serial.println("*");
  }

  Serial.println("Connected");
  Serial.print("IP Address : ");
  Serial.println(WiFi.localIP());

  pinMode(led, OUTPUT);
  pinMode(button, OUTPUT);

  SPI.begin();
  mfrc522.PCD_Init();
  Serial.println("Dekatkan kartu ke sensor");
  Serial.println();



}

void loop() {
  //baca status button, + uji
  if(digitalRead(button)==1)
  {
    // led on
    digitalWrite(led, HIGH);
    tone(buzzer,100); 
    delay(1000);
    noTone(buzzer); 
    //menahan proses sampai tombol ditekan lagi
    while(digitalRead(button) == 1);
    //ubah mode absensi di web
    String getData, Link;
    //HTTPClient http;

    Link = "http://192.168.187.239/absensi_RFID/ubahmode.php";
    http.begin(client, Link);

    int httpCode = http.GET();
    String payload = http.getString();
    Serial.println(payload);
    http.end();
  }

  //off led
  digitalWrite(led, LOW);

  if(! mfrc522.PICC_IsNewCardPresent())
  {
    return;
  }
  if(! mfrc522.PICC_ReadCardSerial())
  {
    return;
  }

  String idtag = "";
  for(byte i=0; i<mfrc522.uid.size; i++)
  {
    idtag += mfrc522.uid.uidByte[i];
  }
  Serial.println(idtag);
  delay(1000);

  //led on
  digitalWrite(led, HIGH);
  tone(buzzer,100); 
  delay(1000);
  noTone(buzzer);

  // send id kartu untuk disimpan di tmprfid
  //WiFiClient client;
  const int httpPort = 80;
  if(!client.connect(host, httpPort))
  {
    Serial.println("Not Connected");
    return;
  }
  else Serial.println("Connected WiFi");

  String Link;
  //HTTPClient http;
  Link = "http://192.168.187.239/absensi_RFID/kirimkartu.php?nokartu=" + idtag; 
  http.begin(client,Link);

  int httpCode = http.GET();
  String payload = http.getString();
  Serial.println(payload);
  http.end();

  delay(3000);

}
