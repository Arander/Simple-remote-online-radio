if ((WiFi.status() == WL_CONNECTED)) { //Check the current connection status
    
        HTTPClient http;
    
        http.begin("http://192.168.1.91/40norway.php"); //Specify the URL
        int httpCode = http.GET();                      //Make the request
    
        if (httpCode > 0) { //Check for the returning code
    
          String payload = http.getString();
          Serial.println(httpCode);
          Serial.println(payload);
          }
    
        else {
        Serial.println("Error on HTTP request");
        }
    
        http.end(); //Free the resources
        }
        streaming_on = 1; //We set the flag
        strcpy(accion, "40 NORWAY"); // Print current radio in OLED Display