package com.jaeger.vv;

import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Calendar;
import java.util.List;

import com.fasterxml.jackson.core.JsonParseException;
import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.databind.JsonMappingException;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;
import com.fasterxml.jackson.databind.node.ObjectNode;

/**
 * Hello world!
 *
 */
public class App 
{

	boolean tagPhotography;
	boolean tagGaming;
	boolean tagUtilities;
	
    public static void main( String[] args ) {
    	App jaeger = new App();
    	ObjectMapper mapper = new ObjectMapper();
    	JsonParser src;
		List<Tes> list;
		try {
//			list = mapper.readValue(new File("C:\\Users\\Zachary\\Downloads\\daftar_hp_google.json"), new TypeReference<List<Smartphone>>(){});
//			list = mapper.readValue(new File("C:\\Users\\Zachary\\Downloads\\tes.json"), new TypeReference<List<Tes>>(){});
//			JsonNode rootArray = mapper.readTree(new File("C:\\Users\\Zachary\\Downloads\\daftar_hp_google.json"));
			JsonNode rootArray = mapper.readTree(new File("x.json"));
			
			for (JsonNode node : rootArray) {
				String type = node.path("Title").asText();
				String ref = node.path("OS").asText();
				String reso = node.path("Resolution").asText().toLowerCase();
				
				String gpu = node.path("gpu").asText().toLowerCase();
				String cpu = node.path("cpu").asText().toLowerCase();
				String memory = node.path("Internal").asText().toLowerCase();
				String sensors = node.path("Sensors").asText().toLowerCase();
				String cameraRes = node.path("Primary").asText().toLowerCase();
				String cameraFeature = node.path("Features").asText().toLowerCase();
				String batteryLife = node.path("Battery Life").asText().toLowerCase();
//				String status = node.path("Status").asText();
				String messaging = node.path("Messaging").asText().toLowerCase();
				String gps = node.path("GPS").asText().toLowerCase();
				String bluetooth = node.path("Bluetooth").asText().toLowerCase();
				String nfc = node.path("NFC").asText().toLowerCase();
				String announced = node.path("Announced").asText().toLowerCase();
				String releasedYear = announced.split(" ")[0].split(",")[0];
				String priceGroup = node.path("Price group").asText().toLowerCase();
				
				
//				int photographiclevel = jaeger.photographyCalc(cameraRes,cameraFeature);
//				int gaminglevel = jaeger.gamingCalc(cpu, memory, sensors, releasedYear, reso);
//				jaeger.utilityCalc(batteryLife, gps, nfc, bluetooth, messaging);
				
				String p = node.path("tagPhotography").asText().toLowerCase();
				System.out.println(p);
				
				
				String price;
				if(priceGroup.contains("EUR")){
					price = priceGroup.split(" ")[2];
				}else{
					price = "unknown";
				}
//				if(jaeger.tagPhotography == true){
//					((ObjectNode) node).put("tagPhotography","1");
//					((ObjectNode) node).put("photographylevel",photographiclevel);
//				}else {
//					((ObjectNode) node).put("tagPhotography","0");
//					((ObjectNode) node).put("photographylevel",photographiclevel);
//				}
				
				
				
				
				// Categorization 
//				if()
//				System.out.println("Title : " + type);
//				System.out.println("PrimaryRes : " + cameraRes);
////				System.out.println("GPS : "+ gps);
////				System.out.println("NFC : "+ nfc);
////				System.out.println("Bluetooth : " + bluetooth);
//				System.out.println("Price : "+ price);
//				((ObjectNode) node).put("tagPhotography",jaeger.tagPhotography);
//				((ObjectNode) node).put("photographylevel",photographiclevel);
//				((ObjectNode) node).put("tagGaming",jaeger.tagGaming);
//				((ObjectNode) node).put("gaminglevel",gaminglevel);
//				((ObjectNode) node).put("tagUtilities",jaeger.tagUtilities);
			}

			String resultUpdate = mapper.writerWithDefaultPrettyPrinter().writeValueAsString(rootArray);
			System.out.println(resultUpdate);
//			jaeger.writeFile(resultUpdate);
//	    	System.out.println(rootArray);
		} catch (JsonParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (JsonMappingException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
    }
    
    private String displayCalc(String reso){
    	String resoH = reso.split(" ")[0];
		String resoV = reso.split(" ")[2];

//		System.out.println("Reso : " + resoH +" x "+resoV);
		if(Integer.valueOf(resoH)*Integer.valueOf(resoV)>921000){
			return "big screen";
		}else{
			return "small screen";	
		} 
    }
    private int photographyCalc(String cameraRes,String cameraFeatures){
    	int camQuality=0;
    	tagPhotography = false;
    	// cameraResolution >8mp
    	// autofocus
    	// HDR
    	
    	if(cameraRes.contains("autofocus")){
    		camQuality++;
    	}
    	String megaPix = cameraRes.split(" ")[0];
    	if(Float.valueOf(megaPix) >= 5){
    		tagPhotography = true;
    		if(Float.valueOf(megaPix) >= 8){
    			camQuality++;
    		}
    	}
    	if(cameraFeatures.contains("HDR")){
    		camQuality++;
    	}
    	if(cameraFeatures.contains("focus")){
    		camQuality++;
    	}
    	
    	return camQuality;
    }
    private int gamingCalc(String cpu, String memory, String sensors, String announced,String reso){
    	// cpu , ram , memory
    	// sensors, gyro, accelerometer
    	int year = Integer.valueOf(announced);
    	Calendar now = Calendar.getInstance();
    	int yearNow = now.get(Calendar.YEAR);
    	boolean good = false;
    	if(yearNow - year <= 2){
    		good = true;
    	}
    	tagGaming=false;
    	int gameQuality=0;
    	boolean ramQuality =false;
		String memoryComponent[] = memory.split(" ");
		String ram = memory.split(" ")[memoryComponent.length-3];
    	if(cpu.contains("core")){
    		String cores = cpu.split("-core")[0];
    		System.out.println(cores);
    		if(cores.toLowerCase().contains("dual")){
    			gameQuality+=0;
    		}else if(cores.toLowerCase().contains("quad")){
    			gameQuality++;
    		}else if(cores.toLowerCase().contains("octa")){
    			gameQuality++;
    		}else {
    			gameQuality++;
    		}
    	}else {
    		gameQuality=0;
    	}
    	if(Integer.valueOf(ram)> 2){
    		ramQuality = true;
    	}
    	if(sensors.contains("gyro")){
    		gameQuality++;
    	}
    	if(sensors.contains("accelerometer")){
    		gameQuality++;
    	}
    	if(ramQuality == true && gameQuality>=1 && good == true && displayCalc(reso).equals("big screen")){
    		tagGaming = true;
    	}
    	
    	return gameQuality;
    	
    }
    private void utilityCalc(String batLife, String gps, String nfc, String bluetooth, String messaging){
    	// batterylife
    	tagUtilities = false;
    	int util = 0;
    	if(gps.contains("yes")){
    		util++;
    	}
    	if(bluetooth.contains("yes")){
    		util++;
    	}
    	if(nfc.contains("yes")){
    		util++;
    	}
    	if(messaging.contains("mail")){
    		util++;
    	}
    	if(messaging.contains("mms")){
    		util++;
    	}
    	if(batLife.equals("") && util<2){
    		tagUtilities = false;
    	}else{
    		if(util>= 3){
    			tagUtilities = true;		
    		}
    	}
    }
    
    private void writeFile(String result){
    	try{
    	    PrintWriter writer = new PrintWriter("x.json", "UTF-8");
    	    writer.println(result);
    	    writer.close();
    	} catch (IOException e) {
    	   // do something
    	}
    }
}
