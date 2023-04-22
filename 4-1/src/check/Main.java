package check;

import constants.Constants;

public class Main {
private static String firstName = "萩谷";
private static String lastName = "仁以奈";

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ
		
		printName(firstName, lastName);
		
		Pet pet = new Pet(Constants.CHECK_CLASS_JAVA, Constants.CHECK_CLASS_HOGE);
		pet.getName();
		pet.getMasterName();
		pet.introduce();
		
		RobotPet robotpet = new RobotPet(Constants.CHECK_CLASS_R2D2, Constants.CHECK_CLASS_LUKE);
		robotpet.introduce();
		
	}
	
	private static void printName(String firstname, String lastname) {
		System.out.println("printNameメソッド　→　" + firstname + lastname);
	}

}
