package com.jaeger.vv;

import java.io.File;
import java.io.FileWriter;
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
			JsonNode rootArray = mapper.readTree(new File("C:\\Users\\Zachary\\Downloads\\all_hp.json"));
//			JsonNode rootArray = mapper.readTree(new File("x.json"));
			
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
				

	        	System.out.println(announced);
				if(releasedYear.equals("")){
		    		releasedYear="0";
		    	}else if(announced.contains("20")){
		    		String announcement[] = announced.split(" ");
		    		for(int i=0;i<announcement.length;i++){
		    			if(announcement[i].contains("20")){
		    				releasedYear = announcement[i].substring(0,4);	
		    			}
	    				System.out.println(releasedYear);
		    		}
		    	}else {
		    		releasedYear="0";
		    	}
				String priceGroup = node.path("Price group").asText().toLowerCase();
				

				System.out.println("Title : " + type);
				System.out.println("Resolution : " + reso);
				int photographiclevel = jaeger.photographyCalc(cameraRes,cameraFeature);
				int gaminglevel = jaeger.gamingCalc(cpu, memory, sensors, releasedYear, reso);
				jaeger.utilityCalc(batteryLife, gps, nfc, bluetooth, messaging);
				
//				String p = node.path("tagPhotography").asText().toLowerCase();
//				System.out.println(p);
				

				String price;
				if(priceGroup.contains("eur")){
					price = priceGroup.split(" ")[2];
					int price2 = Integer.valueOf(price)*14500;

					((ObjectNode) node).put("priceinrupiah",price2);
//					System.out.println(price2);
				}else{
					price = "unknown";
					String price2 = "-";

					((ObjectNode) node).put("priceinrupiah",price2);
				}

//				System.out.println(priceGroup);
//				if(jaeger.tagPhotography == true){
//					((ObjectNode) node).put("tagPhotography","1");
//					((ObjectNode) node).put("photographylevel",photographiclevel);
//				}else {
//					((ObjectNode) node).put("tagPhotography","0");
//					((ObjectNode) node).put("photographylevel",photographiclevel);
//				}
				
				
				
				
				// Categorization 
//				if()


//				jaeger.writeFile(type);
//				System.out.println("PrimaryRes : " + cameraRes);
////				System.out.println("GPS : "+ gps);
////				System.out.println("NFC : "+ nfc);
////				System.out.println("Bluetooth : " + bluetooth);
//				System.out.println("Price : "+ price);
				((ObjectNode) node).put("tagPhotography",jaeger.tagPhotography);
				((ObjectNode) node).put("photographylevel",photographiclevel);
				((ObjectNode) node).put("tagGaming",jaeger.tagGaming);
				((ObjectNode) node).put("gaminglevel",gaminglevel);
				((ObjectNode) node).put("tagUtilities",jaeger.tagUtilities);
			}

			String resultUpdate = mapper.writerWithDefaultPrettyPrinter().writeValueAsString(rootArray);
			System.out.println(resultUpdate);
			jaeger.writeFile(resultUpdate);
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
    	if(reso.split(" ").length<2){
    		return "small screen";
    	}
    	String resoH = reso.split(" ")[0];
		String resoV = reso.split(" ")[2];

		System.out.println("Reso : " + resoH +" x "+resoV);
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
    	

		System.out.println(cameraRes);
    	if(cameraRes.contains("autofocus")){
    		camQuality++;
    	}
    	if(cameraRes.contains("mp")){
    		String megaPixs[] = cameraRes.split(" ");
    		String megaPix="0";
    		for(int i=0;i<megaPixs.length;i++){
    			if(megaPixs[i].contains("mp")){
    				megaPix = megaPixs[i-1];
    				System.out.println(megaPix);
    				if(megaPix.contains(")")){
    					megaPix = megaPix.split("d")[1].substring(1);
    				}
    				break;
    			}
    		}
    		
        	if(Float.valueOf(megaPix) >= 5){
        		tagPhotography = true;
        		if(Float.valueOf(megaPix) >= 8){
        			camQuality++;
        		}
        	}	
    	}else{
    		
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
//    	System.out.println(announced);
    	
//    	if(announced.contains(".")){
//    		announced = announced.substring(0, 3);
//    	}
    	System.out.println(memory);
    	
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
    	String ram = "0";
    	if(memory.contains("ram")){
//    		System.out.println(memory);
    		String memoryComponent[] = memory.split(" ");
    		for(int i=0;i<memoryComponent.length;i++){
    			if(memoryComponent[i].equals("ram")){
//    				ram = memory.split(" ")[memoryComponent.length-3];
    				ram = memory.split(" ")[i-2];
    				
    				if(ram.contains("/")){
    					ram = ram.split("/")[0];
    				}
    				break;
    			}
    		}
    		if(Float.valueOf(ram)> 2 && memory.contains("gb")){
        		ramQuality = true;
        	}        		
    	}
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
    	    PrintWriter writer = new PrintWriter("refinedSrap.json", "UTF-8");
//    	    PrintWriter writer = new PrintWriter(new FileWriter("nama.json",true));
    	    writer.println(result);
    	    writer.close();
    	} catch (IOException e) {
    	   // do something
    	}
    }
}
