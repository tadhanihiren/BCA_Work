import java.lang.*;

class ex2
{
	public static void main(String args[])
	{
		int a=5;
		int b=0;
		int c=0;
		
		try{

		System.out.println("Before Division c is: "+c);
		c = a/b;
		
		}
		catch(ArithmeticException e)	
		{
			System.out.println("Can't Divide By ZERO");
		}
		finally	
		{
			System.out.println("After Division c is: "+c);
		}
		
	}
}