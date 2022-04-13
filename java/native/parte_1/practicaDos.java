import java.util.Scanner;
public class practicaDos{
	public static void main(String args[]){

		Scanner in = new Scanner(System.in);
		String nombre = "";
		int numero_1=0, numero_2=0, result=0;

		System.out.println("cual es tu nombre");
		nombre = in.nextLine();

		System.out.println("ingresa valor 1");
		numero_1 = in.nextInt();

		System.out.println("ingresa valor 2");
		numero_2 = in.nextInt();

		result = numero_1+numero_2;

		System.out.println("Hola "+nombre+", La suma de tus valores es :"+result);

	}
}